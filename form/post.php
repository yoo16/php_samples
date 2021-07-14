<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form action="get.php" method="post">
            <div class="mb-3">
                <label for="input_email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="input_email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="input_password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="input_password">
            </div>
            <button class="btn btn-primary">送信</button>
        </form>
    </div>
</body>

</html>