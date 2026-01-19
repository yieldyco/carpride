<?php
class ModelToolSeoH1 extends Model {
	
	/**
	 * Check if seo_h1 field exists and create it if not
	 */
	public function ensureSeoH1Field() {
		$query = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "product_description` LIKE 'seo_h1'");

		if ($query->num_rows == 0) {
			// Field doesn't exist, create it
			$this->db->query("
				ALTER TABLE `" . DB_PREFIX . "product_description` 
				ADD COLUMN `seo_h1` VARCHAR(255) NOT NULL DEFAULT '' 
				AFTER `meta_keyword`
			");
			return true;
		}
		
		return false;
	}

	/**
	 * Get products with empty seo_h1 field
	 * 
	 * @param int $language_id Language ID
	 * @param int $limit Maximum number of products to return
	 * @return array Array of products with product_id and name
	 */
	public function getProductsWithEmptySeoH1($language_id, $limit) {
		$query = $this->db->query("
			SELECT 
				pd.product_id,
				pd.name
			FROM `" . DB_PREFIX . "product_description` pd
			INNER JOIN `" . DB_PREFIX . "product` p ON (pd.product_id = p.product_id)
			WHERE pd.language_id = '" . (int)$language_id . "'
			AND pd.seo_h1 = ''
			AND p.status = '1'
			ORDER BY pd.product_id ASC
			LIMIT " . (int)$limit
		);

		return $query->rows;
	}

	/**
	 * Update seo_h1 field for a product
	 * 
	 * @param int $product_id Product ID
	 * @param int $language_id Language ID
	 * @param string $seo_h1 SEO H1 value
	 * @return bool Success status
	 */
	public function updateSeoH1($product_id, $language_id, $seo_h1) {
		try {
			$this->db->query("
				UPDATE `" . DB_PREFIX . "product_description`
				SET `seo_h1` = '" . $this->db->escape($seo_h1) . "'
				WHERE `product_id` = '" . (int)$product_id . "'
				AND `language_id` = '" . (int)$language_id . "'
			");
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	/**
	 * Clear all seo_h1 fields (set to empty string)
	 * 
	 * @return int Number of affected rows
	 */
	public function clearAllSeoH1() {
		$this->db->query("
			UPDATE `" . DB_PREFIX . "product_description`
			SET `seo_h1` = ''
		");

		return $this->db->countAffected();
	}
}
