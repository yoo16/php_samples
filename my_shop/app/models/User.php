<?php
class User
{
    public $table_name = 'users';
    public $columns = [
        'id',
        'name',
        'price',
        'password',
        'gender',
    ];

    public function findByEmail($email)
    {
        foreach ($this->all() as $value) {
            if ($value['email'] == $email) {
                return $value;
            }
        }
    }

    public function all()
    {
        return $this->testUsers();
    }

    public function testUsers()
    {
        $password = password_hash('password', PASSWORD_BCRYPT);
        $users = [
            [
                'id' => 1,
                'name' => '東京　太郎',
                'email' => 'tokyo@test.com',
                'password' => $password,
            ],
            [
                'id' => 2,
                'name' => '横浜　かずこ',
                'email' => 'yokohama@test.com',
                'password' => $password,
            ],
            [
                'id' => 3,
                'name' => '大阪　ジロー',
                'email' => 'osaka@test.com',
                'password' => $password,
            ],
        ];
        return $users;
    }

    public function auth($email, $password)
    {
        if (!$email) return;
        if (!$password) return;
        $value = $this->findByEmail($email);
        if ($value && $value['email'] == $email) {
            if (password_verify($password, $value['password'])) {
                $this->value = $value;
                Session::save('auth_user', $this->value);
                return $this->value;
            }
        }
        $errors['email'] = 'ユーザ名またはパスワードが間違っています。';
        Session::save('errors', $errors);
    }

    public function logout()
    {
        Session::clear('auth_user');
    }

    public function authUser()
    {
        $this->value = Session::load('auth_user');
    }

    public function check($posts)
    {
        if (empty($posts)) return;
        foreach ($posts as $column => $post) {
            $posts[$column] = htmlspecialchars($post, ENT_QUOTES, 'UTF-8');
        }
        return $posts;
    }

    public function validate($data)
    {
        $errors = [];
        if (empty($data['email'])) $errors['email'] = 'Emailを入力してください。';
        if (empty($data['password'])) $errors['password'] = 'パスワードを入力してください。';
        return $errors;
    }

    public function validateRegist($data)
    {
        $errors = [];
        if (empty($data['name'])) $errors['name'] = 'ユーザ名を入力してください。';
        if (empty($data['email'])) $errors['email'] = 'Emailを入力してください。';
        if (empty($data['password'])) $errors['password'] = 'パスワードを入力してください。';
        return $errors;
    }
}
