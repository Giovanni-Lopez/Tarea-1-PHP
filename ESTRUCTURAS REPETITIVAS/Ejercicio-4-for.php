<?php

        /* 4. Dados como datos 300 números enteros, obtener la suma de los números impares y el promedio de los números
        pares */

        $num = 0;
        $sumaImpares = 0;
        $promPares = 0;
        $acum = 0;
        $tp = 0;


        for ($i=1; $i <= 300; $i++) { 
            
            $num = readline("Ingrese numero: ");

            if (($num % 2) == 0) {                
                $promPares += $num;
                $acum++;
            }else{
                $sumaImpares += $num;
            }
        }

        $tp = $promPares / $acum;

        echo "Suma Numeros Impares: ".$sumaImpares."\n";
        echo "Promedio Numeros Pares: ".$tp."\n";


?>