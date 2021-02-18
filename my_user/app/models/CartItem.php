<?php

class CartItem extends Model
{
    public $table_name = 'items';
    public $columns = [
        'user_id',
        'item_id',
        'amount',
        'total_price',
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