<?php
/**
 * Created by PhpStorm.
 * User: liang wei
 * Date: 2019.02.23
 * Time: 18:34
 */

class App
{
    public static $ACTION_GET_START_IMG = 0;
    public static $ACTION_GET_RELEASE_VERSION = 1;
    /**
     * @param $sign 客户端计算的秘钥
     */
    public static function check_sign($sign){
       if ($sign==App::get_sign()){
            return true;
       }
        return false;

    }
    /**
     * 用于验证请求的合法性
     * 算法:当前year month day hour
     */
    public static function get_sign(){
        $content = date('YmdH',time());
        return md5($content);
    }

    /**
     * 封装的get
     * @param $key 键
     */
    public static function c_get($key){
        if (isset($_GET[$key])){
            return $_GET[$key];
        }else{
            return '没有获取到key:'.$key;

        }

    }
}