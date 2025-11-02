<?php
/** @var \App\Components\Menu $menu */
?>

<aside>
    <nav>
        <h3><?php echo $menu->title; ?></h3>
        <ul>
            <?php foreach ($menu->persons as $person): ?>
                <li>
                    <a class="<?php echo $person->active ? 'active' : ''; ?>" href="?person=<?php echo $person->id ?>">
                        <?php echo $person->name ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</aside>
