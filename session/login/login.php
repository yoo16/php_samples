<?php
session_start();

if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);
}
if (isset($_SESSION['posts'])) {
    $posts = $_SESSION['posts'];
}

$user = [];
//POSTデータチェック
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $posts = check($_POST);
    $_SESSION['posts'] = $posts;
    if ($errors = validate($posts)) {
        $_SESSION['errors'] = $errors;
        header('Location: login.php');
        exit;
    } else {
        $user = auth($posts['email'], $posts['password']);
        if ($user) {
            $_SESSION['auth_user'] = $user;
            unset($_SESSION['posts']);
            header('Location: user/');
            exit;
        }
    }
}

//ユーザ一検索（Email）
function findByEmail($email)
{
    foreach (all() as $value) {
        if ($value['email'] == $email) {
            return $value;
        }
    }
}

//ユーザ一覧
function all()
{
    $password = password_hash('password', PASSWORD_BCRYPT);
    // $password = 'password';
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
    ];
    return $users;
}

//ユーザ認証
function auth($email, $password)
{
    if (!$email) return;
    if (!$password) return;
    foreach (all() as $user) {
        if ($user['email'] == $email) {
            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }
    }
}

function check($posts)
{
    if (empty($posts)) return;
    foreach ($posts as $column => $post) {
        $posts[$column] = htmlspecialchars($post, ENT_QUOTES, 'UTF-8');
    }
    return $posts;
}

function validate($data)
{
    $errors = [];
    if (empty($data['email'])) $errors['email'] = 'Emailを入力してください。';
    if (empty($data['password'])) $errors['password'] = 'パスワードを入力してください。';
    return $errors;
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="h2">ログイン</h2>
        <form action="login.php" method="post">
            <div class="form-floating mb-3">
                <input class="form-control" type="email" name="email" value="<?= @$posts['email'] ?>">
                <label for="">メールアドレス</label>
                <p class="text-danger"><?= @$errors['email'] ?></p>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="password" name="password">
                <label for="">パスワード</label>
                <p class="text-danger"><?= @$errors['password'] ?></p>
            </div>
            <div>
                <button class="btn btn-primary">ログイン</button>
            </div>
        </form>
    </div>
</body>

</html>