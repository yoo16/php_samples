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

    //バリデート
    public function validate()
    {
        //エラーメッセージの初期化（配列）
        $this->errors = [];

        //氏名の未入力チェック
        if (empty($this->value['name'])) {
            $this->errors['name'] = "氏名を入力してください";
        }
        //その他未入力チェックをする
        //...

        //電話番号のチェック
        if (!preg_match('/^[0-9]{10,12}$/', $this->value['tel'])) {
            $this->errors['tel'] = "電話番号はハイフンなしで入力してください";
        }
        //パスワードのチェック
        if (!preg_match('/^[a-zA-Z0-9_@]{6,20}$/', $this->value['password'])) {
            $this->errors['password'] = "パスワードは6文字以上20文字以内の半角英数（_ @ 含む）で入力してください";
        }
        //その他入力チェックをする
        //...

        return $this->errors;
    }
}
