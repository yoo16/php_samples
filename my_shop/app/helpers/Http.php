<?php 

class Http {
    public static function redirect($url)
    {
        header("Location: {$url}");
        exit;
    } 

    public static function checkPost()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            exit;
        }
    }
}
