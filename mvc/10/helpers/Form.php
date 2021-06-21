<?php

class Form
{
    //ラジオボタンの選択
    public function checked($value, $target)
    {
        if ($value == $target) {
            return 'checked';
        }
    }

    //プルダウンの選択
    public function selected($value, $target)
    {
        if ($value == $target) {
            return 'selected';
        }
    }

    //性別のラベル表示
    public static function gender($key)
    {
        $genders = ['male' => '男性', 'female' => '女性'];
        if (isset($genders[$key])) {
            return $genders[$key];
        }
        return '';
    }

}
