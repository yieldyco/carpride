<?php

$this->default_code = 'en-gb';
//,'russian'
$this->compare_code['ru-ru'] = ['ru'];
//,'ukrainian' 
$this->compare_code['uk-ua'] = ['ua-ua','ua-uk','ua','uk'];
$this->lang_place['langs_placeholder'] = [
    'en-gb' => [
        'legend_name_filter' => 'Filter',
        'legend_mobile_btn' => 'Filter',
        'legend_mobile_close' => 'Close',
        'legend_attrb' => '',
        'legend_optv' => '',
        'legend_manufs' => 'Manufacturers',
        'legend_qnts' => 'Available',
        'legend_nows' => 'Latest',
        'legend_psp' => 'Discounted products',
        'legend_choice' => 'Your choice:',
        'legend_clear_choice' => 'Reset',
        'legend_goto_params' => 'Go to parameters',
        'legend_prs' => 'Price',
        'legend_thousands_sep' => '`',
        'legend_between_price' => '-',
        'legend_prc_start' => 'to',
        'legend_apply' => 'Apply',
        'legend_clears' => 'Clear',
        'legend_more' => 'Show more',
        'legend_hide' => 'Hide',
        'legend_delete_value' => 'Delete parameter',
        'legend_search_placeholder' => 'Search...',
        'legend_aj_bloc_txt' => 'Total:',
        'legend_aj_bloc_btn' => 'Show',
        'legend_load_btn_attrb' => 'More Characteristics',
        'legend_load_btn_optv' => 'More Options',
    ],
    'ru-ru' => [
        'legend_name_filter' => 'Фильтр товаров',
        'legend_mobile_btn' => 'Фильтр',
        'legend_mobile_close' => 'Закрыть',
        'legend_attrb' => '',
        'legend_optv' => '',
        'legend_manufs' => 'Производители',
        'legend_qnts' => 'В наличии',
        'legend_nows' => 'Новинки',
        'legend_psp' => 'Товары со скидкой',
        'legend_choice' => 'Ваш выбор:',
        'legend_clear_choice' => 'Сбросить',
        'legend_goto_params' => 'Перейти к параметрам',
        'legend_prs' => 'Цена',
        'legend_thousands_sep' => '`',
        'legend_between_price' => '-',
        'legend_prc_start' => 'до',
        'legend_apply' => 'Применить',
        'legend_clears' => 'Очистить',
        'legend_more' => 'Показать ещё',
        'legend_hide' => 'Скрыть',
        'legend_delete_value' => 'Удалить параметр',
        'legend_search_placeholder' => 'Найти...',
        'legend_aj_bloc_txt' => 'Найдено:',
        'legend_aj_bloc_btn' => 'Показать',
        'legend_load_btn_attrb' => 'Ещё Характеристики',
        'legend_load_btn_optv' => 'Ещё Опции',
    ],
    'uk-ua' => [
        'legend_name_filter' => 'Фільтр товарів',
        'legend_mobile_btn' => 'Фільтр',
        'legend_mobile_close' => 'Закрити',
        'legend_attrb' => '',
        'legend_optv' => '',
        'legend_manufs' => 'Виробники',
        'legend_qnts' => 'У наявності',
        'legend_nows' => 'Новинки',
        'legend_psp' => 'Товари зі знижкою',
        'legend_choice' => 'Ваш вибір:',
        'legend_clear_choice' => 'Зняти',
        'legend_goto_params' => 'Перейти до параметрів',
        'legend_prs' => 'Ціна',
        'legend_thousands_sep' => '`',
        'legend_between_price' => '-',
        'legend_prc_start' => 'до',
        'legend_apply' => 'Застосувати',
        'legend_clears' => 'Очистити',
        'legend_more' => 'Показати ще',
        'legend_hide' => 'Приховати',
        'legend_delete_value' => 'Видалити параметр',
        'legend_search_placeholder' => 'Знайти...',
        'legend_aj_bloc_txt' => 'Знайдено:',
        'legend_aj_bloc_btn' => 'Показати',
        'legend_load_btn_attrb' => 'Ще Характеристики',
        'legend_load_btn_optv' => 'Ще Опції',
    ],
];

