<?php
/**
 * Created by PhpStorm.
 * User: wilder19
 * Date: 29/09/18
 * Time: 10:07
 */
?>
<!DOCTYPE html>
<html>
<head> ... </head>
<body>
    <section>
        <h1>Items</h1>
            <ul>
            <?php foreach ($items as $item) : ?>
                <li><?= $item['title'] ?></li>
            <?php endforeach ?>
            </ul>
        </section>
</body>
</html>
