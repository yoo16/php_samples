<?php
session_start();

$user = [];
//POSTデータチェック
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $posts = check($_POST);
    if ($errors = validate($posts)) {
        $_SESSION['errors'] = $errors;
        unset($_SESSION['user']);
        header('Location: ../login.php');
        exit;
    } else {
        $user = auth($_POST['email'], $_POST['password']);
        $_SESSION['user'] = $user;
    }
}

//ユーザがいなければログインページにリダイレクト
if (empty($_SESSION['user'])) {
    header('Location: ../login.php');
}
$user = $_SESSION['user'];

//ユーザ一覧
function fetchUsers()
{
    //$password = password_hash('password', PASSWORD_BCRYPT);
    $password = 'password';
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
    foreach (fetchUsers() as $user) {
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
<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MyPage</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
      <form action="../logout" class="d-flex" method="post">
        <button class="btn btn-outline-primary" type="submit">ログアウト</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container">
        <h1 class="h1">MyPage</h1>
        <p class="p-3">ようこそ！<?= $user['name'] ?>さん</p>
    </div>
</body>

</html>