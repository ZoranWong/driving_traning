<?php
/**
 * Created by PhpStorm.
 * User: wangzaron
 * Date: 2018/6/20
 * Time: 上午10:16
 */
if(!function_exists('upperCaseSplit')){
    function upperCaseSplit(string $des, string $delimiter = ' ')
    {
        $strArr = preg_split('/(?=[A-Z])/', $des);
        if(count($strArr) <= 1){
            return $des;
        }
        return strtolower(implode($strArr, $delimiter));
    }
}