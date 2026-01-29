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

# отключить модуль поиск с вариантами v6.0
DELETE FROM jtgd_extension
WHERE `type` = 'module'
  AND `code` = 'search_suggestion';

DELETE FROM jtgd_setting
WHERE `code` = 'module_search_suggestion'
  AND `key` IN ('module_search_suggestion_options', 'module_search_suggestion_module', 'module_search_suggestion_status');


create table ready_products_csv
(
    sku            int  not null
         key,

    in_stock       int  null
)
    collate = utf8mb4_general_ci;

