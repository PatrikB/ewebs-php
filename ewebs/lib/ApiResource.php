<?php

namespace Ewebs;

use Ewebs\Curl;

/**
 * Class ApiResource
 *
 * @package Ewebs
 *
 */

class ApiResource
{
    
    public static function baseUrl()
    {
        
        return Ewebs::$apiBase;
        
    }
    
    public static function classUrl()
    {
        
        $class = get_called_class();
        
        if ($postfixNamespaces = strrchr($class, '\\'))
        {
            $class = substr($postfixNamespaces, 1);
        }
        
        if ($postfixFakeNamespaces = strrchr($class, ''))
        {
            $class = $postfixFakeNamespaces;
        }
        
        if (substr($class, 0, strlen('Ewebs')) == 'Ewebs')
        {
            $class = substr($class, strlen('Ewebs'));
        }
        
        $class = str_replace('_', '', $class);
        $name = urlencode($class);
        $name = strtolower($name);
        
        return $name;
        
    }
    
    public static function _retrieve($id, $params = null)
    {
        
        $curl = new Curl();
        
        return $curl->request('get', self::baseUrl() . self::classUrl(), $id, $params);
        
    }
    
    public static function _create($id, $params = null)
    {
        
        $curl = new Curl();
        
        return $curl->request('post', self::baseUrl() . self::classUrl(), $id, $params);
        
    }
    
}