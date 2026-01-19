<?php
class ControllerExtensionModuleYaTranslate extends Controller{
	private $error = array();
	private $path_module ='extension/module/ya_translate';
	private $module_name ='ya_translate';
	private $file_error_log = 'ya_translate.log';

	private $logger;

	public function __construct($registry) {
		parent::__construct($registry);
		$this->logger = new LOG($this->file_error_log);
	}

	public function dataTranslate($data_translate=array(),$from,$to) {
		$return_results = array();
		$translator = new Ya_translate($this->registry);

		$key_orginal = array();
		$text = array();
		foreach ($data_translate as $field=>$value) {
			$value  = trim(html_entity_decode(str_replace('&amp;','&',$value), ENT_QUOTES,'utf-8'));
			if ($value && strip_tags($value)) {
				$text[] = str_replace('~','',$value);
				$key_orginal[] = $field;
			}
		}
	
		$config_language = $this->config->get($this->module_name . '_codelanguage');
		$languages = $this->getLanguages();

		if (isset($config_language[$languages[$from]['code']])) {
			$direct_from = $config_language[$languages[$from]['code']];
		} else {
			$direct_from = $languages[$from]['ya_code'];
		}
		if (isset($config_language[$languages[$to]['code']])) {
			$direct_to = $config_language[$languages[$to]['code']];
		} else {
			$direct_to = $languages[$to]['ya_code'];
		}

		$direction =  $direct_from . '-' . $direct_to;


		$post_limit = 10000;
		$type = $this->config->get($this->module_name . '_type');
		$types = array ('even','stream');

		if (!in_array($type,$types)) $type = 'even';

		$text_for_translate = implode('~',$text);
		
		if ($type == 'even' || strlen($text_for_translate) > $post_limit) {
			$textas = array();
			$translate_ok = true;
			foreach ($text as $value) {

				if (!$translate_ok) continue;

				if (strlen($value) < $post_limit) {
					$text_for_translate = $value;

					$result = $translator->translate($text_for_translate, $direction, 'html');
					$results = $result->getTranslation();
					if (isset($results['code']) && $results['code'] == 200) {
						$textas[] = $results['text'][0];
					} else {
						$translate_ok = false;
					}
				} else {
					$text_for_translate = preg_replace("/[\r\n]+/", "\n", str_replace('><',">\n<",$value));
					$array_subtext = explode("\n",$text_for_translate);
					$text_for_translate = '';
					$res_translate = '';
					$accumulative_text ='';
					foreach ($array_subtext as $subtext) {
						$len_text_for_translate = strlen($accumulative_text);
						$len_subtext = strlen($subtext);
						if (($len_text_for_translate + $len_subtext) > $post_limit) {
							$result = $translator->translate($text_for_translate, $direction, 'html');
							$results = $result->getTranslation();
							if ($results['code'] == 200) {
								$res_translate .= $results['text'][0];
								$translate_ok = true;
							} else {
								$translate_ok = false;
							}
							$accumulative_text = $subtext; 
						} else {
							$text_for_translate = $accumulative_text;
							$accumulative_text .= $subtext; 
						}
					}
					if ($accumulative_text) {
						$text_for_translate = $accumulative_text;
						$result = $translator->translate($text_for_translate, $direction, 'html');
						$results = $result->getTranslation();
						if ($results['code'] == 200) {
							$res_translate .= $results['text'][0];
							$translate_ok = true;
						} else {
							$translate_ok = false;
						}
					}
					if ($translate_ok) {
						$textas[] = $res_translate;
					}
				}
			}
			if ($translate_ok) {
				// $texts = implode('~',$textas);
				$texts = $textas;
			}
		} else {
			$translate_ok = true;
			$text_for_translate = $text;
		
			$result = $translator->translate($text_for_translate, $direction, 'html');
			
			$results = $result->getTranslation();
			if ($results['code'] == 200) {
				$texts = $results['text'];//[0];
			} else {
				$translate_ok = false;
			}
		}
		if ($translate_ok) {
			//$text = explode('~',$texts);
			//$text = $texts;
			//var_dump($text);
			$new_text = array();
		
			foreach ($key_orginal as $key=>$field) {
				$new_text[$field] = str_replace('&amp;','&',$texts[$key]);
			}
			$return_results['success'] = 'translate complete';
			$return_results['text'] = $new_text;
		} else {
			$return_results['error'] = $results;
			$this->logger->write('cron: ------------------------');
			$this->logger->write($results);
			$this->logger->write('from:' . $from . ' to:' . $to);
			$this->logger->write($data_translate);
		}
		return $return_results;
	}

