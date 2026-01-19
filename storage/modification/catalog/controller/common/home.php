<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			
			$canonical = $this->url->link('common/home');
			if ($this->config->get('config_seo_pro') && !$this->config->get('config_seopro_addslash')) {
				$canonical = rtrim($canonical, '/');
			}
   
        
		}


			$this->config->set('oct_deals_vars', array('is_home' => true));
			

            $oct_deals_data = $this->config->get('theme_oct_deals_data');
			$oct_seo_title = $this->config->get('config_meta_title');
			$oct_seo_description = $this->config->get('config_meta_description');

			if ($this->config->get('theme_oct_deals_seo_home_status')) {
				$oct_seo_home_data = $this->config->get('theme_oct_deals_seo_home_data');

				if ((isset($oct_seo_home_data['title'][$this->config->get('config_language_id')]) && !empty($oct_seo_home_data['title'][$this->config->get('config_language_id')]))) {
					$this->document->setTitle($oct_seo_home_data['title'][$this->config->get('config_language_id')]);
					$oct_seo_title = $oct_seo_home_data['title'][$this->config->get('config_language_id')];
				}

				if ((isset($oct_seo_home_data['description'][$this->config->get('config_language_id')]) && !empty($oct_seo_home_data['description'][$this->config->get('config_language_id')]))) {
					$this->document->setDescription($oct_seo_home_data['description'][$this->config->get('config_language_id')]);
					$oct_seo_description = $oct_seo_home_data['description'][$this->config->get('config_language_id')];
				}
			}

            if (isset($oct_deals_data['open_graph']) && $oct_deals_data['open_graph']) {
                $site_link = $this->request->server['HTTPS'] ? HTTPS_SERVER : HTTP_SERVER;

				$config_logo = file_exists(DIR_IMAGE . $this->config->get('config_logo')) ? $this->config->get('config_logo') : 'catalog/opencart-logo.png';
				$home_image = $site_link . 'image/' . $config_logo;

				$image_info = getimagesize(DIR_IMAGE . $config_logo);
				
				if ($this->config->get('theme_oct_deals_seo_home_image_status')) {
					$oct_seo_home_image_data = $this->config->get('theme_oct_deals_seo_home_image_data');

					if ((isset($oct_seo_home_image_data['image'][$this->config->get('config_language_id')]) && !empty($oct_seo_home_image_data['image'][$this->config->get('config_language_id')]))) {
						$image_info = file_exists(DIR_IMAGE . $oct_seo_home_image_data['image'][$this->config->get('config_language_id')]) ? getimagesize(DIR_IMAGE . $oct_seo_home_image_data['image'][$this->config->get('config_language_id')]) : getimagesize(DIR_IMAGE . 'catalog/opencart-logo.png');
						$home_image = file_exists(DIR_IMAGE . $oct_seo_home_image_data['image'][$this->config->get('config_language_id')]) ? $site_link . 'image/' . $oct_seo_home_image_data['image'][$this->config->get('config_language_id')] : $site_link . 'image/catalog/opencart-logo.png';
					}
				}

				if ($image_info) {
					$image_width  = $image_info[0];
					$image_height = $image_info[1];
				} else {
					$image_width  = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_logo_width') ? $this->config->get('theme_' . $this->config->get('config_theme') . '_image_logo_width') : 140;
					$image_height = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_logo_height') ? $this->config->get('theme_' . $this->config->get('config_theme') . '_image_logo_height') : 65;
				}

				$mime_type = isset($image_info['mime']) ? $image_info['mime'] : 'image/svg+xml';

                $this->document->setOCTOpenGraph('og:title', htmlspecialchars(strip_tags(str_replace("\r", " ", str_replace("\n", " ", str_replace("\\", "/", str_replace("\"", "", $oct_seo_title)))))));
                $this->document->setOCTOpenGraph('og:description', htmlspecialchars(strip_tags(str_replace("\r", " ", str_replace("\n", " ", str_replace("\\", "/", str_replace("\"", "", $oct_seo_description)))))));
                $this->document->setOCTOpenGraph('og:site_name', htmlspecialchars(strip_tags(str_replace("\r", " ", str_replace("\n", " ", str_replace("\\", "/", str_replace("\"", "", $this->config->get('config_name'))))))));
				$this->document->setOCTOpenGraph('og:url', $this->url->link('common/home', '', true));
                $this->document->setOCTOpenGraph('og:image', str_replace(" ", "%20", $home_image));

				if (isset($mime_type) && $mime_type) {
                	$this->document->setOCTOpenGraph('og:image:type', $mime_type);
				}

				if (isset($image_width) && $image_width) {
                	$this->document->setOCTOpenGraph('og:image:width', $image_width);
				}

				if (isset($image_height) && $image_height) {
					$this->document->setOCTOpenGraph('og:image:height', $image_height);
				}

                $this->document->setOCTOpenGraph('og:image:alt', htmlspecialchars(strip_tags(str_replace("\r", " ", str_replace("\n", " ", str_replace("\\", "/", str_replace("\"", "", $this->config->get('config_meta_title'))))))));
                $this->document->setOCTOpenGraph('og:type', 'website');
            }
			
$this->document->addLink($this->url->link('common/home'), 'canonical');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		
            $template = 'common/home';

            // Custom template module

            $custom_template_module = $this->config->get('custom_template_module');

            if(!empty($custom_template_module)){

                library('custom_template');
                $custom_template = new CustomTemplate($this->registry);
                $this->registry->set('custom_template', $custom_template);
                
                $customer_group_id = $this->customer->getGroupId();

                foreach ($custom_template_module as $key => $module) {
                    if($module['type'] == 0){
                        if ($this->custom_template->filterCommon($module, $customer_group_id)){
                            if ($this->custom_template->filterLayouts($module)){

                                $template = $module['template_name'];

                            }
                        }
                    }
                }

            }
            $this->response->setOutput($this->load->view($template, $data));
            // Custom template module
            
	}
}
