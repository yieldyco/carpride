-- базовые URL магазина
UPDATE jtgd_setting
SET `value` = 'http://localhost/'
WHERE `key` = 'config_url';

UPDATE jtgd_setting
SET `value` = 'http://localhost/'
WHERE `key` = 'config_ssl';

-- отключаем принудительный https, если нужно
UPDATE jtgd_setting
SET `value` = '0'
WHERE `key` = 'config_secure';

-- правим префиксы asc_langmark_0
-- theme_oct_deals_data_osucsess attribute_text_select_setting theme_oct_deals_data
UPDATE jtgd_setting
SET `value` = REPLACE(`value`, 'carpride.com.ua', 'localhost')
WHERE `key` = 'asc_langmark_0';

-- таймзона
UPDATE jtgd_setting
SET `value` = 'Europe/Kiev'
WHERE `key` = 'config_timezone';

SELECT *
FROM jtgd_setting
WHERE `key` IN ("config_timezone", "config_url", "config_ssl", "config_secure", "asc_langmark_0");

{"multi":{"UA":{"name":"UA","prefix":"carpride.com.ua\/ua\/","hreflang":"uk","language_id":"2","prefix_main":"1","currency":"","store_id":"0","prefix_switcher":"1","prefix_switcher_stores":"0","hreflang_switcher":"1","hreflang_switcher_stores":"0","multi_sort":"1","main_prefix_status":"1","main_prefix_url":"","main_title":"\u041a\u0443\u043f\u0438\u0442\u0438 \u0437\u0430\u043f\u0447\u0430\u0441\u0442\u0438\u043d\u0438 \u043d\u0430 \u0430\u0432\u0442\u043e \u043d\u0435\u0434\u043e\u0440\u043e\u0433\u043e | \u0406\u043d\u0442\u0435\u0440\u043d\u0435\u0442 \u043c\u0430\u0433\u0430\u0437\u0438\u043d \u0430\u0432\u0442\u043e\u0437\u0430\u043f\u0447\u0430\u0441\u0442\u0438\u043d &quot;CarPride&quot;","main_description":"\u0410\u0432\u0442\u043e\u043c\u043e\u0431\u0456\u043b\u044c\u043d\u0456 \u0437\u0430\u043f\u0447\u0430\u0441\u0442\u0438\u043d\u0438 \u0443 \u041a\u0438\u0454\u0432\u0456, \u0421\u0443\u043c\u0430\u0445, \u0414\u043d\u0456\u043f\u0440\u0456, \u041e\u0434\u0435\u0441\u0456. \u26a1 \u041a\u0443\u043f\u0438\u0442\u0438 \u0437\u0430\u043f\u0447\u0430\u0441\u0442\u0438\u043d\u0438 \u043d\u0430 \u0430\u0432\u0442\u043e \u043d\u0435\u0434\u043e\u0440\u043e\u0433\u043e. \u26a1 \u0406\u043d\u0442\u0435\u0440\u043d\u0435\u0442 \u043c\u0430\u0433\u0430\u0437\u0438\u043d \u0430\u0432\u0442\u043e\u0437\u0430\u043f\u0447\u0430\u0441\u0442\u0438\u043d &quot;CarPride&quot; \u260e\ufe0f \u0422\u0435\u043b.: (066)-108-50-07, (050)-070-43-37","main_keywords":"","pagination_title":"\u0441\u0442\u043e\u0440\u0456\u043d\u043a\u0430"},"RU":{"name":"RU","prefix":"carpride.com.ua\/ru\/","hreflang":"ru","language_id":"1","prefix_main":"0","currency":"","store_id":"0","prefix_switcher":"1","prefix_switcher_stores":"0","hreflang_switcher":"1","hreflang_switcher_stores":"0","multi_sort":"2","main_prefix_status":"0","main_prefix_url":"","main_title":"\u041a\u0443\u043f\u0438\u0442\u044c \u0437\u0430\u043f\u0447\u0430\u0441\u0442\u0438 \u043d\u0430 \u0430\u0432\u0442\u043e \u043d\u0435\u0434\u043e\u0440\u043e\u0433\u043e | \u0418\u043d\u0442\u0435\u0440\u043d\u0435\u0442 \u043c\u0430\u0433\u0430\u0437\u0438\u043d \u0430\u0432\u0442\u043e\u0437\u0430\u043f\u0447\u0430\u0441\u0442\u0435\u0439 &quot;CarPride&quot;","main_description":"\u0410\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u044c\u043d\u044b\u0435 \u0437\u0430\u043f\u0447\u0430\u0441\u0442\u0438 \u0432 \u041a\u0438\u0435\u0432\u0435, \u0421\u0443\u043c\u0430\u0445, \u0414\u043d\u0435\u043f\u0440\u0435, \u041e\u0434\u0435\u0441\u0441\u0435. \u26a1 \u041a\u0443\u043f\u0438\u0442\u044c \u0437\u0430\u043f\u0447\u0430\u0441\u0442\u0438 \u043d\u0430 \u0430\u0432\u0442\u043e \u043d\u0435\u0434\u043e\u0440\u043e\u0433\u043e. \u26a1 \u0418\u043d\u0442\u0435\u0440\u043d\u0435\u0442 \u043c\u0430\u0433\u0430\u0437\u0438\u043d \u0430\u0432\u0442\u043e\u0437\u0430\u043f\u0447\u0430\u0441\u0442\u0435\u0439 &quot;CarPride&quot; \u260e\ufe0f \u0422\u0435\u043b.: (066)-108-50-07, (050)-070-43-37","main_keywords":"","pagination_title":"\u0441\u0442\u0440\u0430\u043d\u0438\u0446\u0430"}},"pagination":"1","seo_pagination":"0","url_close_slash":"0","pagination_prefix":"page","description_status":"1","desc_type":{"1":{"type_id":"1","title":"product\/category","vars":"description\r\n#categories\r\n#description2"},"2":{"type_id":"2","title":"product\/manufacturer_info","vars":"description"},"3":{"type_id":"3","title":"information\/information","vars":"description"}},"access":"1","hreflang_status":"1","xdefault_status":"1","hreflang_canonical":"0","currency_switch":"0","cache_diff":"0","use_link_status":"1","commonhome_status":"1","two_status":"1","redirect_new":"0","redirect_code":"301","ex_redirect_new_uri":"","ex_multilang_route":"api\/\r\ncommon\/simple_connector\r\nassets\r\ncaptcha\r\nmodule\/language","ex_multilang_uri":"=product\/live_options\r\n=product\/search\r\n=journal3\/product\r\npopup","ex_url_route":"api\/\r\ncommon\/simple_connector\r\nassets\r\ncaptcha\r\nmodule\/language","ex_url_uri":""}
