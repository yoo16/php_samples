<?php

class Member {

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

}