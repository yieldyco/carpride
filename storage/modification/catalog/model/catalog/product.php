<?php
class ModelCatalogProduct extends Model {
	public function updateViewed($product_id) {
		$this->db->query("UPDATE " . DB_PREFIX . "product SET viewed = (viewed + 1) WHERE product_id = '" . (int)$product_id . "'");
	}

	public function getProduct($product_id) {
		$query = $this->db->query("SELECT DISTINCT *, pd.name AS name, p.image, m.name AS manufacturer, (SELECT price FROM " . DB_PREFIX . "product_discount pd2 WHERE pd2.product_id = p.product_id AND pd2.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND pd2.quantity = '1' AND ((pd2.date_start = '0000-00-00' OR pd2.date_start < NOW()) AND (pd2.date_end = '0000-00-00' OR pd2.date_end > NOW())) ORDER BY pd2.priority ASC, pd2.price ASC LIMIT 1) AS discount, (SELECT price FROM " . DB_PREFIX . "product_special ps WHERE ps.product_id = p.product_id AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS special, (SELECT points FROM " . DB_PREFIX . "product_reward pr WHERE pr.product_id = p.product_id AND pr.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "') AS reward, (SELECT ss.name FROM " . DB_PREFIX . "stock_status ss WHERE ss.stock_status_id = p.stock_status_id AND ss.language_id = '" . (int)$this->config->get('config_language_id') . "') AS stock_status, (SELECT wcd.unit FROM " . DB_PREFIX . "weight_class_description wcd WHERE p.weight_class_id = wcd.weight_class_id AND wcd.language_id = '" . (int)$this->config->get('config_language_id') . "') AS weight_class, (SELECT lcd.unit FROM " . DB_PREFIX . "length_class_description lcd WHERE p.length_class_id = lcd.length_class_id AND lcd.language_id = '" . (int)$this->config->get('config_language_id') . "') AS length_class, (SELECT AVG(rating) AS total FROM " . DB_PREFIX . "review r1 WHERE r1.product_id = p.product_id AND r1.status = '1' GROUP BY r1.product_id) AS rating, (SELECT COUNT(*) AS total FROM " . DB_PREFIX . "review r2 WHERE r2.product_id = p.product_id AND r2.status = '1' GROUP BY r2.product_id) AS reviews, p.sort_order FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) LEFT JOIN " . DB_PREFIX . "manufacturer m ON (p.manufacturer_id = m.manufacturer_id) WHERE p.product_id = '" . (int)$product_id . "' AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->num_rows) {
			return array(
				'product_id'       => $query->row['product_id'],
				'name'             => $query->row['name'],
				'description'      => $query->row['description'],
				'meta_title'       => $query->row['meta_title'],
				'meta_description' => $query->row['meta_description'],
				'meta_keyword'     => $query->row['meta_keyword'],
				'tag'              => $query->row['tag'],
				'model'            => $query->row['model'],
				'sku'              => $query->row['sku'],
				'upc'              => $query->row['upc'],
				'ean'              => $query->row['ean'],
				'jan'              => $query->row['jan'],
				'isbn'             => $query->row['isbn'],
				'mpn'              => $query->row['mpn'],
				'location'         => $query->row['location'],
				'quantity'         => $query->row['quantity'],
				'stock_status'     => $query->row['stock_status'],
				'image'            => $query->row['image'],
				'manufacturer_id'  => $query->row['manufacturer_id'],
				'manufacturer'     => $query->row['manufacturer'],
				'price'            => ($query->row['discount'] ? $query->row['discount'] : $query->row['price']),
				'special'          => $query->row['special'],

			'oct_stickers'		=> isset($query->row['oct_stickers']) ? unserialize($query->row['oct_stickers']) : false,
			'you_save'          => ($query->row['price'] != 0 && $query->row['special']) ? '-' . ($query->row['discount'] ? number_format(((float)$query->row['discount'] - (float)$query->row['special']) / (float)$query->row['discount'] * 100, 0) : number_format(((float)$query->row['price'] - (float)$query->row['special']) / (float)$query->row['price'] * 100, 0)) . '%' : false,
			'you_save_price'	=> $query->row['special'] ? ($query->row['discount'] ? ((float)$query->row['discount'] - (float)$query->row['special']) : ((float)$query->row['price'] - (float)$query->row['special'])) : false,
			
				'reward'           => $query->row['reward'],
				'points'           => $query->row['points'],
				'tax_class_id'     => $query->row['tax_class_id'],
				'date_available'   => $query->row['date_available'],
				'weight'           => $query->row['weight'],
				'weight_class_id'  => $query->row['weight_class_id'],
				'length'           => $query->row['length'],
				'width'            => $query->row['width'],
				'height'           => $query->row['height'],
				'length_class_id'  => $query->row['length_class_id'],
				'subtract'         => $query->row['subtract'],
				'rating'           => round($query->row['rating']),
				'reviews'          => $query->row['reviews'] ? $query->row['reviews'] : 0,
				'minimum'          => $query->row['minimum'],
				'sort_order'       => $query->row['sort_order'],
				'status'           => $query->row['status'],
				'date_added'       => $query->row['date_added'],
				'date_modified'    => $query->row['date_modified'],
				'viewed'           => $query->row['viewed']
			);
		} else {
			return false;
		}
	}


