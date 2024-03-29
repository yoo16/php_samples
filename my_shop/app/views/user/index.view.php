<!DOCTYPE html>
<html lang="ja">

<?php include 'app/views/components/head.php' ?>

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
                <form action="logout.php" class="d-flex" method="post">
                    <button class="btn btn-outline-primary" type="submit">ログアウト</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="h1">MyPage</h1>
        <label for="">Name</label>
        <p class="p-3"><?= $user->value['name'] ?></p>
        <label for="">Email</label>
        <p class="p-3"><?= $user->value['email'] ?></p>
    </div>
</body>

</html>