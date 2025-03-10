<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Valorant, Data, Database, Game, Esport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="BUSSY STUDIO">
    <title>Go touch grass !</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body>
    <h1>List of <?= $category ?></h1>
    <ul>
        <?php foreach ($data['data'] as $item): ?>
            <li><?= $item['displayName'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
