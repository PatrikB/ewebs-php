<?php

namespace Ewebs;

/**
 * Class Ewebs
 *
 * Used for CURL API calls to ewebs backend
 *
 * @package Ewebs
 *
 */

class Ewebs
{
    
    public static $apiKey;
    public static $apiBase  = 'https://dashboard.ewebs.se/api/v1/';
    
    const VERSION = '1.0.0';
    
    public static function getApiKey()
    {
        
        return self::$apiKey;
        
    }
    
    public static function setApiKey($apiKey)
    {
        
        self::$apiKey = $apiKey;
        
    }
    
}