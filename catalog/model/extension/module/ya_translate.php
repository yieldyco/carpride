<?php
class ModelExtensionModuleYaTranslate extends Model {

	public function getManufacturers($data = []) {
		$sql = "SELECT m.* FROM " . DB_PREFIX . "manufacturer m ";
		
		if (isset($data['filter_ready']) && !is_null($data['filter_ready'])) {
			if ($data['filter_ready']) {
				$sql .= " JOIN " . DB_PREFIX . "ya_translate as y ON (m.manufacturer_id = y.id and entity = 'manufacturer')";
			} else {
				$sql .= " LEFT JOIN " . DB_PREFIX . "ya_translate as y ON (m.manufacturer_id = y.id and entity = 'manufacturer')";
			}
		}

		$sql .= " WHERE 1 ";
		if (isset($data['filter_ready']) && !is_null($data['filter_ready'])) {
			if (!$data['filter_ready']) {
				$sql .= " AND y.entity IS NULL";
			}
		}

		if (!empty($data['filter_name'])) {
			$sql .= " AND m.name LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}

		$sort_data = [
			'name',
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY m.name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
		
	}
	public function getAttributeValues($data = []) {

		$sql = "SELECT pa.text, md5(pa.text) as md5_text, pa.attribute_id FROM " . DB_PREFIX . "product_attribute pa";
		$sql .= " WHERE 1"; 
		$sql .= " AND pa.language_id = " . (int)$data['from'];
		//$sql .= " AND pa.product_id > " . (int)$data['last_product_id'];
		$sql .= " AND pa.attribute_id = " . (int)$data['attribute_id'];
		$sql .= " AND md5(pa.text) > '" . $this->db->escape($data['md5_text']) . "'";
		$sql .= " GROUP BY pa.text ";
		$sql .= " ORDER BY md5(pa.text)";
		if (isset($data['limit'])) {
			$sql .= " LIMIT " . (int)$data['limit'];
		}
		$result = $this->db->query($sql);
		return $result->rows;
	}

	public function updateAttribute($data = []) {
		foreach ($data['value'] as $index_key=>$value) {
			$value = str_replace('&#39',"'",$value);
			$keys = json_decode($index_key,true);
			foreach ($keys as $fields) {
				list($attribute_id, $md5_text, $language_id) = explode('_',$fields);
				$sql = "UPDATE " . DB_PREFIX . "product_attribute pa1
					JOIN  " . DB_PREFIX ."product_attribute pa2 ON (
						md5(pa2.text) = '" . $this->db->escape($md5_text) . "'
						AND pa2.language_id = '" . (int)$language_id . "'
						AND pa2.attribute_id = pa1.attribute_id
						AND pa1.product_id = pa2.product_id
					)
				SET pa1.text = '" . $this->db->escape($value) . "'
				WHERE 1 
				AND pa1.language_id = '" . (int)$data['language_id'] . "'
				AND pa1.attribute_id = '" . (int)$attribute_id . "'";

				$this->db->query($sql);
			}
		}
	}

	public function getAttributes($data = []) {
		$sql = "
		SELECT ad.*
		FROM " . DB_PREFIX . "attribute a ";
		$sql .= " JOIN " . DB_PREFIX . "attribute_description ad ON a.attribute_id = ad.attribute_id AND ad.language_id = " . (int)$this->config->get('config_language_id');

		if (isset($data['filter_ready']) && !is_null($data['filter_ready'])) {
			if (!$data['filter_ready']) {
				$sql .= " LEFT ";
			}
			$sql .= " JOIN " . DB_PREFIX . "ya_translate as y ON (a.attribute_id = y.id and entity = 'attribute')";
			
		}

		$sql .= " WHERE 1 ";
		$sql .= " AND ad.language_id = " . (int)$this->config->get('config_language_id');
		
		if (isset($data['filter_ready']) && !is_null($data['filter_ready'])) {
			if (!$data['filter_ready']) {
				$sql .= " AND y.entity IS NULL";
			}
		}

		if (!empty($data['filter_name'])) {
			$sql .= " AND ad.name LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}

		$sort_data = [
			'ad.name',
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY ad.name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
		
	}

	public function getAttribute($data) {
		
		$sql = "SELECT * FROM " . DB_PREFIX . "attribute a 
			LEFT JOIN " . DB_PREFIX . "attribute_description ad ON (a.attribute_id = ad.attribute_id)";
		$sql .= " WHERE ad.language_id = '" . (int)$data['from'] . "'";


		$sql .= " AND a.attribute_id = " . (int)$data['attribute_id'];

		$query = $this->db->query($sql);

		return $query->row;
	}

	public function updateAttr($data = []) {
		$sql = "SELECT 1 FROM `" . DB_PREFIX . "attribute_description` WHERE `attribute_id` = " . (int)$data['attribute_id'] . "
			AND `language_id` = " . (int)$data['language_id'];
		$res = $this->db->query($sql);
		if (!$res->num_rows) {
			$sql = "INSERT INTO `" . DB_PREFIX . "attribute_description` SET 
				attribute_id = " . (int)$data['attribute_id'] . ", 
				language_id = " . (int)$data['language_id'];
			$res = $this->db->query($sql);
		}
		$sql = "UPDATE `" . DB_PREFIX . "attribute_description` SET 
			`name` = '" . $this->db->escape($data['value']) . "'
			WHERE `attribute_id` = " . (int)$data['attribute_id'] . " AND `language_id` = " . (int)$data['language_id'];

		$res = $this->db->query($sql);
		
		$query = $this->db->query("INSERT IGNORE INTO " . DB_PREFIX . "ya_translate SET entity = 'attr', id = " . (int)$data['attribute_id'] . ",
		`language_id` = " . (int)$data['language_id']);
	}

	public function getAttrs($data = []) {
		$sql = "SELECT * FROM " . DB_PREFIX . "attribute a 
			LEFT JOIN " . DB_PREFIX . "attribute_description ad ON (a.attribute_id = ad.attribute_id)";

		if (isset($data['filter_ready']) && !is_null($data['filter_ready'])) {
			if ($data['filter_ready']) {
				$sql .= " JOIN " . DB_PREFIX . "ya_translate as y ON (a.attribute_id = y.id and entity = 'attr')";
			} else {
				$sql .= " LEFT JOIN " . DB_PREFIX . "ya_translate as y ON (a.attribute_id = y.id and entity = 'attr')";
			}
		}
			
		$sql .= " WHERE ad.language_id = '" . (int)$this->config->get('config_language_id') . "'";


		if (isset($data['filter_ready']) && !is_null($data['filter_ready'])) {
			if (!$data['filter_ready']) {
				$sql .= " AND y.entity IS NULL";
			}
		}

		if (!empty($data['filter_name'])) {
			$sql .= " AND ad.name LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}

		$sql .= " GROUP BY a.attribute_id";

		$sort_data = [
			'name',
			'sort_order'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY sort_order";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getCategories($data = []) {
		$sql = "SELECT 
			cp.category_id AS category_id, 
			GROUP_CONCAT(cd1.name ORDER BY cp.level SEPARATOR '&nbsp;&nbsp;&gt;&nbsp;&nbsp;') AS name, 
			c1.parent_id, 
			c1.status, 
			c1.sort_order 
			FROM " . DB_PREFIX . "category_path cp 
			LEFT JOIN " . DB_PREFIX . "category c1 ON (cp.category_id = c1.category_id) 
			LEFT JOIN " . DB_PREFIX . "category c2 ON (cp.path_id = c2.category_id) 
			LEFT JOIN " . DB_PREFIX . "category_description cd1 ON (cp.path_id = cd1.category_id) 
			LEFT JOIN " . DB_PREFIX . "category_description cd2 ON (cp.category_id = cd2.category_id) ";

		if (isset($data['filter_ready']) && !is_null($data['filter_ready'])) {
			if ($data['filter_ready']) {
				$sql .= " JOIN " . DB_PREFIX . "ya_translate as y ON (cp.category_id = y.id and entity = 'category')";
			} else {
				$sql .= " LEFT JOIN " . DB_PREFIX . "ya_translate as y ON (cp.category_id = y.id and entity = 'category')";
			}
		}
			
		$sql .= " WHERE cd1.language_id = '" . (int)$this->config->get('config_language_id') . "' 
			AND cd2.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (isset($data['filter_ready']) && !is_null($data['filter_ready'])) {
			if (!$data['filter_ready']) {
				$sql .= " AND y.entity IS NULL";
			}
		}

		if (!empty($data['filter_name'])) {
			$sql .= " AND cd2.name LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (isset($data['filter_status']) && !is_null($data['filter_status'])) {
			$sql .= " AND c1.status = '" . $this->db->escape($data['filter_status']) . "'";
		}

		$sql .= " GROUP BY cp.category_id";

		$sort_data = [
			'name',
			'c1.status',
			'sort_order'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY sort_order";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getCategoryDescriptions($category_id) {

		$results = $this->db->query("DESC " . DB_PREFIX . "category_description"); 
		$fields = [];
		foreach ($results->rows as $desc) {
			if (strpos(strtoupper($desc['Type']),'TEXT') !== false || strpos(strtoupper($desc['Type']), 'CHAR') !== false) {
				$fields[] = $desc['Field'];
			}
		}

		$category_description_data = [];

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_description WHERE category_id = '" . (int)$category_id . "'");

		foreach ($query->rows as $key=>$result) {
			foreach ($fields as $field) {
				$category_description_data[$result['language_id']][$field] = $result[$field];
			}
		}

		return $category_description_data;
	}

	public function getManufacturerDescriptions($manufacturer_id) {

		$results = $this->db->query("DESC " . DB_PREFIX . "manufacturer_description"); 
		$fields = [];
		foreach ($results->rows as $desc) {
			if (strpos(strtoupper($desc['Type']),'TEXT') !== false || strpos(strtoupper($desc['Type']), 'CHAR') !== false) {
				$fields[] = $desc['Field'];
			}
		}

		$manufacturer_description_data = [];

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "manufacturer_description WHERE manufacturer_id = '" . (int)$manufacturer_id . "'");

		foreach ($query->rows as $key=>$result) {
			foreach ($fields as $field) {
				$manufacturer_description_data[$result['language_id']][$field] = $result[$field];
			}
		}

		return $manufacturer_description_data;
	}

	public function updateCategoryDescriptions($category_id,$language_id, $category_description) {
		$sql = "SELECT 1 FROM `" . DB_PREFIX . "category_description` WHERE `category_id` = " . (int)$category_id . "
			AND `language_id` = " . (int)$language_id;
		$res = $this->db->query($sql);
		if (!$res->num_rows) {
			$sql = "INSERT INTO `" . DB_PREFIX . "category_description` SET 
				category_id = " . (int)$category_id . ", 
				language_id = " . (int)$language_id;
			$res = $this->db->query($sql);
		}
		foreach ($category_description as $field=>$value) {
			$query = $this->db->query("UPDATE " . DB_PREFIX . "category_description SET
			`" . $this->db->escape($field) . "` = '" . $this->db->escape($value) . "'
			WHERE category_id = '" . (int)$category_id . "'
			AND language_id = '" . (int)$language_id . "'
			");
		}
		$query = $this->db->query("INSERT IGNORE INTO " . DB_PREFIX . "ya_translate SET entity = 'category', id = " . (int)$category_id . ",
		`language_id` = " . (int)$language_id);
		
	}

	public function updateManufacturerDescriptions($manufacturer_id,$language_id, $manufacturer_description) {
		foreach ($manufacturer_description as $field=>$value) {
			$query = $this->db->query("UPDATE " . DB_PREFIX . "manufacturer_description SET
			`" . $this->db->escape($field) . "` = '" . $this->db->escape($value) . "'
			WHERE manufacturer_id = '" . (int)$manufacturer_id . "'
			AND language_id = '" . (int)$language_id . "'
			");
		}
		$query = $this->db->query("INSERT IGNORE INTO " . DB_PREFIX . "ya_translate SET entity = 'manufacturer', id = " . (int)$manufacturer_id . ",
		`language_id` = " . (int)$language_id);

	}

	public function getProducts($data = []) {
		$sql = "SELECT * FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id)";
		if (isset($data['filter_ready']) && !is_null($data['filter_ready'])) {
			if (!$data['filter_ready']) {
				$sql .= " LEFT ";
			}
			$sql .= " JOIN " . DB_PREFIX . "ya_translate as y ON (p.product_id = y.id and entity = 'product')";
		}
		if (!empty($data['filter_category_id'])) {
			$sql .= " JOIN " . DB_PREFIX . "product_to_category p2c  ON p.product_id = p2c.product_id AND p2c.category_id = '" . (int)$data['filter_category_id'] . "'";
		}
	
		$sql .= " WHERE 1";

		$sql .= " AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (isset($data['filter_ready']) && !is_null($data['filter_ready'])) {
			if (!$data['filter_ready']) {
				$sql .= " AND y.entity IS NULL";
			}
		}

		if (!empty($data['filter_name'])) {
			$sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (!empty($data['filter_model'])) {
			$sql .= " AND p.model LIKE '" . $this->db->escape($data['filter_model']) . "%'";
		}

		if (isset($data['filter_price']) && !is_null($data['filter_price'])) {
			$sql .= " AND p.price LIKE '" . $this->db->escape($data['filter_price']) . "%'";
		}

		if (isset($data['filter_quantity']) && !is_null($data['filter_quantity'])) {
			$sql .= " AND p.quantity = '" . (int)$data['filter_quantity'] . "'";
		}

		if (isset($data['filter_status']) && !is_null($data['filter_status'])) {
			$sql .= " AND p.status = '" . (int)$data['filter_status'] . "'";
		}

		if (!empty($data['filter_manufacturer_id'])) {
			$sql .= " AND p.manufacturer_id = '" . (int)$data['filter_manufacturer_id'] . "'";
		}

		if (!empty($data['filter_start_date_added'])) {
			$sql .= " AND DATE(p.date_added) >= '" . $this->db->escape($data['filter_start_date_added']) . "'";
		}

		if (!empty($data['filter_end_date_added'])) {
			$sql .= " AND DATE(p.date_added) <= '" . $this->db->escape($data['filter_end_date_added']) . "'";
		}

		if (!empty($data['filter_start_date_modified'])) {
			$sql .= " AND DATE(p.date_modified) >= '" . $this->db->escape($data['filter_start_date_modified']) . "'";
		}

		if (!empty($data['filter_end_date_modified'])) {
			$sql .= " AND DATE(p.date_modified) <= '" . $this->db->escape($data['filter_end_date_modified']) . "'";
		}

		if (!empty($data['filter_empty_description'])) {
			if (!empty($data['filter_language_id']) && $data['filter_language_id'] != $this->config->get('config_language_id')) {
				$sql .= " AND p.product_id IN 
					(SELECT product_id FROM " . DB_PREFIX . "product_description 
					WHERE (description = '' OR description = '&lt;p&gt;&lt;br&gt;&lt;/p&gt;') AND 
					language_id = '" . (int)$data['filter_language_id'] . "')";
				
			} else {
				$sql .= " AND (description = '' OR description = '&lt;p&gt;&lt;br&gt;&lt;/p&gt;')";
			}
		}

		$sql .= " GROUP BY p.product_id";

		$sort_data = [
			'pd.name',
			'p.model',
			'p.price',
			'p.quantity',
			'p.status',
			'p.sort_order'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY pd.name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}
		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getProductAttributes($product_id) {
		$attributes = [];
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_attribute WHERE product_id = '" . (int)$product_id . "'");
		foreach ($query->rows as $key=>$result) {
			$attributes[$result['language_id']]['attr-' . $result['attribute_id']] = $result['text'];
		}

		return $attributes;
	}
		
	public function getProductDescriptions($product_id) {

		$results = $this->db->query("DESC " . DB_PREFIX . "product_description"); 
		$fields = [];
		foreach ($results->rows as $desc) {
			if (strpos(strtoupper($desc['Type']),'TEXT') !== false || strpos(strtoupper($desc['Type']), 'CHAR') !== false) {
				$fields[] = $desc['Field'];
			}
		}

		$product_description_data = [];

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_description WHERE product_id = '" . (int)$product_id . "'");

		foreach ($query->rows as $key=>$result) {
			foreach ($fields as $field) {
				$product_description_data[$result['language_id']][$field] = $result[$field];
			}
		}

		return $product_description_data;
	}

	public function updateProductDescriptions($product_id,$language_id, $product_description) {
		$sql = "SELECT 1 FROM `" . DB_PREFIX . "product_description` WHERE `product_id` = " . (int)$product_id . "
			AND `language_id` = " . (int)$language_id;
		$res = $this->db->query($sql);
		if (!$res->num_rows) {
			$sql = "INSERT INTO `" . DB_PREFIX . "product_description` SET 
				product_id = " . (int)$product_id . ", 
				language_id = " . (int)$language_id;
			$res = $this->db->query($sql);
		}
		
		foreach ($product_description as $field=>$value) {
			$pos = strpos($field,'attr-');
			if ($pos === false) {
			$query = $this->db->query("UPDATE " . DB_PREFIX . "product_description SET
			`" . $this->db->escape($field) . "` = '" . $this->db->escape($value) . "'
			WHERE product_id = '" . (int)$product_id . "'
			AND language_id = '" . (int)$language_id . "'
			");
			} else {
				list($attr, $attribute_id) =  explode('-',$field);
				if ($attribute_id) {
					$sql = "SELECT 1 FROM `" . DB_PREFIX . "product_attribute` 
					WHERE `product_id` = " . (int)$product_id . "
					AND `attribute_id` = " . (int)$attribute_id . "
					AND `language_id` = " . (int)$language_id;
					$res = $this->db->query($sql);
					if (!$res->num_rows) {
							$sql = "INSERT INTO `" . DB_PREFIX . "product_attribute` SET 
							product_id = " . (int)$product_id . ", 
							attribute_id = " . (int)$attribute_id . ",
							language_id = " . (int)$language_id;
							$res = $this->db->query($sql);
					}
					$query = $this->db->query("UPDATE " . DB_PREFIX . "product_attribute SET
						`text` = '" . $this->db->escape($value) . "'
						WHERE product_id = '" . (int)$product_id . "'
						AND language_id = '" . (int)$language_id . "'
						AND attribute_id = '" . (int)$attribute_id . "'");
				}
			}
		}

		$query = $this->db->query("INSERT IGNORE INTO " . DB_PREFIX . "ya_translate SET entity = 'product', id = " . (int)$product_id . ",
		`language_id` = " . (int)$language_id);
	}

	public function getProductCategories($product_id) {
		$product_category_data = [];

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "'");

		foreach ($query->rows as $result) {
			$product_category_data[] = $result['category_id'];
		}

		return $product_category_data;
	}

}
