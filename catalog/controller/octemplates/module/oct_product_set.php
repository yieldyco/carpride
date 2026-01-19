<?php
/**
 * @copyright    OCTemplates
 * @support      https://octemplates.net/
 * @license      LICENSE.txt
 */

class ControllerOctemplatesModuleOctProductSet extends Controller {

	public function setsInProduct($data = array()) {

        if(!isset($data['product_id_to_found'])) {
            return false;
        }

        $this->load->model('octemplates/module/oct_product_set');
        $this->load->language('octemplates/module/oct_product_set');

        $product_sets = $this->model_octemplates_module_oct_product_set->getProductSet(array('product_id' => (int)$data['product_id_to_found']));
        $product_sets = $this->convertData($product_sets);

        return $product_sets;
    }

    public function setsInPages($data = array()) {

        if(!isset($data['category_id']) || !isset($data['manufacturer_id'])) {
            return false;
        }

        $this->load->model('octemplates/module/oct_product_set');
        $this->load->language('octemplates/module/oct_product_set');

        $product_sets = false;

        if(isset($data['category_id']) && $data['category_id'] != 0) {
            $product_sets = $this->model_octemplates_module_oct_product_set->getProductSet(array('category_id' => (int)$data['category_id']));
        }

        if(isset($data['manufacturer_id']) && $data['manufacturer_id'] != 0) {
            $product_sets = $this->model_octemplates_module_oct_product_set->getProductSet(array('manufacturer_id' => (int)$data['manufacturer_id']));
        }

        if (!$product_sets) {
            return false;
        }

        $product_sets = $this->convertData($product_sets);

        return $product_sets;
    }

    public function addSet() {
        $products = $this->request->post['products'];

        if (isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

            $this->load->language('octemplates/module/oct_product_set');
            $issetPopupCart = $this->config->get('theme_oct_deals_isPopup');
            $json = array();

            foreach ($products as $product) {
                $product_id = (int)$product['product_id'];
                $quantity = isset($product['quantity']) ? (int)$product['quantity'] : 1;
            
                $this->load->model('catalog/product');
            
                $product_info = $this->model_catalog_product->getProduct($product_id);
            
                if ($product_info) {
                    $this->cart->add($product_id, $quantity);
                } 
            }

            $json['success'] = $this->language->get('text_set_success_add');
            $json['issetPopupCart'] = isset($issetPopupCart) ? $issetPopupCart : false;
            $json['total'] = $this->cart->countProducts();
        
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($json));
        } else {
			$this->response->redirect($this->url->link('error/not_found', '', true));
		}
    }

    private function convertData($data = array()) {
        $product_set_data = array();

        $this->load->model('tool/image');

        foreach ($data as $row) {
            $product_set_id = $row['product_set_id'];
            if (!isset($product_set_data[$product_set_id])) {
                $product_set_data[$product_set_id] = array(
                    'set_info' => array(
                        'name' => $row['set_name'],
                        'set_id' => $row['product_set_id'],
                        'sort_order' => $row['set_sort_order']
                    ),
                    'products' => array(),
                    'total_price' => 0,
                    'discounted_price' => 0
                );
            }

            if ($row['image']) {
                $productImage = $this->model_tool_image->resize($row['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
            } else {
                $productImage = $this->model_tool_image->resize('no-thumb.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
            }

            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$productPrice = $this->currency->format($this->tax->calculate($row['price'], $row['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$productPrice = false;
			}

			if ($row['special_price'] > 0) {
				$productPrice = $this->currency->format($this->tax->calculate($row['special_price'], $row['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                $row['price'] = $row['special_price'];
			}

            $price = $row['price'];
            $discount = ($row['discount_type'] == 'fixed') ? $row['discount_value'] : ($price * $row['discount_value'] / 100);
            $discounted_price = $price - $discount;
            $product_savings = $price - $discounted_price;
        
            $product_set_data[$product_set_id]['products'][] = array(
                'product_id' => $row['product_id'],
                'discount_type' => $row['discount_type'],
                'discount_value' => $row['discount_value'],
                'product_quantity' => $row['product_quantity'],
                'name' => $row['name'],
                'image' => $productImage,
                'href' => $this->url->link('product/product', 'product_id=' . $row['product_id']),
                'price' => $productPrice,
                'sort_order' => $row['product_sort_order'],
                'discounted_price' => $this->currency->format($this->tax->calculate($discounted_price, $row['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']),
                'saving_not_formatted' => $product_savings * $row['product_quantity'],
                'savings' => $this->currency->format($this->tax->calculate($product_savings * $row['product_quantity'], $row['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'])
            );

            if (!isset($product_set_data[$product_set_id]['you_save'])) {
                $product_set_data[$product_set_id]['you_save'] = 0;
            }

            $product_set_data[$product_set_id]['you_save'] += $product_savings * $row['product_quantity'];
            $product_set_data[$product_set_id]['total_price'] += $price * $row['product_quantity'];
            $product_set_data[$product_set_id]['discounted_price'] += $discounted_price * $row['product_quantity'];
        }

        foreach ($product_set_data as $product_set_id => $set_data) {
            $total_price = $set_data['total_price'];
            $discounted_price = $set_data['discounted_price'];
            $you_save = $set_data['you_save'];
        
            $formatted_total_price = $this->currency->format($this->tax->calculate($total_price, $row['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            $formatted_discounted_price = $this->currency->format($this->tax->calculate($discounted_price, $row['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            $formatted_you_save = $this->currency->format($this->tax->calculate($you_save, $row['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);

            $product_set_data[$product_set_id]['you_save_formatted'] = $formatted_you_save;
            $product_set_data[$product_set_id]['total_price_formatted'] = $formatted_total_price;
            $product_set_data[$product_set_id]['discounted_price_formatted'] = $formatted_discounted_price;
        }

        return $product_set_data;
    }
}