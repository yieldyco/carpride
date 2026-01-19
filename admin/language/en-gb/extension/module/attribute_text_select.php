<?php
// Heading
$_['v_mod'] = '8';
$_['vers_mod'] = '3.0.'.$_['v_mod'];
$_['p_mod'] = 'Attribute Text Select';
$_['heading_title'] = '<b style="color:darkblue"><i class="fa fa-tasks fa-lg"></i> '.$_['p_mod'].'_v.'.$_['vers_mod'].'.1</b>';
$_['title'] = $_['p_mod'].'_v.'.$_['vers_mod'].'.1';
if(defined('PHP_MAJOR_VERSION') && defined('PHP_MINOR_VERSION')) {$versi_php = PHP_MAJOR_VERSION.'.'.PHP_MINOR_VERSION;}else{$versi_php = '?';}
$_['heading_title'] .= ' <span data-toggle="tooltip" title="site PHP '.$versi_php.'"><img src="view/stylesheet/attribute_text_select/helpis.png" style="border:0;"></span>';

//tab_nav
$_['tab_base'] = 'General';
$_['tab_lic'] = 'License';
$_['tab_edit_values'] = 'Changes in Values';
$_['tab_gather'] = 'Sets Attributes';
$_['tab_add_gather'] = 'Add Set';
$_['tab_edit_gather'] = 'Edit Set';
$_['tab_edit_products'] = 'Edit in products';
$_['tab_merging_attribute'] = 'Combining attributes';
$_['tab_create_values'] = 'Assign Values';

//base
$_['legend_clear_tables'] = 'Clear tables';
$_['help_clear_tables'] = 'Clear module tables';
$_['text_succ_clear_tables'] = 'Cleared';
$_['legend_gen_text_id'] = 'Scans Values';
$_['help_gen_text_id'] = 'Scans Values for Attributes that are marked below. Existing ones will be updated and New ones will be created. If the Value in another Language does not have a name, then copies the name from the installed (First) language. If needed again '.$_['legend_gen_text_id'].' Attribute values - press first `'.$_['legend_clear_tables'].'`';
$_['legend_separ'] = 'Symbol';
$_['help_separ'] = 'One or more characters in a row to separate Attribute Text Values. Used for multi-attributes. In the new values, whitespace around the edges is removed';
$_['legend_chunk'] = 'One by one:';
$_['help_chunk'] = 'Process sequentially by one Attribute.(Used to process a large number of Attributes)';
$_['legend_del_html_tag'] = 'del htmlTags:';
$_['help_del_html_tag'] = 'Attempts to remove HTML tags from Attribute Values';
$_['legend_lock_tabl'] = 'Lock tables:';
$_['help_lock_tabl'] = '!!! Experimental functionality. During data processing - lock DataBase tables. This helps speed up the processing, but conflicts between other database tables are possible. If an error occurs, disable. After selection - click `Save` module settings';
$_['legend_block_operac'] = 'Open/Close block of operations';
$_['help_block_operac'] = 'Operations on the formation of Attribute Values and Tables belonging to them';
$_['legend_copy_tables'] = 'Overwrite data';
$_['help_copy_tables'] = 'Overwrite data from tables module `'.$_['p_mod'].'` to table `product_attribute`';
$_['text_succ_copy_tables'] = 'Overwritten';
$_['legend_symbol_copy_tables'] = 'Symbol:';
$_['help_symbol_copy_tables'] = 'The symbol between the Attribute Values, if the Attribute will have more than one Value';
$_['error_symbol_copy_tables'] = 'Sign not specified!';
$_['legend_lang_id_default'] = 'Start language:';
$_['help_lang_id_default'] = 'Language to be used in the First place for processing Attribute Values. Recommendation for `multi-values` - Choose a language that is guaranteed to have Attribute values';
$_['legend_del_empty_text'] = 'Ignore Empty:';
$_['help_del_empty_text'] = 'Ignore (skip) Attributes without Values';
//dump
$_['legend_dump_tabl'] = 'Operations with tables';
$_['legend_dump_tabl_ats'] = 'Module tables';
$_['legend_dump_tabl_pa'] = 'Opencart table `product_attribute`';
$_['help_update'] = '(The date is current at the time of page refresh)';
$_['legend_re_end_dump'] = 'Roll back';
$_['help_re_end_dump'] = 'Roll back the last operation in the `product_attribute` table to a date: %s '.$_['help_update'];
$_['legend_dump_create'] = 'Create dump';
$_['legend_dump_re'] = 'Return dump';
$_['help_dump_ats_create'] = 'Backing up module tables';
$_['help_dump_pa_create'] = 'Backing up the `product_attribute` table';
$_['help_dump_ats_re'] = 'Return a dump to the module tables on a date: %s '.$_['help_update'];
$_['help_dump_pa_re'] = 'Return a dump to the `product_attribute` table for a date: %s '.$_['help_update'];
$_['popup_dump_operac'] = 'Confirm operation/action';
$_['succ_dump_operac'] = 'Operation was successful';

