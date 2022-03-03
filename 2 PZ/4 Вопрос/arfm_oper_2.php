<?php
include '../3 вопрос/arfm_operation.php';
//$arg1 = 3;
//$arg2 = 4;
//$operation = raznn;
function MathOperation($arg1, $arg2, $operation)
{
    switch ($operation)
    {
        case "summ":
            return sum($arg1, $arg2);
        case "proizvv":
            return proizv($arg1, $arg2);
        case "raznn":
            return razn($arg1, $arg2);
        case "dell":
            return del($arg1, $arg2);
    }
}

echo MathOperation(4, 3, "dell");
