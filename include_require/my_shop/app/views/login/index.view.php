<div class="container">
    <h2 class="h2 text-center p-3">ログイン</h2>
    <form action="auth.php" method="post">
        <div class="form-floating mb-3">
            <input class="form-control" type="email" name="email">
            <label for="">メールアドレス</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" type="password" name="password">
            <label for="">パスワード</label>
        </div>
        <div class="text-center m-3">
            <button class="btn btn-primary">ログイン</button>
        </div>
    </form>
</div>