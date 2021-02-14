<?php
define('BASE_DIR', __DIR__ . '/../');
define('LIBS_DIR', __DIR__ . '/');
define('APP_DIR', BASE_DIR . 'app/');


require_once APP_DIR . 'settings/default.php';
//TODO auto loader
require_once LIBS_DIR . 'Session.php';
require_once LIBS_DIR . 'Model.php';
require_once LIBS_DIR . 'View.php';
require_once LIBS_DIR . 'Controller.php';
require_once LIBS_DIR . 'DB.php';
require_once LIBS_DIR . 'Route.php';

App::loadModels();

class App
{
    public static function loadModels()
    {
        $path = MODELS_DIR . '*.php';
        foreach (glob($path) as $file) {
            require_once $file;
        }
    }

}