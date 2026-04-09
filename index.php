<?php

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мой сайт</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <?php include 'menu.php'; ?>
</nav>

<table>
    <thead>
        <tr>Таблица умножения</tr>
    </thead>
    <tbody>
    <?php for ($i = 1; $i <= 10; $i++): ?>
    <tr>
        <?php for($j = 1; $j <= 10; $j++): ?>
        <td>
            <?= $i*$j ?>
        </td>
        <?php endfor; ?>
    </tr>
    <?php endfor; ?>
    </tbody>
</table>
</body>
</html>