<?php

    function sum ($a, $b ){
         return $a + $b;
    }

    function razn ($a, $b ){
        return $a - $b;
    }

    function proizv ($a, $b ){
        return $a * $b;
    }

    function del ($a, $b){
        if ($a == 0 || $b == 0)
        {
            echo "Больше так не делай.";
        }else{
            return $a / $b;
        }
    }

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
//MathOperation(1, 0, "dell");

