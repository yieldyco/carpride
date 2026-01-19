<?php
class ControllerToolCronTitle extends Controller {
	private $cron_key = 'a7f9c3e8d2b1f4a6'; // Secret key for cron access

	public function index() {
		// Simple text response
		$this->response->addHeader('Content-Type: text/plain; charset=utf-8');

		// Validate cron key
		$request_key = isset($this->request->get['key']) ? (string)$this->request->get['key'] : '';

		if (!hash_equals($this->cron_key, $request_key)) {
			$this->response->setOutput("Invalid cron key.\n");
			return;
		}

		// Load seo_h1 model
		$this->load->model('tool/seo_h1');

		// Check and create seo_h1 field if not exists
		$this->model_tool_seo_h1->ensureSeoH1Field();

		// Get limit parameter (default 1000)
		$limit = isset($this->request->get['limit']) ? (int)$this->request->get['limit'] : 1000;
		if ($limit <= 0) {
			$limit = 1000;
		}

		// Get current language
		$language_id = (int)$this->config->get('config_language_id');

		// Get products with empty seo_h1
		$products = $this->model_tool_seo_h1->getProductsWithEmptySeoH1($language_id, $limit);
		
		$this->load->model('catalog/product');

    

		$updated = 0;
		$errors = 0;
		$output = "SEO H1 Title Update Results:\n";
		$output .= str_repeat('=', 60) . "\n\n";

		foreach ($products as $product) {
			$product_id = (int)$product['product_id'];
			$product_info = $this->model_catalog_product->getProduct($product_id);

			$data['attribute_groups'] = $this->model_catalog_product->getProductAttributes($product_id);

			$stg_data = array(
				'attribute_groups' => isset($data['attribute_groups']) ? $data['attribute_groups'] : array(),
				'product_info' => $product_info
			);

			$old_name = $product_info['name'];

			$product_info = $this->load->controller('extension/module/seo_tags_generator/getProductTags', $stg_data);

			$new_seo_h1 = $product_info['name'];

			// Update seo_h1 field
			$result = $this->model_tool_seo_h1->updateSeoH1($product_id, $language_id, $new_seo_h1);
			//$result = true;

			if ($result) {
				$updated++;
				$output .= "Product ID: " . $product_id . "\n";
				$output .= "Old Name: " . $old_name . "\n";
				$output .= "New SEO H1: " . $new_seo_h1 . "\n";
				$output .= str_repeat('-', 60) . "\n";
			} else {
				$errors++;
			}
		}

		$output .= "\n" . str_repeat('=', 60) . "\n";
		$output .= "Summary:\n";
		$output .= "Total processed: " . count($products) . "\n";
		$output .= "Successfully updated: " . $updated . "\n";
		$output .= "Errors: " . $errors . "\n";

		$this->response->setOutput($output);
	}

	public function clear() {
		// Simple text response
		$this->response->addHeader('Content-Type: text/plain; charset=utf-8');

		// Validate cron key
		$request_key = isset($this->request->get['key']) ? (string)$this->request->get['key'] : '';

		if (!hash_equals($this->cron_key, $request_key)) {
			$this->response->setOutput("Invalid cron key.\n");
			return;
		}

		// Load seo_h1 model
		$this->load->model('tool/seo_h1');

		// Clear all seo_h1 fields
		$cleared = $this->model_tool_seo_h1->clearAllSeoH1();

		$output = "SEO H1 Clear Results:\n";
		$output .= str_repeat('=', 60) . "\n";
		$output .= "Cleared seo_h1 field for all products.\n";
		$output .= "Affected rows: " . $cleared . "\n";

		$this->response->setOutput($output);
	}
}
