<?php
/** @var \App\Components\Menu $menu */

?>

<aside>
    <nav>
        <ul>
            <?php
            foreach ($menu->items as $item): ?>
                <li>
                    <a href="?person=<?php echo $item['id'] ?>">
                        <?php echo$item['vards'] ?>
                    </a>
                </li>
            <?php
            endforeach; ?>
        </ul>
    </nav>
</aside>