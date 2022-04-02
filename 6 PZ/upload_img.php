<?php
include 'db.php';
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("IMG", ROOT . "/6 PZ/img/");

$resultImg = mysqli_query($db, "SELECT id FROM products");
if($resultImg -> num_rows == 0){
    echo 'Таблица пустая';
    $images = array_splice(scandir(IMG), 2);
    mysqli_query($db, "INSERT INTO products(`img`) VALUES ('" . implode("'),('", $images) . "')");
}