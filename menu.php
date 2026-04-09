<?php
$menuItems = [
        'a', 'b', 'c', 'd'
];

$menuItems3 = [
        "News" => ["hobby", "photography"],
        "About" => ["about", "nothing"],
        "Contact" => ["contact", "notcontact"],
        "Ayes" => "baby",
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
    <h2>Третье меню (циклом)</h2>
<div class="menu3">

    <?php foreach ($menuItems3 as $item => $keys):?>
    <div class="menuitems3">
        <span><?= htmlspecialchars($item) ?></span>
        <?php if (is_array($keys)): ?>
        <div class="submenu3">
            <?php foreach ($keys as $itemsmall):?>
                <a><?= htmlspecialchars($itemsmall) ?></a>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
            <div class="subsubmenu3">
            <a><?= htmlspecialchars($keys) ?></a>
            </div>
        <?php endif; ?>
    </div>
    <?php endforeach; ?>
</div>
