<?php if ($allow): ?>

    Добро пожаловать <?= $login ?> <a href="?logout">[Выход]</a>
    <br>
    <a href="/">Главная</a>
    <a href="basket.php">Корзина(<?=$basketrows['COUNT(id)']?>)</a>
    <br>
    <?php foreach ($result as $results): ?>
        <div class="block">
            <form action="product.php" method="post">
                <input type="hidden" name="id" value="<?= $results['id_product']; ?>">
                <div class="blockName">
                    <h2><?= $results['name'] ?></h2>
                </div>
                <div>
                    <img src="img/<?= $results['img'] ?>" alt="">
                </div>
                <div>
                    <b>Цена: <?= $results['price'] ?> руб.</b>
                </div>
                <div class="blockSubmit">
                    <a href="product.php?id=<?=$results['id_product']?>">К товару</a> <b>/</b>
                    <a href="/?action=basket&&id=<?= $results['id_product'];?>&&price=<?= $results['price'] ?>">В
                        корзину</a>
                </div>

            </form>
        </div>
        <br>
        <hr>
    <?php endforeach; ?>
<?php else: ?>
    <form action="" method="post">
        <input type="text" name="login">
        <input type="password" name="password">
        Save? <input type='checkbox' name='save'>
        <input type="submit" name="ok">
    </form>
<?php endif; ?>
<br>

