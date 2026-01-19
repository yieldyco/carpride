<?php
class ControllerExtensionModulePDREvent extends Controller {
/**
* Triggered after model/catalog/product/deleteProduct
* @param string $route
* @param array $args [0] => product_id
* @param mixed $output
*/
public function productDeleteAfter(&$route, &$args, &$output) {
if (empty($args) || !isset($args[0])) return;
$product_id = (int)$args[0];


// Get one parent category (first linked category)
$category_id = 0;
$q = $this->db->query("SELECT category_id FROM `" . DB_PREFIX . "product_to_category` WHERE product_id=" . (int)$product_id . " ORDER BY category_id ASC LIMIT 1");
if ($q->num_rows) {
$category_id = (int)$q->row['category_id'];
}
if (!$category_id) return; // No category, nothing to redirect to


// SEO keywords for product & category across stores/languages
$product_keywords = $this->db->query("SELECT store_id, language_id, keyword FROM `" . DB_PREFIX . "seo_url` WHERE query='product_id=" . (int)$product_id . "'");
$category_keywords = $this->db->query("SELECT store_id, language_id, keyword FROM `" . DB_PREFIX . "seo_url` WHERE query='category_id=" . (int)$category_id . "'");


if (!$product_keywords->num_rows || !$category_keywords->num_rows) return;


// Index category keywords by store+language
$cat_map = [];
foreach ($category_keywords->rows as $row) {
$cat_map[$row['store_id'] . ':' . $row['language_id']] = $row['keyword'];
}


foreach ($product_keywords->rows as $prow) {
$key = $prow['store_id'] . ':' . $prow['language_id'];
if (!isset($cat_map[$key])) continue;


$from = '/' . ltrim($prow['keyword'], '/');
$to = '/' . ltrim($cat_map[$key], '/');


// Save redirect rule (avoid duplicates)
$this->db->query("INSERT INTO `" . DB_PREFIX . "pdr_redirect` SET `store_id`=" . (int)$prow['store_id'] . ", `language_id`=" . (int)$prow['language_id'] . ", `from_path`='" . $this->db->escape($from) . "', `to_path`='" . $this->db->escape($to) . "', `code`=301, `status`=1, `date_added`=NOW() ON DUPLICATE KEY UPDATE to_path=VALUES(to_path), status=1, date_modified=NOW()");
}
}
}