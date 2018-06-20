<?php
/**
 * Created by PhpStorm.
 * User: wangzaron
 * Date: 2018/6/20
 * Time: 上午9:17
 */

namespace App\Entities\Traits;


trait ModelAttributesAccess
{
    public function __get($name)
    {
        // TODO: Implement __get() method.
        if(($value = $this->getAttributeValue($name)) || ($value = $this[$name])){
            return $value;
        }
        $key = upperCaseSplit($name, '_');
        return $this->getAttributeValue($key) ?? $this[$key] ;
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->setAttribute(upperCaseSplit($name, '_'), $value);
    }
}