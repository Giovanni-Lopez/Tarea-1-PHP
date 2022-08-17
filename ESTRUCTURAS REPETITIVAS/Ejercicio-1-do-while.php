<?php

    /* 1) En una librería, los clientes hacen pedidos de libros, cuadernos y revistas con las condiciones 
    siguientes: los libros tienen un descuento del 22%, las revistas del 16% y los cuadernos del 10%. Los
    datos que se ingresan para cada tipo de artículo son: la cantidad pedida, el precio unitario y el 
    tipo de pago. Si el pago es al contado, se tiene un descuento de 6% en cualquiera de los casos. 
    Calcular e imprimir el costo total del pedido considerando el tipo de pago para cada cliente y el total que 
    pagan al final del día N clientes.
    */

    $stop = 0;
    $pedido = 0;
    $cantidad = 0;
    $preUnitario = 0.00;
    $descuento = 0.00;
    $descPago = 0.00;
    $calcular = 0.00;
    $CostTotal = 0.00;
    $costFinal = 0.00;
    $tipoPago = "";
    $acumlador = 0;
    $L = 0;
    $R = 0;
    $C = 0;

    do {

        $pedido = readline("Ingrese Pedido 1= Libro, 2= Cuadernos, 3= Revista: , 4= Total Pagado: ");

        if ($pedido == 1) {
            
            $cantidad = readline("Ingrese Cantidad Pedida: ");
            $preUnitario = readline("Ingrese Precio Unitario: $");
            $tipoPago = readline("Ingrese Tipo de Pago 1= Al contado 2= Tarjeta de Credito 3= Efectivo: ");

            $calcular = $cantidad * $preUnitario;
            $descuento = $calcular * 0.22;
            $CostTotal = $calcular - $descuento;

            if ($tipoPago == 1) {
                $descPago = $CostTotal * 0.06;
                $costFinal = $CostTotal - $descPago;
                $L += $costFinal;

            }else{
                $costFinal = $CostTotal;           
                $L += $costFinal;    
            }
            

        }elseif ($pedido == 2) {
            
            $cantidad = readline("Ingrese Cantidad Pedida: ");
            $preUnitario = readline("Ingrese Precio Unitario: $");
            $tipoPago = readline("Ingrese Tipo de Pago 1= Al contado 2= Tarjeta de Credito 3= Efectivo: ");

            $calcular = $cantidad * $preUnitario;
            $descuento = $calcular * 0.16;
            $CostTotal = $calcular - $descuento;

            if ($tipoPago == 1) {
                $descPago = $CostTotal * 0.06;
                $costFinal = $CostTotal - $descPago;
                $R += $costFinal;

            }else{
                $costFinal = $CostTotal;   
                $R += $costFinal;            
            }

        }elseif ($pedido == 3) {
            
            $cantidad = readline("Ingrese Cantidad Pedida: ");
            $preUnitario = readline("Ingrese Precio Unitario: $");
            $tipoPago = readline("Ingrese Tipo de Pago 1= Al contado 2= Tarjeta de Credito 3= Efectivo: ");

            $calcular = $cantidad * $preUnitario;
            $descuento = $calcular * 0.10;
            $CostTotal = $calcular - $descuento;            

            if ($tipoPago == 1) {
                $descPago = $CostTotal * 0.06;
                $costFinal = $CostTotal - $descPago;
                $C += $costFinal;

            }else{
                $costFinal = $CostTotal;     
                $C += $costFinal;          
            }
            
        }elseif ($pedido == 4) {
            
            $acumlador = $L + $R + $C;

        } else{

            echo "\n"."\n"."Opcion Seleccionada Erronea!!"."\n"."\n";

        }

        if ($pedido == 1) {

            echo "****************************************"."\n";
            echo "Pedido de Libros"."\n";            
            echo "Descuento de Libros 22%: $".$descuento."\n";

            if ($tipoPago == 1) {
                echo "Descuento 6%  Tipo De pago Al Contado: $".$descPago."\n";
            }else{
                echo "Tipo de Pago No Aplica Descuento :v"."\n";
            }

            echo "Su Costo Final: $".$costFinal."\n";
            echo "****************************************"."\n";

        }elseif ($pedido == 2) {

            echo "****************************************"."\n";
            echo "Pedido de Revistas"."\n";           
            echo "Descuento de Revista 16%: $".$descuento."\n";

            if ($tipoPago == 1) {
                echo "Descuento 6%  Tipo De pago Al Contado: $".$descPago."\n";
            }else{
                echo "Tipo de Pago No Aplica Descuento :v"."\n";
            }

            echo "Su Costo Final: $".$costFinal."\n";
            echo "****************************************"."\n";

        }elseif ($pedido == 3) {

            echo "****************************************"."\n";
            echo "Pedido de Cuadernos"."\n";            
            echo "Descuento de Cuadernos 10%: $".$descuento."\n";

            if ($tipoPago == 1) {
                echo "Descuento 6%  Tipo De pago Al Contado: $".$descPago."\n";
            }else{
                echo "Tipo de Pago No Aplica Descuento :v"."\n";
            }

            echo "Su Costo Final: $".$costFinal."\n";
            echo "****************************************"."\n";

        }else if ($pedido == 4) {
            echo "Total de ventas realizadas en el Dia: $".$acumlador."\n";
        }        

        $stop = readline("Desea Continuar 1=Si, 2=No ¿? ");
        
    } while ($stop != 2);

?>