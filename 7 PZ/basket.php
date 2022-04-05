<?php
include 'db.php';
session_start();
$session = session_id();
if (($_GET['action']) == 'del'){
    $id = (int)($_GET['id']);
    mysqli_query($db,"DELETE FROM `basket` WHERE `basket`.`id` = '$id'");
}

$basket = mysqli_query($db, "SELECT * FROM `basket`,`products` WHERE basket.session_id = '$session' AND basket.prod_id = products.id_product");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
    <a href="/">Главная</a>
    <a href="basket.php">Корзина</a>
    <br>
<?php foreach ($basket as $baskets): ?>
    <div class="block">
        <form action="product.php" method="post">
            <input type="hidden" name="id" value="<?= $baskets['id']; ?>">
            <div class="blockName">
                <h2><?= $baskets['name'] ?></h2>
            </div>
            <div>
                <img src="img/<?= $baskets['img'] ?>" alt="">
            </div>
            <div>
                <b>Цена: <?= $baskets['price'] ?> руб.</b>
            </div>
            <div class="blockSubmit">
                <a href="?action=del&&id=<?=$baskets['id']?>">Удалить из корзины.</a>
                <input type="submit" value="К товару">

            </div>
        </form>
    </div>
    <hr>
<?php endforeach; ?>

<br>

