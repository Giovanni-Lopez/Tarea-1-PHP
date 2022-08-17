<?php

        /*2. Calcule el aumento de sueldos para 50 empleados de una empresa, bajo el siguiente criterio:
                  a. Si el sueldo es menor a $1000: aumento 12%
                  b. Si el sueldo está comprendido entre $1000 y $25000: aumento 10%
                  c. Si el sueldo es mayor a $25000: aumento 8%
                  d. Imprima el nuevo sueldo del trabajador y el monto total de la nómina considerando el aumento */

    $empleados = 0;
    $sueldo = 0;
    $aumento = 0;
    $nuevoSueldo = 0;
    $acumNomina = 0;

    for ($i=1; $i <= 50; $i++) { 

        $sueldo = readline("Ingrese sueldo de empleado ".($i).": $");
        echo "---------------------------------\n";

        if ($sueldo < 1000) {
            $aumento = $sueldo * 0.12;            
        }else if($sueldo > 1000 && $sueldo < 25000){
            $aumento = $sueldo * 0.10;
        }else if($sueldo > 25000){
            $aumento = $sueldo * 0.08;
        }                

        $nuevoSueldo = $sueldo + $aumento;

        $acumNomina += $nuevoSueldo;

        echo "---------------------------------\n";
        echo "Salario Ingresado $".$sueldo."\n";
        echo "Aumento $".$aumento."\n";
        echo "Nuevo Salario de Trabajador $".$nuevoSueldo."\n";      
        echo "---------------------------------\n";  
    }    
    echo "Nomina total $".$acumNomina."\n";
    echo "---------------------------------\n";

?>