$_['legend_attribute_group'] = 'Attribute group:';
$_['legend_attribute'] = 'Attribute:';
$_['legend_text'] = 'Attribute Value:';
//. If you enter a character <b>%</b> - will show a list
$_['help_autocomplete'] = '(Autocompletion)';

//settings Product Site
$_['legend_setting_site'] = 'Settings for the Product Card on the site';
$_['legend_delit'] = 'New delimiter:';
$_['help_delit'] = 'Specify in the field - through which `New delimiter`, to separate Attribute Values. You can also use HTML tags, including line breaks. If not specified, then apply `'.$_['legend_separ'].'`';
$_['legend_delit_attribs'] = 'for Attributes:';
$_['help_delit_attribs'] = 'In the field, specify ID-attributes separated by commas or semicolons (example: 5;18;25), for which the `New delimiter` in Attribute Values will be applied. If the field is left blank, the New Divisor will be applied to all Attribute Values, where present';
$_['legend_ignor_attrib'] = 'Ignore Attributes:';
$_['help_ignor_attrib'] = 'Do not show the listed Attributes in the `Characteristics` block. In the field, specify attribute IDs separated by commas or semicolons (example: 5;18;25)';
$_['legend_incl_img'] = 'Image:';
$_['help_incl_img'] = 'Attach an image (if any) to Attribute Value.';
$_['legend_img_wh'] = 'Size image в px -';
$_['help_img_wh'] = 'Specify a number, what size the image will be (if any) for the Attribute Value.';
$_['legend_cls_img'] = 'class image:';
$_['help_cls_img'] = 'Specify the class name for style the image Attribute Values.';

//settings Product Admin
$_['legend_setting_admin_prod'] = 'Settings for the Admin Product Card';
$_['legend_tab_attrib_action'] = 'tab.attrib.action:';
$_['help_tab_attrib_action'] = 'When opening the Product Card of the Admin Panel, first show the Attributes (Characteristics) tab';

//settings admin
$_['legend_setting_admin'] = 'Settings for admin panel of module';
$_['legend_click_select'] = 'Click select:';
$_['help_click_select'] = 'Open the list of parameters by clicking';
$_['legend_limit_param'] = 'Quant. of parameters:';
$_['help_limit_param'] = 'Number of options in the dropdown list';
$_['legend_count_page'] = 'Items per page:';
$_['help_count_page'] = 'Number of Values displayed per page (Attribute Edit)';
$_['legend_page2top'] = 'page2top:';
$_['help_page2top'] = 'Show pagination block at the top of the page (Attribute Edit)';
$_['legend_yes_statist'] = 'Statistics:';
$_['help_yes_statist'] = 'Show Product Quantity in Attributes';
$_['legend_translate'] = 'Translate';
$_['help_translate'] = '!!! Experimental functionality. When editing the Value of an attribute, when clicking on its Flag, do a text translation';
$_['legend_lang_init_id'] = '[a-z]';
$_['help_lang_init_id'] = 'What language is the text supposed to be translated from';
$_['legend_optimiz_tables'] = 'OPTIMIZ.TABLES:';
$_['help_optimiz_tables'] = 'At the end of data processing - Optimize module tables. (May increase data processing time in Admin panel)';/*The table type must be `MyISAM`, otherwise do not enable Optimization.*/
$_['legend_button_optimiz_tables'] = 'OPTIMIZE TABLES';
$_['help_button_optimiz_tables'] = 'Optimize module tables.';/* The table type must be `MyISAM`, otherwise don`t do Optimization.*/

