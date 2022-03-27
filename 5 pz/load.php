<?php
include 'db.php';

$dir = (array_slice(scandir('img'), 2));
$result = mysqli_query($db, "SELECT * FROM `img`");
$row = mysqli_fetch_assoc($result);
header("Location:index.php");
foreach ($dir as $director) {

    $directory = strval($director);


        if (array_search($directory, $row,false)) {
            echo 1;
//            continue;
        } else {
            echo 2;
            mysqli_query($db, "INSERT INTO `img` (`name`,`open`) VALUES ('$directory','0')");
        }
}
//var_dump($directory);



