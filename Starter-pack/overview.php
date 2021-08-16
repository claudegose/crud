<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bucket-List - Dreams</title>
</head>
<body>

<h1 align="center">Bucket-List </h1>

<ul>
    <?php foreach ($cards as $card) : ?>
        <li><?= $card['Activity'] ?></li>
    <?php endforeach; ?>
</ul>
<ul>
    <?php foreach ($cards as $card) : ?>
        <li><?= $card['location'] ?></li>
    <?php endforeach; ?>
</ul>
<ul>
    <?php foreach ($cards as $card) : ?>
        <li><?= $card['by_when'] ?></li>
    <?php endforeach; ?>
</ul>



</body>
</html>