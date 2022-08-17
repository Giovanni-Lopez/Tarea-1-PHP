<?php

    /* 3. Dado el peso, la altura y el sexo de 50 personas que pertenecen a Sonsonate, obtenga el promedio 
    del peso y de la altura de esta población. */

    $peso = 0.00;
    $altura = 0.00;
    $sexo = "";
    $cont = 0;
    $acuPeso = 0.00;
    $acuAltura = 0.00;
    $acuSexo = "";
    $proAlt = 0.00;
    $proPes = 0.00;

    for ($i=1; $i <= 4; $i++) { 

        $sexo = readline("Ingrese el sexo M o F: ".$i);
        $peso = readline("Ingrese peso de persona: ".$i);
        $altura = readline("Ingrese altura de persona: ".$i);
        
        $sexo = strtoupper($sexo);

        if ($sexo == "F" || $sexo == "M") {

            $acuPeso += $peso;
            $acuAltura += $altura;            

            $cont++;
        }     

    }

    $proAlt = $acuAltura / $cont;
    $proPes = $acuPeso / $cont;

    echo "El promedio de altura de la poblacion es: ".$proAlt."\n";
    echo "El promedio de peso de la poblacion es: ".$proPes."\n";

?>