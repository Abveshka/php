<?php

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мой сайт</title>
    <link rel="stylesheet" href="<?= dirname($_SERVER['SCRIPT_NAME']) ?>/style.css">
</head>
<body>
<nav>
    <?php include 'menu.php'; ?>
</nav>
<div class="gallery">
    <?php foreach ($photos as $photo): ?>
        <div class="item">
            <img src="<?= htmlspecialchars($photo) ?>"
                 alt="<?= htmlspecialchars($photo) ?>">
            <p><?= htmlspecialchars($photo) ?></p>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>