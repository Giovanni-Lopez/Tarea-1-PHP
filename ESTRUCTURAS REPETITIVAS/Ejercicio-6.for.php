<?php


/* 6. Una compañía de seguros tiene contratados a 30 vendedores. Cada uno hace tres ventas a la semana. 
Su política de pagos es que un vendedor recibe un sueldo base y 10% extra por comisiones de sus ventas. 
El gerente de su compañía desea saber cuánto dinero obtendrá en la semana cada vendedor por concepto de 
comisiones por las tres ventas realizadas y cuánto tomando en cuenta su sueldo base y sus comisiones. */

    $sueldo = 0.00;
    $ventas = 0.00;
    $comision = 0.00;    
    $totalFinal = 0.00;


    for ($i=1; $i <= 30; $i++) { 

        $sueldo = readline("Ingrese sueldo base vendedor ".($i)." : $");

        for ($v=1; $v <= 3; $v++) { 

            $ventas = readline("Ingrese total de venta ".$v.": $");

            $comision += $ventas * 0.10;

        }              

        $totalFinal = $sueldo + $comision;
         
        echo "---------------------------------------------------"."\n";
        echo "Comision de sus ventas: $".$comision."\n";
        echo "Sueldo Final: $".$totalFinal."\n";
        
    }
?>