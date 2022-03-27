<?php
include "db.php";

$id = (int)$_GET['id'];
mysqli_query($db,"UPDATE `img` SET open=OPEN + 1 WHERE id = $id");
$result = mysqli_query($db, "SELECT * FROM `img` WHERE id = $id");
$row = mysqli_fetch_assoc($result);
echo "Просмотры:" . $row['open'];
?>
<br>

<img src="img/<?= $row['name'] ?>" alt="" width="600" height="500">
<br>
<a href="index.php">На главную</a>