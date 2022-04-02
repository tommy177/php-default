<?php
include 'arfm_operation.php';


//error_reporting(E_ALL);

//$result = 0;
//$arg1 = 0;
//$arg2 = 0;
$operation = $_GET['operation'] ?? "add";

if (!empty($_GET)) {
    $arg1 = $_GET['arg1'];
    $arg2 = $_GET['arg2'];

    $result = MathOperation($arg1, $arg2, $operation);
}



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="arg1" value="<?=$arg1?>">
    <select name="operation">
        <option <?php if ($operation=='summ') echo 'selected';?> value="summ">+</option>
        <option <?php if ($operation=='raznn') echo 'selected';?> value="raznn">-</option>
        <option <?php if ($operation=='dell') echo 'selected';?> value="dell">/</option>
        <option <?php if ($operation=='proizvv') echo 'selected';?> value="proizvv">*</option>
    </select>
    <input type="text" name="arg2" value="<?=$arg2?>">
    <input type="submit" value="=">
    <input readonly type="text" name="result" value="<?=$result?>">
</form>
<a href="shop.php">Перейти к следующему заданию</a>
</body>
</html>
