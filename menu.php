<?php
$menuItems = [
        'a', 'b', 'c', 'd'
];

$menu2 = '
<nav class="menu2">
    <div><a><span>Главная</span></a></div>
    <div class="menuitems">
        <a><span>Новости</span></a>
        <div class="submenu">
            <a>Новости о спорте</a>
            <a>Новости о работе</a>
            <a>Новости о семье</a>
        </div>
    </div>
    <div><a><span>Контакты</span></a></div>
</nav>';
?>

<div class="menu">
    <?php foreach ($menuItems as $item): ?>
        <span><?= htmlspecialchars($item) ?></span>
    <?php endforeach; ?>
</div>
    <h2>Второе меню (статическое)</h2>
<?= $menu2 ?>