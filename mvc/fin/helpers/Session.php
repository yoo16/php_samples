<?php
session_start();
session_regenerate_id(true);

class Session
{
    public static function load($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }

    public static function save($key, $value)
    {
        $_SESSION[$key] = $value;
    }

}