	public function translate() {

		$data = $this->load->language($this->path_module);
		
		$results = $this->dataTranslate($this->request->post, $this->request->get['from'], $this->request->get['to']);

		$json = $results;
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function bulkTranslateCategory() {
		$json = array();
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->user->hasPermission('modify', 'catalog/category')
				&& isset($this->request->get['from']) && isset($this->request->get['to'])) {
			$this->load->model($this->path_module);
			$this->logger->write('Last category_id:' . $this->request->post['category_id']);
			$model_product = $this->registry->get('model_' . str_replace('/','_',$this->path_module));
			$category_description = $model_product->getCategoryDescriptions($this->request->post['category_id']);

			$allow_fields = $this->config->get($this->module_name . '_category_description_field');

			$old_value = $category_description[$this->request->get['from']];
			
			$translate_value = array();
			if ($allow_fields) {
				foreach ($allow_fields as $field) {
					$translate_value[$field] = $old_value[$field];
				}
			} else {
				$translate_value = $old_value;
			}
			
			$results = $this->dataTranslate($translate_value,$this->request->get['from'], $this->request->get['to']);
			if (isset($results['success'])) {

				//$new_value = array_merge($old_value, $results['text']);
				$new_value = $results['text'];

				$model_product->updateCategoryDescriptions($this->request->post['category_id'],$this->request->get['to'],$new_value);
				$json['success'] = $results['success'];
				$json['last_id'] = $this->request->post['category_id'];
			} else {
				$json = $results;
			}
		}

				
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function bulkTranslateManufacturer() {
		$json = array();
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->user->hasPermission('modify', 'catalog/manufacturer')
				&& isset($this->request->get['from']) && isset($this->request->get['to'])) {
			$this->load->model($this->path_module);
			$this->logger->write('Last manufacturer_id:' . $this->request->post['manufacturer_id']);
			$model_product = $this->registry->get('model_' . str_replace('/','_',$this->path_module));
			$manufacturer_description = $model_product->getManufacturerDescriptions($this->request->post['manufacturer_id']);

			$allow_fields = $this->config->get($this->module_name . '_manufacturer_description_field');

			$old_value = $manufacturer_description[$this->request->get['from']];
			
			$translate_value = array();
			if ($allow_fields) {
				foreach ($allow_fields as $field) {
					$translate_value[$field] = $old_value[$field];
				}
			} else {
				$translate_value = $old_value;
			}
			
			$results = $this->dataTranslate($translate_value,$this->request->get['from'], $this->request->get['to']);
			if (isset($results['success'])) {

				//$new_value = array_merge($old_value, $results['text']);
				$new_value = $results['text'];

				$model_product->updateManufacturerDescriptions($this->request->post['manufacturer_id'],$this->request->get['to'],$new_value);
				$json['success'] = $results['success'];
				$json['last_id'] = $this->request->post['manufacturer_id'];
			} else {
				$json = $results;
			}
		}

				
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function bulkTranslateAttribute() {
		$json = array();
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->user->hasPermission('modify', 'catalog/product')
				&& isset($this->request->get['from']) && isset($this->request->get['to'])) {
			$this->load->model($this->path_module);
			$this->logger->write('Last attribute_id:' . $this->request->post['attribute_id']);
			
			$model_product = $this->registry->get('model_' . str_replace('/','_',$this->path_module));

			$filter_data = array();

			$filter_data['attribute_id'] = $this->request->post['attribute_id'];

			$filter_data['from']  = $this->request->get['from'];
			$filter_data['to']    = $this->request->get['to'];
			$filter_data['md5_text'] = isset($this->request->post['md5_text'])?$this->request->post['md5_text']:'';

			$attribute_values_total = $model_product->getAttributeValuesTotal($filter_data);
			if ($attribute_values_total > 50) {
				$filter_data['limit'] = 20;
			}

			$attribute_values  = $model_product->getAttributeValues($filter_data);

			$translate_value = array();

			if ($attribute_values) {
				foreach ($attribute_values as $attribute_value) {
					$value = trim($attribute_value['text']);
					if (utf8_strlen($value) >= 2) {
						$tempvalue = preg_replace('/[^a-zA-Zа-яА-Я]/ui', '',$value);
						if (utf8_strlen($tempvalue) >= 2) {
							$index_field = $attribute_value['attribute_id'] . '_' . $attribute_value['md5_text'] . '_' .  $this->request->get['from'];
							$translate_value[$index_field] = $value;
						}
					}
					$json['md5_text'] = $attribute_value['md5_text'];
					$results['success'] = 1;
				}
			} else {
				$json['md5_text'] = '';
				$results['success'] = 1;
				$query = $this->db->query("INSERT IGNORE INTO " . DB_PREFIX . "ya_translate SET entity = 'attribute', id = " . (int)$this->request->post['attribute_id']);
			}

			
			if ($translate_value) {
				$translate_values = array();
				foreach ($translate_value as $key=>$value) {
					$translate_values[$value][] = $key;
				}
				$_translate_values = array();
				foreach ($translate_values as $key=>$value) {
					$_translate_values[$key] = json_encode($value);
				}
				$translate_value = array_flip($_translate_values);
		
				$results = $this->dataTranslate($translate_value,$this->request->get['from'], $this->request->get['to']);
			}
			
			
			if (isset($results['success'])) {
				if (isset($results['text'])) {
					$new_value = $results['text'];
					$this->logger->write($new_value);	
					$data_update = array(
						'attribute_id' => $this->request->post['attribute_id'],
						'language_id' => $this->request->get['to'],
						'value' =>$new_value
					);
					$model_product->updateAttribute($data_update);
				}
				
				$json['success'] = $results['success'];
				$json['last_id'] = $this->request->post['attribute_id'];
			} else {
				$json = $results;
			}
		}
				
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function bulkTranslate() {

		$json = [];
		if ($this->config->get('ya_translate_language_from') 
			&& $this->config->get('ya_translate_language_to')
			&& $this->config->get('ya_translate_language_from') != $this->config->get('ya_translate_language_to')
			&& isset($this->request->get['secret'])
			&& $this->request->get['secret'] == $this->config->get('ya_translate_security_code')) {
			$from = $this->config->get('ya_translate_language_from');
			$to = $this->config->get('ya_translate_language_to');
			$this->load->model($this->path_module);

			$model_product = $this->registry->get('model_' . str_replace('/','_',$this->path_module));
			
			$filter_data = [
				'filter_ready'             => 0,
				'start'                    => 0,
				'limit'                    => 1
			];
			$results = $model_product->getProducts($filter_data);

			foreach ($results as $result) {
				$product_id = $result['product_id'];
				$this->logger->write('Cron: Last product_id:' . $product_id);	
				$product_description = $model_product->getProductDescriptions($product_id);
				$allow_fields = $this->config->get($this->module_name . '_product_description_field');
				$old_value = $product_description[$from];
				$translate_value = array();
				if ($allow_fields) {
					foreach ($allow_fields as $field) {
						$translate_value[$field] = $old_value[$field];
					}
				} else {
					$translate_value = $old_value;
				}
				if ($this->config->get('ya_translate_prod_attribute')) {
					$product_attributes= $model_product->getProductAttributes($product_id);
					if (isset($product_attributes[$from])) {
						$product_attribute = $product_attributes[$from];
					} else {
						$product_attribute = [];
					}
					$translate_value = array_merge($translate_value,$product_attribute);
				}
				$results = $this->dataTranslate($translate_value,$from, $to);
				if (isset($results['success'])) {
					$new_value = $results['text'];
					$model_product->updateProductDescriptions($product_id,$to,$new_value);
					$json['success'] = $results['success'];
					$json['last_id'] = $product_id;
				} else {
					$json = $results;
				}
			}
//		$this->response->addHeader('Content-Type: application/json');
//		$this->response->setOutput(json_encode($json));
		}
	}

	private function getLanguages() {
		$this->load->model('localisation/language');
		$languages = $this->model_localisation_language->getLanguages();

		$config_language = $this->config->get($this->module_name . '_codelanguage');

		reset($languages);
		$first = current($languages);
		foreach ($languages as $lang=>$language) {
			if ($language['language_id'] == $this->config->get($this->module_name . '_default_lang')) {
				$first = $languages[$lang];
				break;
			}
		}
		$language_from = $first['code'];
		$ya_code = explode('-',$first['code']);
		if ($ya_code[0] == 'ua') $ya_code[0] = 'uk';
		if (isset($config_language[$language_from])) {
			$direct_from = $config_language[$language_from];
		} else {
			$direct_from = $ya_code[0];
		}
		
		$data = array();
		foreach ($languages as $lang=>$language) {
			$data[$language['language_id']] = $language;
			$ya_code = explode('-',$language['code']);
			if ($ya_code[0] == 'ua') $ya_code[0] = 'uk';
			$data[$language['language_id']]['ya_code'] = $ya_code[0];
			$data[$language['language_id']]['direction'] = $direct_from . '-' . $ya_code[0];
		}

		return $data;
	}

}