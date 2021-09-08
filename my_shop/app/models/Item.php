<?php

class Item extends Model
{
    public $table_name = 'items';
    public $columns = [
        'id',
        'name',
        'price',
        'stock',
    ];
    public static $error_messages = [
    ];

    public static function errorMessaage($type, $key)
    {
        if (isset(self::$error_messages[$type][$key])) {
            return self::$error_messages[$type][$key];
        }
    }

}