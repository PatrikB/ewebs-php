<?php

namespace Ewebs;

/**
 * Class Form
 *
 * @package Ewebs
 *
 */

class Values extends ApiResource
{
    
    public static function retrieve($id, $opts = null)
    {
        
        return self::_retrieve($id, $opts);
        
    }
    
    public static function create($id, $values)
    {

        return self::_create($id, $values);
        
    }
    
}