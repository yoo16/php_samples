<h2 class="h2">ユーザトップページ</h2>
<div class="alert alert-info">
   ユーザトップページです 
</div>

<p>
   <h3 class="h3">ユーザ名</h3> 
   <?= $user['name'] ?>

   <h3 class="h3">Email</h3> 
   <?= $user['email'] ?>

   <h3 class="h3">パスワード（ハッシュ：復号できない）</h3> 
   <?= $user['password'] ?>
</p>