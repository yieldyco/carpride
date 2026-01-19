<?php

$v_mod = '65.1';
$vers_mod = '3.0.'.$v_mod;
$p_mod = 'FilterVier_SEO';
$all_versi_mod = $p_mod.'_v.'.$vers_mod;
$_['title'] = $all_versi_mod;
$_['heading_title'] = '<b><img src="view/image/filter_vier/fv_logo.png" style="width:30px; height:30px; border:0;"><span style="color:blue; line-height: 30px;">'.$all_versi_mod.'</span></b>';
$info_module = 'site: PHP ';
if(defined('PHP_MAJOR_VERSION') && defined('PHP_MINOR_VERSION')) {$info_module .= PHP_MAJOR_VERSION.'.'.PHP_MINOR_VERSION;}else{$info_module .= '?';}
$info_module .= ', ionCube Loader v';
if(extension_loaded('ionCube Loader')) {if(function_exists('ioncube_loader_version')) {$info_module .= ioncube_loader_version();}else{$info_module .= ' unknown';}}else{$info_module .= ' ?';}
$_['heading_title'] .= ' <span data-toggle="tooltip" title="'.$info_module.'"><img src="view/image/filter_vier/helpis.png" style="border:0;width:12px;height:12px;"></span>';
