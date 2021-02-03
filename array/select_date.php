<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <select name="year" id="">
        <?php foreach (range(1900, 2030) as $year) : ?>
            <option value="<?= $year ?>" name="year"><?= $year ?>年</option>
        <?php endforeach ?>
    </select>
</body>

</html>