$this->lang_place['meta_tag_placeholder'] = [
    'en-gb' => [
        'meta_title' => '[name] | [brand_title] [attrb_title] [optv_title] [special_title] [news_title]',
        'meta_description' => 'Buy [name] [brand_desc] [attrb_desc] [optv_desc] [special_desc] ➜ ☎ [shop_telephone]',
        'meta_h_head' => '[name]. [brand_h1] [attrb_h1] [optv_h1] [news_h1] [quant_h1] [special_h1]',
        'sep_between_param_val' => ', ',
        'sep_between_params' => ', ',
        'no_keywords' => 'and, the, not, for, brand',
        
        'category' => '<p><span style="font-size:16px">How to choose [name]?</span></p>
<p>If you have been asking yourself this question, then you have chosen our online store correctly.</p>
<p>For now, we have something to offer you.</p>
<ul>
[brand_dk][attrb_dk][optv_dk][special_dk]
</ul>
<p>[price_min_dk]</p>
<p>[count_dk]</p>
<p>You can also call us at [shop_telephone], and our managers will be happy to advise and select the best option for you.</p>
<p>Choosing products in our online store, you will always be sure of the quality of the purchased goods, and we will always be glad to see you again.</p>
<p>Always yours "<b>[shop_name]</b>"</p>',

        'manufacturer' => '<p>Only in our store are products <strong>[name]</strong> with such a large assortment.</p>
<p>For now, we have something to offer you.</p>
<ul>
[news_dk][attrb_dk][optv_dk][special_dk][quant_dk][price_dk]
</ul>
<p>[count_dk]</p>
<p>Choosing products in our online store, you will always be sure of the quality of the purchased goods, and we will always be glad to see you again.</p>
<p>Always yours "<b>[shop_name]</b>"</p>',

        'markers' => '----- title ----
[brand_title[ [manufs];]/brand_title]
[attrb_title[ [attrb];]/attrb_title]
[optv_title[ [optv];]/optv_title]
[price_title[ price: [prs];]/price_title]
[special_title[ [psp];]/special_title]
[news_title[ [nows]; ]/news_title]
[quant_title[ [qnts];]/quant_title]
[price_min_title[ from [prs_min]]/price_min_title]
[price_max_title[ to [prs_max]]/price_max_title]

----- description ----
[brand_desc[ [manufs];]/brand_desc]
[attrb_desc[ [attrb];]/attrb_desc]
[optv_desc[ [optv];]/optv_desc]
[price_desc[ price: [prs];]/price_desc]
[special_desc[ [psp];]/special_desc]
[news_desc[ [nows];]/news_desc]
[quant_desc[ [qnts];]/quant_desc]
[price_min_desc[ from [prs_min]]/price_min_desc]
[price_max_desc[ to [prs_max]]/price_max_desc]

----- h1 ----
[brand_h1[ [manufs],]/brand_h1]
[attrb_h1[ [attrb],]/attrb_h1]
[optv_h1[ [optv],]/optv_h1]
[price_h1[ Price: [prs],]/price_h1]
[special_h1[ You can always find with us [psp],]/special_h1]
[news_h1[ [nows],]/news_h1]
[quant_h1[ [qnts],]/quant_h1]
[price_min_h1[ from [prs_min]]/price_min_h1]
[price_max_h1[ to [prs_max]]/price_max_h1]

----- opisanie ----
[brand_dk[<li>Manufacturer [manufs];</li>]/brand_dk]
[attrb_dk[<li>[attrb];</li>]/attrb_dk]
[optv_dk[<li>[optv];</li>]/optv_dk]
[price_dk[<li>in the price range: [prs];</li>]/price_dk]
[special_dk[<li>[psp];</li>]/special_dk]
[news_dk[<li>[nows];</li>]/news_dk]
[quant_dk[<li>[qnts];</li> ]/quant_dk]

[price_min_dk[ Price from [prs_min]]/price_min_dk]
[price_max_dk[ to [prs_max]]/price_max_dk]

[count_dk[Please note that with this set of parameters, the quantity of this product <b>remainder [count]</b>. ]/count_dk]

[price_main[ price from [prs]. ]/price_main]
[page1[ - page № [page] ]/page1]

[price_min[ from [prs_min]]/price_min]
[price_max[ to [prs_max]]/price_max]',
    ],
    'ru-ru' => [
        'meta_title' => '[name] | [brand_title] [attrb_title] [optv_title] [special_title] [news_title]',
        'meta_description' => 'Купить [name] [brand_desc] [attrb_desc] [optv_desc] [special_desc] ➜ ☎ [shop_telephone]',
        'meta_h_head' => '[name]. [brand_h1] [attrb_h1] [optv_h1] [news_h1] [quant_h1] [special_h1]',
        'sep_between_param_val' => ', ',
        'sep_between_params' => ', ',
        'no_keywords' => 'наш, сам, магазин, Производител, цвет, объем, для',
        
        'category' => '<p><span style="font-size:16px">Как выбрать [name]?</span></p>
<p>Если Вы задавали себе такой вопрос, то Вы правильно выбрали наш интернет-магазин.</p>
<p>На данный момент у нас есть, что Вам предложить.</p>
<ul>
[brand_dk][attrb_dk][optv_dk][special_dk]
</ul>
<p>[price_min_dk]</p>
<p>[count_dk]</p>
<p>Так же Вы можете позвонить нам по телефону [shop_telephone], и наши менеджеры с удовольствием проконсультируют и подберут для Вас оптимальный вариант.</p>
<p>Выбирая продукцию в нашем интернет-магазине, Вы всегда будете уверены в качестве приобретенного товара, а мы всегда будем рады видеть Вас снова.</p>
<p>Всегда Ваш "<b>[shop_name]</b>"</p>',

        'manufacturer' => '<div><span style="font-size:16px">Как выбрать [name]?</span></div>
<div>Если Вы задавали себе такой вопрос, то Вы правильно выбрали наш интернет-магазин.</div>
<div>На данный момент у нас есть, что Вам предложить.</div>
<ul>
[brand_dk][attrb_dk][optv_dk][special_dk]
</ul>
<div>[count_dk]</div>
<div>Так же Вы можете позвонить нам по телефону [shop_telephone], и наши менеджеры с удовольствием проконсультируют и подберут для Вас оптимальный вариант.</div>
<div>Выбирая продукцию в нашем интернет-магазине, Вы всегда будете уверены в качестве приобретенного товара, а мы всегда будем рады видеть Вас снова.</div>
<div>Всегда Ваш "<b>[shop_name]</b>"</div>',

        'markers' => '----- title ----
[brand_title[ [manufs];]/brand_title]
[attrb_title[ [attrb];]/attrb_title]
[optv_title[ [optv];]/optv_title]
[price_title[ цена: [prs];]/price_title]
[special_title[ [psp];]/special_title]
[news_title[ [nows]; ]/news_title]
[quant_title[ [qnts];]/quant_title]
[price_min_title[ от [prs_min]]/price_min_title]
[price_max_title[ до [prs_max]]/price_max_title]

----- description ----
[brand_desc[ [manufs];]/brand_desc]
[attrb_desc[ [attrb];]/attrb_desc]
[optv_desc[ [optv];]/optv_desc]
[price_desc[ цена: [prs];]/price_desc]
[special_desc[ [psp];]/special_desc]
[news_desc[ [nows];]/news_desc]
[quant_desc[ [qnts];]/quant_desc]
[price_min_desc[ от [prs_min]]/price_min_desc]
[price_max_desc[ до [prs_max]]/price_max_desc]

----- h1 ----
[brand_h1[ [manufs],]/brand_h1]
[attrb_h1[ [attrb],]/attrb_h1]
[optv_h1[ [optv],]/optv_h1]
[price_h1[ Цена: [prs],]/price_h1]
[special_h1[ Вы всегда сможете найти у нас [psp],]/special_h1]
[news_h1[ [nows],]/news_h1]
[quant_h1[ [qnts],]/quant_h1]
[price_min_h1[ от [prs_min]]/price_min_h1]
[price_max_h1[ до [prs_max]]/price_max_h1]

----- opisanie ----
[brand_dk[<li>Производитель [manufs];</li>]/brand_dk]
[attrb_dk[<li>[attrb];</li>]/attrb_dk]
[optv_dk[<li>[optv];</li>]/optv_dk]
[price_dk[<li>в диапазоне цен: [prs];</li>]/price_dk]
[special_dk[<li>[psp];</li>]/special_dk]
[news_dk[<li>[nows];</li>]/news_dk]
[quant_dk[<li>[qnts];</li> ]/quant_dk]

[price_min_dk[ Цена от [prs_min]]/price_min_dk]
[price_max_dk[ до [prs_max]]/price_max_dk]

[count_dk[Обратите внимание, что с таким набором параметров,  количество данного товара <b>осталось  [count]</b>. ]/count_dk]

[price_main[ по цене от [prs]. ]/price_main]
[page1[ - страница № [page] ]/page1]

[price_min[ от [prs_min]]/price_min]
[price_max[ до [prs_max]]/price_max]',
    ],
    'uk-ua' => [
        'meta_title' => '[name] | [brand_title] [attrb_title] [optv_title] [special_title] [news_title]',
        'meta_description' => 'Купити [name] [brand_desc] [attrb_desc] [optv_desc] [special_desc] ➜ ☎ [shop_telephone]',
        'meta_h_head' => '[name]. [brand_h1] [attrb_h1] [optv_h1] [news_h1] [quant_h1] [special_h1]',
        'sep_between_param_val' => ', ',
        'sep_between_params' => ', ',
        'no_keywords' => 'наш, сам, магазин, виробник, колір, обсяг, для',
        
        'category' => '<p><span style="font-size:16px">Як обрати [name]?</span></p>
<p>Якщо Ви задавали собі таке питання, то Ви правильно вибрали наш інтернет-магазин.</p>
<p>На даний момент у нас є, що Вам запропонувати.</p>
<ul>
[brand_dk][attrb_dk][optv_dk][special_dk]
</ul>
<p>[price_min_dk]</p>
<p>[count_dk]</p>
<p>Також Ви можете зателефонувати нам по телефону [shop_telephone], і наші менеджери із задоволенням проконсультують і підберуть для Вас оптимальний варіант.</p>
<p>Обираючи продукцію в нашому інтернет-магазині, Ви завжди будете впевнені в якості придбаного товару, а ми завжди будемо раді бачити Вас знову.</p>
<p>Завжди Ваш "<b>[shop_name]</b>"</p>',

        'manufacturer' => '<p>Тільки в нашому магазині продукція <strong>[name]</strong> з таким великим асортиментом.</p>
<p>На даний момент у нас є, що Вам запропонувати.</p>
<ul>
[news_dk][attrb_dk][optv_dk][special_dk][quant_dk][price_dk]
</ul>
<p>[count_dk]</p>
<p>Обираючи продукцію в нашому інтернет-магазині, Ви завжди будете впевнені в якості придбаного товару, а ми завжди будемо раді бачити Вас знову.</p>
<p>Завжди Ваш "<b>[shop_name]</b>"</p>',

        'markers' => '----- title ----
[brand_title[ [manufs];]/brand_title]
[attrb_title[ [attrb];]/attrb_title]
[optv_title[ [optv];]/optv_title]
[price_title[ ціна: [prs];]/price_title]
[special_title[ [psp];]/special_title]
[news_title[ [nows]; ]/news_title]
[quant_title[ [qnts];]/quant_title]
[price_min_title[ від [prs_min]]/price_min_title]
[price_max_title[ до [prs_max]]/price_max_title]

----- description ----
[brand_desc[ [manufs];]/brand_desc]
[attrb_desc[ [attrb];]/attrb_desc]
[optv_desc[ [optv];]/optv_desc]
[price_desc[ ціна: [prs];]/price_desc]
[special_desc[ [psp];]/special_desc]
[news_desc[ [nows];]/news_desc]
[quant_desc[ [qnts];]/quant_desc]
[price_min_desc[ від [prs_min]]/price_min_desc]
[price_max_desc[ до [prs_max]]/price_max_desc]

----- h1 ----
[brand_h1[ [manufs],]/brand_h1]
[attrb_h1[ [attrb],]/attrb_h1]
[optv_h1[ [optv],]/optv_h1]
[price_h1[ Ціна: [prs],]/price_h1]
[special_h1[ Ви завжди зможете знайти у нас [psp],]/special_h1]
[news_h1[ [nows],]/news_h1]
[quant_h1[ [qnts],]/quant_h1]
[price_min_h1[ від [prs_min]]/price_min_h1]
[price_max_h1[ до [prs_max]]/price_max_h1]

----- opisanie ----
[brand_dk[<li>Виробник [manufs];</li>]/brand_dk]
[attrb_dk[<li>[attrb];</li>]/attrb_dk]
[optv_dk[<li>[optv];</li>]/optv_dk]
[price_dk[<li>у діапазоні цін: [prs];</li>]/price_dk]
[special_dk[<li>[psp];</li>]/special_dk]
[news_dk[<li>[nows];</li>]/news_dk]
[quant_dk[<li>[qnts];</li> ]/quant_dk]

[price_min_dk[ Ціна від [prs_min]]/price_min_dk]
[price_max_dk[ до [prs_max]]/price_max_dk]

[count_dk[Зверніть увагу, що з таким набором параметрів, кількість даного товару <b>залишилось [count]</b>. ]/count_dk]

[price_main[ по ціні від [prs]. ]/price_main]
[page1[ - сторінка № [page] ]/page1]

[price_min[ від [prs_min]]/price_min]
[price_max[ до [prs_max]]/price_max]',
    ],
];