//settings scan
$_['legend_setting_scan'] = 'Settings Cron';
$_['legend_scan_status'] = 'Cron status:';
$_['help_scan_status'] = 'Allow processing by cron scheduler';
$_['legend_scan_tabl'] = 'Data for Cron:';
$_['help_scan_tabl'] = 'Use Attributes to scan';
$_['text_scan_tabl_module'] = 'from module settings';
$_['text_scan_tabl_pa'] = 'tabl. `product_attribute`';
$_['legend_scan_link_file_wget'] = 'Link Wget:';
$_['help_scan_link_file_wget'] = 'Wget cron scheduler link';
$_['legend_scan_link_file_bin'] = 'Link PHP-bin:';
$_['help_scan_link_file_bin'] = 'Link to cron scheduler by PHP-bin';
$_['legend_scan_cron_wget'] = 'Cron-Wget:';
$_['help_scan_cron_wget'] = 'Will run Cron on Wget';
$_['legend_scan_secret_key'] = 'Secret key:';
$_['help_scan_secret_key'] = 'Key/Password that allows scanning';
$_['legend_scan_view_log'] = 'View logs';
$_['text_scan_modal_head'] = 'Scan logs';
$_['clear_scan_view_log'] = 'Clear logs';
$_['count_scan_view_log'] = 'Number of lines:';
$_['recommended_clean'] = 'recommended to clean';
$_['file_empty'] = 'File is empty';
$_['text_succ_clear'] = 'Cleared';

//gather
$_['legend_name'] = $_['tab_gather'];
$_['help_clear_sort'] = 'Clear sort';
$_['legend_gather_name'] = 'Set Name';
$_['error_attribute_text_all'] = ' Check Attribute Values!';
$_['error_attribute_text_doubles'] = 'There are duplicate Attributes!';
$_['error_attribute_text_no'] = 'Not selected Attribute value!';
$_['error_no_attribute'] = 'Not specified Attributes!';
$_['error_no_gather_name'] = 'The name of the Set is not filled!';
$_['error_yes_gather_name'] = 'Set name already exists!';
$_['error_correct_dani'] = 'Incorrect data!';
//add_new_gather
$_['button_add_new_gather'] = 'Create a new Attribute Set from the list of Attributes given below';
$_['text_succ_add_new_gather'] = 'Created a new Attribute Set';
$_['error_no_gather'] = 'No Attribute Set selected!';

//edit_products
$_['legend_filter'] = 'Product Selection';
$_['legend_category'] = 'Category:';
$_['legend_manufacturer'] = 'Manufacturer:';
$_['legend_product_name'] = 'Product Name:';
$_['text_list_product'] = 'Product List';
$_['help_list_product'] = 'View Product List';
$_['text_count_result'] = 'Product quantity selected:';
$_['text_no_data'] = 'No data';
$_['legend_choose_gather'] = $_['tab_gather'];
$_['button_add_gather'] = 'Add Attribute Set to List';
$_['button_add_gather_prod'] = 'Add Attribute Set to selected Products';
$_['button_add_attrib_prod'] = 'Add Attributes to selected Products';
$_['button_add_new_value'] = 'Create a new Attribute Value';
$_['button_clear_poles'] = 'Clear All Attributes';
$_['button_del_prod_attrib'] = 'Delete All Attributes for selected products';
$_['popup_del_prod_attrib'] = 'Delete All Attributes for selected products?<br /><br /><b>If there is an Attribute / Value in the `Product selection`, then it removes only these selected</b>';
$_['text_succ_add'] = 'Add';
$_['text_succ_dell'] = 'Removed';
$_['legend_status'] = 'Product Status:';
$_['legend_stock_status_id'] = 'Stock status:';
$_['legend_main_store'] = 'Main store';
$_['legend_stores'] = 'Stores:';
$_['legend_dimension'] = 'Dimensions (L x W x H):';
$_['legend_length_class_id'] = 'Unit:';
$_['legend_length'] = 'Length:';
$_['legend_width'] = 'Width:';
$_['legend_height'] = 'Height:';
$_['legend_weight_class_id'] = 'Weight unit:';
$_['help_accurate_data'] = 'enter accurate data';
$_['legend_start'] = 'Start';
$_['legend_end'] = 'Ending';
$_['legend_from'] = 'from';
$_['legend_to'] = 'to';
$_['legend_option'] = 'Option:';
$_['legend_option_value'] = 'Option Value:';
$_['legend_date_added'] = 'Date of New Product:';
$_['legend_date_modified'] = 'Date Modified Product:';
$_['legend_date_available'] = 'Date Available Product <i style="font-size:80%; font-weight:400;">(in Prod.Card)</i>:';
$_['help_format_date'] = 'Date format: YYYY-MM-DD';

