<?php

    /* 3. En una tienda de descuento, las personas que van a pagar el importe de su compra llegan a la caja y 
    sacan una bolita de color, que les dirá qué descuento tendrán sobre el total de su compra. Determinar la 
    cantidad que pagará cada cliente desde que la tienda abre hasta que cierra. Se sabe que, si el color de 
    la bolita es roja, el cliente tendrá un 40% de descuento; si es amarilla, un 25% y si es blanca no tendrá
    descuento. */


    $impoCompra = 0;
    $totCompra = 0;
    $blanca = 0;
    $descuento = 0;
    $stop  = 0;


    while ($stop != 2) {
        
        $impoCompra= readline("Ingrese su importe de compra: ");

        $bolita = readline("Seleccione color de bolita 1=Roja, 2=Amarilla, 3=Blanca: ");

        if ($bolita == 1) {
            $descuento = $impoCompra * 0.40;
        }else if($bolita == 2){
            $descuento = $impoCompra * 0.25;
        }else if ($bolita == 3) {
            $descuento = 0;
        }

        $totCompra = $impoCompra - $descuento;

        echo "****************************************"."\n";
        echo "Su Importe de compra es :$".$impoCompra." \n";

        if ($bolita == 1) {            
            echo "Color de Bolita Seleccionada Roja"." \n";
            echo "Descuento 40% Aplicado: $".$descuento." \n";
        }elseif ($bolita == 2) {
            
            echo "Color de Bolita Seleccionada Amarilla"." \n";
            echo "Descuento 25% Aplicado: $".$descuento." \n";
        }elseif ($bolita == 3) {
            
            echo "Color de Bolita Seleccionada Blanca"." \n";
            echo "No Aplica Descuento: $".$descuento." \n";
        }        
        echo "Total Final: $".$totCompra."\n";
        echo "****************************************"."\n";

        $stop = readline("Desea Continuar 1=Si, 2=No ¿? ");
    }






?>