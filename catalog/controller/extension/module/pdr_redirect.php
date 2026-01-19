<?php
class ControllerExtensionModulePDRRedirect extends Controller {
	// Runs before SEO URL routing: if from_path matches, issue 301 to to_path
	public function onSeoUrlBefore(&$route, &$args) {
		if (!$this->config->get('module_pdr_status')) return;


		// Path portion from the current request
		$uri = $this->request->server['REQUEST_URI'] ?? '';
		if (!$uri) return;
		$path = parse_url($uri, PHP_URL_PATH);
		if (!$path) return;


		// Normalize: leading slash only, strip trailing slash (but not root)
		$path = '/' . ltrim($path, '/');
		if (strlen($path) > 1) {
			$path = rtrim($path, '/');
		}


		// Attempt to match per store & per language
		$store_id = (int)$this->config->get('config_store_id');
		$language_id = (int)$this->config->get('config_language_id');

		$query = $this->db->query("SELECT to_path, code FROM `" . DB_PREFIX . "pdr_redirect` WHERE status=1 AND store_id=" . (int)$store_id . " AND (language_id=" . (int)$language_id . ") AND from_path='" . $this->db->escape($path) . "' LIMIT 1");


		if ($query->num_rows) {
			$to_path = $query->row['to_path'];
			$code = (int)$query->row['code'];


			// Preserve query string if present
			$qs = parse_url($uri, PHP_URL_QUERY);
			if ($qs) {
				$to_path .= (strpos($to_path, '?') === false ? '?' : '&') . $qs;
			}


			$this->response->redirect($to_path, $code);
		}
	}
}