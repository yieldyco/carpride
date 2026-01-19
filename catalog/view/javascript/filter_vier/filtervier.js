(function($){
    /*2025-10-03*/
    'use strict';
    if(typeof FilterVier === 'undefined') {
        var FilterVier = {
            cls: {
                action_param: 'fv-item_action',
                action_block: 'fv-items_action',
                wait_filter: 'fv-wait_filter',
                action_input_slider: 'fv_action_input',
                action_handle_slider: 'fv-act_handle',
                ignore_param: 'fv-item_ignore',
                hiden: 'fv-hiden',
                ajax_btn_disabled: 'fv-ajax_btn_disabled',
                send_url: 'fv-send_url',
                load_animal: 'fv-load_animal',
                animal_box: 'fv-animal_box',
                hide_animal: 'fv-hide_animal',
                search_action_items: 'fv-search_action',
                search_item_hide: 'fv-search_item_hide',
                animal_slider: 'fv-animal_slider',
                lock: 'fv-lock',
            },
            over_scroll: setFV.over_scroll || false,
            run_rollup_show: true,
            is_hide_animal: true,
            search_start: '',
            last_active_item: '',
            input_placeholder: true,
            run_input: 0,
            clickable_collapse_all: setFV.over_scroll || false,
            animal_ms: 400,
            anti_double_click: 400,
            time_animal_goto_items: 3000,
            goto_items_correct: -100,
            timestamp_lock_filter: null,
            timestamp_hide_ajax_btn: null,
            timestamp_slider: null,
            timestamp_animal_load: null,
            error_url: 'index.php?route=error/not_found',
            is_mobile: false,
            set_load_filter: setFV.set_load_filter || false,
            load_filter: '',
            load_filter_all: false,
            get_action_filter: setFV.get_action_filter || 0,
            adapt_fv: true,
            slider_grid_num: 4,
            get_param_action: {},
            total_product: 0,
            ajax_url: '',
            label_prs: '',
            paths: '',
            tool_tip: 'data-toggle="tooltip"',
            
            initFilter: function() {
                
                var what = this;
                $('.fv-body .'+this.cls.ignore_param).on('click', 'a', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                });
                
                this.goupFilter();
                
                if(setFV.rollup_horizontal && this.isHorizontalFilter()) {this.clickable_collapse_all = true;}
                
                if(this.isMobile()) {
                    this.is_mobile = true;
                    $('#fv_module').addClass('fv-mobile');
                }
                else {
                    this.is_mobile = false;
                    $('#fv_module').removeClass('fv-mobile');
                }
                
                if(this.input_placeholder) {
                    this.getPlaceholder();
                }
                
                this.setMobile();
                
                this.setMain();
                
                this.setSlider();
                
                if(setFV.ajax_filter) {
                    this.setAjax();
                }
                else {
                    this.processingClick();
                }
            },
            
            processingClick: function() {
                var what = this, act_param = this.cls.action_param, cls_hiden = this.cls.hiden;
                $(':not(a).'+what.cls.send_url).on('click.send_url', function(e) {
                    e.preventDefault();
                    var $elem = $(this), url = $elem.data('item_url');
                    if(url) {
                        what.sendUrlFilter(url);
                    }
                    else {
                        what.processingParam($elem);
                    }
                });
                
                $('.fv-item_select').on('change', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    var $elem = $(this), $chec_sel = $elem.children(':selected'), arr_data = $chec_sel.val().split('_'), 
                        pz, name_action, val_action;
                    $chec_sel.attr('label', $chec_sel.text());
                    if(arr_data.length == 3) {
                        pz = arr_data[0]; name_action = arr_data[1]; name_action = pz+'['+name_action+']'; val_action = arr_data[2];
                        $elem.closest('.fv-items_list_body').children('.fv-item_label').attr('data-item_name', name_action).attr('data-item_value', val_action).addClass(act_param);
                        what.applyAjaxFilter();
                    }
                    return false;
                });
                
                $('.fv_clear_filter').on('click.clear_filter', function() {
                    var $elem = $(this), $items = $elem.closest('.fv-items'), act_block = what.cls.action_block;
                    what.clearSelect($items);
                    what.clearInputSlider($items);
                    $items.removeClass(act_block).find('.'+act_param).removeClass(act_param);
                    what.applyAjaxFilter();
                    /*return false;*/
                });
                
                $('.fv_clear_all_filter').on('click.clear_all_filter', function() {
                    $('.fv_clear_all_filter').addClass(cls_hiden);
                    what.sendUrlFilter(setFV.href_start);
                });
                
                $('.fv-choice_item').on('click.choice_item', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    var $elem = $(this), choice_param = $elem.data('choice_item'), id_param = choice_param ? '[data-box_item="'+choice_param+'"]' : '', 
                        $choice_group = $('.fv-choices [data-choice_item="'+choice_param+'"]').closest('.fv-choice_group'),
                        animale = what.animal_ms, elu;
                        $('[data-choice_item="'+choice_param+'"]').remove('.fv-choice_item');
                        if(!$choice_group.find('.fv-choice_item').length) {$choice_group.slideUp((animale / 2), function() {$choice_group.remove();});}
                    if(choice_param == 'prs_1_all') {
                        $('.fv-items.fv-prs').find('.fv_clear_filter').trigger('click');
                    }
                    else if(id_param) {
                        if($(id_param).hasClass('fv-item_select') || $(id_param).hasClass('fv-item_slider')) {
                            $(id_param).closest('.fv-items').find('.fv_clear_filter').trigger('click');
                        }
                        else {
                            elu = $(id_param).find('.'+what.cls.send_url);
                            if(elu.length) {
                                what.processingParam(elu);
                            }
                        }
                    }
                });
            },
            
            processingParam: function(elu) {
                var what = this, act_param = this.cls.action_param, ign_param = this.cls.ignore_param;
                var $elem = elu.find('.fv-item_label');
                if($elem.closest('.fv-box_item').hasClass(ign_param) && (!$elem.hasClass(act_param) || $elem.hasClass(act_param+'_temp'))) {
                    return false;
                }
                $elem.find('.fv-item_total_css').css({'display': 'none'});
                $elem.toggleClass(act_param);
                if($elem.hasClass('fv-uradio')) {
                    $elem.closest('.fv-items_list_body').find('.'+act_param).not($elem).removeClass(act_param);
                }
                what.applyAjaxFilter();
            },
            
            /*set_main*/
            setMain: function() {
                var what = this, ign_param = this.cls.ignore_param, animale = this.animal_ms, auto_updatapage = setFV.auto_updata_page_ajax || false,
                    time_search = 800, timestamp_search = null, time_lock = true, search_action = this.cls.search_action_items, search_hide = this.cls.search_item_hide, old_roll_act;
                
                if($('.fv-head_name_filter.fv-clickable').hasClass('fv-icon_filter_hide')) {$('.fv-wrapper').css({'display': 'none'});}
                
                $('.fv-head_name_filter.fv-clickable').on('click', function() {
                    var $elem = $(this), $wrapper = $elem.closest('.fv-container').children('.fv-wrapper'), 
                        cls_show = 'fv-icon_filter_show', cls_hide = 'fv-icon_filter_hide';
                    if($elem.hasClass(cls_hide)) {
                        $wrapper.slideDown(animale);
                        $elem.closest('.fv-head').removeClass(cls_hide).addClass(cls_show);
                    }
                    else if($elem.hasClass(cls_show)) {
                        $wrapper.slideUp(animale);
                        $elem.closest('.fv-head').removeClass(cls_show).addClass(cls_hide);
                    }
                    setTimeout(function() {
                        $elem.toggleClass(cls_hide+' '+cls_show);
                    }, animale / 2);
                    return false;
                });
                
                function evUpRoll(e) {
                    var out_block = true, sel_parent = e.target.closest('.fv-items.fv-rollup.fv-icon_items_show');
                    if(sel_parent) {
                        var tec_roll_act = sel_parent.dataset.block_items;
                        if(old_roll_act == tec_roll_act) {
                            out_block = false;
                        }
                        old_roll_act = tec_roll_act;
                    }
                    /*fix*/
                    if(auto_updatapage && setFV.updata_common_js && what.timestamp_lock_filter) {
                        what.timestamp_lock_filter = null;
                        out_block = false;
                    }
                    if(out_block) {
                        what.itemsRollup();
                        document.removeEventListener('click', evUpRoll);
                    }
                    return false;
                }
                
                $('.fv-body').off('click.items_name').on('click.items_name', '.fv-clickable .fv-items_name, .fv-clickable .fv-icon_items', function() {
                    var $item_parent = $(this).closest('.fv-clickable'), $item_list = $item_parent.children('.fv-items_list'), 
                        cls_show = 'fv-icon_items_show', cls_hide = 'fv-icon_items_hide', over_roll = (what.over_scroll && $item_parent.hasClass('fv-rollup')) ? true : false, speed_animal = over_roll ? 4 : 1;
                    if($item_parent.hasClass(cls_hide)) {
                        $item_list.slideDown(animale);
                        if(over_roll) {
                            old_roll_act = $item_parent.data('block_items');
                            what.run_rollup_show = true;
                            document.addEventListener('click', evUpRoll);
                        }
                    }
                    else if($item_parent.hasClass(cls_show)) {
                        $item_list.slideUp(animale / 2);
                    }
                    /*$item_parent.toggleClass(cls_hide+' '+cls_show);*/
                    setTimeout(function() {
                        $item_parent.toggleClass(cls_hide+' '+cls_show);
                    }, animale / 2);
                    if(what.clickable_collapse_all) {
                        $('.fv-clickable.fv-rollup').not($item_parent).removeClass(cls_show).addClass(cls_hide).find('.fv-items_list').slideUp(animale / speed_animal);
                        /*
                        setTimeout(function() {
                            $('.fv-clickable.fv-rollup').not($item_parent).removeClass(cls_show).addClass(cls_hide);
                        }, animale / 2);
                        */
                    }
                    /*???*/
                    /*what.hideAjaxButtonModal();*/
                    return false;
                });
                
                $('.fv-body').on('click', '.fv-box_list_more_switch', function() {
                    var elem_more_switch = '.fv-box_list_more_switch', 
                        $parent = $(this).closest('.fv-items_list_body'), 
                        $body_more = $parent.find('.fv-items_list_body_more'), 
                        cls_show = 'fv-more_show', cls_hide = 'fv-more_hide';
                    if($body_more.hasClass(cls_hide)) {
                        $body_more.slideDown(animale);
                    }
                    else if($body_more.hasClass(cls_show)) {
                        $body_more.slideUp(animale);
                    }
                    else {
                        if($body_more.css('display') == 'none') {
                            $body_more.slideDown(animale);
                            $body_more.removeClass(cls_show).addClass(cls_hide);
                            $parent.find(elem_more_switch).removeClass(cls_show).addClass(cls_hide);
                        }
                        else {
                            $body_more.slideUp(animale);
                            $body_more.removeClass(cls_hide).addClass(cls_show);
                            $parent.find(elem_more_switch).removeClass(cls_hide).addClass(cls_show);
                        }
                    }
                    setTimeout(function() {
                        $body_more.toggleClass(cls_hide+' '+cls_show);
                        $parent.find(elem_more_switch).toggleClass(cls_hide+' '+cls_show);
                    }, animale);
                    /*???*/
                    if(what.over_scroll && !$parent.closest('.fv-items').hasClass('fv-rollup')) {what.itemsRollup();}
                    /*???*/
                    what.hideAjaxButtonModal();
                    return false;
                });
                
                $('.fv-choices').on('click.choices', '.fv-choice_group_label', function() {
                    var id_items = $(this).closest('.fv-choice_group').data('choice_group') || '', goto_items_correct = what.goto_items_correct, top_pos = 0, parent = '';
                    if(id_items) {
                        id_items = '[data-block_items="'+id_items+'"]';
                        if($(id_items).length) {
                            if(what.isMobile()) {
                                top_pos = $(id_items).position().top;
                                parent = '.fv-container';
                            }
                            else {
                                top_pos = $(id_items).offset().top + goto_items_correct;
                                parent = 'html, body';
                            }
                            $(parent).animate({
                                    scrollTop: top_pos,
                                }, {
                                    duration: 800,
                                    easing: 'swing',
                                },
                            );
                            $(id_items).addClass(what.cls.animal_box);
                            setTimeout(function() {
                                $(id_items).removeClass(what.cls.animal_box);
                            }, what.time_animal_goto_items);
                        }
                    }
                    return false;
                });
                
                /*search_pole*/
                $('.fv-body').on('click', '.fv-block_search input', function() {
                    var $elem = $(this);
                    if(what.over_scroll && !$elem.closest('.fv-items').hasClass('fv-rollup')) {what.itemsRollup();}
                    isListBodyMore($elem.closest('.fv-items_list'), 'fv-more_hide');
                    return false;
                });
                $('.fv-body').on('dblclick', '.fv-block_search input', function() {
                    var $elem = $(this), first = '', search_val = $elem.val(), placeholder = setFV.search_placeholder || '';
                    if(!what.search_start) {first = '^'; placeholder = first+placeholder;}
                    $('.fv-body .fv-block_search input[placeholder]').attr('placeholder', placeholder);
                    what.search_start = first;
                    if(search_val) {$elem.val(search_val).trigger('keyup', [10]);}
                    return false;
                });
                
                $('.fv-body').on('keyup', '.fv-block_search .fv-input_group_control input', function(e, new_time) {
                    var $elem = $(this), search_val = $elem.val(), status_search = false, key = e.which || e.keyCode || e.button || '', 
                        min_simbol = (search_val.indexOf('*') === 0) ? 3 : 2, first,
                        new_time = new_time || 1;
                    if(search_val.length && (key == 16 || key == 45)) {/*continue copypaste*/}
                    else if((key > 8 && key < 32) || (key > 32 && key < 46)) {return false;}
                    /* && (key != 8 && key != 46)*/
                    if((search_val.length == 0) || (search_val.length && (key == 8/*BackSpace*/))) {status_search = true;}
                    if(!status_search && (search_val.length < min_simbol)) {return false;}
                    if(timestamp_search) {clearTimeout(timestamp_search);}
                    if(time_lock) {
                        lockLoadSearch($elem.closest('.fv-items_list').find('.fv-items_list_body'), true);
                        time_lock = false;
                    }
                    timestamp_search = setTimeout(function() {
                        if(search_val.length) {
                            if(!$elem.closest('.fv-items').hasClass(search_action)) {
                                $elem.closest('.fv-items').addClass(search_action);
                            }
                        }
                        else {
                            if($elem.closest('.fv-items').hasClass(search_action)) {
                                $elem.closest('.fv-items').removeClass(search_action);
                            }
                        }
                        first = what.search_start;
                        if(search_val.indexOf('*') === 0) {first = ''; search_val = search_val.slice(1);}
                        search_val = what.preg_quote(search_val);
                		var Reg = new RegExp(first+search_val, 'i');
                        $('.fv-box_item .fv-item_text', $elem.closest('.fv-items_list')).each(function() {
                            let $row_blok = $(this).closest('.fv-box_item');
                            if(($(this).text().search(Reg) < 0) || ((search_val.length > 0) && $row_blok.hasClass(ign_param))) {
                                /*$row_blok.slideUp(animale);*/
                                $row_blok.addClass(search_hide);
                			}
                            else {
                                /*$row_blok.slideDown(animale);*/
                                $row_blok.removeClass(search_hide);
                			}
                		});
                        time_lock = true;
                        lockLoadSearch($elem.closest('.fv-items_list').find('.fv-items_list_body'), false);
                    }, time_search / new_time);
                    return false;
            	});
                
                function lockLoadSearch(block_search, lock) {
                    if(lock) {block_search.addClass('fv-animal_search');}
                    else {block_search.removeClass('fv-animal_search');}
                }
                
                $('.fv-body').on('click', '.'+search_action+' .fv-block_search .fv-clear_pole', function() {
                    isListBodyMore($(this).closest('.fv-items_list'), 'fv-more_show');
                    $(this).closest('.fv-input_group').find('.fv-input_group_control input').val('').trigger('keyup', [10]);
                    return false;
                });
                /*end search_pole*/
                
                function isListBodyMore(items_list, cls_more) {
                    if(items_list.find('.fv-items_list_body_more').hasClass(cls_more)) {
                        items_list.find('.fv-box_list_more_switch.fv-more_switch_bottom').trigger('click');
                    }
                    /*???*/
                    what.hideAjaxButtonModal();
                }
                
                if(setFV.fixed_scroll) {this.fixedScroll();}
            },
            /*end set_main*/
            
            /*mobile*/
            setMobile: function() {
                var what = this, event_handler = 'click.mobile';
                if(setFV.mobile_btn_template) {
                    var layout = setFV.layout || '', side_bar = '';
                    if(layout == 'left') {side_bar = '#column-left';}
                    else if(layout == 'right') {side_bar = '#column-right';}
                    if(side_bar && $(side_bar).hasClass('hidden-xs')) {$(side_bar).removeClass('hidden-xs');}
                    if(side_bar && $(side_bar).hasClass('hidden-sm')) {$(side_bar).removeClass('hidden-sm');}
                    $('#fv_module').parent().addClass('fv-parent_bar');
                }
                
                $(document).off(event_handler).on(event_handler, '.fv_mobile_close_switch', function() {
                    what.mobileOpenCloseFilter();
                    return false;
                });
                
                $(document).on(event_handler, '#fv_mobile_parent.fv-mobile_open', function(e) {
                    if($('#fv_container').hasClass('fv-mobile_open') && ($('#fv_container').has(e.target).length === 0)) {
                        $('#fv_container .fv_mobile_close_switch').trigger(event_handler);
                    }
                    return false;
                });
                
                /*
                $('.fv-mobile .fv-body').find('.fv-items').addClass('fv-clickable').removeClass('fv-icon_items_show').addClass('fv-icon_items_hide').find('.fv-items_list').addClass('fv-list_over_scroll').find('.fv-items_list_body').addClass('fv-items_scroll');
                */
            },
            
            isMobile: function() {
                if(setFV.width_mobil && (setFV.width_mobil >= $(document.body).width())) {
                    return true;
                }
                return false;
            },
            
            mobileOpenCloseFilter: function() {
                var cls_mobile_open = 'fv-mobile_open', blackout = '#fv_mobile_parent', $container_filter = $('#fv_container'), btn_switch = '.fv_mobile_close_switch', body_tag = 'body';
                if($container_filter.hasClass(cls_mobile_open)) {
                    $container_filter.removeClass(cls_mobile_open);
                    $(blackout).removeClass(cls_mobile_open);
                    $(btn_switch).removeClass(cls_mobile_open);
                    $(body_tag).removeClass(cls_mobile_open);
                } else {
                    $container_filter.addClass(cls_mobile_open);
                    $(blackout).addClass(cls_mobile_open);
                    $(btn_switch).addClass(cls_mobile_open);
                    $(body_tag).addClass(cls_mobile_open);
                }
                return false;
            },
            
            mobileScreenFilter: function() {
                var ojScreen = {}, fv_width = $('.fv-container').outerWidth(), 
                    offset_left = $('.fv-container').offset().left,
                    margin_2 = (offset_left * 2),
                    fv_width_offset = (fv_width + offset_left),
                    all_width = $(document.body).width();
                ojScreen['fv_width'] = fv_width;
                ojScreen['fv_width_offset'] = fv_width_offset;
                ojScreen['all_width'] = (all_width - margin_2);
                ojScreen['mobile_screen'] = false;
                if((fv_width + fv_width/2) > all_width) {
                    ojScreen['mobile_screen'] = true;
                }
                return ojScreen;
            },
            
            mobileClose: function() {
                $('body').find('.fv-mobile_open').removeClass('fv-mobile_open');
            },
            /*end mobile*/
            
            itemsRollup: function() {
                if(!this.run_rollup_show) {return false;}
                $('.fv-body').find('.fv-items.fv-rollup.fv-icon_items_show').each(function() {
                    $(this).find('.fv-items_name').trigger('click.items_name');
                });
                this.run_rollup_show = false;
            },
            
            /*slider*/
            setSlider: function() {
                var what = this, act_input = this.cls.action_input_slider, ign_param = this.cls.ignore_param,
                    event_handler = 'change.input_slider', ajax_filter = setFV.ajax_filter || 0;
                    
                $('.fv-body').on(event_handler, '.fv-input_slider', function(e) {
                    var $elem = $(this), $block_param = $elem.closest('.fv-items'),
                        in_sl = $block_param.find('.fv-init_slider').attr('id'), arr_data,
                        min = 0, max = 0, type_single = false, pz, main_id, slider_data = {},
                        $from, from, $to, to, is_from = false, up_plac = true, input_action = 0, 
                        init_slider = setFV.init_slider || {};
                    if(in_sl) {arr_data = in_sl.split('_');} else {return;}
                    if(ajax_filter) {
                        if(what.run_input) {
                            input_action = 0;
                            what.run_input = 0;
                        }
                        else {
                            input_action = 1;
                        }
                    }
                    if($elem.hasClass('fv-input_from')) {
                        is_from = true;
                        $from = $elem; 
                        from = $elem.prop('value').replace(',', '.')*1;
                        $to = $block_param.find('.fv-input_to'); 
                        to = $to.prop('value')*1;
                    }
                    else {
                        $to = $elem; 
                        to = $elem.prop('value').replace(',', '.')*1;
                        $from = $block_param.find('.fv-input_from');
                        from = $from.prop('value')*1;
                    }
                    if(arr_data.length == 3) {
                        pz = arr_data[0]; main_id = arr_data[1];
                        if(init_slider[pz][main_id]) {
                            slider_data = init_slider[pz][main_id];
                            min = slider_data.min; max = slider_data.max;
                            type_single = slider_data.type_single;
                        }
                    }
                    var range_sld = $('#'+in_sl).data('ionRangeSlider');
                    min = range_sld.options.min || min;
                    max = range_sld.options.max || max;
                    min = min*1; max = max*1;
                    if(isNaN(from)) {from = $from.attr('placeholder') || min;} if(isNaN(to)) {to = $to.attr('placeholder') || max;}
                    if(up_plac) {
                        if(!$elem.hasClass(act_input)) {$elem.addClass(act_input);}
                        if(from === '') {from = $from.attr('placeholder') || min;}
                        if(to === '') {to = $to.attr('placeholder') || max;}
                    }
                    from = from*1; to = to*1;
                    if(is_from) {
                        if(type_single) {
                            if(from < min) {from = min;}
                        } 
                        else {
                            if(from > to) {from = $from.attr('placeholder') || min;}
                            else if(from < min) {from = min;}
                        }
                        $from.prop('value', from).attr('value', from);
                        if(up_plac) {$from.prop('placeholder', from).attr('placeholder', from);}
                    } else {
                        if(to < from) {to = $to.attr('placeholder') || max;}
                        else if(to > max) {to = max;}
                        $to.prop('value', to).attr('value', to);
                        if(up_plac) {$to.prop('placeholder', to).attr('placeholder', to);}
                    }
                    $('#'+in_sl).data('ionRangeSlider').update({from: from, to: to, input_action: input_action});
                });
                
                $('.fv-button_slider').on('click', function() {
                    if($(this).hasClass(ign_param)) {return;}
                    what.applyAjaxFilter();
                });
                
                $('.fv-body').off('mousedown.irs_handle touchend.irs_handle').on('mousedown.irs_handle touchend.irs_handle', '.irs-handle, .irs-line, .irs-bar, .irs-from, .irs-to', function(e) {
                    var act_handle = what.cls.action_handle_slider;
                    $(this).addClass(act_handle);
                });
            },
            
            initSliders: function() {
                var what = this, init_slider = setFV.init_slider || {}, in_sl;
                $('.fv-body').find('.fv-init_slider').each(function() {
                    in_sl = $(this).attr('id');
                    if(in_sl) {
                        what.initSliderOne(in_sl, init_slider);
                    }
                });
            },
            
            gridSnap: function(slider_data) {
                var min = slider_data.min*1, 
                    max = slider_data.max*1, 
                    step = slider_data.step*1 || 1;
                if((min == max) || (((max - min) / (step * 2)) < this.slider_grid_num)) {return true;}
                return false;
            },
            
            initSliderOne: function(in_sl, init_slider) {
                var what = this, arr_data = in_sl.split('_'), pz, main_id, slider_data = {};
                if(arr_data.length) {
                    pz = arr_data[0]; main_id = arr_data[1];
                    if(init_slider[pz][main_id]) {
                        slider_data = init_slider[pz][main_id];
                    } else {return;}
                } else {return;}
                var $rangeSld = $('#'+in_sl), extra_classes = 'fv-slider_'+pz,
                    id_param = '[data-box_item="'+in_sl+'"]',
                    $from, $to,
                    type_slider = slider_data.type_slider || 'double', 
                    sep_input_value = setFV.sep_input_value || ',',
                    ajax_filter = setFV.ajax_filter || false,
                    input_slider = setFV.input_slider[pz] || false,
                    disable = slider_data.disable, 
                    min = slider_data.min, 
                    max = slider_data.max, 
                    from = slider_data.from, 
                    to = slider_data.to, 
                    step = slider_data.step*1 || 1, 
                    grid = slider_data.grid, 
                    grid_snap = this.gridSnap(slider_data),
                    grid_num = (min == max) ? 1 : this.slider_grid_num,
                    val_attrbs,
                    ign_param = this.cls.ignore_param, hiden = this.cls.hiden;
                
                if(disable) {
                    $(id_param).addClass(ign_param);
                    if(setFV.item_null_hide) {
                        if(!this.isHorizontalFilter()) {$(id_param).closest('.fv-items').addClass(ign_param).addClass(hiden);}
                    }
                }
                if(!input_slider) {
                    if($(id_param+' .fv-input_from').length) {
                        input_slider = true;
                        setFV.input_slider[pz] = true;
                    }
                }
                if(input_slider) {
                    $from = $(id_param+' .fv-input_from');
                    $from.attr('value', from).attr('placeholder', from);
                    $to = $(id_param+' .fv-input_to');
                    $to.attr('value', to).attr('placeholder', to);
                    if(disable) {
                        $(id_param+' .fv-input_slider').attr('disabled', true); 
                    }
                }
                if(!ajax_filter){$(id_param+' .fv-button_slider').addClass(ign_param);}
                
                $rangeSld.ionRangeSlider({
                    type: type_slider,
                    hide_min_max: true,
            		hide_from_to: input_slider,
                    input_values_separator: sep_input_value,
                    keyboard: true,
                    force_edges: true,
                    disable: disable,
                    min: min,
                    max: max,
                    from: from,
                    to: to,
                    step: step,
                    grid: grid,
                    grid_num: grid_num,
                    grid_snap: grid_snap,
                    extra_classes: extra_classes,
                    prettify_separator: "",
                    input_action: 0,
                    ajax_filter: ajax_filter,
                    input_slider: input_slider,
                    onStart: function() {
                        val_attrbs = what.getMinMax(pz, $rangeSld, false);
                        what.putElementSlider($rangeSld, val_attrbs, false);
                    },
                    onFinish: function() {
                        val_attrbs = what.getMinMax(pz, $rangeSld, false);
                        what.putElementSlider($rangeSld, val_attrbs, true);
                        what.getDataSlider($rangeSld, val_attrbs, 0);
                    },
                    onUpdate: function() {
                        if(!this.input_slider) {return};
                        val_attrbs = what.getMinMax(pz, $rangeSld, false);
                        what.putElementSlider($rangeSld, val_attrbs, (this.ajax_filter ? this.input_action : true));
                        if(this.input_action) {
                            this.input_action = 0;
                            what.getDataSlider($rangeSld, val_attrbs, 1);
                        }
                    },
                    onChange: function(data) {
                        if(!this.input_slider) {return};
                        from = data.from; to = data.to;
                        $from.prop('value', from); $to.prop('value', to); $from.attr('placeholder', from); $to.attr('placeholder', to);
                    }
                });
            },
            
            getMinMax: function(pz, elem, flag_seo) {
                var val_attrbs = elem.val(), sep_input_value = setFV.sep_input_value || ',', arr_atrb = val_attrbs.split(sep_input_value), sep_val = flag_seo ? setFV.seo_separ : setFV.sep_param;
                if(pz == 'prs') {
                    var pr_min, pr_max, correct_curs = 0, decimal_tec = setFV.decimal_tec, tec_curs_tax = setFV.tec_curs_tax || 1;
                    if(decimal_tec == 0) {
                        if(tec_curs_tax != 1) {decimal_tec = 2;}
                        if(tec_curs_tax < 1) {correct_curs = 0.0499;}
                    }
                    if(arr_atrb.length) {
                        pr_min = arr_atrb[0]; pr_max = arr_atrb[1] || pr_min;
                        if(pr_min !== pr_max) {
                            pr_min = (pr_min / tec_curs_tax - correct_curs);
                            pr_max = (pr_max / tec_curs_tax + correct_curs);
                            if(pr_min != Math.trunc(pr_min)) {pr_min = pr_min.toFixed(decimal_tec);}
                            if(pr_max != Math.trunc(pr_max)) {pr_max = pr_max.toFixed(decimal_tec);}
                            val_attrbs = pr_min + sep_val + pr_max;
                        }
                        else {
                            pr_min = (pr_min / tec_curs_tax - correct_curs);
                            if(pr_min != Math.trunc(pr_min)) {pr_min = pr_min.toFixed(decimal_tec);}
                            val_attrbs = pr_min;
                        }
                    }
                }
                else {
                    if(arr_atrb.length) {
                        var one_param = arr_atrb[0], to_param = arr_atrb[1] || one_param;
                        if(one_param !== to_param) {val_attrbs = one_param + sep_val + to_param;}
                        else {val_attrbs = one_param;}
                    }
                }
                return val_attrbs.toString();
            },
            
            putElementSlider: function(rangeSld, val_attrbs, add_csl) {
                if((val_attrbs !== undefined)) {
                    rangeSld.siblings('.fv-item_label').attr('data-item_value', val_attrbs);
                }
                if((add_csl !== undefined) && add_csl) {
                    var $elem = rangeSld.siblings('.fv-item_label');
                    $elem.addClass(this.cls.action_param);
                    if(setFV.ajax_filter) {
                        $elem.closest('.fv-items').addClass(this.cls.action_block);
                    }
                    else {
                        $elem.closest('.fv-items').find('.fv-button_slider').removeClass(this.cls.ignore_param);
                    }
                }
            },
            
            getDataSlider: function(rangeSld, val_attrbs, selec_input) {
                if(!setFV.ajax_filter) {return};
                this.putElementSlider(rangeSld, val_attrbs, 1);
                var time_delay_slider = setFV.time_delay_slider || 0, act_handle = this.cls.action_handle_slider, $box_grid_slider = rangeSld.closest('.fv-box_grid_slider');
                
                if(time_delay_slider && !this.isMobile()) {
                    /* touchmove.slider touchend.slider .irs-handle */
                    var what = this, times_delay = time_delay_slider, count_handle, cls_handle = '',
                        even_mous = 'mousemove.slider touchend.slider', is_handle = false;
                    if(selec_input) {
                        $box_grid_slider.off(even_mous);
                        if(what.timestamp_slider) {clearTimeout(what.timestamp_slider);}
                        $box_grid_slider.find(cls_handle+'.'+act_handle).removeClass(act_handle);
                        what.lockAnimalSlider($box_grid_slider);
                        what.runAjaxFilter(rangeSld, true);
                    }
                    else {
                        count_handle = $box_grid_slider.find(cls_handle+'.'+act_handle).length;
                        if(count_handle) {
                            is_handle = true;
                            if(count_handle > 1) {
                                if(what.timestamp_slider) {clearTimeout(what.timestamp_slider);}
                                times_delay = 0;
                            }
                            what.lockAnimalSlider($box_grid_slider, true);
                        }
                        $box_grid_slider.on(even_mous, function(e) {
                            if(what.timestamp_slider) {clearTimeout(what.timestamp_slider);}
                            what.timestamp_slider = setTimeout(function() {
                                $box_grid_slider.off(even_mous);
                                $box_grid_slider.find(cls_handle+'.'+act_handle).removeClass(act_handle);
                                if(is_handle) {
                                    what.lockAnimalSlider($box_grid_slider);
                                    what.runAjaxFilter(rangeSld, true);
                                }
                            }, times_delay);
                        });
                    }
                } else {
                    this.lockAnimalSlider($box_grid_slider);
                    this.runAjaxFilter(rangeSld, true);
                }
            },
            
            lockAnimalSlider: function(elem, lock) {
                var cls_animal = this.cls.animal_slider, cls_lock = this.cls.lock, time_out = this.anti_double_click;
                if(lock == undefined) {
                    elem.addClass(cls_animal).addClass(cls_lock);
                    setTimeout(function() {
                        elem.removeClass(cls_animal).removeClass(cls_lock);
                    }, time_out);
                } else if(lock) {
                    elem.addClass(cls_animal);
                } else {
                    setTimeout(function() {
                        elem.removeClass(cls_animal).removeClass(cls_lock);
                    }, time_out);
                }
            },
            
            getPlaceholder: function() {
                var what = this, ajax_filter = setFV.ajax_filter || 0, act_input = this.cls.action_input_slider,
                    old_elem_slider, event_handler = 'mousedown';
                
                function isInputSlider(e) {
                    what.run_input = 0;
                    const sel_parent = e.target.closest('.fv-box_input_slider');
                    if(sel_parent) {
                        if(e.target.matches('.fv-input_slider')) {
                            if(sel_parent.querySelectorAll('.fv-input_slider.'+act_input).length == 1) {
                                var tec_elem_slider = e.target.closest('.fv-box_item.fv-item_slider').dataset.box_item;
                                if(!old_elem_slider || (old_elem_slider == tec_elem_slider)) {
                                    what.run_input = 1;
                                }
                                old_elem_slider = tec_elem_slider;
                                what.hideAjaxButtonModal();
                            }
                        }
                    }
                    document.removeEventListener(event_handler, isInputSlider);
                    return false;
                }
                /* touchend.slider*/
                $('.fv-body').on('click.input_slider', '.fv-input_slider', function(e) {
                    var $elem = $(this);
                    if(!$elem.hasClass(act_input)) {$elem.val('').addClass(act_input);}
                    if(ajax_filter) {
                        old_elem_slider = $elem.closest('.fv-box_item.fv-item_slider').data('box_item');
                        document.addEventListener(event_handler, isInputSlider);
                    }
                    
                });
                return false;
            },
            
            /*ajaxFilter*/
            setAjax: function() {
                var what = this, act_param = this.cls.action_param, act_block = this.cls.action_block, act_input = this.cls.action_input_slider,
                    ign_param = this.cls.ignore_param, disabled_btn = this.cls.ajax_btn_disabled, wait_filter = this.cls.wait_filter,
                    title_delete_value = (setFV.data_choice.legend_delete_value && !this.is_mobile) ? setFV.data_choice.legend_delete_value : '';
                
                /*fix_tooltip  touchend*/
                $('.fv-choice_separate').on('click', '[data-toggle="tooltip"]', function() {
                    if($(this).attr('aria-describedby')) {
                        $('#'+$(this).attr('aria-describedby')).remove();
                    }
                });
                /*end fix_tooltip*/
                
                if(this.is_hide_animal) {$('#fv_module').addClass(this.cls.hide_animal);}
                
                if(!this.get_action_filter) {$('.fv-ajax_btn').addClass(disabled_btn);}
                else {if(!$('.fv-body').hasClass(wait_filter)) {$('.fv_apply_all_filter').addClass(disabled_btn);}}
                
                $('.fv_apply_all_filter').on('click.apply_fv', function() {
                    if(!$(this).hasClass(disabled_btn)) {
                        $('.fv_apply_all_filter').addClass(disabled_btn);
                        $('.fv_clear_all_filter').removeClass(disabled_btn);
                        var $fv_body = $('.fv-body');
                        if($fv_body.hasClass(wait_filter)) {
                            $fv_body.removeClass(wait_filter);
                            $fv_body.find('.'+act_input).removeClass(act_input);
                            what.applyAjaxFilter();
                            /*???*/
                            what.mobileClose();
                        }
                    }
                    if(what.over_scroll) {what.itemsRollup();}
                    return false;
                });
                
                $('.fv_clear_all_filter').on('click.clear_fv', function() {
                    if(!setFV.updata_page_ajax || (setFV.code_server == 404)) {
                        var url;
                        if((url = what.diffUrl())) {
                            what.sendUrlFilter(url);
                            return true;
                        }
                    }
                    if(!$(this).hasClass(disabled_btn)) {
                        $('.fv_clear_all_filter').addClass(disabled_btn);
                        var $fv_body = $('.fv-body');
                        $fv_body.removeClass(wait_filter);
                        if(title_delete_value) {
                            $fv_body.find('.fv-items.'+act_block).each(function() {
                                what.clearTooltipItems($(this));
                            });
                        }
                        $fv_body.find('.'+act_input).removeClass(act_input);
                        what.clearAjaxFilterAll();
                        /*what.mobileClose();*/
                    }
                    what.hideAjaxButtonModal();
                    if(what.over_scroll) {what.itemsRollup();}
                    return false;
                });
                
                $('.fv-body').off('click.item_label').on('click.item_label', '.fv-item_label', function(e, updatapage) {
                    e.preventDefault();
                    var $elem = $(this), count_action, flag_top = true, $parent_items, $items_list_body, text_title = '', text_img = '';
                    if($elem.closest('.fv-box_item').hasClass(ign_param) && (!$elem.hasClass(act_param) || $elem.hasClass(act_param+'_temp'))) {
                        if(what.over_scroll && !$elem.closest('.fv-items').hasClass('fv-rollup')) {what.itemsRollup();}
                        return false;
                    }
                    $elem.toggleClass(act_param);
                    $items_list_body = $elem.closest('.fv-items_list_body');
                    $parent_items = $items_list_body.closest('.fv-items');
                    if($elem.hasClass('fv-uradio')) {
                        $items_list_body.find('.'+act_param).not($elem).removeClass(act_param);
                    }
                    if((count_action = $items_list_body.find('.'+act_param).length)) {
                        $parent_items.addClass(act_block);
                    }
                    else {
                       $parent_items.removeClass(act_block);
                    }
                    if(title_delete_value) {
                        if($parent_items.hasClass('fv-items_image') && !$parent_items.hasClass('fv-checkbox')) {
                            if($elem.hasClass('fv-uradio')) {
                                $items_list_body.find('.fv-item_label[data-original-title]').each(function() {
                                    text_img = $(this).find('.fv-item_text').text();
                                    $(this).attr('data-original-title', text_img);
                                });
                            }
                            if($elem.is('[data-original-title]')) {
                                text_img = $elem.find('.fv-item_text').text();
                                if($elem.hasClass(act_param)) {text_title = title_delete_value+' `'+text_img+'`';}
                                else {text_title = text_img;}
                                $elem.attr('data-original-title', text_title);
                            }
                        } 
                        else if($parent_items.hasClass('fv-items_button')) {
                            if($elem.hasClass('fv-uradio')) {
                                $items_list_body.find('.fv-item_label[data-original-title]').each(function() {
                                    $(this).attr('data-original-title', '');
                                });
                            }
                            if($elem.is('[data-original-title]')) {
                                if($elem.hasClass(act_param)) {text_title = title_delete_value;}
                                else {text_title = '';}
                                $elem.attr('data-original-title', text_title);
                            }
                        }
                    }
                    if($parent_items.hasClass('fv-one_item')) {
                        flag_top = false;
                    }
                    if(what.over_scroll && !$parent_items.hasClass('fv-rollup')) {what.itemsRollup();}
                    /*???*/
                    what.hideAjaxButtonModal();
                    what.runAjaxFilter($elem, flag_top, updatapage);
                    /*return false;*/
                    if(updatapage) {return false;}
                });
                
                $('.fv-body').on('change', '.fv-item_select', function(e, updatapage) {
                    var $elem = $(this), act_val = $elem.children(':selected').val(), arr_data = act_val.split('_'), $parent_elem = $elem.closest('.fv-items_list_body'), pz, name_action, val_action;
                    if(arr_data.length == 3) {
                        $elem.children('option[value]').removeAttr("selected");
                        /*$elem.children('option:eq(0)').prop('selected',true);*/
                        $elem.children('option[value="'+act_val+'"]').prop('selected', true);
                        pz = arr_data[0]; name_action = arr_data[1]; name_action = pz+'['+name_action+']'; val_action = arr_data[2];
                        $parent_elem.children('.fv-item_label').attr('data-item_name', name_action).attr('data-item_value', val_action).addClass(act_param);
                        if($parent_elem.find('.'+act_param).length) {
                            $parent_elem.closest('.fv-items').addClass(act_block);
                        }
                        else {
                           $parent_elem.closest('.fv-items').removeClass(act_block);
                        }
                        /*???*/
                        what.hideAjaxButtonModal();
                        what.runAjaxFilter($elem, false, updatapage);
                    }
                    return false;
                });
                
                var event_clear = 'click.clear_filter';
                $('.fv-body').off(event_clear).on(event_clear, '.fv_clear_filter', function(e, updatapage) {
                    var $elem = $(this), $items = $elem.closest('.fv-items');
                    if($items.hasClass('fv-one_item')) {return;}
                    if(title_delete_value) {
                        what.clearTooltipItems($items);
                    }
                    what.clearSelect($items);
                    what.clearInputSlider($items);
                    $items.removeClass(act_block).find('.'+act_param).removeClass(act_param);
                    what.runAjaxFilter($elem, false, updatapage);
                    /*if(updatapage) {return false;}*/
                });
                
                $('body').on('click.choice_item', '.fv-choice_item', function(e) {
                    var $elem = $(this), choice_param = $elem.data('choice_item'), id_param = choice_param ? '[data-box_item="'+choice_param+'"]' : '', 
                        $choice_group = $('.fv-choices [data-choice_item="'+choice_param+'"]').closest('.fv-choice_group'),
                        animale = what.animal_ms;
                    if(!$choice_group.find('.fv-choice_item').length) {$choice_group.slideUp((animale / 2), function() {$choice_group.remove();});}
                    if(choice_param == 'prs_1_all') {
                        e.stopPropagation();
                        $('.fv-items.fv-prs').find('.fv_clear_filter').trigger(event_clear, [1]);
                    }
                    else if(id_param) {
                        if($(id_param).hasClass('fv-item_select') || $(id_param).hasClass('fv-item_slider')) {
                            e.stopPropagation();
                            $(id_param).closest('.fv-items').find('.fv_clear_filter').trigger(event_clear, [1]);
                        }
                        else {
                            $(id_param).find('.fv-item_label').trigger('click', [1]);
                            $('[data-choice_item="'+choice_param+'"]').remove('.fv-choice_item');
                        }
                    }
                    $('.fv-body').removeClass(wait_filter);
                    if(what.over_scroll) {what.itemsRollup();}
                });
                
                $('.fv-box_slider.fv-box_grid').on('click', '.irs-slider', function() {
                    /* touchend*/
                    var $elem = $(this), $block_param = $elem.closest('.fv-items');
                    if($elem.hasClass('from')) {
                        $block_param.find('.fv-input_from').addClass(act_input);
                    }
                    if($elem.hasClass('to')) {
                        $block_param.find('.fv-input_to').addClass(act_input);
                    }
                    if(!$elem.hasClass(act_input)) {$elem.addClass(act_input);}
                });
                
                $('.fv-btn_load').on('click', function() {
                    var $elem = $(this), pz = $elem.data('load_filter'), load_animal = what.cls.load_animal;
                    if(pz) {
                        $('.fv-load_block.fv-'+pz+' .fv-btn_load').addClass(load_animal);
                        what.load_filter = pz;
                        what.getAjaxFilter(what.getParamAjaxFilter(true), 'html', 'ajax_filter_load');
                    }
                    what.hideAjaxButtonModal();
                });
                
                if(setFV.item_null_hide && this.get_action_filter) {what.hideItemNull(true);}
                
                return false;
            },
            
            prsCorrChecked: function() {
                var act_param = this.cls.action_param, ign_param = this.cls.ignore_param,
                    $items_list_body = $('.fv-items.fv-prs.fv-items_checkbox.fv-items_action .fv-item_body');
                if($items_list_body.length) {
                    var $parent_block = $items_list_body.find('.'+act_param).closest('.fv-box_item'), ind_first, ind_last, def, temp_el;
                    if($parent_block.length) {
                        ind_first = $parent_block.first().index(), 
                        ind_last = $parent_block.last().index(), def = ind_last - ind_first, temp_el;
                        $items_list_body.children().eq(ind_first).find('.fv-item_label').removeClass(act_param+'_temp');
                        $items_list_body.children().eq(ind_last).find('.fv-item_label').removeClass(act_param+'_temp');
                        if(def > 1) {
                            for(var i = (ind_first + 1); i < ind_last; i++) {
                                if((temp_el = $items_list_body.children().eq(i))) {
                                    temp_el.addClass(ign_param).find('.fv-item_label').addClass(act_param).addClass(act_param+'_temp');
                                }
                            }
                        }
                    }
                }
            },
            
            getChoice: function() {
                var choice_separate = setFV.data_choice.choice_separate || false, choice_mini = setFV.data_choice.choice_mini || false, 
                    animale = this.animal_ms, is_meta_tags = (setFV.meta_tags && setFV.updata_page_ajax) || false, choice_status = setFV.data_choice.status || false,
                    is_choice = (choice_status && !choice_mini) ? true : false;
                if(!is_meta_tags && !(choice_separate || choice_status)) {return;}
                var ojparams = {}, fv_block = document.getElementById('fv_container');
                if(is_meta_tags || choice_separate || is_choice) {
                    var what = this, html_choice = '', html_choice_separate = '', id_items, items_name = '', id_param, item_text = '', query_sel,
                        cls_choice = setFV.data_choice.cls_btn_choice ? 'fv-btn_choice' : 'fv-btn_css', act_param = this.cls.action_param,
                        sep_input_value = setFV.sep_input_value || ',', prs_symbol = setFV.prs_symbol || '', thousands_sep = setFV.thousands_sep || '', sep_val = ' - ', 
                        separate_title = setFV.data_choice.legend_delete_value || '', title_goto_params = setFV.data_choice.legend_goto_params || '', cls_one_item, data_title = '', title_delete_value = '';
                    
                    if(is_choice) {data_title = title_goto_params ? ' title="'+title_goto_params+'"' : '';}
                    title_delete_value = separate_title ? ' data-toggle="tooltip" title="'+separate_title+'"' : '';
                    var arr_data = [], pz = '', main_id, main_n, key_main = 'm', key_legend = 'n', key_param = 'p', kt = 't', ki = 'i', np = 0, omj = {};
                    
                    fv_block.querySelectorAll('.fv-items.fv-items_action').forEach((elem) => {
                        if((query_sel = elem.querySelector('.fv-items_name'))) {
                            items_name = query_sel.textContent;
                        } else {items_name = '';}
                        id_items = elem.getAttribute('data-block_items');
                        if(is_choice) {
                            html_choice += '<div class="fv-choice_group"'+(id_items ? ' data-choice_group="'+id_items+'"' : '')+'>';
                            html_choice += '<span class="fv-choice_group_label"'+data_title+'>'+items_name+'</span>';
                        }
                        if(elem.matches('.fv-items_select')) {
                            if((query_sel = elem.querySelector('.fv-box_item'))) {id_param = query_sel.getAttribute('data-box_item');} else {id_param = '';}
                            item_text = '';
                            var item_val = '', is_prs = elem.matches('.fv-prs') ? true : false;
                            if((query_sel = elem.querySelector('select'))) {
                                if((item_val = query_sel.value)) {
                                    if(is_prs) {
                                        item_text = what.label_prs;
                                    }
                                    else {
                                        item_text = query_sel.querySelector('[value="'+item_val+'"]').textContent;
                                    }
                                }
                            }
                            /*get_param_action*/
                            if(is_meta_tags) {
                                if(item_val) {
                                    arr_data = item_val.split('_');
                                    if(arr_data.length == 3) {
                                        pz = arr_data[0]; main_id = arr_data[1]; main_n = main_id+'_'; np = 0;
                                        omj = {[np]: {[ki]: arr_data[2], [kt]: item_text}};
                                        if(pz in ojparams) {
                                            if(main_n in ojparams[pz]) {Object.assign(ojparams[pz][[main_n]][[key_param]], omj);}
                                            else {ojparams[pz][[main_n]] = {[key_main]: main_id, [key_legend]: items_name, [key_param]: omj};}
                                        }
                                        else {ojparams[pz] = {}; ojparams[pz][[main_n]] = {[key_main]: main_id, [key_legend]: items_name, [key_param]: omj};}
                                    }
                                }
                            }
                            if(is_choice) {html_choice += what.sampleChoiceParam(id_param, item_text, cls_choice);}
                            if(choice_separate) {html_choice_separate += what.sampleChoiceSeparate(id_param, items_name, item_text, title_delete_value);}
                        }
                        else if(elem.matches('.fv-items_slider')) {
                            item_text = '';
                            if(query_sel = elem.querySelector('.fv-box_item')) {id_param = query_sel.getAttribute('data-box_item');} else {id_param = '';}
                            var val_data = elem.querySelector('input.fv-init_slider').value, arr_atrb = val_data.split(sep_input_value);
                            if(elem.matches('.fv-prs')) {
                                if(arr_atrb.length === 2) {
                                    if(arr_atrb[0] === arr_atrb[1]) {
                                        item_text = what.numberWithThousands(arr_atrb[0], thousands_sep);
                                    } else {
                                        item_text = what.numberWithThousands(arr_atrb[0], thousands_sep) + sep_val + what.numberWithThousands(arr_atrb[1], thousands_sep);
                                    }
                                }
                                else if(arr_atrb.length === 1) {
                                    item_text = what.numberWithThousands(arr_atrb[0], thousands_sep);
                                }
                                if(prs_symbol) {
                                    item_text += ' '+prs_symbol;
                                }
                            }
                            else {
                                if(arr_atrb.length === 2) {
                                    if(arr_atrb[0] === arr_atrb[1]) {
                                        item_text = arr_atrb[0];
                                    } else {
                                        item_text = arr_atrb[0] + sep_val + arr_atrb[1];
                                    }
                                }
                                else if(arr_atrb.length === 1) {
                                    item_text = arr_atrb[0];
                                }
                            }
                            /*get_param_action*/
                            if(is_meta_tags) {
                                if(id_param) {
                                    arr_data = id_param.split('_');
                                    if(arr_data.length == 3) {
                                        pz = arr_data[0]; main_id = arr_data[1]; main_n = main_id+'_'; np = 0;
                                        omj = {[np]: {[ki]: arr_data[2], [kt]: item_text}};
                                        if(pz in ojparams) {
                                            if(main_n in ojparams[pz]) {Object.assign(ojparams[pz][[main_n]][[key_param]], omj);}
                                            else {ojparams[pz][[main_n]] = {[key_main]: main_id, [key_legend]: items_name, [key_param]: omj};}
                                        }
                                        else {ojparams[pz] = {}; ojparams[pz][[main_n]] = {[key_main]: main_id, [key_legend]: items_name, [key_param]: omj};}
                                    }
                                }
                            }
                            if(is_choice) {html_choice += what.sampleChoiceParam(id_param, item_text, cls_choice);}
                            if(choice_separate) {html_choice_separate += what.sampleChoiceSeparate(id_param, items_name, item_text, title_delete_value);}
                        }
                        else if(elem.matches('.fv-prs.fv-items_checkbox')) {
                            item_text = what.label_prs;
                            id_param = 'prs_1_all';
                            /*get_param_action*/
                            if(is_meta_tags) {
                                pz = 'prs'; main_id = 1; main_n = main_id+'_'; np = 0;
                                omj = {[np]: {[ki]: '0', [kt]: item_text}};
                                ojparams[pz] = {}; ojparams[pz][[main_n]] = {[key_main]: main_id, [key_legend]: items_name, [key_param]: omj};
                            }
                            if(is_choice) {html_choice += what.sampleChoiceParam(id_param, item_text, cls_choice);}
                            if(choice_separate) {html_choice_separate += what.sampleChoiceSeparate(id_param, items_name, item_text, title_delete_value);}
                        }
                        else {
                            np = 0;
                            for(var element of elem.querySelectorAll('.fv-item_label.'+act_param)) {
                                if((query_sel = element.closest('.fv-box_item'))) {
                                    id_param = query_sel.getAttribute('data-box_item');
                                } else {id_param = '';}
                                if((query_sel = element.querySelector('.fv-item_text'))) {
                                    item_text = query_sel.textContent;
                                } else {item_text = '';}
                                cls_one_item = '';
                                if(!item_text) {
                                   cls_one_item = ' fv-choice_one_item';
                                }
                                /*get_param_action*/
                                if(is_meta_tags) {
                                    if(id_param) {
                                        arr_data = id_param.split('_');
                                        if(arr_data.length == 3) {
                                            pz = arr_data[0]; main_id = arr_data[1]; main_n = main_id+'_';
                                            omj = {[np]: {[ki]: arr_data[2], [kt]: item_text}};
                                            if(pz in ojparams) {
                                                if(main_n in ojparams[pz]) {Object.assign(ojparams[pz][[main_n]][[key_param]], omj);}
                                                else {ojparams[pz][[main_n]] = {[key_main]: main_id, [key_legend]: items_name, [key_param]: omj};}
                                            }
                                            else {ojparams[pz] = {}; ojparams[pz][[main_n]] = {[key_main]: main_id, [key_legend]: items_name, [key_param]: omj};}
                                            np++;
                                        }
                                    }
                                }
                                if(is_choice) {html_choice += what.sampleChoiceParam(id_param, item_text, cls_choice+cls_one_item);}
                                if(choice_separate) {html_choice_separate += what.sampleChoiceSeparate(id_param, items_name, item_text, title_delete_value);}
                            }
                        }
                        if(is_choice) {html_choice += '</div>';}
                    });
                    
                    setTimeout(() => {
                        if(choice_mini) {
                            fun_choice_mini();
                        }
                        else if(is_choice) {
                            if(html_choice) {
                                $('.fv-choices').slideDown(animale);
                                $('.fv-choices .fv-items_list_body').html(html_choice);
                            }
                            else {
                                $('.fv-choices').slideUp(animale);
                                $('.fv-choices .fv-items_list_body').empty();
                            }
                        }
                        if(choice_separate) {
                            if(html_choice_separate) {
                                $('.fv-choice_separate').slideDown(animale);
                                $('.fv-choice_separate .fv-choice_separate_body').html(html_choice_separate);
                            }
                            else {
                                $('.fv-choice_separate').slideUp(animale);
                                $('.fv-choice_separate .fv-choice_separate_body').empty();
                            }
                        }
                    }, animale);
                }
                else {
                    setTimeout(() => {
                        if(choice_mini) {
                            fun_choice_mini();
                        }
                    }, animale);
                }
                this.get_param_action = ojparams;
                
                function fun_choice_mini() {
                    if(fv_block.querySelector('.fv-items.fv-items_action')) {
                        $('.fv-choices').slideDown(animale);
                    }
                    else {
                        $('.fv-choices').slideUp(animale);
                    }
                }
                
                return true;
            },
            
            sampleChoiceSeparate: function(id_param, items_name, item_text, title_delete_value) {
                return '<span class="fv-btn_choice_separate btn btn-default fv-choice_item"'+title_delete_value+' data-choice_item="'+id_param+'"><span class="fv-txt_choice_separate fv-choice_separate_legend">'+items_name+'</span><span class="fv-txt_choice_separate fv-choice_separate_item">'+item_text+'</span></span>';
            },
            
            sampleChoiceParam: function(id_param, item_text, cls_choice) {
                return '<span data-choice_item="'+id_param+'" class="fv-choice_item fv-btn '+cls_choice+'">'+item_text+'</span>';
            },
            
            clearTooltipItems: function(items) {
                var $elem, text_title = '', find_elem = '.fv-item_label[data-original-title]';
                if(items.hasClass('fv-items_image') && !items.hasClass('fv-checkbox')) {
                    items.find(find_elem).each(function() {
                        $elem = $(this);
                        text_title = $elem.find('.fv-item_text').text();
                        $elem.attr('data-original-title', text_title);
                    });
                } 
                else if(items.hasClass('fv-items_button')) {
                    items.find(find_elem).each(function() {
                        $(this).attr('data-original-title', '');
                    });
                }
            },
            
            clearSelect: function(items) {
                if(items.hasClass('fv-items_select')) {
                    var $elem = items.find('select'), act_param = this.cls.action_param;
                    $elem.children(':selected').removeAttr("selected");
                    $elem.children('option:eq(0)').prop('selected',true);
                    items.find('.fv-item_label').removeClass(act_param).attr('data-item_name', '').attr('data-item_value', '');
                }
            },
            
            clearInputSlider: function(items) {
                if(items.hasClass('fv-items_slider')) {
                    var act_input = this.cls.action_input_slider, act_param = this.cls.action_param;
                    items.find('.'+act_input).removeClass(act_input);
                    items.find('.'+act_param).removeClass(act_param);
                }
            },
            
            applyAjaxFilter: function(is_url) {
                var url = this.ajax_url;
                if(is_url && url) {
                    if(setFV.updata_page_ajax) {
                        this.hideAjaxButtonModal();
                        this.upDataPageAjax(url, false, true);
                    } else {
                        this.sendUrlFilter(url);
                    }
                }
                else {
                    this.getAjaxFilter(this.getParamAjaxFilter(true), 'json', 'ajax_url');
                }
            },
            
            clearAjaxFilterAll: function() {
                var auto_updatapage = 0;
                if(this.diffUrl()) {
                    auto_updatapage = 1;
                }
                else {
                    /*fix_return*/
                    if(this.ajax_url && !this.diffUrl(this.ajax_url)) {return false;}
                }
                this.getAjaxFilter(this.getParamAjaxFilter(false), 'json', 'ajax_filter_total', {}, auto_updatapage);
            },
            
            runAjaxFilter: function(elem, flag_top, updatapage) {
                if(flag_top === undefined) {flag_top = true;}
                $('.fv-body').addClass(this.cls.wait_filter);
                this.getAjaxFilter(this.getParamAjaxFilter(true), 'json', 'ajax_filter_total', this.preAjaxBtnModal(elem, flag_top), updatapage);
            },
            
            getParamAjaxFilter: function(is_param) {
                if(is_param === undefined) {is_param = false;}
                var what = this, route = {}, params = {}, name_action, val_action, dp = setFV.sep_param, route = setFV.ajax_get_route, 
                    act_param = this.cls.action_param, act_block = this.cls.action_block, oj_get_url, $items;
                /*fix*/
                if(this.paths) {route['_path'] = this.paths;}
                /*end fix*/
                if(this.load_filter) {route['load_filter'] = this.load_filter;}
                else if(this.set_load_filter && this.load_filter_all) {route['load_filter'] = '0';}
                oj_get_url = this.convertUrlGetToObj(window.location.href);
                if(oj_get_url['sort']) {
                    route['sort'] = oj_get_url['sort'];
                    if(oj_get_url['order']) {route['order'] = oj_get_url['order'];}
                } else {if(route['sort']) {delete route['sort'];} if(route['order']) {delete route['order'];}}
                if(oj_get_url['limit']) {
                    route['limit'] = oj_get_url['limit'];
                } else {if(route['limit']) {delete route['limit'];}}
                if(is_param) {
                    $('.fv-item_label.'+act_param).each(function () {
                        name_action = $(this).attr('data-item_name'); val_action = $(this).attr('data-item_value');
                        if(val_action && val_action.length) {
                            if(name_action in params) {
                                params[name_action] = params[name_action] + dp + val_action;
                            } else {
                                params[name_action] = val_action;
                            }
                        }
            	    });
                } else {
                    $('.fv-item_label.'+act_param).each(function () {
                        $items = $(this).removeClass(act_param).closest('.fv-items');
                        $items.removeClass(act_block);
                        what.clearSelect($items);
            	    });
                }
                if(Object.keys(params).length) {route = Object.assign({}, route, params);}
                return route;
            },
            
            getAjaxFilter: function(param, dtype, file, obj_tec, auto_updatapage) {
                if(auto_updatapage === undefined) {auto_updatapage = setFV.auto_updata_page_ajax;}
                var what = this, result = {'total_all': null}, disabled_btn = this.cls.ajax_btn_disabled;
               $.ajax({
                    /*type: 'GET',*/
                    type: 'POST',
                    url: 'index.php?route='+setFV.versi_put+file,
                    dataType: dtype,
                    data: param,
                    beforeSend: function(){
                        if(file == 'ajax_filter_total') {
                            what.lockFilter(true, true);
                        }
                        else if(file == 'ajax_filter_load') {
                            what.lockBody(true);
                        }
                    }
                }).done(function(data) {
                    if(file == 'ajax_filter_total') {
                        if(data.total) {
                            if(data.total.total_all) {
                                what.total_product = data.total.total_product || '0';
                                result['total_all'] = data.total.total_all;
                            }
                            if(data.total.get_action_filter) {
                                what.get_action_filter = data.total.get_action_filter;
                            }
                            else {
                                what.get_action_filter = 0;
                            }
                            result['updata'] = what.upDataTotalAll(data.total, setFV);
                        }
                        what.ajax_url = data.ajax_url || '';
                        /*??? = then*/
                        if(auto_updatapage) {
                            what.applyAjaxFilter(true);
                        }
                    }
                    else if(file == 'ajax_url') {
                        if(data.result) {
                            what.ajax_url = data.result;
                            if(setFV.ajax_filter && setFV.updata_page_ajax) {
                                what.hideAjaxButtonModal();
                                what.upDataPageAjax(what.ajax_url, false, true);
                            } else {
                                what.sendUrlFilter(what.ajax_url);
                            }
                        }
                    }
                    else if(file == 'ajax_filter_load') {
                        var load_filter = what.load_filter, result_html, load_html, init_slider, in_sl;
                        if(data) {
                            if(load_filter && (what.load_filter_all != load_filter)) {
                                result_html = $.parseHTML((typeof data.html !== 'undefined') ? data.html : data);
                                load_html = $(result_html).find('.fv-body').children('.fv-items.fv-'+load_filter).addClass('fv-load_items');
                                if(Object.keys(load_html).length) {
                                    what.load_filter = '0';
                                    what.load_filter_all = load_filter;
                                }
                                else {
                                    load_html = '';
                                }
                                $('.fv-body .fv-load_block.fv-'+load_filter).replaceWith(load_html);
                                if(load_filter == 'attrb') {
                                    init_slider = $(result_html).find('.fv-block_load_script.fv-'+load_filter).data('filter_slider');
                                    if(init_slider && Object.keys(init_slider).length) {
                                        $('.fv-body .fv-items.fv-'+load_filter+'.fv-items_slider.fv-load_items').find('.fv-init_slider').each(function() {
                                            in_sl = $(this).attr('id');
                                            what.initSliderOne(in_sl, init_slider);
                                        });
                                        if(setFV.init_slider[load_filter] && Object.keys(setFV.init_slider[load_filter]).length) {
                                            Object.assign(setFV.init_slider[load_filter], init_slider[load_filter]);
                                        }
                                        else {
                                            if(setFV.init_slider  && Object.keys(setFV.init_slider).length) {
                                                setFV.init_slider[load_filter] = init_slider[load_filter];
                                            }
                                            else {
                                                setFV.init_slider = init_slider;
                                            }
                                        }
                                    }
                                }
                                if(setFV.item_null_hide) {what.hideItemNull(true, true);}
                            }
                            if(setFV.attrtool.init_attrtool) {what.initAttrtool();}
                        }
                        else {
                            if(load_filter) {
                                $('.fv-body .fv-load_block.fv-'+load_filter).addClass(what.cls.hiden);
                            }
                        }
                    }
                }).then(function(data) {
                    if(file == 'ajax_filter_total') {
                        if(!what.get_action_filter) {
                            $('.fv_apply_all_filter').addClass(disabled_btn);
                        }
                        else {
                            $('.fv_clear_all_filter').removeClass(disabled_btn);
                        }
                        if(result['total_all']) {
                            $('.fv-ajax_total_prod').text(result['total_all']);
                            if(result['total_all'] == '0') {
                                if(what.get_action_filter) {
                                    $('.fv_apply_all_filter').addClass(disabled_btn);
                                }
                            }
                            else {
                                if(what.get_action_filter) {
                                    $('.fv_apply_all_filter').removeClass(disabled_btn);
                                }
                            }
                        }
                        else {
                            $('.fv-ajax_total_prod').text('0');
                        }
                        if(auto_updatapage) {
                            /*??? = done*/
                            /*what.applyAjaxFilter(true);*/
                        }
                        else {
                            what.ajaxButtonModal(obj_tec);
                        }
                        what.lockFilter(false, true);
                    }
                    else if(file == 'ajax_filter_load') {
                        what.lockBody(false);
                    }
                }).fail(function(err) {
                    what.errorAjax(err);
                    what.lockFilter(false, true);
                    what.lockBody(false);
                });
            },
            
            upDataPageAjax: function(url, update_filter, dop_up) {
                url = this.getValidStrUrl(url);
                if(!url) return;
                if(update_filter === undefined) {update_filter = false;}
                if(dop_up === undefined) {dop_up = false;}
                var el_content = setFV.elements_updata.el_content || '', elements = setFV.elements_updata || {}, elements_real = {}, 
                    route = setFV.ajax_get_route['_route'] || '', flag_home = (route == 'common/home') ? true : false;
                
                if(el_content || flag_home) {
                    var what = this,
                        goto_view = setFV.goto_view || '', goto_view_correct = setFV.goto_view_correct || '', updata_common_js = setFV.updata_common_js || '', 
                        el_filter = '#fv_module', data_filter, arr_meta = ['description','keywords'], new_title = '', new_robots, new_canonical, new_common_js, script_common, 
                        data_param = {}, no_opis_page = setFV.no_opis_page || false;
                    
                    if(!update_filter) {
                        var oj_get_url = this.convertUrlGetToObj(url);
                        var prepareElem = function() {
                            var rez = {};
                            ['el_content','el_sort','el_limit','el_pagination'].forEach(function(key) {
                                if(elements[key]) {
                                    rez[key] = elements[key];
                                }
                            });
                            if(elements.el_description && no_opis_page && oj_get_url.page && (oj_get_url.page > 1)) {
                                rez['el_description'] = elements.el_description;
                            }
                            return rez;
                        }
                        if(dop_up) {what.getChoice();}
                        if(dop_up && this.adapt_fv) {
                            var num_el = 0;
                            $.each(elements, function(key, elem) {
                                if(elem.length) {
                                    if((key != 'el_sort') && (key != 'el_limit') && (key != 'el_pagination')) {num_el++;}
                                }
                            });
                            if(num_el < 2) {
                                data_param['adapt_fv'] = '1';
                                elements_real = prepareElem();
                            }
                            else {
                                data_param['adapt_fv'] = '2';
                                if(Object.keys(this.get_param_action).length) {
                                    data_param['total_prod'] = what.total_product;
                                    data_param['fv_action_param'] = encodeURIComponent(JSON.stringify(this.get_param_action));
                                }
                                elements_real = elements;
                            }
                        }
                        else {
                            if(this.adapt_fv) {
                                data_param['adapt_fv'] = '1';
                                elements_real = prepareElem();
                            }
                            else {
                                elements_real = elements;
                            }
                        }
                    }
                    else {
                        elements_real = elements;
                    }
                    
                    $.ajax({
                        /*type: 'GET',*/
                        type: 'POST',
                        url: url,
                        dataType: 'html', 
                        data: data_param,
                        beforeSend: function() {
                            what.lockBody(true);
        		        },
                    }).done(function(data) {
                        if(data) {
                            var $data_html = $(data), $datas, $doc_elem;
                            
                            if(!flag_home) {
                                
            		            history.pushState(null, '', url);
                                
                                $.each(elements_real, function(key, elem) {
                                    $doc_elem = $(elem);
                                    if($doc_elem.length) {
                                        if((key == 'el_description') && no_opis_page && (oj_get_url.page && (oj_get_url.page > 1)) && elem.length) {
                                            $doc_elem.empty(); return;
                                        }
                                        if(elem.length) {
                                            $datas = $data_html.find(elem);
                                            if($datas.length) {
                                                $datas.replaceAll($doc_elem);
                                            }
                                            else {
                                                $doc_elem.empty();
                                            }
                                        }
                                    }
                                });
                                
                                if(update_filter || dop_up) {
                                    new_title = $data_html.filter('title').text();
                                    document.title = new_title;
                                    
                                    $.each(arr_meta, function(index, value) {
                                        $('meta[name="'+value+'"]').attr('content', $data_html.filter('meta[name="'+value+'"]').attr('content'));
                                    });
                                    
                                    new_robots = $data_html.filter('meta[name="robots"]').attr('content');
                                    $('meta[name="robots"]').remove();
                                    if(new_robots) {
                                        $('title').after($('<meta name="robots" content="'+new_robots+'" />'));
                                    }
                                    
                                    new_canonical = $data_html.filter('link[rel="canonical"]').attr('href');
                                    if(new_canonical) {
                                        $('link[rel="canonical"]').attr('href', new_canonical);
                                    }
                                }
                                
                                if(updata_common_js) {
                                    new_common_js = $data_html.filter('script[src*="'+updata_common_js+'"]').attr('src');
                                    if(new_common_js) {
                                        script_common = document.createElement('script');
                                        script_common.src = new_common_js;
                                        $('script[src*="'+updata_common_js+'"]').replaceWith(script_common);
                                    }
                                }
                                else if(localStorage.getItem('display')) {
                                    var vide = localStorage.getItem('display');
                                    if($('#'+vide+'-view').length) {
                                        $('#'+vide+'-view').triggerHandler('click');
                                    }
                                }
                            }
                            
                            if(update_filter) {
                                data_filter = $data_html.find(el_filter);
                                if(data_filter.length) {
                                    data_filter.replaceAll($(el_filter));
                                }
                                else {
                                    $(el_filter).empty();
                                }
                                if(!what.is_mobile) {
                                    what.hideAjaxButtonModal();
                                }
                                else {
                                    what.mobileClose();
                                }
                            }
                            else {
                                if(dop_up) {
                                    if(setFV.ajax_btn_modal.add_btn_modal) {
                                        if(!what.is_mobile) {
                                            what.hideAjaxButtonModal();
                                        }
                                    }
                                }
                            }
                        }
                        
                    }).then(function() {
                        what.lockBody(false);
                        if(!flag_home && goto_view) {what.gotoViewContent(goto_view, goto_view_correct);}
                    }).fail(function(err) {
                        if(err.status && err.status == 404) {
                            what.sendUrlFilter(what.error_url);
                            /*what.sendUrlFilter(window.location.href);*/
                        }
                        what.errorAjax(err);
                        what.lockBody(false);
                        /*fix*/what.lockFilter(false, true);
                    });
                }
            },
            
            gotoViewContent: function(elem, goto_view_correct) {
                if(elem === undefined) {elem = '';}
                if(elem) {
                    var el_n = 0, of_top;
                    if(goto_view_correct) {el_n = goto_view_correct*1;}
                    setTimeout(() => {
                        of_top = $(elem).offset().top*1 - el_n;
                        if(of_top) {
                            $('html, body').animate({scrollTop: of_top}, this.animal_ms, 'linear');
                        }
                    }, 600);
                }
                return false;
            },
            
            lockBody: function(flag) {
                var el_body = 'body', ajax_parent = 'fv_lock_prod_parent', cls_ajax_process = 'fv-lock_block_prod', 
                    img_loading = setFV.img_loading || '', put_img_loading = (img_loading) ? '/image/'+img_loading : '';
                if(flag) {
                    $(el_body).addClass(cls_ajax_process);
                    $('<span class="'+ajax_parent+'"></span>').appendTo(el_body);
                    if(put_img_loading) {$('.'+ajax_parent).css({'background-image': 'url("'+put_img_loading+'")', 'background-repeat': 'no-repeat', 'background-position': 'center'});}
                }
                else {
                    $('.'+ajax_parent).remove();
                    $(el_body).removeClass(cls_ajax_process);
                }
            },
            
            lockFilter: function(flag, animal_load) {
                if(animal_load === undefined) {animal_load = false;}
                var what = this, el_filter = '#fv_module', ajax_parent = 'fv_lock_filter_parent', img_loading = setFV.img_loading || '', 
                    cls_ajax_process = 'fv-lock_filter', anti_double_click = this.anti_double_click,
                    /*put_img_loading = (img_loading) ? '/image/'+img_loading : '',*/
                    put_img_loading = '',
                    el_animal_load = '.fv-ajax_block_fixed .fv-ajax_txt, .fv-ajax_block_fixed.fv-one_btn_clear .fv-ajax_btn_clear',
                    load_animal = this.cls.load_animal;
                if(flag) {
                    if(animal_load) {
                        if(this.timestamp_animal_load) {clearTimeout(this.timestamp_animal_load);}
                        $(el_animal_load).addClass(load_animal);
                    }
                    $('.'+ajax_parent).remove();
                    $('.fv-items_list_body').addClass(cls_ajax_process);
                    $('<span class="'+ajax_parent+'"></span>').prependTo(el_filter);
                    if(put_img_loading) {$('.'+ajax_parent).css({'background-image': 'url("'+put_img_loading+'")', 'background-repeat': 'no-repeat', 'background-position': 'center'});}
                }
                else {
                    if(anti_double_click) {
                        if(this.timestamp_lock_filter) {clearTimeout(this.timestamp_lock_filter);}
                        this.timestamp_lock_filter = setTimeout(function() {
                            $('.'+ajax_parent).remove();
                            $('.fv-items_list_body').removeClass(cls_ajax_process);
                        }, anti_double_click);
                    }
                    else {
                        $('.'+ajax_parent).remove();
                        $('.fv-items_list_body').removeClass(cls_ajax_process);
                    }
                    if(animal_load) {
                        this.timestamp_animal_load = setTimeout(function() {
                            $(el_animal_load).removeClass(load_animal);
                        }, 400);
                    }
                }
            },
            
            preAjaxBtnModal: function(elem, flag_top) {
                if(!setFV.ajax_filter) {return {};}
                var goto_view = setFV.goto_view || '';
                if(setFV.auto_updata_page_ajax && goto_view) {return;}
                var oj_btn_modal = setFV.ajax_btn_modal || {}, add_btn_modal = oj_btn_modal.add_btn_modal || 0;
                if(add_btn_modal || setFV.item_null_hide) {
                    var result = {}, data_mobile = this.mobileScreenFilter(), correct_style = {},
                        flag_mobil, posit, corect_gorizont_num = 24, corect_vertical = oj_btn_modal.corect_vertical || 0,
                        $items = elem.closest('.fv-items'),
                        id_items = $items.data('block_items'), 
                        id_param = elem.closest('.fv-box_item').data('box_item');
                        id_items = id_items ? '[data-block_items="'+id_items+'"]' : '';
                        id_param = id_param ? '[data-box_item="'+id_param+'"]' : '';
                    this.last_active_item = id_param || id_items;
                    /*after*/
                    if(!add_btn_modal) {return;}
                    if(oj_btn_modal.corect_gorizont) {
                        corect_gorizont_num = corect_gorizont_num + oj_btn_modal.corect_gorizont*1;
                    }
                    flag_mobil = data_mobile['mobile_screen'];
                    if(!flag_mobil) {
                        if((data_mobile['fv_width_offset'] - data_mobile['all_width']) > 1) {
                            posit = 'right';
                            correct_style['margin-'+posit] = corect_gorizont_num+'px';
                        }
                        else {
                            posit = 'left';
                            correct_style['margin-'+posit] = corect_gorizont_num+'px';
                        }
                        correct_style[posit] = '100%';
                    }
                    result['position_module'] = posit ? posit : '';
                    result['id_items'] = id_items;
                    result['id_param'] = id_param;
                    result['corect_vertical'] = corect_vertical*1;
                    result['flag_mobil'] = flag_mobil;
                    result['flag_top'] = flag_top;
                    result['correct_style'] = correct_style;
                    return result;
                }
                else {
                    return {};
                }
            },
            
            ajaxButtonModal: function(obj_tec) {
                if(setFV.auto_updata_page_ajax) {return;}
                var oj_btn_modal = setFV.ajax_btn_modal || {}, add_btn_modal = oj_btn_modal.add_btn_modal || 0;
                if(!add_btn_modal) {return;}
                if(obj_tec && !(this.isHorizontalFilter() || obj_tec.flag_mobil) && obj_tec.id_items) {
                    var what = this, time_hide_ajax_btn = oj_btn_modal.time_hide_ajax_btn || 0,
                        $block_modal = $('.fv-ajax_block_modal'), position_module = obj_tec.position_module || '',
                        cls_positin_blok = 'fv-ajax_btn_absolut fv-ajax_btn_position-'+position_module,
                        id_items = obj_tec.id_items || '',
                        id_param = obj_tec.id_param || '',
                        animal = this.animal_ms,
                        items_list = 0, top_posit = 0, $temp_list;
                    $block_modal.addClass(cls_positin_blok);
                    $block_modal.prependTo(id_items);
                    if(obj_tec.flag_top && id_param) {
                        top_posit = top_posit + $(id_param).position().top*1;
                        top_posit = top_posit + $block_modal.outerHeight(true)*1;
                        $temp_list = $(id_items).find('.fv-items_list');
                        if($temp_list.length) {
                            if((items_list = $temp_list.css('margin-top').replace('px', '')*1)) {
                                top_posit = top_posit + items_list;
                            }
                        }
                        if(obj_tec.corect_vertical) {
                            top_posit = top_posit + obj_tec.corect_vertical*1;
                        }
                    }
                    if(top_posit) {top_posit = top_posit+'px';}
                    $block_modal.css({'top':top_posit});
                    if(obj_tec.correct_style) {$block_modal.css(obj_tec.correct_style);}
                    $block_modal.css({'display':'none'});
                    /*fix_return*/
                    if(this.ajax_url && !this.diffUrl(this.ajax_url)) {$('.fv-body').removeClass(what.cls.wait_filter); return;}
                    $block_modal.fadeIn(animal);
                    if(time_hide_ajax_btn) {
                        var wait_filter = what.cls.wait_filter, even_mous = 'mousemove.hidebtn keydown.hidebtn scroll.hidebtn', hov_mous = 'mouseenter mouseleave';
                        $(document).off(even_mous).on(even_mous, function(e) {
                            if(what.timestamp_hide_ajax_btn) {clearTimeout(what.timestamp_hide_ajax_btn);}
                            what.timestamp_hide_ajax_btn = setTimeout(function() {
                                what.hideAjaxButtonModal();
                                if(!$('.fv-body').hasClass(wait_filter)) {
                                    $(document).off(even_mous);
                                    $('.fv-body .fv-items').unbind(hov_mous);
                                }
                            }, time_hide_ajax_btn);
                        });
                        if($('.fv-body').hasClass(wait_filter)) {
                            $('.fv-body .fv-items').hover(
                                function(){
                                    if($('.fv-body').hasClass(wait_filter)) {
                                        if($(this).children('.fv-ajax_block_modal').length) {
                                            $block_modal.fadeIn(animal);
                                        }
                                        
                                    } else {
                                        $('.fv-body .fv-items').unbind(hov_mous);
                                        $(document).off(even_mous);
                                    }
                                },
                                function(){
                                    if($('.fv-body').hasClass(wait_filter)) {
                                        if($(this).children('.fv-ajax_block_modal').length) {
                                            $(document).trigger('mousemove.hidebtn');
                                        }
                                    } else {
                                        $('.fv-body .fv-items').unbind(hov_mous);
                                        $(document).off(even_mous);
                                    }
                                }
                            );
                        }
                    }
                }
            },
            
            hideAjaxButtonModal: function() {
                $('.fv-ajax_block_modal').fadeOut(this.animal_ms);
            },
            
            upDataTotalAll: function(data_total, setFilter) {
                /*var time = performance.now();*/
                var what = this, pz = '', total_all, oj_total = {}, count_params = setFilter.count_params, count, flag_hide = setFV.item_null_hide;
                if(data_total.one) {
                    $.each(data_total.one, function (pz, oj_total_one) {
                        count = count_params[pz] ? 1 : 0;
                        what.upDataTotalOther(pz, oj_total_one, count);
                    });
                }
                if(data_total.prs) {
                    pz = 'prs'; oj_total = data_total[pz]; count = count_params[pz] ? 1 : 0;
                    if(oj_total.label_prs) {what.label_prs = oj_total.label_prs;}
                    else {what.label_prs = '';}
                    if(oj_total.slider) {
                        var main_id = '1', slider_data = {}, slider_data = oj_total.slider[main_id], updata_input = setFilter.input_slider[pz] || 1;
                        what.upDataTotalSlider(pz, main_id, slider_data, updata_input);
                    }
                    else if(oj_total.other) {
                        what.upDataTotalOther(pz, oj_total.other, count);
                        what.prsCorrChecked();
                    }
                    else if(oj_total.select) {
                        what.upDataTotalSelect(pz, oj_total.select, count);
                    }
                }
                if(data_total.manufs) {
                    pz = 'manufs'; oj_total = data_total[pz]; count = count_params[pz] ? 1 : 0;
                    if(oj_total.other) {
                        what.upDataTotalOther(pz, oj_total.other, count);
                    }
                    else if(oj_total.select) {
                        what.upDataTotalSelect(pz, oj_total.select, count);
                    }
                }
                if(data_total.optv) {
                    pz = 'optv'; oj_total = data_total[pz]; count = count_params[pz] ? 1 : 0;
                    if(oj_total.other) {
                        what.upDataTotalOther(pz, oj_total.other, count);
                    }
                    if(oj_total.select) {
                        what.upDataTotalSelect(pz, oj_total.select, count);
                    }
                }
                if(data_total.attrb) {
                    pz = 'attrb'; oj_total = data_total[pz]; count = count_params[pz] ? 1 : 0;
                    if(oj_total.other) {
                        what.upDataTotalOther(pz, oj_total.other, count);
                    }
                    if(oj_total.select) {
                        what.upDataTotalSelect(pz, oj_total.select, count);
                    }
                    if(oj_total.slider) {
                        var updata_input = setFilter.input_slider[pz] || 1;
                        $.each(oj_total.slider, function (main_id, slider_data) {
                            what.upDataTotalSlider(pz, main_id, slider_data, updata_input);
                        });
                    }
                }
                if(flag_hide) {what.hideItemNull();}
                /*console.log('times:', (performance.now() - time), '(mks)');*/
                return true;
            },
            /*
            upDataTotalOther_old: function(pz, oj_total, count) {
                var ign_param = this.cls.ignore_param, query_sel, item_total, fv_block = document.getElementById('fv_container');
                $.each(oj_total, function (id, quan) {
                    if(query_sel = fv_block.querySelector('[data-box_item="'+pz+'_'+id+'"]')) {
                        query_sel.classList.toggle(ign_param, !quan);
                        if(count && (item_total = query_sel.querySelector('.fv-item_total'))) {
                            item_total.textContent = quan;
                        }
                    }
                });
            },
            */
            upDataTotalOther: function(pz, oj_total, count) {
                var ign_param = this.cls.ignore_param, query_main, query_sel, item_total, fv_block = document.getElementById('fv_container');
                $.each(oj_total, function (main_id, arr_quan) {
                    if((query_main = fv_block.querySelector('[data-block_items="'+pz+'_'+main_id+'"] .fv-items_list_body'))) {
                        $.each(arr_quan, function (id, quan) {
                            if((query_sel = query_main.querySelector('[data-box_item="'+pz+'_'+id+'"]'))) {
                                query_sel.classList.toggle(ign_param, !quan);
                                if(count && (item_total = query_sel.querySelector('.fv-item_total'))) {
                                    item_total.textContent = quan;
                                }
                            }
                        });
                    }
                });
            },
            
            upDataTotalSelect: function(pz, oj_total, count) {
                var $option, text, no_disabled, ign_param = this.cls.ignore_param, query_sel, fv_block = document.getElementById('fv_container'), id_param, quan;
                $.each(oj_total, function (main_id, arr_quan) {
                    if((query_sel = fv_block.querySelector('[data-box_item="'+pz+'_'+main_id+'_select"]'))) {
                        no_disabled = false;
                        let i = (!query_sel.options[0].hasAttribute("value")) ? 1 : 0;
                        for(; i < query_sel.options.length; i++) {
                            $option = query_sel.options[i];
                        	if((id_param = $option.value)) {
                                if(quan = arr_quan[id_param]) {
                                    no_disabled = true;
                                    $option.removeAttribute('disabled');
                                }
                                else {
                                    quan = 0;
                                    $option.setAttribute('disabled', 'disabled');
                                }
                                if(count) {
                                    text = $option.textContent;
                                    if($option.selected) {$option.label = text;}
                                    else {$option.label = text + ' ('+quan+')';}
                                }
                        	}
                        }
                        query_sel.classList.toggle(ign_param, !no_disabled);
                        /*
                        //variant 2;
                        $.each(arr_quan, function (id_param, quan) {
                            if(($option = query_sel.querySelector('[value="'+id_param+'"]'))) {
                                if(quan) {
                                    $option.removeAttribute('disabled');
                                    no_disabled = true;
                                } else {
                                    $option.setAttribute('disabled', 'disabled');
                                }
                                if(count) {
                                    text = $option.textContent;
                                    if($option.selected) {$option.label = text;}
                                    else {$option.label = text + ' ('+quan+')';}
                                }
                            }
                        });
                        query_sel.classList.toggle(ign_param, !no_disabled);
                        */
                    }
                });
            },
            
            upDataTotalSlider: function(pz, main_id, slider_data, updata_input) {
                var in_sl = pz+'_'+main_id+'_slider', $rangeSld = $('#'+in_sl), 
                    id_param = '[data-box_item="'+in_sl+'"]',
                    step = slider_data.step*1 || 1, grid_num,
                    $from = $(id_param+' .fv-input_from'), $to = $(id_param+' .fv-input_to'),
                    from = slider_data.from, to = slider_data.to, min = slider_data.min, max = slider_data.max, 
                    disable = slider_data.disable, action = slider_data.action, action_one_get = slider_data.action_one_get,
                    grid_snap = this.gridSnap(slider_data),
                    range_sld, val_attrbs, 
                    ign_param = this.cls.ignore_param;
                    grid_num = (min == max) ? 1 : this.slider_grid_num;
                if(!action || action_one_get) {
                    range_sld = $rangeSld.data('ionRangeSlider');
                    if(!range_sld) {return;}
                    range_sld.update({min: min, max: max, from: from, to: to, disable: disable, grid_snap: grid_snap, grid_num: grid_num});
                    val_attrbs = this.getMinMax(pz, $rangeSld, false);
                    $rangeSld.next('input').attr('value', val_attrbs);
                    if(disable) {
                        $(id_param).addClass(ign_param);
                    } else {
                        $(id_param).removeClass(ign_param);
                    }
                    if(updata_input) {
                        if(disable) {$(id_param+' .fv-box_input_slider input').attr("disabled","disabled");}
                        else {$(id_param+' .fv-box_input_slider input').removeAttr("disabled");}
                        $from.prop('value', from).attr('value', from); $to.prop('value', to).attr('value', to);
                        $from.prop('placeholder', from); $to.prop('placeholder', to);
                    }
                }
            },
            
            hideItemNull: function(not_animal, load_filter) {
                if(load_filter === undefined) {load_filter = false;}
                var id_items = this.last_active_item, is_mobile = this.isMobile(), 
                    is_goriz_filter = this.isHorizontalFilter(),
                    group_id, flag_items, flag_hide_animal = this.is_hide_animal,
                    ign_param = this.cls.ignore_param, hiden = this.cls.hiden, 
                    count_params = 0, more_switch = !setFV.items_scroll, animale = (this.animal_ms > 200) ? (this.animal_ms - 200) : 0, 
                    timestamp_block_group = null,
                    timestamp_attrb_group = null,
                    timestamp_top_scroll = null,
                    fv_block = document.getElementById('fv_container'),
                    wait_filter = fv_block.querySelector('.fv-body').matches('.'+this.cls.wait_filter);
                if(load_filter && !(wait_filter || this.get_action_filter)) {return;}
                if(load_filter || not_animal) {animale = 0;}
                setTimeout(function() {
                    fv_block.querySelectorAll('.fv-items:not(.fv-choices)').forEach((elem) => {
                        if(timestamp_attrb_group) {clearTimeout(timestamp_attrb_group);}
                        if(timestamp_block_group) {clearTimeout(timestamp_block_group);}
                        if(timestamp_top_scroll) {clearTimeout(timestamp_top_scroll);}
                        if(elem.matches('.fv-items_select')) {
                            if(!elem.querySelectorAll('.fv-box_item.fv-item_select option:not([disabled])').length) {
                                elem.querySelector('.fv-box_item').classList.add(ign_param);
                            }
                        }
                        if(elem.querySelector('.fv-box_item:not(.'+ign_param+')')) {
                            if(elem.matches('.'+ign_param)) {
                                elem.classList.remove(ign_param);
                                if(!is_goriz_filter) {
                                    setTimeout(() => {
                                        elem.classList.remove(hiden);
                                    }, (animale + 50));
                                }
                            }
                        }
                        else {
                            if(!elem.matches('.'+ign_param)) {
                                elem.classList.add(ign_param);
                                if(!is_goriz_filter) {
                                    setTimeout(() => {
                                        elem.classList.add(hiden);
                                    }, (animale + 50));
                                }
                            }
                        }
                        /*animale_box_item*/
                        if(flag_hide_animal) {
                            setTimeout(() => {
                                for(var element of elem.querySelectorAll('.fv-items:not(.fv-one_item):not(.fv-items_select):not(.fv-items_slider):not(.fv-prs) .fv-box_item')) {
                                    element.classList.toggle(hiden, element.matches('.'+ign_param));
                                }
                            }, (animale + 0));
                        }
                        if(more_switch && !elem.matches('.fv-one_item') && (elem.matches('.fv-items_checkbox') || elem.matches('.fv-checkbox'))) {
                            if(count_params = elem.querySelectorAll('.fv-items_list_body_more .fv-box_item:not(.'+ign_param+')').length) {
                                for(var element of elem.querySelectorAll('.fv-box_list_more_switch')) {element.classList.remove(hiden);}
                            }
                            else {
                                for(var element of elem.querySelectorAll('.fv-box_list_more_switch')) {element.classList.add(hiden);}
                            }
                            for(var element of elem.querySelectorAll('.fv-box_list_more_switch .fv-more_count')) {element.textContent = count_params;}
                        }
                    });
                    if(!is_goriz_filter && !load_filter) {
                        /*attrb_group*/
                        timestamp_attrb_group = setTimeout(function() {
                            fv_block.querySelectorAll('.fv-group_attrb[data-group_id]').forEach((elem) => {
                                group_id = elem.dataset.group_id;
                                flag_items = fv_block.querySelector('.fv-items.fv-attrb[data-group_id="'+group_id+'"]:not(.'+ign_param+')');
                                elem.classList.toggle(hiden, !flag_items);
                            });
                        }, (animale + 100));
                        /*block_group*/
                        timestamp_block_group = setTimeout(function() {
                            var head_group, pz;
                            pz = 'attrb';
                            if((head_group = fv_block.querySelector('.fv-block_'+pz))) {
                                flag_items = fv_block.querySelectorAll('.fv-'+pz+':not(.'+ign_param+'):not(.fv-load_block)').length;
                                head_group.classList.toggle(hiden, !flag_items);
                            }
                            pz = 'optv';
                            if((head_group = fv_block.querySelector('.fv-block_'+pz))) {
                                flag_items = fv_block.querySelectorAll('.fv-'+pz+':not(.'+ign_param+'):not(.fv-load_block)').length;
                                head_group.classList.toggle(hiden, !flag_items);
                            }
                        }, (animale + 100));
                    }
                    /*correct_scroll*/
                    if(!is_mobile && !is_goriz_filter && !load_filter && id_items && wait_filter && fv_block.querySelector(id_items)) {
                        timestamp_top_scroll = setTimeout(function() {
                            var h_win = $(window).height(), 
                                doc_scroll, 
                                top_pos,
                                goto_posit_scroll, 
                                corr_scroll = 200,
                                parent = 'html, body';
                            if(is_mobile) {
                                parent = '.fv-container';
                                top_pos = $(id_items).offset().top; 
                                doc_scroll = Math.ceil($(parent).scrollTop());
                            }
                            else {
                                top_pos = $(id_items).offset().top; 
                                doc_scroll = Math.ceil($(document).scrollTop());
                            }
                            top_pos = Math.ceil(top_pos);
                            goto_posit_scroll = (top_pos - h_win / 2);
                            if(((h_win - top_pos) > corr_scroll) || (Math.abs(goto_posit_scroll - doc_scroll) < corr_scroll) || (((top_pos - h_win) - (h_win - doc_scroll)) < corr_scroll)) {return;}
                            $(parent).animate({scrollTop: goto_posit_scroll}, 500, 'linear');
                        }, (animale + 300));
                    }
                }, (animale + 100));
            },
            
            errorAjax: function(err) {
                var text_error = 'code: '+err.readyState; text_error += (err.status) ? ', status: '+err.status : '';
                text_error += (err.statusText) ? ', statusText: '+err.statusText : '';
                console.log('Error: '+text_error);
            },
            /*end ajaxFilter*/
            
            numberWithThousands: function(number, thousands_sep) {
                if(!thousands_sep) return number;
                var dec_point = '.', parts = number.toString().split(dec_point);
                parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_sep);
                return parts.join(dec_point);
            },
            
            eType: function(e) {
                if(!e) e = window.event; return e.type;
            },
            
            preg_quote: function(str) {
                return str.replace(/([\\\.\+\*\?\[\^\]\$\(\)\{\}\=\!\<\>\|\:])/g, "\\$1");
            },
            
            goupFilter: function() {
                var $goup_box = $('.fv-goup_filter_box'), $gotop = $('#fv_gotop_filter'), min_height = 200, max_height, speed_animal = 500;
                $('.fv-container').scroll(function() {if($(this).scrollTop() > min_height) {$gotop.fadeIn();} else {$gotop.fadeOut();}});
                $gotop.on('click', function() {$('.fv-container').animate({scrollTop: 0},speed_animal);return false;});
            },
            
            convertUrlGetToObj: function(str) {
                var oj = {}, a1, a2, url = new URL(str), g = url.search.replace(/\?/, '').replace(/&amp;/g, '&');
                if(g) {a1 = g.split('&'); if(a1.length) {for (var i = 0; i < a1.length; ++i) {a2 = a1[i].split('='); 
                if(!a2[0].length) {continue;} if(a2.length == 2) {oj[a2[0]] = a2[1];} else if(a2.length == 1) {oj[a2[0]] = '';}}}}
                return oj;
            },
            
            isHorizontalFilter: function() {
                var layout = setFV.layout || '';
                if((layout == 'top') || (layout == 'bottom')) {return true;}
                return false;
            },
            
            getValidStrUrl: function(url) {
                url = url.toString();
                if(!url) {return '';}
                else {url = this.corrUrl(url)}
                var str_url = '', win_local = window.location, prot = win_local.protocol, host = win_local.hostname, href_host = prot+'//'+host, new_url;
                if(url.split(href_host).length !== 2) {
                    if(url.search(host) == -1) {
                        str_url = href_host+((url.indexOf('/', 0) !== 0) ? '/' : '')+url;
                        new_url = new URL(str_url);
                        str_url = new_url.toString();
                    }
                    if(!str_url) {
                        if((url.search('https:') == -1) && (url.search('http:') == -1)) {
                            str_url = prot+'//'+url;
                            new_url = new URL(str_url);
                            str_url = new_url.toString();
                        }
                        else {
                            new_url = new URL(url);
                            new_url.protocol = prot;
                            str_url = new_url.toString();
                        }
                    }
                }
                else {
                    str_url = url;
                }
                return str_url;
            },
            
            sendUrlFilter: function(url) {
                location.assign(this.corrUrl(url));
            },
            
            corrUrl: function(url) {
                return url.replace(/&amp;/g, '&');
            },
            
            diffUrl: function(url_start) {
                var tec_url = this.cullUrl(window.location.href), url_start = url_start || this.corrUrl(setFV.href_start),
                    url_start1 = this.cullUrl(url_start);
                if(tec_url != url_start1) {return url_start1;}
                else {return false;}
            },
            
            cullUrl: function(tec_url) {
                var url = new URL(tec_url), params = new URLSearchParams(url.search.slice(1));
                params.delete('sort'); params.delete('order');
                params.delete('limit'); params.delete('page');
                params.delete('load_filter');
                url.search = params;
                return decodeURIComponent(url);
            },
            
            fixedScroll: function() {
                /*this.is_mobile || */
                if(this.isHorizontalFilter() || (setFV.ajax_filter && setFV.updata_page_ajax) || ($('#fv_module').hasClass('fv-home'))) {return;}
                var n_ses = 'id_items', id_items, sessi_items = sessionStorage.getItem(n_ses), 
                    h_window, animal_ms = this.animal_ms, cor_time = 0, time_out = (setFV.item_null_hide && setFV.ajax_filter) ? (animal_ms + cor_time) : cor_time, 
                    selector = '.fv-box_item:not(.fv-item_ignore):not(.fv-item_slider)',
                    parent, top_pos = 0;
                selector += ', .fv-choice_item';
                selector += ', .fv-choice_clear .fv_clear_all_filter';
                selector += ', .fv-icon_items_action';
                selector += ', .fv_clear_filter';
                selector += ', .fv-button_slider:not(.fv-item_ignore)';
                if(setFV.ajax_filter) {
                    selector += ', .fv-box_grid_slider';
                    selector += ', .fv-input_slider';
                    selector += ', .fv-ajax_btn_clear';
                    if(!this.get_action_filter) {
                        time_out = 0;
                    }
                }
                if(sessi_items) {
                    sessionStorage.removeItem(n_ses);
                    h_window = Math.floor($(window).outerHeight())
                    if(sessi_items == 'fv-choices') {
                        id_items = '.fv-choices';
                    } else {
                        id_items = '[data-block_items="'+sessi_items+'"]';
                    }
                    setTimeout(() => {
                        if($(id_items).length) {
                            if(this.is_mobile) {
                                top_pos = $(id_items).position().top;
                                parent = '.fv-container';
                            }
                            else {
                                top_pos = $(id_items).offset().top;
                                parent = 'html, body';
                            }
                        }
                        if((top_pos - (h_window / 2)) > 0) {
                            animal_ms = (animal_ms * Math.floor(top_pos / 1000));
                            if(!animal_ms) {animal_ms += 200;}
                            top_pos = top_pos - (h_window / 2);
                            top_pos = Math.floor(top_pos);
                            if(top_pos > 300) {
                                /*'linear'  swing */
                                $(parent).animate({scrollTop: top_pos}, animal_ms, 'linear');
                            }
                        }
                    }, time_out);
                }
                $('#fv_container').on('click.sessi_scroll', selector, function(e) {
                    var $elem = $(this), $items = $elem.closest('.fv-items'), items = '';
                    if($items.hasClass('fv-choices')) {
                        items = 'fv-choices';
                    } else if($items.data('block_items') !== undefined) {
                        items = $items.data('block_items');
                    }
                    if(items) {
                        sessionStorage.setItem(n_ses, items);
                    } else {
                        sessionStorage.removeItem(n_ses);
                    }
                });
            },
            
            /*attrtool*/
            initAttrtool: function() {
                $.getScript('catalog/view/javascript/jquery/jquery.imagesloaded.min.js');
                $.getScript('catalog/view/javascript/jquery/jquery.qtip.min.js', function() {
                    $('.attrtool').qtip({
                        hide: {event: 'unfocus mouseleave', fixed: true, delay: 300},
                        show: {solo: true},
                    	style: {
                            classes: setFV.attrtool.attrtool_style || '',
                    		tip: {corner: true}
                   		},
                    	position: {
                            my: 'bottom left',
                            at: 'top center',
                    		viewport: $(window),
                    		adjust: {/*x: 0, y: 0,*/ method: 'shift flip'}
                        }
                	});
                });
            },
            /*end attrtool*/
            
            /*for others rezerv temp*/
            /*
            clearFilterUrl: function(url) {
                if(setFV.updata_page_ajax) {
                    this.upDataPageAjax(url, true);
                }
                else {
                    location.assign(this.corrUrl(url));
                }
            },
            */
            /*for others rezerv temp*/
            /*
            corrShortLink: function(temp_url, slidery_u) {
                var what = this;
                $.ajax({
                    type: 'POST', 
                    dataType: 'json', 
                    url: 'index.php?route='+setFV.versi_put+'is_short_link', 
                    data: ({'url_search': temp_url, 'aj_route_id': setFV.aj_route_id})
                }).then(function(data) {
                    if(data.result) {
                        slidery_u = slidery_u.replace(temp_url, data.result);
                    }
                    what.sendUrlFilter(slidery_u);
                }).fail(function(err) {
                    what.errorAjax(err);
                });
            },
            */
        };
        window['FilterVier'] = FilterVier;
    }
})(jQuery);