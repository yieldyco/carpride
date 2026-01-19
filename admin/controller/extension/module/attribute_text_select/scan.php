<?php

class ControllerExtensionModuleAttributeTextSelectScan extends Controller {
    
    private $name_mod = 'attribute_text_select';
    private $versi_put = 'module';
    private $load_mod;
    private $model_status = '';
    private $file_scan_log = '';
    private $tabl_get_attribs_id = 'product_attribute';
    
    private $what_versi;
    
    public function index() {
        $this->what_versi = $this->whatVersion();
        $this->model_status = $this->name_mod.'_status';
        $this->load_mod = 'model_module_'.$this->name_mod;
        if($this->what_versi >= 3000) {
            $this->model_status = 'module_'.$this->model_status;
        }
        if($this->what_versi >= 2300) {
            $this->versi_put = 'extension/module';
            $this->load_mod = 'model_extension_module_'.$this->name_mod;
        }
        $view_attrb = array();
        if($this->config->get($this->model_status) && ($setting_mod = $this->config->get('attribute_text_select_setting'))) {
            if(!empty($setting_mod['scan']['file_scan_log'])) {
                //path to log file (if exists)
                $this->file_scan_log = $setting_mod['scan']['file_scan_log'];
            }
            
            if(!isset($setting_mod['scan']['cron_wget'])) {
                if(substr(PHP_SAPI, 0, 3) !== 'cgi' || substr(PHP_SAPI, 0, 3) !== 'cli') {
                    $text = 'only allowed: cgi | cli';
                    $this->genLog($text);
                    exit('exit');
                }
            }
            
            if(isset($setting_mod['scan']['status'])) {
                if(!empty($setting_mod['scan']['tabl'])) {
                    $scan_tabl = $setting_mod['scan']['tabl'];
                    if($scan_tabl == 1) {
                        if($sett_attribs = $this->config->get('attribute_text_select_attribs')) {
                            //data attributes module
                            if(isset($sett_attribs['attrb']['view'])) {
                                $view_attrb = $this->procAttibs($sett_attribs['attrb']['view']);
                            }
                        }
                    }
                    elseif($scan_tabl == 2) {
                        //data attributes table product_attribute
                        $view_attrb = $this->getAttributesId($this->tabl_get_attribs_id);
                    }
                }
            }
        }
        if($view_attrb) {
            $text = 'Start scan attributes:';
            $this->genLog($text);
            $this->genLog($view_attrb);
            $this->load->model($this->versi_put.'/'.$this->name_mod);
            $result_scan = $this->{$this->load_mod}->genCodeAttributes($view_attrb);
            $this->genLog(array('preparation time','rows processed','result','total time'));
            $this->genLog($result_scan);
        }
        else {
            $text = 'no Attibute for scan:';
            $this->genLog($text);
        }
    }
    
    //достать массив атрибутов из указанной Таблицы
    private function getAttributesId($tabl = 'product_attribute') {
        $result = array();
        if(!$tabl) return $result;
        $query_str = "SELECT `attribute_id` FROM `".DB_PREFIX.$tabl."` ";
        $query_str .= " GROUP BY `attribute_id` ";
        $query_str .= " ORDER BY `attribute_id` ";
        $query = $this->db->query($query_str);
        foreach($query->rows as $val) {
            $result[] = $val['attribute_id'];
        }
    	return $result;
    }
    
    private function procAttibs($checks_attr, $flag_sort = true) {
        $view_attrb = array();
        if($checks_attr && is_array($checks_attr)) {
            $view_attrb = array_unique($checks_attr);
            if($flag_sort) {
                sort($view_attrb);
            }
        }
        return $view_attrb;
    }
    
    private function genLog($str_mixe) {
        if($this->file_scan_log && is_writable($this->file_scan_log)) {
            $date = date('d-m-Y H:i:s');
            //if(is_array($str_mixe)) {$str_mixe = json_encode($str_mixe);}
            if(is_array($str_mixe)) {$str_mixe = implode(', ', $str_mixe);}
            file_put_contents($this->file_scan_log, '['.$date.'] - '.$str_mixe.' '.PHP_EOL, FILE_APPEND);
        }
    }
    
    private function whatVersion() {
        return (int)substr(str_replace('.', '', VERSION).'0', 0, 4);
    }
}
