<?php
$a = 3;
$b = 0;
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
            echo "Error 404";
        }else{
            return $a / $b;
        }
    }
