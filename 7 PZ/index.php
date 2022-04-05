<?php
include "auth.php";
session_start();
$session = session_id();
include 'upload_img.php';
$result = mysqli_query($db, "SELECT * FROM products");
$resultrows = $result->num_rows;
if($_GET['action'] == 'basket'){
    $id_prod = (int)$_GET['id'];
    $price = (int)$_GET['price'];
    mysqli_query($db, "INSERT INTO `basket` (`session_id`, `prod_id`, `price`) VALUES ('$session', '$id_prod', '$price')");
    header('Location:/');
    die();
}
$basketrow = mysqli_query($db, "SELECT COUNT(id) FROM `basket` WHERE session_id = '$session'");
$basketrows = mysqli_fetch_assoc($basketrow);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<?php include "menu.php";?>



</body>
</html>