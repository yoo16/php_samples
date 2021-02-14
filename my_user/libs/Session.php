<?php
session_start();
session_regenerate_id(true);

class Session
{
    public static function has($key)
    {
        return isset($_SESSION[APP_KEY][$key]);
    }

    public static function add($key, $data)
    {
        $_SESSION[APP_KEY][$key] = $data;
    }

    public static function get($key)
    {
        if (self::has($key)) {
            return $_SESSION[APP_KEY][$key];
        }
    }

    public static function forget($key)
    {
        if (self::has($key)) {
            unset($_SESSION[APP_KEY][$key]);
        }
    }

}