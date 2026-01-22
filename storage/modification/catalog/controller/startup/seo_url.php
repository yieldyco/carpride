<?php
class ControllerStartupSeoUrl extends Controller {

	//seopro start
		private $seo_pro;
		public function __construct($registry) {
			parent::__construct($registry);	
			$this->seo_pro = new SeoPro($registry);
		}
	//seopro end        
        
	public function index() {

    {
        

        /*start FilterVier*/
        if(!defined('HTTPS_CATALOG')) {$this->load->model('extension/module/filter_vier');}
		/*end FilterVier*/
			
		// Add rewrite to url class
		if ($this->config->get('config_seo_url')) {
			$this->url->addRewrite($this);
		}

		// Decode URL
		if (isset($this->request->get['_route_'])) {
			$parts = explode('/', $this->request->get['_route_']);

			// remove any empty arrays from trailing

    	//seopro prepare route
		if($this->config->get('config_seo_pro')){		
			$parts = $this->seo_pro->prepareRoute($parts);
		}
		//seopro prepare route end
        
			if (utf8_strlen(end($parts)) == 0) {
				array_pop($parts);
			}

			foreach ($parts as $part) {
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE keyword = '" . $this->db->escape($part) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

                /*start FilterVier*/
                if(!defined('HTTPS_CATALOG') && $part && !$query->num_rows && $this->model_extension_module_filter_vier->parseUrlSeoFV(/**/$part)) {continue;}
        		/*end FilterVier*/
			

				if ($query->num_rows) {
					$url = explode('=', $query->row['query']);

					if ($url[0] == 'product_id') {
						$this->request->get['product_id'] = $url[1];
					}


			if ($url[0] == 'blogarticle_id') {
				$this->request->get['blogarticle_id'] = $url[1];
			}

			if ($url[0] == 'blogcategory_id') {
				if (!isset($this->request->get['blog_path'])) {
					$this->request->get['blog_path'] = $url[1];
				} else {
					$this->request->get['blog_path'] .= '_' . $url[1];
				}
			}
			
					if ($url[0] == 'category_id') {
						if (!isset($this->request->get['path'])) {
							$this->request->get['path'] = $url[1];
						} else {
							$this->request->get['path'] .= '_' . $url[1];
						}
					}

					if ($url[0] == 'manufacturer_id') {
						$this->request->get['manufacturer_id'] = $url[1];
					}

					if ($url[0] == 'information_id') {
						$this->request->get['information_id'] = $url[1];
					}

					if ($query->row['query'] && $url[0] != 'information_id' && $url[0] != 'manufacturer_id' && $url[0] != 'category_id' && $url[0] != 'product_id' && $url[0] != 'blogcategory_id' && $url[0] != 'blogarticle_id') {
						$this->request->get['route'] = $query->row['query'];
					}
				} else {
					$this->request->get['route'] = 'error/not_found';

					break;
				}
			}

			if (!isset($this->request->get['route'])) {
				if (isset($this->request->get['product_id'])) {
					$this->request->get['route'] = 'product/product';

			} elseif (isset($this->request->get['blogarticle_id'])) {
				$this->request->get['route'] = 'octemplates/blog/oct_blogarticle';
			} elseif (isset($this->request->get['blog_path'])) {
				$this->request->get['route'] = 'octemplates/blog/oct_blogcategory';
			
				} elseif (isset($this->request->get['path'])) {
					$this->request->get['route'] = 'product/category';
				} elseif (isset($this->request->get['manufacturer_id'])) {
					$this->request->get['route'] = 'product/manufacturer/info';
				} elseif (isset($this->request->get['information_id'])) {
					$this->request->get['route'] = 'information/information';
				}
			}

            /*start FilterVier*/
            if(!defined('HTTPS_CATALOG') && !$this->config->get(/**/'config_seo_pro')) {$this->model_extension_module_filter_vier->redirUrl();}
    		/*end FilterVier*/
			
		}
	}


		//seopro validate
		if($this->config->get('config_seo_pro')){		
			$this->seo_pro->validate();
		}
	    //seopro validate
    }      
        
