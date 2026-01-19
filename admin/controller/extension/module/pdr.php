<?php
class ControllerExtensionModulePDR extends Controller {
private $error = [];


public function index() {
$this->load->language('extension/module/pdr');
$this->document->setTitle($this->language->get('heading_title'));
$this->load->model('setting/setting');


if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
$this->model_setting_setting->editSetting('module_pdr', $this->request->post);
$this->session->data['success'] = $this->language->get('text_success');
$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
}


$data['heading_title'] = $this->language->get('heading_title');
$data['text_edit'] = $this->language->get('text_edit');
$data['entry_status'] = $this->language->get('entry_status');
$data['button_save'] = $this->language->get('button_save');
$data['button_cancel'] = $this->language->get('button_cancel');


$data['error_warning'] = isset($this->error['warning']) ? $this->error['warning'] : '';


$data['breadcrumbs'] = [];
$data['breadcrumbs'][] = [
'text' => $this->language->get('text_home'),
'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
];
$data['breadcrumbs'][] = [
'text' => $this->language->get('text_extension'),
'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
];
$data['breadcrumbs'][] = [
'text' => $this->language->get('heading_title'),
'href' => $this->url->link('extension/module/pdr', 'user_token=' . $this->session->data['user_token'], true)
];


$data['action'] = $this->url->link('extension/module/pdr', 'user_token=' . $this->session->data['user_token'], true);
$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);


$data['module_pdr_status'] = $this->request->post['module_pdr_status'] ?? $this->config->get('module_pdr_status');


$data['header'] = $this->load->controller('common/header');
$data['column_left'] = $this->load->controller('common/column_left');
$data['footer'] = $this->load->controller('common/footer');


$this->response->setOutput($this->load->view('extension/module/pdr', $data));
}


public function install() {
$this->load->model('setting/event');
$this->load->model('setting/setting');
$this->db->query(file_get_contents(DIR_SYSTEM . 'sql/pdr_install.sql'));


// Event: after product delete (admin)
$this->model_setting_event->addEvent('pdr_product_delete', 'admin/model/catalog/product/deleteProduct/after', 'extension/module/pdr_event/productDeleteAfter');


// Event: before SEO URL parse (catalog) to handle redirects
$this->model_setting_event->addEvent('pdr_redirect', 'catalog/controller/common/seo_url/before', 'extension/module/pdr_redirect/onSeoUrlBefore');


$this->model_setting_setting->editSetting('module_pdr', ['module_pdr_status' => 1]);
}


public function uninstall() {
$this->load->model('setting/event');
$this->model_setting_event->deleteEventByCode('pdr_product_delete');
$this->model_setting_event->deleteEventByCode('pdr_redirect');
$this->db->query(file_get_contents(DIR_SYSTEM . 'sql/pdr_uninstall.sql'));
}


protected function validate() {
if (!$this->user->hasPermission('modify', 'extension/module/pdr')) {
$this->error['warning'] = $this->language->get('error_permission');
}
return !$this->error;
}
}