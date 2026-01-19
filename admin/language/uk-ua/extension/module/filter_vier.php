<?php 

if(is_file($file = DIR_LANGUAGE.'en-gb/extension/module/'.basename(__FILE__)) || is_file($file = DIR_LANGUAGE.'en-gb/module/'.basename(__FILE__))) {include_once($file);}