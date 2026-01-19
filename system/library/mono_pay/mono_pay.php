<?php

class MonoPay {
    public $api_url = "https://api.monobank.ua/api/merchant/";
	public $currencies = array('UAH' => 980, 'USD' => 840, 'EUR' => 978);
	public $payment_type = array('hold', 'debit');
	public $succes_payment_type = array('hold', 'success');
	private $secret_key = '';
	private $method = 'POST';
	
	/**
     * @param $key
     */
    public function setSecretKey($key) {
        $this->secret_key = $key;
    }

	/**
     * @return $secret_key
     */
    public function getSecretKey() {
        return $this->secret_key; 
    }	
	
	/**
     * @param $method
     */
    public function setTypeMethod($method) {
        $this->method = $method;
    }

	/**
     * @return $method
     */
    public function getTypeMethod() {
        return $this->method; 
    }
	
	/**
     * @param $payment fields
     */
	public function getInvoice($data) {
		$result = $this->getApiData($data);

		return $result;
	}
	
	/**
     * @return $fields
     */
	public function getTransactionInfo($data) {
		$result = $this->getApiData($data);

		return $result;
	}
	
	public function getStatements($data) {
		$result = $this->getApiData($data);

		return $result;
	}
	
	public function transactionSettle($data) {
		$result = $this->getApiData($data);

		return $result;
	}	
	
	public function transactionRefund($data) {
		$result = $this->getApiData($data);

		return $result;
	}
	
	public function deleteInvoice($data) {
		$result = $this->getApiData($data);

		return $result;
	}
	
	public function logError($data) {		
		if(!empty($data['errCode']) && !empty($data['errText'])) {
			$error = array('code' => $data['errCode'], 'text' => $data['errText']);
		} elseif(!empty($data['errorDescription'])) {
			$error = array('text' => $data['errorDescription']);
		} else {
			return false;
		}

		$log = new Log('mono.log');
		$log->write('--------- Відповідь платіжної системи з помилкою: ПОЧАТОК ---------');
		$log->write(json_encode($error));
		$log->write('--------- Відповідь платіжної системи з помилкою: КІНЕЦЬ ---------');
		
		return 'Error: ' . json_encode($error);
	}
	
	private function getApiData($data) {
		$ch = curl_init();
		
		curl_setopt_array($ch, array(
        CURLOPT_URL => $this->api_url . $data['api_uri'],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $this->method,
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'X-Token: ' . $this->secret_key . ''
            ),
        ));
		
		$result_data = json_decode(curl_exec($ch), true);

		curl_close($ch);
		
		return $result_data;
	}	
}