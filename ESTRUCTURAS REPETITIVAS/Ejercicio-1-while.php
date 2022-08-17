<?php

/* 1. Obtener suma de los términos de la serie: 2, 5, 7, 10, 12, 15, 17, .... 1800. */

    $x = 2; 
    $s = 0; 
    $c = 1;

    while ($x <= 1800)
    {
        $s += $x;

        if ($c % 2 != 0)
        {
            $x += 3;
        }
        else
        {
            $x += 2;
        }

        $c++;
    }

    echo "\n-------------------\n";
    echo "Resultado: ".$s."\n";
    echo "-------------------";

?>