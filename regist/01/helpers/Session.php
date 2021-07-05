<?php
//セッションを開始
session_start();
//任意
session_regenerate_id(true);

class Session {

    //セッション読み込み
    public static function load($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }

    //セッション保存
    public static function save($key, $value) {
        $_SESSION[$key] = $value;
    }

}