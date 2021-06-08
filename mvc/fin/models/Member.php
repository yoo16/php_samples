<?php

class Member
{
    public $value = [
        'name' => '',
        'kana' => '',
        'email' => '',
        'password' => '',
        'tel' => '',
        'year' => 1980,
        'gender' => 'male',
        'q1' => '',
    ];
    public $errors = [];

    public function bind($posts)
    {
        if (empty($posts)) return;
        $columns = array_keys($this->value);
        foreach ($columns as $column) {
            if (isset($posts[$column])) {
                $this->value[$column] = $posts[$column];
            }
        }
    }

    public function validate()
    {
        $this->errors = [];
        //empty
        if (empty($this->value['name'])) {
            $this->errors['name'] = '氏名を入力してください';
        }
        if (empty($this->value['kana'])) {
            $this->errors['kana'] = 'かなを入力してください';
        }
        if (empty($this->value['email'])) {
            $this->errors['email'] = 'メールアドレスを入力してください';
        }
        if (empty($this->value['password'])) {
            $this->errors['password'] = 'パスワードを入力してください';
        }
        if (empty($this->value['tel'])) {
            $this->errors['tel'] = '電話番号を入力してください';
        }

        //match
        if (!preg_match("/^[a-z0-9_@]{6,20}$/", $this->value['password'])) {
            $this->errors['password'] = 'パスワードは6文字以上20文字以下の半角英数で入力してください';
        }
        if (!preg_match("/^[0-9]{10,12}$/", $this->value['tel'])) {
            $this->errors['tel'] = '電話番号が正しくありません';
        }
    }

}
