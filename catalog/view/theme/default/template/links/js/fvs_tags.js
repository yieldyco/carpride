$(document).ready(function() {
    /*group*/
    var cls_actin = 'block_actin';
    $('.group_animal .name_group_hl').on('click', function() {
        var $bloc_action = $(this).parent();
        $('.block_hl_group').not($bloc_action).removeClass(cls_actin);
        $bloc_action.toggleClass(cls_actin);
        $('.block_hl_group.group_animal:not(.'+cls_actin+')').children('.blok_hand_links_fv_a').slideUp();
        $('.block_hl_group.group_animal.'+cls_actin).children('.blok_hand_links_fv_a').slideDown();
    });
    /*$('.action_hl_fv').parents('.blok_hand_links_fv_a').addClass(cls_actin).parent().addClass(cls_actin);*/
    /*end group*/
    /*mobil*/
    var all_width = $(document.body).width();
    if(all_width < 767) {
        /*$('.hl_top').addClass('mobil_hl');*/
        $('.hl_top .title_blok_hand_links_fv').on('click', function() {
            $(this).toggleClass(cls_actin);
            $('.hl_top .blok_hl').slideToggle();
        });
    }
    /*end mobil*/
    /*fix_ajax_filter_url*/
    var is_fun_ajax_filter_url = false;
    if(typeof (ajax_filter_url) === "function") {is_fun_ajax_filter_url = true;}
    if(is_fun_ajax_filter_url) {
        $('.blok_hand_links_fv_a').on('click','a', function(e) {
            e.preventDefault();
            var href = $(this).attr('href');
            ajax_filter_url(href);
        });
    }
    /*end fix_ajax_filter_url*/
});