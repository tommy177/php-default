<?php
include 'db.php';
$result = mysqli_query($db, "SELECT * FROM `img`");
    foreach ($result as $results):?>
        <a href="big_img.php?id=<?=$results['id']?>"><img src="img/<?= $results['name'] ?>" width="300" height="200"> </a>
<?php endforeach;?>
<br>
<a href="load.php">Загрузить</a>

