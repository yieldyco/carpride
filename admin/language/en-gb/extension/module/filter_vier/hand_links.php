<?php

$_['legnd'] = array(
    'short_link' => 'Short Link',
    'category' => 'Category',
    'manufacturer' => 'Manufacturer',
    'special' => 'Special',
    //filter
    'route_empty' => 'Incorrect',
    'all_lang' => 'in all languages',
    //
    'for_tags' => 'Extra parametrs',
    'main_store' => 'Main store',
    //pole tabl_hl
    'hl_link' => 'Parameters Link',
    'hl_short_link' => 'Short Link',
    'hl_route' => 'Where:',
    'hl_status' => 'Status',
    'hl_store_id' => 'Store',
    'hl_image' => 'Image',
    'hl_tag' => 'Show in Tags',
    'hl_sort_order' => 'Sorting',
    'hl_group_id' => 'Group',
    //pole tabl_hl-lang
    'hl_title' => 'Title',
    'hl_meta_descr' => 'Meta-description',
    'hl_keywords' => 'Keywords',
    'hl_meta_h1' => 'Headline (H1)',
    'hl_name' => 'Name',
    'hl_discrib' => 'Description',
    //debug
    'admin_hl_use_debug' => 'admin-Debugging',
    'copy_metadata' => '+copy Meta-data',
    //sitemap
    'site_map' => 'Sitemap status:',
    'sitemap_fv' => 'Separate sitemap:',
    'data_feed' => 'Адрес sitemap:',
    'chek_sitemap_seo_url' => 'sitemap-seo_url:',
    'pref_uri' => 'Language prefix:',
    'sm_http' => 'Protocol:',
    'sm_changefreq' => 'Update frequency:',
    'sm_priority' => 'Priority:',
);

$_['help'] = array(
    'short_link' => 'Use short link',
    'view_link' => 'Create a link to view',
    'copy_tabl_hl' => 'Copy data from previous table - `filter_vier_hand_links` in the new tables: `filter_vier_hl` and `filter_vier_hl_lang`',
    'clear_tabl_hl' => 'Clear Landing pages tables: `filter_vier_hl` and `filter_vier_hl_lang`',
    'for_tags' => 'Below settings can be used for the module `Links Filter as Tags for FilterVier_SEO`. (You don`t have to use them)',
    //filter
    'route_empty' => 'search Incorrect data in Landings (tabl. `filter_vier_hl`) after Copy. Include in Search Filter',
    'all_lang' => 'search in all languages. If not selected, then searches only by `admin` Language',
    //pole tabl_hl
    'hl_link' => 'Enter the SEO_URL link for the Parameters, which is formed on the site in the Address bar. - Copy the desired SEO_URL from the address bar, !!!without Domain, without SEO_URL Categories (Manufacturer / Special)',
    'hl_short_link' => 'If filled, then instead of the Parameters link. Must not contain slashes. Used when turned on `Short Link`',
    'hl_route' => ' Choose where to display',
    'hl_status' => 'Status',
    'hl_store_id' => 'If not specified, it is counted for all Stores',
    'hl_image' => 'Image',
    'hl_tag' => 'Field `tag` of table `filter_vier_hl`. Can be used to control the output of Tags',
    'hl_sort_order' => 'Sorting by the `sort_order` column of the `filter_vier_hl` table',
    'hl_group_id' => 'Field `group_id` of table `filter_vier_hl`. Data from the Attribute group by the field `attribute_group_id` of the table `attribute_group_description`',
    //pole tabl_hl-lang
    'hl_name' => 'Short name. Can be used in `Breadcrumbs` when displayed `One line`',
    'hl_discrib' => 'Description',
    //debug
    'admin_hl_use_debug' => 'Show a button on the front site for authorized admins to view or create Landings',
    'copy_metadata' => 'when creating a Landing, copy Meta-data from the site page: `title`, `meta-description`, `H1` and `name`(only param)',
    //sitemap
    'site_map' => 'Use links from Landing pages in Sitemap modules (sitemap.xml)',
    'sitemap_fv' => 'Use a separate sitemap for the Filter. (when switched on, it switches off Sitemap-filter output for the other modules sitemap). The checkbox for `Sitemap status:` must be enabled',
    'data_feed' => 'Address-link, which is available sitemap-filter',
    'chek_sitemap_seo_url' => '!!! Experimental functionality. Use seo_url for Sitemap. In the field, enter a name for the Sitemap. Example: sitemap_fv.xml',
    'pref_uri' => 'for Sitemap. If another `Language Module` is installed, which uses Prefixes of languages in the URL for its processing, then specify the Prefix or list them separated by commas. Example: ru,en,ua',
    'sm_http' => 'Specify the protocol according to the site settings',
    'sm_changefreq' => 'Specify refresh rate',
    'sm_priority' => 'Specify the priority',
);

//Error
$_['error_duble_seo_url'] = 'There doubles link';
$_['error_duble_base_url'] = '<b>Doubles link the main table!</b> ';
$_['error_empty'] = 'Not selected';
$_['error_hl_status'] = 'Status is inactive';
$_['error_selected'] = 'No flagged';
$_['error_no_link'] = 'Parameters Link is not filled';
$_['error_route'] = 'Not selected, Where to display';

$_['text'] = array(
    'go_to_group_attrib' => 'Go to Groups',
    'go_to_page' => 'Go to page',
    'sort' => 'Sort',
    'empty' => '--Not indicated--',
    'remove_selected' => 'Delete checked',
    'visual_editor' => 'Visual editor (On/off). !!! When recording to disable',
    'open_filter' => '&#8645 Search in Landings',
    'autocomplete' => 'Auto-Completed Field',
    'non_strict' => '(with % - non-strict Search)',
    'ignore_duble' => 'Ignore doubles and Save',
    'metadata' => 'Meta-data',
);
