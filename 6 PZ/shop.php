<?php
include 'upload_img.php';
$result = mysqli_query($db, "SELECT * FROM products");
$resultrows = $result->num_rows;

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
<body class="main">


<?php foreach ($result as $results): ?>
    <div class="block">
        <form action="product.php" method="post">
            <input type="hidden" name="id" value="<?= $results['id']; ?>">
            <div class="blockName">
                <h2><?= $results['name'] ?></h2>
            </div>
            <div>
                <img src="img/<?= $results['img'] ?>" alt="">
            </div>
            <div>
                <b>Цена: <?=$results['price']?></b>
            </div>
            <div class="blockSubmit">
                <input type="submit" value="К товару">
            </div>
        </form>
    </div>
<?php endforeach; ?>


</body>
</html>
