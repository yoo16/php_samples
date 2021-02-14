<form action="<?= Route::url('/user/auth.php') ?>" method="post">

    <?php if (isset($errors['login'])) : ?>
        <div class="alert alert-danger">
            <?= $errors['login'] ?>
        </div>
    <?php endif ?>

    <div class="card">
        <div class="card-header bg-info text-white">
            <h2 class="h2">Login</h2>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="text" name="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" required>
            </div>
        </div>

        <div class="card-footer">
            <div class="row justify-content-center">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
        </div>
    </div>
</form>