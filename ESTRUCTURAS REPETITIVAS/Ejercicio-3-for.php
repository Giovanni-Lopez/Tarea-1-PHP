<?php 

/* 3. Leer 100 números enteros y contar cuántos de ellos son positivos, negativos o nulos. */

    $num = 0;
    $acuPositivos = 0;
    $acuNegativos = 0;
    $acuNulos = 0;
    

    for ($i=1; $i <= 100; $i++) { 
        $num = readline("Ingrese un numero: ");
        if($num > 0){
            $acuPositivos++; 
        }else if($num < 0){
            $acuNegativos++;
        }else if($num == 0){
            $acuNulos++;
        }                
    }

    echo "Cantidad Positivos: ".$acuPositivos."\n";
    echo "Cantidad Negativos: ".$acuNegativos."\n";
    echo "Cantidad Nulos: ".$acuNulos."\n";

?>