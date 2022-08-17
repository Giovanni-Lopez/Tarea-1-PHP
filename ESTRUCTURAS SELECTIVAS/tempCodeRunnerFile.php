<?php
$empleados = 0;
    $sueldo = 0;
    $isss = 0.00;
    $afp = 0.00;
    $renta = 0.00;
    $salNeto = 0;
    $acumulador = 0.00;


    $empleados = readline("Ingrese Cantidad de empleados ");

    for ($i=0; $i < $empleados; $i++) { 
        
        
        $sueldo = readline("Ingrese sueldo de empleado ".$i + 1 . "\n");
       
        $isss = $sueldo * 0.09;
        $afp = $sueldo * 0.07;
        $renta = $sueldo * 0.1;

        $salNeto =  $sueldo - ($isss + $afp + $renta);
        echo "-------------------------------------\n";
        echo "ISSS $ ".$isss. "\n";
        echo "AFP $ ".$afp. "\n";
        echo "Renta $ ".$renta. "\n";
        echo "Salario Neto: $" .$salNeto . "\n";
        echo "-------------------------------------\n";
    }