//create_values
$_['help_create_values'] = 'Create additional Values for the specified Attribute';
$_['create_values_pole'] = array(
    'model' => 'Model',
    'location' => 'Location',
    'quantity' => 'Quantity',
    'stock_status_id' => 'Stock status',
    'shipping' => 'Shipping required',
    'date_available' => 'Date available',
    'weight' => 'Weight',
    'weight_class_id' => 'Unit. weight',
    'length' => 'Length',
    'width' => 'width',
    'height' => 'height',
    'dimension' => 'Dimensions (L x W x H)',
    'length_class_id' => 'Unit. length',
    'width_class_id' => 'Unit. width',
    'height_class_id' => 'Unit. height',
    'dimension_class_id' => 'Unit. length',
    'no_data' => 'No data',
    'no_table' => 'Table is not selected',
    'no_pole' => 'Field not selected',
    'no_separ' => 'No `Symbol` specified in `General` tab to separate Categories',
);
$_['create_values_data'] = array(
    'table' => 'Table',
    'pole' => 'Field',
    'where' => 'add. Field',
    'data_table' => 'DATA from table',
);
$_['warning_no_select'] = 'Not selected';

//merging_attribute
$_['help_merging_attribute'] = 'Merger';
$_['legend_main_text'] = 'Main name';
$_['error_main_text'] = 'Not selected `Main name`';
$_['legend_choice_text'] = 'In attribute values';
$_['legend_choice_attribute'] = 'Attributes';
$_['legend_choice_attribute_group'] = 'Attribute groups';

//edit_values
$_['text_view_to_attrib'] = 'View attribute Values';
$_['legend_search'] = 'Search:';
$_['legend_replace'] = 'Replaced by:';
$_['button_replace'] = 'Replace';
$_['text_in_values'] = 'In values:';
$_['help_in_values'] = 'If the `Search` field is left empty, then it will add to the end of the Value of the attribute what is in the `Replace` field; if it is the other way around, it will delete what is in the `Search` field. If the `Search` field changes the frame color, then there is a space at the beginning of the line';
$_['help_search_codes'] = 'Apply encoding for special characters in the field `Search`';
$_['button_clear_all'] = 'Clear all input fields';

//setting_poles
$_['legend_setting_poles'] = 'Integration with other modules';
$_['help_setting_poles'] = 'The hints indicate which modules it works with. If this module is not installed - do not enable!';
$_['legend_fix_attrtool'] = 'fix attrtool';
$_['help_fix_attrtool'] = 'Module integration `Attribute Tooltip` | `AO Tooltips`. !!!Be careful including this daw. When remove this module, do not forget to disable the daw';
$_['legend_fix_fv_link_atrprod'] = 'Linking';
$_['help_fix_fv_link_atrprod'] = 'Integration with module `FilterVier_SEO`. Display in the `Product Card` Values of attributes as links to the filtering page - Linking';
$_['legend_only_link_hl'] = 'only Land.pages';
$_['help_only_link_hl'] = 'Show links only for Landing Pages `FilterVier_SEO`';
$_['legend_cls_link'] = 'class link';
$_['help_cls_link'] = 'style class for link';
$_['legend_multi_attrib'] = 'multi-attrib';
$_['help_multi_attrib'] = 'Select multiple Attributes for linking. Requires installation of an additional modifier - `attribute_text_select_fix_multi_attrib`';
$_['legend_prevent_link'] = 'Block link';
$_['help_prevent_link'] = 'Block link when selecting `multi-attrib`';
$_['legend_absolute_btn_link'] = 'Fixed button';
$_['help_absolute_btn_link'] = 'Fixed button at the top of the Attributes when selecting `multi-attrib`';
$_['legend_btn_bottom'] = 'Button bottom';
$_['help_btn_bottom'] = 'The bottom position of the button in the Characteristics block';
$_['legend_button_link'] = 'Button style';
$_['help_button_link'] = 'Connect button style or create your own and connect. Files are located in a folder along the path /catalog/view/theme/default/stylesheet/attribute_text_select/button_link/';

