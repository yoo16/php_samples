<?php

class Member
{
    //会員のデータ
    public $value = [
        'name' => '',
        'kana' => '',
        'email' => '',
        'password' => '',
        'tel' => '',
        'year' => 1980,
        'gender' => 'male',
    ];

    //エラー情報
    public $errors = [];

    /**
     * データバインド（$value に一括設定）
     */
    public function bind($posts)
    {
        //データがなかったら処理しない
        if (empty($posts)) return;
        // $value のキー（カラム）を取得（配列）
        // name, kana, password, ...
        $columns = array_keys($this->value);
        foreach ($columns as $column) {
            $this->value[$column] = $posts[$column];
        }
    }

}
