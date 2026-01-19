    function getTranslated(blok_lang, blk_info_text, code_lang_init) {
        /*var $blck_lang_flag = $(this);*/
        var $blck_lang_flag = $('.lang_flag');
        if(!blok_lang.hasClass('disabled')) {
            $blck_lang_flag.addClass('disabled');
            if(code_lang_init === undefined) {code_lang_init = '';}
            let lang_flag, bloc_text_param, text_param, codes_lang, url, txt_init, lang_init = 'ru', lang_target, text_info;
            if(code_lang_init) {lang_init = code_lang_init;}
            lang_flag = blok_lang.attr('alt');
            bloc_text_param = blok_lang.parents('.pole_red').find('.text_param');
            text_param = bloc_text_param.val().trim();
            if(text_param.length) {
                codes_lang = lang_flag.split('-');
                if(codes_lang[0]) {
                    lang_target = codes_lang[0];/*.toLowerCase()*/
                    if(lang_target == 'ua') {lang_target = 'uk';}
                    if(isCyrillica(text_param)) {
                        if(isCyrillicaRu(text_param)) {lang_init = 'ru';}
                        else if(isCyrillicaUk(text_param)) {lang_init = 'uk';}
                    }
                    else {
                        if(isLatinica(text_param)) {lang_init = 'en';}
                    }
                    if(lang_init == lang_target) {
                        text_info = 'Translation language are the same: '+lang_target.toUpperCase();
                        blk_info_text.html(textError(text_info));
                        /*console.log(text_info);*/
                    }
                    else {
                        text_info = 'START Translation FROM languages '+lang_init.toUpperCase()+' &rarr; '+lang_target.toUpperCase();
                        /*console.log(text_info);*/
                        blk_info_text.html(textSuccess(text_info));
                        url = "https://libretranslate.de/translate";
                        getLibreTranslated(url, text_param, lang_init, lang_target, bloc_text_param, blk_info_text);
                    }
                }
            }
            else {
                blk_info_text.html(textError('Value empty'));
            }
            setTimeout(function() {
                $blck_lang_flag.removeClass('disabled');
            }, 2000);
        }
    }
    
    async function getLibreTranslated(url, txt_init, lang_init, lang_target, bloc_text_param, blk_info_text) {
        const res = await fetch(url, {
        	method: "POST",
        	body: JSON.stringify({
        		q: txt_init,
        		source: lang_init,
        		target: lang_target,
        		format: "text",
        		api_key: ""
        	}), headers: {"Content-Type": "application/json"}
        });
        if(res.ok) {
            let json_res = await res.json(), text_info = '';
            if(json_res.translatedText) {
                bloc_text_param.val(json_res.translatedText);
                text_info += ': '+json_res.translatedText;
                /*blk_info_text.html(textSuccess(text_info));*/
                /*console.log(text_info);*/
                $('#info_text .success_text').append(text_info);
            }
            else {
                blk_info_text.html(textError('Value empty'));
            }
        }
        else {
            blk_info_text.html(textError("Error HTTP: status: " + res.status+'; statusText: '+res.statusText));
        }
    }

    function isCyrillica(text) {
        /*return /[а-я]/i.test(text);*/
        return (text.search(/[а-я]/i) != -1);
    }
    function isCyrillicaRu(text) {
        /*return /[ёъыэ]/i.test(text);*/
        return (text.search(/[ёъыэ]/i) != -1);
    }
    function isCyrillicaUk(text) {
        /*return /[ґєії]/i.test(text);*/
        return (text.search(/[ґєії]/i) != -1);
    }
    function isLatinica(text) {
        /*return /[a-z]/i.test(text);*/
        return (text.search(/[a-z]/i) != -1);
    }

    function textSuccess(text) {return '<div class="success_text"> '+text+'</div>';}
    function textError(text) {return '<div class="error_text"> '+text+'</div>';}
