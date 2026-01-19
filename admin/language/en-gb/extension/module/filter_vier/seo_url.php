<?php

$_['legnd'] = array(
    'seo_url' => 'Enable Seo-Url',
    'after_slash' => '/',
    'lang_translit' => 'Language transliteration',
    'separators' => 'divide',
    'get_filter_vier' => 'get-Filter',
    'chu_filter_vier' => 'Seo-Url get-Filter',
    'http_server' => 'http_server',
    'no_seo_url_page_search' => 'Disable Seo-Url on `Search` page',
    //
    'sort_url' => 'URL Sort:',
    'sort_url_in_param' => 'Sorting URL within the block A.O.M:',
    //
    'gen_transl' => 'Generate Seo-Url',
    'record_seo_url' => 'Record',
    'clear_duble_links' => 'Clear fields with duplicates',
    'replace_transl' => 'Translit',
    'view_attrb_slider' => 'Values in Slider',
    'clear_table' => 'Clear Table',
    'view_duble_links' => 'Doubles:',
    //
    'succ_gen_transl' => 'Seo-Url it generated, but is not recorded in the database',
    'succ_record_seo_url' => 'Seo-Url recorded in the database',
    'succ_clear_table' => 'Table cleared',
    'succ_clear_duble_links' => 'Duplicates cleared. ! Click `Record` to DB',
    //blocks
    'attrb' => 'Attributes',
    'optv' => 'Options',
    'prs' => 'Price',
    'psp' => 'Specials',
    'manufs' => 'Manufacturers',
    'qnts' => 'Availability',
    'nows' => 'Latest',
    //
    'del_tire' => '1 dash:',
    'control_pusto' => 'clear fields:',
    'symbol_minus' => 'Slider–minus',
);

$_['help'] = array(
    'seo_url' => 'Use Seo-Url parameters Filter',
    'button_set_defaults' => 'Sets/changes only basic settings. Adjust other settings as needed. Save settings. Additionally Generate Seo-Url',
    'lang_translit' => 'After changing Language - Save settings and Refresh the page. Change transliteration - click on the `Translit` button',
    'gen_transl' => 'Generate seo url (the database does not write!). To save the database - click Record',
    'record_seo_url' => 'Check for duplicates and Record Seo-Url DB',
    'edit_transl' => 'When editing seo-url, allowed length of no more than 150 symbol, and only Eng.letters(lowercase), numbers and dash "-".<br />!!! If you clear the seo-url of the main parameter block, then the seo-url of its Values do not work.',
    'separators' => 'Three different symbols between the parameters separated by a space (except letters, numbers and: & ? - . + /). The third may be slash / (Recommended: _ ~ / ). The First separates the Parameter Name (filter) from its values, the Second separates the Values themselves within one filter, and the Third divides into blocks of the filters themselves.',
    'get_filter_vier' => 'Use the optional extra get-parameter of the Filter `filter_vier=1` (except Landing pages)',
    'chu_filter_vier' => 'Instead of the get-parameter of the Filter - `filter_vier=1` use Seo-Url',
    'http_server' => 'Use the `HTTPS_SERVER` constant from the `config.php` file, to form Seo-Url (used in rare cases, due to the web-server specification or some third-party modules by seo_url)',
    'no_seo_url_page_search' => 'Disable Seo-Url on `Search` page',
    'clear_table' => 'Clear Table Seo-Url Filter',
    'after_slash' => 'Add at the end of Seo-Url parameters filter slash',
    'del_tire' => 'Delete two or more dashes when generating a SEO_PRO',
    'control_pusto' => 'When writing to the Seo-Url database, if there are empty fields in the block, then clear the whole block',
    'sort_url' => 'Sort order in URL between blocks. Drag and drop &harr;',
    'sort_url_in_param' => 'Use URL sorting from sort settings: Attributes(+groups of Attributes), Options, Manufacturer. (attention! - increases the load)',
    'symbol_minus' => 'If the Slider uses minus values, then specify the word (Eng.letters) that will replace the `-` sign in the address bar',
    'from_to' => '<div class="text_center help_explan" rel="tooltip" title="Installed replacement options. You can redefine them or add new ones. Symbols are filled in the Left side, which will be replaced by symbols from the Right side. In the Right part, use only English letters, numbers, dashes and empty"><span>From</span><span> → </span><span>To (eng.)</span></div>',
    'replace_transl' => 'View and change transliteration',
    'show_link_slider' => '!!!Temporarily. To view the Attribute Values in the Sliders when re-Generating Seo-Url. Do not write to the database with the checkbox enabled',
    'view_attrb_slider' => 'View Attribute Values in Slider',
    'view_invalid_translit' => 'View inappropriate transliteration. (After refreshing the page)',
    'view_duble_links' => 'View Doubles Seo-Url. Doubles with red text are Doubles with the Opencart table - `seo_url`, and in a red frame are Doubles between the filter parameters themselves',
    //To view Doubles, click on the Doubles warning, and by pressing Tab, you can move through each take
    'clear_duble_links' => '',
    'add_group_trans' => 'When generating Seo-Url, add attribute groups to the beginning of the Attribute',
);

//Error
$_['error_separators'] = 'Not the correct divisors';
$_['error_duble_seo_url'] = 'There doubles Seo-Url';
$_['error_duble_base_url'] = '<b>Doubles Seo-Url the main table!</b>';
$_['error_record_seo_url'] = 'Error writing to the DB or not `Generated Seo-Url`';
$_['error_duble_seo_url_help'] = 'Without correction - ! Will NOT write to DB';
//text
$_['text_clear'] = 'clear';
$_['text_all'] = 'all';
$_['text_group'] = 'group';
$_['text_groups'] = 'groups';
$_['text_gen_url'] = 'Generate Seo-Url';
$_['text_add_group_transl'] = 'Add translit Groups to Attributes';
//placeholder
$_['lang_placeholder'] = array(
    'replace_transl_from' => 'Search on the Left',
);