//suss
$_['text_succ_record'] = 'Recorded';
$_['text_succ_update'] = 'Data updated';
$_['text_succ_remove'] = 'Removed';

//popup
$_['text_popup'] = 'You go to another tab.<br />Save data?';
$_['text_saved'] = 'Saved';
$_['text_remove'] = 'Remove?';
$_['text_go_to_attrib'] = 'Go to Attributes';
$_['text_go_to_group_attrib'] = 'Go to Attribute Groups';
$_['text_go_to_products'] = 'Go to Products';

// Text
$_['text_module'] = 'Modules';
$_['text_success'] = 'Success: You have modified module!';
$_['text_edit'] = 'Editing module';
$_['text_home'] = 'Home';
$_['text_yes'] = 'Yes';
$_['text_no'] = 'No';
$_['text_left'] = 'Left';
$_['text_right'] = 'Right';
$_['text_center'] = 'Centered';
$_['text_full_width'] = 'Full width';
$_['text_clear'] = 'Clear';
$_['text_close_success'] = 'Close a window';
$_['text_warn_text_id'] = ' anew? Attention - Values Overwrite !!!';
$_['text_unknown'] = 'unknown';

//button
$_['button_save'] = 'Save';
$_['button_remove'] = 'Remove';
$_['button_delete'] = 'Delete selected';
$_['button_cancel'] = 'Cancel';
$_['button_apply'] = 'Apply';
$_['button_edit'] = 'Edit';
$_['button_yes'] = 'Yes';
$_['button_no'] = 'No';
$_['button_copy'] = 'Copy';
$_['button_add'] = 'Add';
$_['button_lic'] = 'Activate';
$_['button_get_key'] = 'Request';
$_['button_reset'] = 'Reset';

//help_button
$_['button_help_apply'] = 'Save and stay on page';
$_['button_help_save'] = 'Save and exit';
$_['button_help_exit'] = 'Exit';

// Entry
$_['entry_status'] = 'Status:';
$_['entry_help_status'] = 'Enable/Disable Module. If the status is disabled, then Attribute Values from the standard table are displayed `product_attribute` and in admin attributes they are NOT shown!!!';

//Warning
$_['warning_no_attribs'] = 'Attributes not selected';
$_['warning_log_attribs'] = 'goto logs of Operations';

// Error
$_['error_permission'] = 'Warning: You do not have permission to modify module!';
//rezerv
$_['text_permission'] = 'Warning: You do not have permission to modify module!';
$_['text_not_found'] = 'Page not found!';

//ohters
$_['text_avtor'] = 'See module update, as well as other developments of the author Vier: ';
$_['text_lic'] = 'Enter license key:';
$_['text_get_key'] = 'Activate License Key:';
$_['text_zapis'] = 'Write';
$_['err_time_out'] = 'Limit is exceeded.';
$_['err_no_domen'] = 'No data.';
$_['err_bag_domen'] = 'ERROR.';
$_['err_no_prod'] = 'ERROR product.';
$_['err_error'] = 'The request failed.';
$_['visit_mail'] = 'Request sent for processing. Contact the developer: %s (In the letter Indicate your domain, order number and where you purchased the module)';
$_['text_inform_module'] = 'Module information';

?>