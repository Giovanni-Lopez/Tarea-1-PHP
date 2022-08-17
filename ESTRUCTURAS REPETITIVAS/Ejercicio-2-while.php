<?php

    /* 2. En un supermercado una señora pone en su carrito los artículos que va tomando de los estantes. La señora
    quiere asegurarse de que el cajero le cobre bien lo que ella ha comprado, por lo que cada vez que toma un
    artículo anota su precio junto con la cantidad de artículos iguales que ha tomado y determina cuánto dinero
    gastará en ese artículo; a esto le suma lo que irá gastando en los demás artículos, hasta que decide que ya tomó
    todo lo que necesitaba. Ayúdale a esta señora a obtener el total de sus compras */


    $articulo = 0;
    $cantidad = 0;
    $stop = 0;
    $calcu = 0;
    $acum = 0;

    while ($stop != 2) {
        
        $articulo = readline("Ingrese Precio de Articulo: $");

        $cantidad = readline("Ingrese cantidad de esté articulo: ");

        $stop = readline("Desea Continuar 1=Si, 2=No ¿? ");

        $calcu = $articulo * $cantidad;

        $acum += $calcu;

    }

    echo "--------------------\n";
    echo "Suma total de compra: $".$acum."\n";
    echo "--------------------";

?>