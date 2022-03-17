<?php
include 'resize.php';
const SMALL = 'gallery_img/small/';
const BIG = 'gallery_img/big/';
function GetGallery ($distance)
    {
        $images = array_slice(scandir($distance), 2);
        return $images;
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php foreach (GetGallery(SMALL) as $image):?>
    <a rel="gallery" class="photo" href="<?=BIG?>/<?=$image?>"><img src="<?=SMALL?>/<?=$image?>" width="150" height="100" /></a>
<?php endforeach; ?>

</body>
</html>


