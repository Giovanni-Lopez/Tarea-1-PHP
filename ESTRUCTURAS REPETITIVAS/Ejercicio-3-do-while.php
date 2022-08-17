<?php

    /*     
        3) Un vendedor ha hecho una serie de ventas y desea saber cuántas de éstas fueron de $200 o menos; cuántas
        fueron mayores a 200 pero inferiores a 400 y cuántas de 400 o más. 
        Elabore la información para ese vendedor después de leer los datos de entrada. Considere –1 como fin de datos. 
    */

$stop = 0;
$cantVentas = 0;
$ventas = 0;
$v200 = 0;
$vM200 = 0;
$vM400 = 0;

do {
        $cantVentas = readline("Ingrese la serie de ventas que a realizado: ");

        for ($i=1; $i <= $cantVentas; $i++) { 

            $ventas = readline("Ingrese Cantidad de la Venta numero: ".$i." | ");

            if ($ventas <= 200) {                
                $v200++;
            }elseif ($ventas > 200 && $ventas < 400) {                
                $vM200++;
            }else{                
                $vM400++;
            }

        }

        echo "Total de ventas iguales a 200 y menos: ".$v200."\n";
        echo "Total de ventas mayores a 200 pero menores a 400: ".$vM200."\n";
        echo "Total de ventas mayores o iguales a 400: ".$vM400."\n";
                
        $stop = readline("Desea Continuar 1=Si, 2=No ¿? ");    

        if ($stop == 2)
        {
            $stop = -1;
            echo "Mucho gusto que uses mi programa____!";
        }

    } while ($stop != -1);
?>