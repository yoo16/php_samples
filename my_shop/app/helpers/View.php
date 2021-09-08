<?php
class View
{
    public static $viewDir = __DIR__ . '/../../app/views/';
    public static $layoutDir = __DIR__ . '/../../app/views/layouts/';
    public static $ext = '.view.php';

    public static function render($fileName, $params = null, $layoutName = 'app')
    {
        $template = self::templatePath($fileName);
        if (file_exists($template)) {
            if ($params) extract($params);
            $layout = self::layoutPath($layoutName);
            include $layout;
        } else {
            exit("Not found {$template}");
        }
    }

    public static function invalid($error)
    {
        if ($error) {
            return 'is-invalid';
        }
    }

    public static function templatePath($name)
    {
        return self::$viewDir . $name . self::$ext;
    }

    public static function layoutPath($name)
    {
        return self::$layoutDir . $name . self::$ext;
    }
}
