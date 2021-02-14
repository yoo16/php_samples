<?php
define('VIEWS_DIR', APP_DIR.'views/');
define('LAYOUTS_DIR', VIEWS_DIR.'layouts/');

class View
{
    public static function render($view_file, $data = null, $layout = '')
    {
        $layout_path = self::layoutPath($layout);
        $view_path = self::viewPath($view_file);

        if (file_exists($view_path)) {
            try {
                if ($data) foreach ($data as $key => $_data) $$key = $_data;
                if (file_exists($layout_path)) {
                    include_once($layout_path);
                } else {
                    include_once($view_path);
                }
            } catch (Exception $e) {
                echo $e;
            }
        } else {
            exit("Not found views: {$view}");
        }
        exit;
    }

    public static function viewPath($path)
    {
        return VIEWS_DIR.$path;
    }

    public static function layoutPath($path)
    {
        if (!$path) $path = 'default.php';
        return LAYOUTS_DIR.$path;
    }

}