<?php
$sueldo = 0;
    $aumento = 0;
    $suelAumento = 0;

    for ($i=0; $i < 5; $i++) { 

        $sueldo = readline("Ingrese sueldo de trabajador ". $i+1);

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