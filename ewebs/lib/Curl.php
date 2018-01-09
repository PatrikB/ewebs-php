<?php

namespace Ewebs;

/**
 * Class Curl
 *
 * @package Ewebs
 *
 */

class Curl
{
    
    const DEFAULT_TIMEOUT = 80;
    const DEFAULT_CONNECT_TIMEOUT = 30;

    private $timeout = self::DEFAULT_TIMEOUT;
    private $connectTimeout = self::DEFAULT_CONNECT_TIMEOUT;
    
    public function request($method, $absUrl, $id, $params = null)
    {
        
        if($method == 'get')
        {
            
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
                CURLOPT_HTTPHEADER => array('Content-Type: application/json', 'Authorization: Bearer ' . Ewebs::getApiKey()),
                CURLOPT_CONNECTTIMEOUT => $this->connectTimeout,
                CURLOPT_TIMEOUT => $this->timeout,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $absUrl . '/' . $id,
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            
            return $response;
            
        }
        
        if($method == 'post')
        {
            
            $curl = curl_init();
            
            $data['id'] = $id;
            $data['values'] = $params;
            
            $data = json_encode($data);
            
            curl_setopt_array($curl, array(
                CURLOPT_HTTPHEADER => array('Content-Type: application/json', 'Authorization: Bearer ' . Ewebs::getApiKey()),
                CURLOPT_CONNECTTIMEOUT => $this->connectTimeout,
                CURLOPT_TIMEOUT => $this->timeout,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $absUrl,
                CURLOPT_POSTFIELDS => $data
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            
            return $response;
            
        }
        
    }
    
}