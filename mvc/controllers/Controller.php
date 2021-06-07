<?php

class Controller
{
    public $controller_name = '';
    public $action_name = '';

    function __construct()
    {
        // $path_strings = explode('index.php', $_SERVER['SCRIPT_NAME']);
        // $base_dir = $path_strings[0];
        // //$base_url = "http:/{$base_dir}";
        // $url_strings = explode('?', $_SERVER['REQUEST_URI']);
        // $base_url = $url_strings[0];
        // $param = $url_strings[1];
        // $params = explode('&', $param);

        // $request_url = $_SERVER['REQUEST_URI'];
        // str_replace($request_url, $base_dir, '');
    }

    function view()
    {
    }
}