	public function rewrite($link) {

        /*start FilterVier*/
        if(!defined('HTTPS_CATALOG')) {
            $this->load->model('extension/module/filter_vier');
            if(!$this->config->get(/**/'config_seo_pro')) {$this->model_extension_module_filter_vier->redirUrl();}
        }
		/*end FilterVier*/
			
		$url_info = parse_url(str_replace('&amp;', '&', $link));

		$url = '';


		if($this->config->get('config_seo_pro')){		
		$url = null;
			} else {
		$url = '';
		}    
        
		$data = array();


        if (!isset($url_info['query'])) {
            $url_info['query'] = '';
        }
        
		parse_str($url_info['query'], $data);

		//seo_pro baseRewrite
        if (isset($data['route']) && $data['route'] == 'product/product') {
            $product_flag = true;
        } else {
            $product_flag = false;   
        }

		if($this->config->get('config_seo_pro')){		
			list($url, $data, $postfix) =  $this->seo_pro->baseRewrite($data, (int)$this->config->get('config_language_id'));	
		}
		//seo_pro baseRewrite
        

		foreach ($data as $key => $value) {
			if (isset($data['route'])) {
				
			if (($data['route'] == 'product/product' && $key == 'product_id') || (($data['route'] == 'product/manufacturer/info' || $data['route'] == 'product/product') && $key == 'manufacturer_id') || ($data['route'] == 'information/information' && $key == 'information_id') || ($data['route'] == 'octemplates/blog/oct_blogarticle' && $key == 'blogarticle_id')) {
			
					$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = '" . $this->db->escape($key . '=' . (int)$value) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

					if ($query->num_rows && $query->row['keyword']) {
						$url .= '/' . $query->row['keyword'];

						unset($data[$key]);
					}

			} elseif ($key == 'blog_path') {
				$blog_categories = explode('_', $value);

				foreach ($blog_categories as $blog_category) {
					$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = 'blogcategory_id=" . (int)$blog_category . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

					if ($query->num_rows && $query->row['keyword']) {
						$url .= '/' . $query->row['keyword'];
					} else {
						$url = '';

						break;
					}
				}

				unset($data[$key]);
			
				} elseif ($key == 'path') {
					$categories = explode('_', $value);

					foreach ($categories as $category) {
						$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = 'category_id=" . (int)$category . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

						if ($query->num_rows && $query->row['keyword']) {
							$url .= '/' . $query->row['keyword'];
						} else {
							$url = '';

							break;
						}
					}

					unset($data[$key]);
				}
			}
		}

		
			unset($data['route']);

			$query = '';

           /*start FilterVier*/
            if(!defined('HTTPS_CATALOG') && ($url_temp = $this->model_extension_module_filter_vier->getUrlSeoFV($url, $data))) {
                if(isset($url_temp['seo_url'])) {$url = $url_temp['seo_url']; $postfix/*fix_seo_pro*/ = null;}
                if(isset($url_temp['new_data'])) {$data = $url_temp['new_data'];}
            }
            if(/**/$data){$query/**/='?'.urldecode(http_build_query($data,'','&'));$data/**/=[];}
            /*end FilterVier*/
            

			if ($data) {
				foreach ($data as $key => $value) {
					$query .= '&' . rawurlencode((string)$key) . '=' . rawurlencode((is_array($value) ? http_build_query($value) : (string)$value));
				}

				if ($query) {
					$query = '?' . str_replace('&', '&amp;', trim($query, '&'));
				}
			}


            if($this->config->get('config_seo_pro')) {		
                $condition = ($url !== null);
            } else {
                $condition = $url;
            }

            if ($condition) {
                if($this->config->get('config_seo_pro')){		
                    if($this->config->get('config_page_postfix') && $postfix) {
                        $url .= $this->config->get('config_page_postfix');
                    } elseif($this->config->get('config_seopro_addslash') || !empty( $query)) {
                        if (!$this->config->get('config_seopro_addslash_product') && $product_flag) {
                        } else {
                            if ($this->config->get('config_seopro_addslash')) {
								$url .= '/';
							}
                        }
                    } 
                }
                
        
			return $url_info['scheme'] . '://' . $url_info['host'] . (isset($url_info['port']) ? ':' . $url_info['port'] : '') . str_replace('/index.php', '', $url_info['path']) . $url . $query;
		} else {
			return $link;
		}
	}
}
