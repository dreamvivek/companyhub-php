<?php
/*
	A simple library to consume CompanyHub API
	API Documentation : https://companyhub.com/docs/api-documentation
	Author : Vivek Muthal
	Email : vivek@dreamwares.com
*/
class CompanyHub{
	private $authorization, $baseUrl;
	
	function __construct($domain, $secret) {
        $this->authorization = $domain . ' ' . $secret;		
		$this->baseUrl = "https://api.companyhub.com/v1";
    }
	private function getCurl($url , $data, $id = null, $isDelete = false){
		/* Curl Initialized With Default Setup for Create, Read, Update	*/
		$curl = curl_init();
		$headers = array('Content-Type: application/json;charset=utf-8', 'Authorization: '.$this->authorization);
		if($data != null){
			if($isDelete){
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
			}else{
				if($id == null){
					curl_setopt($curl, CURLOPT_POST,true);
				}else{
					curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
				}
			}
			curl_setopt($curl, CURLOPT_POSTFIELDS,$data);			
		}	
		
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);	
		curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);			
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,false);
		return $curl;
	}	
	
	public function getData($url){
		$url = $this->baseUrl. $url;
		$curl = $this->getCurl($url, null);					
		$response = curl_exec($curl);
		curl_close($curl);		
		return $response;		
	}
	public function postData($tableName, $data, $id = null){		
		$data = json_encode($data);
		$url = $this->baseUrl. '/tables/'.$tableName;
		if($id != null){
			$url = $url . "/$id";
		}
		$curl = $this->getCurl($url, $data, $id);	
		$response = curl_exec($curl);					
		curl_close($curl);		
		return $response;
	}	
	public function deleteData($tableName, $data){
		$data = json_encode($data);
		$url = $this->baseUrl. '/tables/'.$tableName;
		$curl = $this->getCurl($url, $data, null, true);
		$response = curl_exec($curl);					
		curl_close($curl);		
		return $response;
	}
}
?>