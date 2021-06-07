<?php

class Form
{
    public static function checked($value, $target)
    {
        if (is_array($value)) {
            return (in_array($target, $value)) ? 'checked' : '';
        } else {
            return ($value == $target) ? 'checked' : '';
        }
    }
    
    public static function selected($value, $target)
    {
        return ($value == $target) ? 'selected' : '';
    }
    
    public static function gender($key)
    {
        $genders = ['male' => '男性', 'female' => '女性'];
        if (isset($genders[$key])) {
            return $genders[$key];
        }
    }

}