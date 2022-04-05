<?php
include "db.php";
$id = (int)($_REQUEST['id']);

$com = 'add';
$buttonText = 'Добавить';
$rowEditCom = [];

$result = mysqli_query($db, "SELECT * FROM products WHERE id_product = $id");
$row = mysqli_fetch_assoc($result);

$resultCom = mysqli_query($db, "SELECT * FROM comment where id_com = $id");
$rowCom = mysqli_fetch_assoc($resultCom);

if ($_GET['action'] == 'save') {
    $name = strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $_POST['name'])));
    $desc = strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $_POST['desc'])));
    $price = strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $_POST['price'])));
    mysqli_query($db, "UPDATE `products` SET `name` = '$name', `description` = '$desc', `price` = '$price' WHERE `products`.`id_product` = $id");
}

if ($_GET['action'] == 'delete') {
    mysqli_query($db, "DELETE FROM `products` WHERE `products`.`id_product` = $id");

}
if ($_GET['com'] == 'add') {
    $nickname = strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $_POST['nickname'])));
    $text = strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $_POST['text'])));
    mysqli_query($db, "INSERT INTO `comment` (`id_com`, `com`, `name_com`) VALUES ($id, '$text', '$nickname')");
}
if ($_GET['com'] == 'del'){
    $idprim = (int)$_GET['idprim'];
    mysqli_query($db, "DELETE FROM `comment` WHERE `comment`.`id` = $idprim");
}
if ($_GET['com'] == 'edit'){
    $idprim = (int)$_GET['idprim'];
    $resultEditCom = mysqli_query($db, "SELECT * FROM comment WHERE id = $idprim");
    if ($resultEditCom) $rowEditCom = mysqli_fetch_assoc($resultEditCom);
    $buttonText = 'Править';
    $com = 'save';
}
if($_GET['com'] == 'save'){
    $idprim = (int)$_POST['idprim'];
    $nickname = strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $_POST['nickname'])));
    $text = strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $_POST['text'])));
    mysqli_query($db,"UPDATE comment SET name_com = '$nickname', com = '$text' WHERE id = $idprim");
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body class="prodBody">

<?php
if ($_GET['action'] == 'edit'):?>
    <form action="?action=save" method="post">
        <input type="hidden" name="id" value="<?= $row['id_product'] ?>">
        Название:
        <input type="text" name="name" value="<?= $row['name'] ?>">
        <br>Описание:
        <input type="textarea" name="desc" value="<?= $row['description'] ?>">
        <br>Цена:
        <input type="text" name="price" value="<?= $row['price'] ?>">
        <input type="submit" value="править">
    </form>
<?php endif; ?>

<div class="prodName">
    <h2><?= $row['name'] ?></h2>
</div>
<div class="prod">
    <div class="prodImg">
        <img src="img/<?= $row['img'] ?>" alt="">
    </div>
    <div class="prodDesc">
        <?= $row['description'] ?>
    </div>
</div>
<div>
    <h2>Цена:<?= $row['price'] ?> руб</h2>
</div>
<input type="submit" name="buy" value="Купить">

<a href="?action=edit&&id=<?=$row['id_product'];?>">Изменить</a>
<a href="?action=delete&&id=<?=$row['id_product'];?>">Удалить</a>
<a href="index.php">На главную</a>

<form action="?com=<?=$com?>" method="post">
    <h2>Отзывы на товар</h2>
    <input type="hidden" name="id" value="<?=$row['id_product'] ?>">
    <input type="hidden" name="idprim" value="<?=$rowEditCom['id']?>">
    <input type="text" name="nickname" value="<?=$rowEditCom['name_com']?>">
    <input type="textarea" name="text" value="<?=$rowEditCom['com']?>">
    <input type="submit" value="<?=$buttonText?>">
</form>
<?php foreach ($resultCom as $resultComs): ?>
    <h4>Пользователь:<?= $resultComs['name_com'] ?><a href="?com=edit&&idprim=<?=$resultComs['id']?>&&id=<?=$row['id_product']?>">[edit]</a><a href="?com=del&&idprim=<?=$resultComs['id']?>&&id=<?=$row['id_product']?>">[X]</a></h4>
    <h6><?=$resultComs['com']?></h6>
<?php endforeach; ?>

</body>
</html>
