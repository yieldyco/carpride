<?php
 class ModelExtensionModuleSearchSuggestion extends Model{public function install(){$this->load->model('design/layout');$a4186bcddc7f3499184ec0bfb15c59065=$this->model_design_layout->getLayouts();foreach($a4186bcddc7f3499184ec0bfb15c59065 as $a53ab28d681403e3341138f0f37584a52){$this->db->query("INSERT INTO ".DB_PREFIX."layout_module SET layout_id = '".(int)$a53ab28d681403e3341138f0f37584a52['layout_id']."', code = 'search_suggestion', position = 'content_top', sort_order = '0'");}}public function getDefaultOptions(){return array('element'=>"#search input[name='search']",'types_order'=>array('history'=>array('sort'=>0),'manufacturer'=>array('sort'=>1),'category'=>array('sort'=>2),'category_filter'=>array('sort'=>3),'product'=>array('sort'=>4),'article'=>array('sort'=>5),'information'=>array('sort'=>6),),'width'=>"100%",'color_scheme'=>"#1cbaf7",'css'=>' 
 
.search-wrapper .dropdown-menu {
	position: absolute;
	top: 100%;
	left: 0;
	z-index: 1000;
	display: none;
	float: left;
	min-width: 300px;
	padding: 8px 0 0;
	margin: 2px 0 0;
	font-size: 13px;
	text-align: left;
	list-style: none;
	background-color: #fff;
	-webkit-box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
	box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
	border: 1px solid #e0e0e0;
	border-radius: 6px;
	-webkit-background-clip: padding-box;
	background-clip: padding-box;
}

.search-wrapper .dropdown-menu.pull-right {
	right: 0;
	left: auto;
}

.search-wrapper .dropdown-menu .divider {
	height: 1px;
	margin: 9px 0;
	overflow: hidden;
	background-color: #f0f0f0;
}

.search-wrapper .dropdown-menu > li > a,
.search-wrapper .dropdown-menu li.disabled {
	display: block;
	padding: 8px 12px;
	clear: both;
	font-weight: normal;
	line-height: 1.42857143;
	color: #333;
	white-space: unset;
	text-decoration: none;
	transition: background-color 0.2s ease;
	background-image: none !important;
}

.search-wrapper .dropdown-menu li.inline a {
	border-radius: 5px;
	padding: 6px 10px;
	margin-bottom: 5px;
	background-color: #f5f5f5;
	color: #333;
	transition: all 0.2s ease;
	border: 1px solid transparent;
	background-image: none !important;
}

.search-wrapper .dropdown-menu li.inline a:hover,
.search-wrapper .dropdown-menu li.inline a:focus {
	background-color: #fff !important;
	border-color: var(--search-accent-color);
	color: var(--search-accent-color) !important;
	background-image: none !important;
}

.search-wrapper .dropdown-menu li.more a {
	padding: 0;
	background-color: var(--search-accent-color);
	border-radius: 5px;
	color: #fff;
	transition: all 0.2s ease;
	background-image: none !important;
}

.search-wrapper .dropdown-menu li.more a:hover {
	background-color: var(--search-accent-color) !important;
	opacity: 0.85;
	transform: translateY(-1px);
	box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
	background-image: none !important;
	color: #fff !important;
}

.search-wrapper .dropdown-menu > li > a:hover,
.search-wrapper .dropdown-menu > li > a:focus {
	color: #262626 !important;
	text-decoration: none;
	background-color: var(--search-hover-bg) !important;
	background-image: none !important;
}

.search-wrapper .dropdown-menu > .active > a,
.search-wrapper .dropdown-menu > .active > a:hover,
.search-wrapper .dropdown-menu > .active > a:focus {
	color: #fff !important;
	text-decoration: none;
	background-color: var(--search-accent-color) !important;
	background-image: none !important;
	outline: 0;
}

.search-wrapper .dropdown-menu > .disabled > a,
.search-wrapper .dropdown-menu > .disabled > a:hover,
.search-wrapper .dropdown-menu > .disabled > a:focus {
	color: #999;
}

.search-wrapper .dropdown-menu > .disabled > a:hover,
.search-wrapper .dropdown-menu > .disabled > a:focus {
	text-decoration: none;
	cursor: not-allowed;
	background-color: transparent;
	background-image: none;
	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}

.search-wrapper .dropdown-menu { 
	max-width: 100%;
	overflow: hidden auto;
	max-height: 60vh;
}

.search-wrapper .dropdown-menu::-webkit-scrollbar-track {
	background-color: transparent;
}

.search-wrapper .dropdown-menu::-webkit-scrollbar {
	width: 5px;
	background-color: #fff;
}

.search-wrapper .dropdown-menu::-webkit-scrollbar-thumb {
	background-color: rgba(0, 0, 0, 0.15);
	border-radius: 10px;
}

.search-wrapper .dropdown-menu::-webkit-scrollbar-thumb:hover {
	background-color: rgba(0, 0, 0, 0.25);
}

.search-wrapper .dropdown-menu li {
	list-style-image: none !important;
	clear: both;
}

.search-wrapper .dropdown-menu li:not(.disabled, .inline, .more) {
	border-bottom: 1px solid #f5f5f5;
}

.search-wrapper .dropdown-menu li:not(.disabled, .inline, .more):last-child {
	border-bottom: none;
}

.search-wrapper .dropdown-menu li.inline { 
	display: inline-block;
	margin-left: 5px;
	vertical-align: top;
}

.search-wrapper .dropdown-menu li.inline .search-suggestion{ 
	text-align: center;
}

.search-wrapper .dropdown-menu li .title {
	font-size: 1em;
	text-transform: none;
	line-height: normal;
	font-weight: 500;
	color: #333;
}

.search-wrapper .dropdown-menu li.disabled .title {
	width: fit-content;
	padding-bottom: 5px;
	border-bottom: 2px solid var(--search-accent-color);
	font-size: 1.1em;
	font-weight: 600;
	color: #333;
	margin-bottom: 8px;
}

.search-suggestion {
	overflow: hidden;
	width: 100%;
	display: flex;
	gap: 12px;
}

.search-suggestion .center {
	flex-grow: 1;
	min-width: 0;
}

li:not(.inline, .more) .search-suggestion .center > div {
	margin-bottom: 4px;
}

.search-suggestion .left, 
.search-suggestion .right {
	align-self: center;
	text-align: center;
}

.search-suggestion .label {
	font-weight: normal;
	color: #999;
	padding-left: 0;
	padding-right: 5px;
	font-size: 0.9em;
}

.search-suggestion .image img {
	border-radius: 4px;
	transition: opacity 0.2s ease;
}

.search-suggestion .image img:hover {
	opacity: 0.85;
}

.search-suggestion .price-old {
	text-decoration: none;
	display: block;
	margin-right: 2px;
	color: #999;
	position: relative;
	font-weight: normal;
	font-size: 0.85em;
}

.search-suggestion .price-old:before {
	content: "";
	border-bottom: 1px solid #999;
	position: absolute;
	width: 100%;
	height: 50%;
	transform: rotate(-10deg);
}

.search-suggestion .price-new {
	display: block;
	color: #ff2e2e;
	font-weight: 600;
	font-size: 1.05em;
}

.search-suggestion .price-base {
	color: #333;
	font-weight: 600;
	font-size: 1.05em;
}

.search-suggestion .more {
	line-height: 36px;
	text-align: center;
	font-size: 1.05em;
	color: white;
	font-weight: 500;
	border-radius: 5px;
	transition: all 0.2s ease;
}

.search-suggestion .more:hover {
	opacity: 0.85;
	transform: translateY(-1px);
	box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
}

.search-suggestion .out-stock .value {
	color: white;
	background-color: #ff2e2e;
	width: fit-content;
	padding: 2px 8px;
	border-radius: 3px;
	font-size: 0.85em;
	font-weight: 600;
}

.search-suggestion .in-stock .value {
	color: white;
	background-color: #00c853;
	width: fit-content;
	padding: 2px 8px;
	border-radius: 3px;
	font-size: 0.85em;
	font-weight: 600;
}

@media (max-width: 768px) {
	.search-wrapper .dropdown-menu {
		min-width: 280px;
		max-height: 70vh;
	}
	
	.search-suggestion {
		gap: 10px;
	}
}

/* Voice search button styles */
.search-wrapper {
  position: relative;
}
.search-wrapper.ss-voice-search-enabled input[type="text"] {
  padding-left:  30px !important;
}
.ss-voice-search-button {
  position: absolute;
  top: 50%;
  left: 8px;
  z-index: 5;
  transform: translateY(-50%);
  border: none;
  background: transparent;
  padding: 0;
  margin: 0;
  cursor: pointer;
  line-height: 1;
  display: flex;
  align-items: center;
  justify-content: center;
}
@media (max-width: 767px) {
  .ss-voice-search-button {
    /*top: 35px;
    left: 20px;*/
  }
}
.ss-voice-search-button svg {
  width: 22px;
  height: 22px;
  fill: #888;
}

.ss-voice-search-button:hover svg {
  fill: #333;
}

.ss-voice-search-button.ss-voice-active svg {
  fill: #d9534f;
}
','product'=>array('status'=>1,'title'=>array(),'titles'=>array('en-gb'=>'Products','ru-ru'=>'Товары','uk-ua'=>'Товари'),'order'=>'name','order_dir'=>'asc','logic'=>'and','fix_keyboard_layout'=>1,'fix_transliteration'=>0,'limit'=>7,'more'=>1,'search_by'=>array('name'=>1,'tags'=>0,'description'=>0),'fields'=>array('image'=>array('sort'=>0,'show'=>1,'width'=>60,'height'=>60,'column'=>'left','location'=>'newline','css'=>''),'name'=>array('sort'=>1,'show'=>1,'column'=>'center','location'=>'newline','css'=>'font-weight: bold;
text-decoration: none;
margin-bottom: 3px;'),'price'=>array('sort'=>2,'show'=>1,'show_field_name'=>0,'column'=>'right','location'=>'newline','css'=>'font-size: 1.2em;
font-weight: 700;
letter-spacing: 1px;
white-space: nowrap;'),'manufacturer'=>array('sort'=>3,'show_field_name'=>1,'column'=>'center','location'=>'inline'),'model'=>array('sort'=>4,'show'=>1,'show_field_name'=>1,'column'=>'center','location'=>'inline'),'sku'=>array('sort'=>5,'show_field_name'=>1,'column'=>'center','location'=>'inline'),'upc'=>array('sort'=>6,'show_field_name'=>1,'column'=>'center','location'=>'inline'),'ean'=>array('sort'=>7,'show_field_name'=>1,'column'=>'center','location'=>'inline'),'jan'=>array('sort'=>8,'show_field_name'=>1,'column'=>'center','location'=>'inline'),'isbn'=>array('sort'=>9,'show_field_name'=>1,'column'=>'center','location'=>'inline'),'mpn'=>array('sort'=>10,'show_field_name'=>1,'column'=>'center','location'=>'inline'),'stock'=>array('sort'=>11,'show_field_name'=>1,'column'=>'center','location'=>'newline'),'quantity'=>array('sort'=>11,'show_field_name'=>1,'column'=>'center','location'=>'newline'),'description'=>array('sort'=>12,'cut'=>50,'column'=>'center','location'=>'newline','css'=>''),'attributes'=>array('sort'=>13,'cut'=>50,'separator'=>' / ','show_field_name'=>1,'column'=>'center','location'=>'newline',),'rating'=>array('sort'=>14,'show'=>1,'show_field_name'=>1,'column'=>'center','location'=>'newline','show_empty'=>0,),'stock'=>array('sort'=>15,'show'=>1,'show_field_name'=>0,'column'=>'center','location'=>'newline',),'cart'=>array('sort'=>16,'show_field_name'=>0,'column'=>'center','location'=>'newline','code'=>'<button type="button" onclick="ss_cart_add(\'product_id\', \'minimum\');" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">button_cart</span></button>'))),'history'=>array('status'=>0,'title'=>array(),'titles'=>array('en-gb'=>'','ru-ru'=>'','uk-ua'=>''),'source'=>'module','order'=>'count','order_dir'=>'desc','limit'=>6,'inline'=>1,'fields'=>array('name'=>array('sort'=>1,'show'=>1,'location'=>'newline','column'=>'center','css'=>''),),),'category_filter'=>array('status'=>1,'title'=>array(),'titles'=>array('en-gb'=>'Category filter','ru-ru'=>'Фильтр категорий','uk-ua'=>'Фільтр категорій'),'order'=>'count','order_dir'=>'desc','limit'=>6,'count'=>1,'inline'=>1,'inline_tooltip'=>1,'fields'=>array('image'=>array('sort'=>0,'show'=>1,'width'=>60,'height'=>60,'column'=>'left','location'=>'newline','css'=>''),'name'=>array('sort'=>1,'show'=>0,'location'=>'newline','css'=>'font-weight: bold;
text-decoration: none;'),'description'=>array('sort'=>2,'cut'=>50,'location'=>'newline',),),),'category'=>array('status'=>1,'title'=>array(),'titles'=>array('en-gb'=>'Categories','ru-ru'=>'Категории','uk-ua'=>'Категорії'),'order'=>'relevance','order_dir'=>'asc','logic'=>'and','limit'=>3,'fix_keyboard_layout'=>1,'fix_transliteration'=>0,'inline'=>1,'inline_tooltip'=>1,'search_by'=>array('name'=>array('status'=>1,'weight'=>20,),'description'=>array('status'=>0,'weight'=>10,),),'fields'=>array('image'=>array('sort'=>0,'show'=>1,'width'=>60,'height'=>60,'column'=>'left','location'=>'newline','css'=>''),'name'=>array('sort'=>1,'show'=>0,'location'=>'newline','css'=>'font-weight: bold;
text-decoration: none;'),'description'=>array('sort'=>2,'cut'=>50,'column'=>'center','location'=>'newline',),),),'manufacturer'=>array('status'=>1,'title'=>array(),'titles'=>array('en-gb'=>'Manufacturers','ru-ru'=>'Производители','uk-ua'=>'Виробники'),'order'=>'name','order_dir'=>'asc','logic'=>'or','limit'=>3,'fix_keyboard_layout'=>1,'fix_transliteration'=>0,'inline'=>1,'inline_tooltip'=>1,'search_by'=>array('name'=>1,),'fields'=>array('image'=>array('sort'=>0,'show'=>1,'width'=>60,'height'=>60,'column'=>'left','location'=>'newline','css'=>''),'name'=>array('sort'=>1,'show'=>0,'location'=>'newline','css'=>'font-weight: bold;
text-decoration: none;'),),),'article'=>array('status'=>0,'title'=>array(),'titles'=>array('en-gb'=>'Blog articles','ru-ru'=>'Статьи блога','uk-ua'=>'Статті блогу'),'order'=>'relevance','order_dir'=>'asc','logic'=>'and','limit'=>3,'fix_keyboard_layout'=>1,'fix_transliteration'=>0,'inline'=>0,'inline_tooltip'=>1,'search_by'=>array('name'=>array('status'=>1,'weight'=>20,),'description'=>array('status'=>1,'weight'=>10,),),'fields'=>array('image'=>array('sort'=>0,'show'=>1,'width'=>60,'height'=>60,'column'=>'left','location'=>'newline','css'=>''),'name'=>array('sort'=>1,'show'=>1,'location'=>'newline','css'=>'font-weight: bold;
text-decoration: none;'),'description'=>array('sort'=>2,'cut'=>50,'column'=>'center','location'=>'newline',),),),'information'=>array('status'=>1,'title'=>array(),'titles'=>array('en-gb'=>'Information','ru-ru'=>'Информация','uk-ua'=>'Інформація'),'order'=>'title','order_dir'=>'asc','logic'=>'and','fix_keyboard_layout'=>1,'fix_transliteration'=>0,'limit'=>3,'inline'=>1,'inline_tooltip'=>1,'search_by'=>array('title'=>array('status'=>1,'weight'=>20,),'description'=>array('status'=>0,'weight'=>10,),),'fields'=>array('title'=>array('sort'=>1,'show'=>1,'column'=>'center','location'=>'newline','css'=>'font-weight: bold;
text-decoration: none;'),'description'=>array('sort'=>2,'cut'=>50,'column'=>'center','location'=>'newline','css'=>''),),),);}}
//author sv2109 (sv2109@gmail.com) license for 1 product copy granted for - ( carpride.com.ua,www.carpride.com.ua)
