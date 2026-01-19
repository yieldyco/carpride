<?php

$_['legnd'] = array(
    'ajax_filter' => 'Ajax-Filter',
    'ajax_filter_mobil' => 'only Mobile',
    'updata_page_ajax' => 'without Reboot',
    'auto_updata_page_ajax' => '+auto-Update',
    'time_delay_slider' => 'Slider delay time (sec.)',
    //
    'load_filter_status' => 'Loading add parameters',
    'start_attrb' => 'Attributes Count',
    'start_optv' => 'Options Count',
    //
    'main_text' => 'In the fields, specify <abbr data-toggle="tooltip" title="(id, class, data-attribute)"><b>original Selectors</b></abbr> for the Containers (blocks) of your Template into which data will be loaded.<br />If the Selector is located <b>inside another Selector</b>, then you do <b>not need to fill in the field</b>.<br /><b>!!! IMPORTANT. The selector block must not include the Filter block itself</b>',
    'fix_input_2' => 'Input2ActionSlider',
    'other_setting' => 'Additional (optional) settings',
);

$_['help'] = array(
    'ajax_filter' => 'Filter on Ajax (PC and Mobile devices)',
    'ajax_filter_mobil' => '!!! Experimental functionality. Filter on Ajax only on Mobile devices',
    'updata_page_ajax' => 'When the Filter is running on Ajax - update the list of Products without reloading the page, after selecting all Filter Parameters - by the Button. !!! This functionality only works if the Selectors are configured correctly and may depend on the features of your Template',
    'auto_updata_page_ajax' => 'Refresh page after each enabled/disabled Filter Parameter - immediately without Button',
    'time_delay_slider' => 'for Sliders. Delay time for applying the Filter after stopping moving the sliders. On mobile devices - applies immediately. You can specify a fractional number',
    //
    'load_filter_status' => 'When running the Filter on Ajax, use additional loading of the Filter parameters. If the Parameter does not have a quantity or zero, then the setting is not applied to it',
    'start_attrb' => 'Initially display the number of Attributes in the Filter',
    'start_optv' => 'Initially display the number of Options in the Filter',
    //
    'main_text' => 'In fields where there is a placeholder, when you double-click on it, it will fill the field with the Selector from the default Template. !!! This Selector may not be appropriate for your Template',
    'fix_input_2' => 'Trigger/process slider only when there are two active values',
);

$_['element_poles'] = array(
    'element' => [
        'el_content' => 'selector Product<b class="required_r"></b>',
        'el_h1' => 'selector Header (H1)',
        'el_description' => 'selector Description',
        'el_breadcrumb' => 'selector Breadcrumbs',
        'el_pagination' => 'selector Paginations',
        'el_sort' => 'selector Sort',
        'el_limit' => 'selector Limit',
        'goto_view' => 'selector Positions ¯↑',
        'goto_view_correct' => 'correct Positions',
        'updata_common_js' => 'updata common.js',
        'img_loading' => 'Effect-image',
    ],
    'help' => [
        'el_content' => '<b class="jir">Main required selector</b>in which Products will be displayed',
        'el_h1' => 'Selector for Header(H1)',
        'el_description' => 'Selector for Page Description',
        'el_breadcrumb' => 'Selector for Breadcrumb',
        'el_pagination' => '<abbr data-toggle="tooltip" title="For ajax operation of this Block, the js-code in the Template must be modified" class="helpis">Selector for Paginations</abbr>',
        'el_sort' => '<abbr data-toggle="tooltip" title="For ajax operation of this Block, the js-code in the Template must be modified" class="helpis">Selector for Sort.</abbr> You can use this selector as the main one, inside which there are other selectors (for example, Limit)',
        'el_limit' => '<abbr data-toggle="tooltip" title="For ajax operation of this Block, the js-code in the Template must be modified" class="helpis">Selector for Limit.</abbr> If this block is included in the Main Sorting block, then it does not need to be filled in, but can be used for any other Container that is not in the settings',
        'goto_view' => 'Functional-closer. Selector indicating the location (Position) on the site where the browser scroll will be moved after refreshing the page',
        'goto_view_correct' => 'Possible correction of Position +/- number',
        'updata_common_js' => 'In some cases, for the Product display type (List/Grid), you need to specify the name of the main js-file. Often this is `common.js`',
        'img_loading' => 'Specify the file name for the gif effect before loading the content, which must be located in the <b>root<b class="required_r"></b> `image` folder</b> (*root - this is where the folders are located: `admin`, `catalog`, `system`)',
    ],
    'placeholder' => [
        'el_content' => '#content .row:eq(-2)',
        'el_h1' => '#content h1',
        'el_description' => '#content .row:eq(0)',
        'el_breadcrumb' => 'ul.breadcrumb',
        'el_pagination' => '#content .row:eq(-1)',
        'el_sort' => '#content .row:eq(-3)',
        //'el_limit' => '#input-limit',
        'goto_view' => '#content',
        //'goto_view_correct' => '',
        'updata_common_js' => 'common.js',
        'img_loading' => 'loading_fv.gif',
    ],
);
