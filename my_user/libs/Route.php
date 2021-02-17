<?php

class Route
{
    //TODO
    public static $base_url = '/';

    public static function redirect($action, $params = '')
    {
        $url = self::baseURL().$action;
        header("Location: {$url}");
        exit;
    }

    public static function baseURL()
    {
        //TODO
        $url = self::$base_url;
        if (defined('BASE_URL')) $url = BASE_URL;
        return $url;
    }

    public static function url($path)
    {
        //TODO
        $base_url = self::baseURL();
        $url = "{$base_url}{$path}";
        return $url;
    }
}