<?php
class ControllerExtensionModuleLoginOne extends Controller {
	public function index(): void {
		$this->load->language('extension/module/login_one');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_login_one', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module')
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/login_one', 'user_token=' . $this->session->data['user_token'])
		];

		$data['action'] = $this->url->link('extension/module/login_one', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_login_one_status'])) {
			$data['module_login_one_status'] = $this->request->post['module_login_one_status'];
		} else {
			$data['module_login_one_status'] = $this->config->get('module_login_one_status');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/login_one', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/login_one')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

    public function install()  {
        $this->load->model('setting/event');
		$this->model_setting_event->deleteEventByCode('augkt_themes_login_one');
        $this->model_setting_event->addEvent('augkt_themes_login_one', 
		'admin/view/common/login/before', 'extension/module/login_one/custom_login_one');
    }

    public function uninstall() {
        $this->load->model('setting/event');

        $this->model_setting_event->deleteEventByCode('augkt_themes_login_one');
    }

	public function custom_login_one(&$route, &$data, &$output): void {
        // In case the extension is disabled, do nothing
        if (!$this->config->get('module_login_one_status')) {
            return;
        }

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $this->config->get('config_url') . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$data['site_name'] = $this->config->get('config_name');
		$data['lang'] = $this->language->get('code');

		$data['title'] = $this->document->getTitle();
		$data['base'] = $this->config->get('config_url');
		$data['description'] = $this->document->getDescription();

		$output = $this->load->view('extension/module/login', $data);
    }
}