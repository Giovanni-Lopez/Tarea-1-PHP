<?php

/* 1. Dado el sueldo de 20 trabajadores, considere un aumento del 15% a cada uno de ellos, 
si su sueldo es inferior a $800. Imprima el sueldo con el aumento incorporado. */


    $sueldo = 0;
    $aumento = 0;
    $suelAumento = 0;

    for ($i=1; $i <= 20; $i++) { 

        $sueldo = readline("Ingrese sueldo de trabajador ". ($i)."  ");

        if($sueldo < 800){
            $aumento = $sueldo * 0.15;
        }else{
            $aumento = 0;
        }

        $suelAumento = $sueldo + $aumento;

        echo "Sueldo $".$sueldo."\n";
        echo "Aumento $".$aumento."\n";
        echo "Sueldo mas aumento $".$suelAumento."\n";
    }

?>