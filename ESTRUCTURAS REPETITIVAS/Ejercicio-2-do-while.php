<?php

    /* 
    
    2) Determinar la media de ventas de X empleados. 
    
    Cada empleado hace N ventas, 
    el proceso se debe repetir si el usuario lo requiere.

    */


    
    $stop = 0;
    $cantVentas = 0;
    $valVenta = 0;
    $acumVentas = 0;
    $calMedia = 0;
    $ite = 0;
    

    do {

        $cantVentas = readline("Ingrese cantidad de ventas de empleado");

        for ($i=1; $i <= $cantVentas ; $i++) { 

           $valVenta = readline("Ingresa valor de la venta numero: ".$i." $ ");
           $acumVentas += $valVenta;
           $ite++;
        }        
       
        $stop = readline("Desea Continuar 1=Si, 2=No ¿? ");               

    } while ($stop != 2); 

        $calMedia = $acumVentas / $ite;

        echo "La Media de Ventas es: $".$calMedia."\n";
        echo "Muchas Gracias por usar el sistema!!";

?>