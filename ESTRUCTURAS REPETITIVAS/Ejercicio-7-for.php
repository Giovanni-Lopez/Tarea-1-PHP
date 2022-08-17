<?php

/* 7. Dados 100 números enteros como datos, obtener:
        a) Cuántos números leídos fueron mayores que cero.
        b) el promedio de los números positivos
        c) el promedio de todos los números */

        $num = 0;
        $acumPositivos = 0;
        $acumNegativos = 0;
        $sumPosi = 0;
        $sumNega = 0;
        $promPositivos = 0;
        $promNegativos = 0;        
        $promTodos = 0;  
        $sumNum = 0;  
        $sumAcum = 0;     

        for ($i=1; $i <= 100; $i++) { 
            
            $num = readline("Ingrese numero: ");

            if($num > 0){

                $acumPositivos++;
                $sumPosi += $num; 
                
            }else {           
                   
                $acumNegativos++;  
                $sumNega += $num;                

            }            
            
            $promPositivos = $sumPosi / $acumPositivos;                     

            $sumNum = $sumPosi + $sumNega;
            $sumAcum = $acumPositivos + $acumNegativos;            

            $promTodos = $sumNum / $sumAcum;
        
        }
        echo "Numeros Mayores a cero: ".$acumPositivos."\n";
        echo "Promedio Positivos: ".$promPositivos."\n";
        echo "Promedio Todos los Numeros: ".$promTodos."\n";
        
?>