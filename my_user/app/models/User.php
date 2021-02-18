<?php

class User extends Model
{
    public $table_name = 'users';
    public $columns = [
        'name',
        'email',
    ];
    public static $error_messages = [
        'name' => [
            'required' => '氏名を入力してください',
        ],
        'password' => [
            'required' => 'パスワードを入力してください',
        ],
        'email' => [
            'required' => 'Email を入力してください',
            'exists' => 'Email は既に登録されています',
        ],
        'login' => [
            'invalid' => 'Email またはパスワードが間違っています',
        ],
    ];

    public static function errorMessaage($type, $key)
    {
        if (isset(self::$error_messages[$type][$key])) {
            return self::$error_messages[$type][$key];
        }
    }

    public function checkAuth()
    {
        //セッションからユーザ情報があるかチェック
        $user = Session::get('user');
        if (empty($user['id'])) {
            //ログインページにリダイレクト
            Route::redirect('/user/login.php');
        }
        return $user;
    }

    public function auth($data)
    {
        $email = $data['email'];
        $password = $data['password'];
        //TODO
        $params['where'] = "email = '{$email}'";
        $user = $this->fetch($params);

        //1) 生のパスワードの場合
        // SELECT * FROM users WHERE email = 'xxxx' AND password = 'xxxx';

        //2) ハッシュパスワードの場合
        // SELECT * FROM users WHERE email = 'xxxx';
        //ユーザが入力したパスワード
        //テーブルのレコードのパスワード
        //ハッシュの検証
        if (password_verify($password, $user['password'])) {
            //認証が成功
            //セッションに ログインユーザ情報を登録
            Session::add('user', $user);
            // $_SESSION
            return $user;
        } else {
            $this->errors['login'] = self::errorMessaage('login', 'invalid');
            Session::add('errors', $this->errors);
        }
    }

    public function validate($data)
    {
        //TODO bind $data
        if (empty($data['name'])) $this->errors['name'] = self::errorMessaage('name', 'required');
        if (empty($data['password'])) $this->errors['password'] = self::errorMessaage('password', 'required');
        $this->validateEmail($data);

        if ($this->errors) Session::add('errors', $this->errors);
    }

    public function validateEmail($data)
    {
        $error = '';
        if (empty($data['email'])) {
            $error = self::$error_messages['email']['required'];
        } else {
            $params['where'] = "email = '{$data['email']}';";
            if ($this->fetch($params)) $error = self::errorMessaage('email', 'exists');
        }
        //SELECT * FROM users WHERE email = 'xxxx';
        if ($error) $this->errors['email'] = $error;
        return $error;
    }
}