			public function getOCTProductPrice($product_id, $quantity) {
				$query = $this->db->query("
					SELECT
						p.price,
						p.tax_class_id,
						(
							SELECT
								price
							FROM
								" . DB_PREFIX . "product_discount pd2
							WHERE
								pd2.product_id = p.product_id
								AND pd2.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "'
								AND pd2.quantity <= '" . (int)$quantity . "'
								AND ((pd2.date_start = '0000-00-00' OR pd2.date_start < NOW())
								AND (pd2.date_end = '0000-00-00' OR pd2.date_end > NOW()))
							ORDER BY
								pd2.quantity DESC,
								pd2.priority ASC,
								pd2.price ASC
							LIMIT 1
						) AS discount,
						(
							SELECT
								price
							FROM
								" . DB_PREFIX . "product_special ps
							WHERE
								ps.product_id = p.product_id
								AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "'
								AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW())
								AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW()))
							ORDER BY
								ps.priority ASC,
								ps.price ASC
							LIMIT 1
						) AS special
					FROM
						" . DB_PREFIX . "product p
					LEFT JOIN
						" . DB_PREFIX . "product_to_store p2s
					ON
						(p.product_id = p2s.product_id)
					WHERE
						p.product_id = '" . (int)$product_id . "'
						AND p.status = '1'
						AND p.date_available <= NOW()
						AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'
					LIMIT 1
				");

				return $query->row;
			}
			
	public function getProducts($data = array()) {
		$sql = "SELECT p.product_id, (SELECT AVG(rating) AS total FROM " . DB_PREFIX . "review r1 WHERE r1.product_id = p.product_id AND r1.status = '1' GROUP BY r1.product_id) AS rating, (SELECT price FROM " . DB_PREFIX . "product_discount pd2 WHERE pd2.product_id = p.product_id AND pd2.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND pd2.quantity = '1' AND ((pd2.date_start = '0000-00-00' OR pd2.date_start < NOW()) AND (pd2.date_end = '0000-00-00' OR pd2.date_end > NOW())) ORDER BY pd2.priority ASC, pd2.price ASC LIMIT 1) AS discount, (SELECT price FROM " . DB_PREFIX . "product_special ps WHERE ps.product_id = p.product_id AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS special";

		if (!empty($data['filter_category_id'])) {
			if (!empty($data['filter_sub_category'])) {
				$sql .= " FROM " . DB_PREFIX . "category_path cp LEFT JOIN " . DB_PREFIX . "product_to_category p2c ON (cp.category_id = p2c.category_id)";
			} else {
				$sql .= " FROM " . DB_PREFIX . "product_to_category p2c";
			}

			if (!empty($data['filter_filter'])) {
				$sql .= " LEFT JOIN " . DB_PREFIX . "product_filter pf ON (p2c.product_id = pf.product_id) LEFT JOIN " . DB_PREFIX . "product p ON (pf.product_id = p.product_id)";
			} else {
				$sql .= " LEFT JOIN " . DB_PREFIX . "product p ON (p2c.product_id = p.product_id)";
			}
		} else {
			$sql .= " FROM " . DB_PREFIX . "product p";
		}

		$sql .= " LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'";

		if (!empty($data['filter_category_id'])) {
			if (!empty($data['filter_sub_category'])) {
				$sql .= " AND cp.path_id = '" . (int)$data['filter_category_id'] . "'";
			} else {
				$sql .= " AND p2c.category_id = '" . (int)$data['filter_category_id'] . "'";
			}

			if (!empty($data['filter_filter'])) {
				$implode = array();

				$filters = explode(',', $data['filter_filter']);

				foreach ($filters as $filter_id) {
					$implode[] = (int)$filter_id;
				}

				$sql .= " AND pf.filter_id IN (" . implode(',', $implode) . ")";
			}
		}

		if (!empty($data['filter_name']) || !empty($data['filter_tag'])) {
			$sql .= " AND (";

			if (!empty($data['filter_name'])) {
				$implode = array();

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_name'])));

				foreach ($words as $word) {
					$implode[] = "pd.name LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}

				if (!empty($data['filter_description'])) {
					$sql .= " OR pd.description LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
				}
			}

			if (!empty($data['filter_name']) && !empty($data['filter_tag'])) {
				$sql .= " OR ";
			}

			if (!empty($data['filter_tag'])) {
				$implode = array();

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_tag'])));

				foreach ($words as $word) {
					$implode[] = "pd.tag LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}
			}

			if (!empty($data['filter_name'])) {
				$sql .= " OR LCASE(p.model) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.sku) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.upc) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.ean) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.jan) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.isbn) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.mpn) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
			}

			$sql .= ")";
		}

		if (!empty($data['filter_manufacturer_id'])) {
			$sql .= " AND p.manufacturer_id = '" . (int)$data['filter_manufacturer_id'] . "'";
		}

		$sql .= " GROUP BY p.product_id";

		$sort_data = array(
			'pd.name',
			'p.model',
			'p.quantity',
			'p.price',
			'rating',
			'p.sort_order',
			'p.date_added'
		);


			$sort_data = [
				'p.sort_order',
				'pd.name',
				'p.model',
				'p.price',
				'p.quantity',
				'p.viewed',
				'p.date_added',
				'p.date_added',
				'rating',
			];
			
		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			if ($data['sort'] == 'pd.name' || $data['sort'] == 'p.model') {
				
			$sql .= " ORDER BY ";

			if ($this->config->get('theme_' . $this->config->get('config_theme') . '_no_quantity_last')) {
				$sql .= "p.quantity > 0 DESC, ";
			}

			$sql .= "LCASE(" . $data['sort'] . ")";
			
			} elseif ($data['sort'] == 'p.price') {
				
			$sql .= " ORDER BY ";

			if ($this->config->get('theme_' . $this->config->get('config_theme') . '_no_quantity_last')) {
				$sql .= "p.quantity > 0 DESC,";
			}

			$sql .= " (CASE WHEN special IS NOT NULL THEN special WHEN discount IS NOT NULL THEN discount ELSE p.price END)";
			
			} else {
				
			$sql .= " ORDER BY ";

			if ($this->config->get('theme_' . $this->config->get('config_theme') . '_no_quantity_last')) {
				$sql .= "p.quantity > 0 DESC, ";
			}

			$sql .= $data['sort'];
			
			}
		} else {
			
			$sql .= " ORDER BY ";

			if ($this->config->get('theme_' . $this->config->get('config_theme') . '_no_quantity_last')) {
				$sql .= "p.quantity > 0 DESC, ";
			}

			$sql .= "p.sort_order";
			
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC, LCASE(pd.name) DESC";
		} else {
			$sql .= " ASC, LCASE(pd.name) ASC";
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

		$product_data = array();

		$query = $this->db->query($sql);

		foreach ($query->rows as $result) {
			$product_data[$result['product_id']] = $this->getProduct($result['product_id']);
		}

		return $product_data;
	}

	public function getProductSpecials($data = array()) {
		$sql = "SELECT DISTINCT ps.product_id, (SELECT AVG(rating) FROM " . DB_PREFIX . "review r1 WHERE r1.product_id = ps.product_id AND r1.status = '1' GROUP BY r1.product_id) AS rating FROM " . DB_PREFIX . "product_special ps LEFT JOIN " . DB_PREFIX . "product p ON (ps.product_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) GROUP BY ps.product_id";

		$sort_data = array(
			'pd.name',
			'p.model',
			'ps.price',
			'rating',
			'p.sort_order'
		);


			$sort_data = [
				'p.sort_order',
				'pd.name',
				'p.model',
				'p.price',
				'p.quantity',
				'p.viewed',
				'p.date_added',
				'p.date_added',
				'rating',
			];
			
		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			if ($data['sort'] == 'pd.name' || $data['sort'] == 'p.model') {
				
			$sql .= " ORDER BY ";

			if ($this->config->get('theme_' . $this->config->get('config_theme') . '_no_quantity_last')) {
				$sql .= "p.quantity > 0 DESC, ";
			}

			$sql .= "LCASE(" . $data['sort'] . ")";
			
			} else {
				
			$sql .= " ORDER BY ";

			if ($this->config->get('theme_' . $this->config->get('config_theme') . '_no_quantity_last')) {
				$sql .= "p.quantity > 0 DESC, ";
			}

			$sql .= $data['sort'];
			
			}
		} else {
			
			$sql .= " ORDER BY ";

			if ($this->config->get('theme_' . $this->config->get('config_theme') . '_no_quantity_last')) {
				$sql .= "p.quantity > 0 DESC, ";
			}

			$sql .= "p.sort_order";
			
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC, LCASE(pd.name) DESC";
		} else {
			$sql .= " ASC, LCASE(pd.name) ASC";
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

		$product_data = array();

		$query = $this->db->query($sql);

		foreach ($query->rows as $result) {
			$product_data[$result['product_id']] = $this->getProduct($result['product_id']);
		}

		return $product_data;
	}

	public function getLatestProducts($limit) {
		$product_data = $this->cache->get('product.latest.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit);

		if (!$product_data) {
			$query = $this->db->query("SELECT p.product_id FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' ORDER BY p.date_added DESC LIMIT " . (int)$limit);

			foreach ($query->rows as $result) {
				$product_data[$result['product_id']] = $this->getProduct($result['product_id']);
			}

			$this->cache->set('product.latest.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit, $product_data);
		}

		return $product_data;
	}

	public function getPopularProducts($limit) {
		$product_data = $this->cache->get('product.popular.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit);
	
		if (!$product_data) {
			$query = $this->db->query("SELECT p.product_id FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' ORDER BY p.viewed DESC, p.date_added DESC LIMIT " . (int)$limit);
	
			foreach ($query->rows as $result) {
				$product_data[$result['product_id']] = $this->getProduct($result['product_id']);
			}
			
			$this->cache->set('product.popular.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit, $product_data);
		}
		
		return $product_data;
	}

	public function getBestSellerProducts($limit) {
		$product_data = $this->cache->get('product.bestseller.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit);

		if (!$product_data) {
			$product_data = array();

			$query = $this->db->query("SELECT op.product_id, SUM(op.quantity) AS total FROM " . DB_PREFIX . "order_product op LEFT JOIN `" . DB_PREFIX . "order` o ON (op.order_id = o.order_id) LEFT JOIN `" . DB_PREFIX . "product` p ON (op.product_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE o.order_status_id > '0' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' GROUP BY op.product_id ORDER BY total DESC LIMIT " . (int)$limit);

			foreach ($query->rows as $result) {
				$product_data[$result['product_id']] = $this->getProduct($result['product_id']);
			}

			$this->cache->set('product.bestseller.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . (int)$limit, $product_data);
		}

		return $product_data;
	}


	        public function getOctProductAttributes($product_id, $limit = 5) {

		        /*fix_attribute_view*/
                if($this->config->get('module_attribute_text_select_status')) {
                    $attribute_view = array();
                    $lang_id = (int)$this->config->get('config_language_id');
                    $delit = ', ';
                    $query_str = "SELECT atp.`attribute_id`, (SELECT ad.`name` FROM `".DB_PREFIX."attribute_description` ad WHERE ad.`attribute_id` = atp.`attribute_id` AND ad.`language_id` = ".$lang_id." LIMIT 1) name FROM `".DB_PREFIX."attribute_text_product` atp ";
                    $query_str .= " LEFT JOIN `".DB_PREFIX."attribute` a ON (atp.`attribute_id` = a.`attribute_id`) ";
                    $query_str .= " WHERE atp.`product_id` = ".(int)$product_id." ";
                    $query_str .= " GROUP BY atp.`attribute_id` ";
                    $query_str .= " ORDER BY a.`sort_order`, `name` ";
                    $query_str .= " LIMIT ".(int)$limit;
                    $query = $this->db->query($query_str);
                    if($query->num_rows) {
                        foreach($query->rows as $colum) {
                            $attribute_id = $colum['attribute_id'];
                            $query_str = "SELECT atl.`text` FROM `".DB_PREFIX."attribute_text_product` atp ";
                            $query_str .= " LEFT JOIN `".DB_PREFIX."attribute_text_lang` atl ON (atp.`text_id` = atl.`text_id`) ";
                            $query_str .= " WHERE atp.`product_id` = ".(int)$product_id." AND atl.`attribute_id` = ".$attribute_id." AND atl.`language_id` = ".$lang_id." ";
                            //$query_str .= " GROUP BY atp.`text_id` ";
                            $query_text = $this->db->query($query_str);
                            $texts = array();
                            foreach($query_text->rows as $pole) {
                                $texts[] = $pole['text'];
                            }
                            $attribute_view[] = array(
                                'attribute_id' => $attribute_id,
                                'name' => $colum['name'], 
                                'text' => implode($delit, $texts)
                            );
                        }
                    }
                    return $attribute_view;
                }
                /*end fix_attribute_view*/
			
		        $product_attribute_data = [];

				$product_attribute_query = $this->db->query("SELECT a.attribute_id, ad.name, pa.text FROM " . DB_PREFIX . "product_attribute pa LEFT JOIN " . DB_PREFIX . "attribute a ON (pa.attribute_id = a.attribute_id) LEFT JOIN " . DB_PREFIX . "attribute_description ad ON (a.attribute_id = ad.attribute_id) WHERE pa.product_id = '" . (int)$product_id . "' AND ad.language_id = '" . (int)$this->config->get('config_language_id') . "' AND pa.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY a.sort_order, ad.name LIMIT " . (int)$limit);

				foreach ($product_attribute_query->rows as $product_attribute) {
					$product_attribute_data[] = [
						'attribute_id' => $product_attribute['attribute_id'],
						'name'         => $product_attribute['name'],
						'text'         => $product_attribute['text']
					];
				}

				return $product_attribute_data;
			}
			

    /*attribute_text_select*/
        /*fix_ATS_UniShop*/
        private $limit_attrib = '';
        private $limit_text = '';
        /*end fix_ATS_UniShop*/
    public function getProductAttributesATS($product_id) {
        $result = array();
        $flag_arr_reset = true;
        $language_id = (int)$this->config->get('config_language_id');
        $setting_mod = $this->config->get('attribute_text_select_setting');
        $separ = ' '; $delit = ''; $delit_attribs = array(); $incl_img = ''; $img_wh = 30; $cls_img = ''; $pole_tooltip = ''; $ignor_attrib = '';
        if(isset($setting_mod['separ'][0])) {$separ = $setting_mod['separ'][0].' ';}
        if(isset($setting_mod['delit']) && $setting_mod['delit']) {
            $delit = html_entity_decode($setting_mod['delit'], ENT_QUOTES, 'UTF-8');
            if(isset($setting_mod['delit_attribs']) && trim($temp_str = preg_replace("/[^,;0-9]/", '', $setting_mod['delit_attribs']))) {$delit_attribs = array_unique(preg_split("/[\s,;]+/", $temp_str, 0, PREG_SPLIT_NO_EMPTY));}
            else {$separ = $delit;}
        }
        if(isset($setting_mod['incl_img'])) {
            $this->load->model('tool/image'); $incl_img = ", ats.`image`";
            if(isset($setting_mod['img_wh']) && (int)$setting_mod['img_wh']) {$img_wh = (int)$setting_mod['img_wh'];}
            if(isset($setting_mod['cls_img']) && trim($setting_mod['cls_img'])) {$cls_img = 'class="'.html_entity_decode($setting_mod['cls_img'], ENT_QUOTES, 'UTF-8').'"';}
        }
        if(isset($setting_mod['setting_poles']['fix_attrtool'])) {
            $pole_tooltip = ", agd.`tooltip` AS `tooltip_group`, ad.`tooltip`";
        }
        if(isset($setting_mod['ignor_attrib']) && trim($temp_str = preg_replace("/[^,;0-9]/", '', $setting_mod['ignor_attrib']))) {
            $arr_ignor_attrib = array_unique(preg_split("/[\s,;]+/", $temp_str, 0, PREG_SPLIT_NO_EMPTY));
            if($arr_ignor_attrib) {
                sort($arr_ignor_attrib);
                $ignor_attrib = " AND atp.`attribute_id` NOT IN (".implode(', ',$arr_ignor_attrib).")";
            }
        }
        $query_str = "SELECT agd.`attribute_group_id`, agd.`name` AS `name_group`, tatp.`attribute_id`, ad.`name`, tatp.`text_id`, (SELECT atl.`text` FROM `".DB_PREFIX."attribute_text_lang` AS atl WHERE tatp.`text_id` = atl.`text_id` AND atl.`language_id` = ".$language_id." LIMIT 1) AS `text`".$incl_img.$pole_tooltip." ";
        $query_str .= " FROM (SELECT atp.`attribute_id`, atp.`text_id` FROM `".DB_PREFIX."attribute_text_product` atp WHERE atp.`product_id` = ".(int)$product_id.$ignor_attrib.") tatp ";
        $query_str .= " LEFT JOIN `".DB_PREFIX."attribute` AS a ON (tatp.`attribute_id` = a.`attribute_id`)";
        $query_str .= " LEFT JOIN `".DB_PREFIX."attribute_description` AS ad ON (a.`attribute_id` = ad.`attribute_id`)";
        $query_str .= " LEFT JOIN `".DB_PREFIX."attribute_group` AS ag ON (a.`attribute_group_id` = ag.`attribute_group_id`)";
        $query_str .= " LEFT JOIN `".DB_PREFIX."attribute_group_description` AS agd ON (ag.`attribute_group_id` = agd.`attribute_group_id`)";
        if($incl_img) {
            $query_str .= " LEFT JOIN `".DB_PREFIX."attribute_text` AS ats ON (tatp.`text_id` = ats.`text_id`)";
        }
        $query_str .= " WHERE agd.`language_id` = ".$language_id." AND ad.`language_id` = ".$language_id." ";
        $query_str .= " ORDER BY ag.`sort_order`, `name_group`, a.`sort_order`, ad.`name`";
        //if($incl_img) {$query_str .= ", ats.`sort_order`";}
        $query_str .= ", (`text`+0), `text`";
        /*fix_ATS_UniShop*/
        $query_str .= ($this->limit_text) ? " LIMIT ".(int)$this->limit_text : "";
        /*end fix_ATS_UniShop*/
        $query_attribute_group = $this->db->query($query_str);
        foreach($query_attribute_group->rows as $colum) {
            $attribute_group_id = (int)$colum['attribute_group_id'];
            $attribute_id = (int)$colum['attribute_id'];
            $result[$attribute_group_id]['attribute_group_id'] = $attribute_group_id;
            $result[$attribute_group_id]['name'] = $colum['name_group'];
            $result[$attribute_group_id]['tooltip'] = ($pole_tooltip) ? $colum['tooltip_group'] : '';
            $result[$attribute_group_id]['attribute'][$attribute_id]['attribute_id'] = $attribute_id;
            $result[$attribute_group_id]['attribute'][$attribute_id]['name'] = $colum['name'];
            $result[$attribute_group_id]['attribute'][$attribute_id]['tooltip'] = ($pole_tooltip) ? $colum['tooltip'] : '';
            $text_id = (int)$colum['text_id'];
            if($text_id) {
                $image = ($incl_img && $colum['image']) ? '<span '.$cls_img.'><img src="'.$this->model_tool_image->resize($colum['image'], $img_wh, $img_wh).'" /></span> ' : '';
                $text = $image.trim($colum['text']);
                if(!empty($result[$attribute_group_id]['attribute'][$attribute_id]['text'])) {
                    $result[$attribute_group_id]['attribute'][$attribute_id]['text'] .= (in_array($attribute_id, $delit_attribs) ? $delit : $separ).$text;
                }
                else {
                    $result[$attribute_group_id]['attribute'][$attribute_id]['text'] = $text;
                }
                $result[$attribute_group_id]['attribute'][$attribute_id]['param'][$text_id] = array('text_id' => $text_id, 'text' => $text);
            }
            else {
                $result[$attribute_group_id]['attribute'][$attribute_id]['text'] = '';
                $result[$attribute_group_id]['attribute'][$attribute_id]['param'] = array();
            }
        }
        if($flag_arr_reset) {
            foreach($result as &$attrib_group) {
                $attrib_group['attribute'] = ($this->limit_attrib) ? array_values(array_slice($attrib_group['attribute'], 0 , (int)$this->limit_attrib)) : array_values($attrib_group['attribute']);
            }
        }
        return ($flag_arr_reset) ? array_values($result) : $result;
    }
    /*end attribute_text_select*/
            
	public function getProductAttributes($product_id) {

			if ($this->config->get('atpresets_use_newline')==1) {
				$glue_character = html_entity_decode('<br>', ENT_QUOTES, 'UTF-8');
			} else {
				$glue_character = $this->config->get('atpresets_other_character')." ";
			}
			

        /*attribute_text_select*/
            /*fix_ATS_UniShop*/
            /*
            if(isset($limit1) && ($limit1 = trim($limit1)) && ($limit1 < 1000)) {$this->limit_attrib = (int)$limit1;}
            if(isset($limit2) && ($limit2 = trim($limit2)) && ($limit2 < 1000)) {$this->limit_text = (int)$limit2;}
            */
            /*end fix_ATS_UniShop*/
        if($this->config->get('module_attribute_text_select_status')) {return $this->getProductAttributesATS($product_id);}
        /*end attribute_text_select*/
            
		$product_attribute_group_data = array();

		$product_attribute_group_query = $this->db->query("SELECT ag.attribute_group_id, agd.name FROM " . DB_PREFIX . "product_attribute pa LEFT JOIN " . DB_PREFIX . "attribute a ON (pa.attribute_id = a.attribute_id) LEFT JOIN " . DB_PREFIX . "attribute_group ag ON (a.attribute_group_id = ag.attribute_group_id) LEFT JOIN " . DB_PREFIX . "attribute_group_description agd ON (ag.attribute_group_id = agd.attribute_group_id) WHERE pa.product_id = '" . (int)$product_id . "' AND agd.language_id = '" . (int)$this->config->get('config_language_id') . "' GROUP BY ag.attribute_group_id ORDER BY ag.sort_order, agd.name");

		foreach ($product_attribute_group_query->rows as $product_attribute_group) {
			$product_attribute_data = array();

			$product_attribute_query = $this->db->query("SELECT a.attribute_id, ad.name, pa.text FROM " . DB_PREFIX . "product_attribute pa LEFT JOIN " . DB_PREFIX . "attribute a ON (pa.attribute_id = a.attribute_id) LEFT JOIN " . DB_PREFIX . "attribute_description ad ON (a.attribute_id = ad.attribute_id) WHERE pa.product_id = '" . (int)$product_id . "' AND a.attribute_group_id = '" . (int)$product_attribute_group['attribute_group_id'] . "' AND ad.language_id = '" . (int)$this->config->get('config_language_id') . "' AND pa.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY a.sort_order, ad.name");

			foreach ($product_attribute_query->rows as $product_attribute) {
				
			if ($this->config->get('atpresets_installed')==1) {
				if (!isset($product_attribute_data[$product_attribute['attribute_id']])) {
					$product_attribute_data[$product_attribute['attribute_id']] = array(
						'attribute_id' => $product_attribute['attribute_id'],
						'name'         => $product_attribute['name'],
						'text'         => $product_attribute['text']
					);
				} else {
					$product_attribute_data[$product_attribute['attribute_id']] = array(
						'attribute_id' => $product_attribute['attribute_id'],
						'name'         => $product_attribute['name'],
						'text'         => $product_attribute_data[$product_attribute['attribute_id']]['text'] .= $glue_character.$product_attribute['text']
					);			
				}
			} else $product_attribute_data[$product_attribute['attribute_id']] = array(
			
					'attribute_id' => $product_attribute['attribute_id'],
					'name'         => $product_attribute['name'],
					'text'         => $product_attribute['text']
				);
			}

			$product_attribute_group_data[] = array(
				'attribute_group_id' => $product_attribute_group['attribute_group_id'],
				'name'               => $product_attribute_group['name'],
				'attribute'          => $product_attribute_data
			);
		}

		return $product_attribute_group_data;
	}

	public function getProductOptions($product_id) {
		$product_option_data = array();

		$product_option_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_option po LEFT JOIN `" . DB_PREFIX . "option` o ON (po.option_id = o.option_id) LEFT JOIN " . DB_PREFIX . "option_description od ON (o.option_id = od.option_id) WHERE po.product_id = '" . (int)$product_id . "' AND od.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY o.sort_order");

		foreach ($product_option_query->rows as $product_option) {
			$product_option_value_data = array();

			$product_option_value_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_option_value pov LEFT JOIN " . DB_PREFIX . "option_value ov ON (pov.option_value_id = ov.option_value_id) LEFT JOIN " . DB_PREFIX . "option_value_description ovd ON (ov.option_value_id = ovd.option_value_id) WHERE pov.product_id = '" . (int)$product_id . "' AND pov.product_option_id = '" . (int)$product_option['product_option_id'] . "' AND ovd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY ov.sort_order");

			foreach ($product_option_value_query->rows as $product_option_value) {
				$product_option_value_data[] = array(
					'product_option_value_id' => $product_option_value['product_option_value_id'],
					'option_value_id'         => $product_option_value['option_value_id'],
					'name'                    => $product_option_value['name'],
					'image'                   => $product_option_value['image'],
					'quantity'                => $product_option_value['quantity'],
					'subtract'                => $product_option_value['subtract'],
					'price'                   => $product_option_value['price'],
					'price_prefix'            => $product_option_value['price_prefix'],
					'weight'                  => $product_option_value['weight'],
					'weight_prefix'           => $product_option_value['weight_prefix']
				);
			}

			$product_option_data[] = array(
				'product_option_id'    => $product_option['product_option_id'],
				'product_option_value' => $product_option_value_data,
				'option_id'            => $product_option['option_id'],
				'name'                 => $product_option['name'],
				'type'                 => $product_option['type'],
				'value'                => $product_option['value'],
				'required'             => $product_option['required']
			);
		}

		return $product_option_data;
	}

	public function getProductDiscounts($product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_discount WHERE product_id = '" . (int)$product_id . "' AND customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND quantity > 1 AND ((date_start = '0000-00-00' OR date_start < NOW()) AND (date_end = '0000-00-00' OR date_end > NOW())) ORDER BY quantity ASC, priority ASC, price ASC");

		return $query->rows;
	}


			public function getProductImagesByOptionValueId($product_id, $options) {
				$sql = "SELECT * FROM " . DB_PREFIX . "product_image pi LEFT JOIN " . DB_PREFIX . "oct_product_image_by_option pito ON (pi.product_image_id = pito.product_image_id) WHERE pi.product_id = '" . (int)$product_id . "'";
				
				$implode = array();
				
				foreach ($options as $option) {
					if ($option) {
						$implode[] = $option;
					}
				}
				
				if (!empty($implode)) {
					$sql .= " AND pito.option_value_id IN (" . implode(',', $implode) . ") GROUP BY pi.image ORDER BY pi.sort_order ASC";
				} else {
					$sql .= " GROUP BY pi.image ORDER BY pi.sort_order ASC";
				}

				$query = $this->db->query($sql);
          
				return $query->rows;
			}
        
			public function getProductOptionValueId($product_id, $product_option_value_id) {
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_option_value WHERE product_id = '" . (int)$product_id . "' AND product_option_value_id = '" . (int)$product_option_value_id . "'");
				
				if ($query->row) {
					return $query->row['option_value_id'];
				}
			}
			
	public function getProductImages($product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_image WHERE product_id = '" . (int)$product_id . "' ORDER BY sort_order ASC");

		return $query->rows;
	}

	public function getProductRelated($product_id) {
		$product_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_related pr LEFT JOIN " . DB_PREFIX . "product p ON (pr.related_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE pr.product_id = '" . (int)$product_id . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'");

		foreach ($query->rows as $result) {
			$product_data[$result['related_id']] = $this->getProduct($result['related_id']);
		}

		return $product_data;
	}

	public function getProductLayoutId($product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_layout WHERE product_id = '" . (int)$product_id . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->num_rows) {
			return (int)$query->row['layout_id'];
		} else {
			return 0;
		}
	}

	public function getCategories($product_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "'");

		return $query->rows;
	}

	public function getTotalProducts($data = array()) {
		$sql = "SELECT COUNT(DISTINCT p.product_id) AS total";

		if (!empty($data['filter_category_id'])) {
			if (!empty($data['filter_sub_category'])) {
				$sql .= " FROM " . DB_PREFIX . "category_path cp LEFT JOIN " . DB_PREFIX . "product_to_category p2c ON (cp.category_id = p2c.category_id)";
			} else {
				$sql .= " FROM " . DB_PREFIX . "product_to_category p2c";
			}

			if (!empty($data['filter_filter'])) {
				$sql .= " LEFT JOIN " . DB_PREFIX . "product_filter pf ON (p2c.product_id = pf.product_id) LEFT JOIN " . DB_PREFIX . "product p ON (pf.product_id = p.product_id)";
			} else {
				$sql .= " LEFT JOIN " . DB_PREFIX . "product p ON (p2c.product_id = p.product_id)";
			}
		} else {
			$sql .= " FROM " . DB_PREFIX . "product p";
		}

		$sql .= " LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'";

		if (!empty($data['filter_category_id'])) {
			if (!empty($data['filter_sub_category'])) {
				$sql .= " AND cp.path_id = '" . (int)$data['filter_category_id'] . "'";
			} else {
				$sql .= " AND p2c.category_id = '" . (int)$data['filter_category_id'] . "'";
			}

			if (!empty($data['filter_filter'])) {
				$implode = array();

				$filters = explode(',', $data['filter_filter']);

				foreach ($filters as $filter_id) {
					$implode[] = (int)$filter_id;
				}

				$sql .= " AND pf.filter_id IN (" . implode(',', $implode) . ")";
			}
		}

		if (!empty($data['filter_name']) || !empty($data['filter_tag'])) {
			$sql .= " AND (";

			if (!empty($data['filter_name'])) {
				$implode = array();

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_name'])));

				foreach ($words as $word) {
					$implode[] = "pd.name LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}

				if (!empty($data['filter_description'])) {
					$sql .= " OR pd.description LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
				}
			}

			if (!empty($data['filter_name']) && !empty($data['filter_tag'])) {
				$sql .= " OR ";
			}

			if (!empty($data['filter_tag'])) {
				$implode = array();

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_tag'])));

				foreach ($words as $word) {
					$implode[] = "pd.tag LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}
			}

			if (!empty($data['filter_name'])) {
				$sql .= " OR LCASE(p.model) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.sku) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.upc) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.ean) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.jan) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.isbn) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
				$sql .= " OR LCASE(p.mpn) = '" . $this->db->escape(utf8_strtolower($data['filter_name'])) . "'";
			}

			$sql .= ")";
		}

		if (!empty($data['filter_manufacturer_id'])) {
			$sql .= " AND p.manufacturer_id = '" . (int)$data['filter_manufacturer_id'] . "'";
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	public function getProfile($product_id, $recurring_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "recurring r JOIN " . DB_PREFIX . "product_recurring pr ON (pr.recurring_id = r.recurring_id AND pr.product_id = '" . (int)$product_id . "') WHERE pr.recurring_id = '" . (int)$recurring_id . "' AND status = '1' AND pr.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "'");

		return $query->row;
	}

	public function getProfiles($product_id) {
		$query = $this->db->query("SELECT rd.* FROM " . DB_PREFIX . "product_recurring pr JOIN " . DB_PREFIX . "recurring_description rd ON (rd.language_id = " . (int)$this->config->get('config_language_id') . " AND rd.recurring_id = pr.recurring_id) JOIN " . DB_PREFIX . "recurring r ON r.recurring_id = rd.recurring_id WHERE pr.product_id = " . (int)$product_id . " AND status = '1' AND pr.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' ORDER BY sort_order ASC");

		return $query->rows;
	}

	public function getTotalProductSpecials() {
		$query = $this->db->query("SELECT COUNT(DISTINCT ps.product_id) AS total FROM " . DB_PREFIX . "product_special ps LEFT JOIN " . DB_PREFIX . "product p ON (ps.product_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND ps.customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW()))");

		if (isset($query->row['total'])) {
			return $query->row['total'];
		} else {
			return 0;
		}
	}

	public function checkProductCategory($product_id, $category_ids) {
		
		$implode = array();

		foreach ($category_ids as $category_id) {
			$implode[] = (int)$category_id;
		}
		
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "' AND category_id IN(" . implode(',', $implode) . ")");
  	    return $query->row;
	}
}
