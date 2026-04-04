<?php
// menu.php — начинаем с PHP, потом закрываем тег
?>

<div class="menu">
    <?php foreach ($menuItems as $item): ?>
        <span><?= htmlspecialchars($item) ?></span>
    <?php endforeach; ?>
</div>