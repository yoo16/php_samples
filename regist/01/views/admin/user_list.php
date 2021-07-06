<!DOCTYPE html>
<html lang="ja">

<?php include('views/components/header.php') ?>

<body>
    <div class="container">
        <h2 class="h2">ユーザ一覧</h2>
        <table class="table">
            <tr>
                <th>氏名</th>
                <th>ふりがな</th>
                <th>メールアドレス</th>
                <th>電話番号</th>
                <th>誕生日年</th>
                <th>性別</th>
            </tr>
            <? foreach ($member->values as $value) : ?>
                <tr>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['kana'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['tel'] ?></td>
                    <td><?= $value['year'] ?>年</td>
                    <td><?= Form::gender($value['gender']) ?></td>
                </tr>
            <? endforeach ?>
        </table>
    </div>
</body>

</html>