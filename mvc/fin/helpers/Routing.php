<?php

class Routing
{
    // public $base_url = '';
    public $http_protocol = 'http';
    public $http_host = '';
    public $request_url = '';
    public $base_dir = '';

    public $controller = 'root';
    public $action = 'index';
    public $id = '';
    public $params = [];

    public $controller_name = 'RootController';

    function __construct()
    {
        $path_strings = explode('index.php', $_SERVER['SCRIPT_NAME']);
        $uri = $_SERVER['REQUEST_URI'];

        $this->base_dir = $path_strings[0];
        $this->http_protocol = $_SERVER['REQUEST_SCHEME'];
        $this->http_host = $_SERVER['HTTP_HOST'];
        $this->request_url = "{$this->http_protocol}://{$this->http_host}{$uri}";

        $uri = str_replace($this->base_dir, '', $_SERVER['REQUEST_URI']);
        $url_strings = explode('?', $uri);
        $url_string = $url_strings[0];
        $actions = explode('/', $url_string);
        if (!empty($actions[0])) $this->controller = $actions[0];
        if (!empty($actions[1])) $this->action = $actions[1];
        if (!empty($actions[2])) $this->id = $actions[2];

        //params
        if (isset($url_strings[1])) {
            $param_string = $url_strings[1];
            $params = explode('&', $param_string);
            foreach ($params as $param) {
                $params = explode('=', $param);
                $this->params[$params[0]] = $params[1];
            }
        }

        $this->controllerName();
        $this->launchController();
    }

    public function controllerName()
    {
        $this->controller_name = ucfirst($this->controller) . 'Controller';
    }

    public function launchController()
    {
        $error = '';
        $path = 'controllers/' . $this->controller_name . '.php';
        //has class
        if (file_exists($path)) {
            require_once 'controllers/' . $this->controller_name . '.php';
            $controller = new $this->controller_name;
            $func = $this->action;
            //has method action
            if (method_exists($controller, $func)) {
                $controller->$func();
            } else {
                $error = "Not found method {$func}() in {$path}";
            }
        } else {
            $error = "Not found controller {$path}";
        }
        if ($error) exit($error);
    }
}
