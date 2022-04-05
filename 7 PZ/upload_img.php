<?php
include 'db.php';
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("IMG", ROOT . "/img");

$resultImg = mysqli_query($db, "SELECT id_product FROM products");
if($resultImg -> num_rows == 0){
    echo 'Таблица пустая';
    $images = array_splice(scandir(IMG), 2);
    mysqli_query($db, "INSERT INTO products(`img`) VALUES ('" . implode("'),('", $images) . "')");
}