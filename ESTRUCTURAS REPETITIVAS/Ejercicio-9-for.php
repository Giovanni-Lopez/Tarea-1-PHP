<?php 

/* 9. Resolver el problema anterior considerando además el promedio de la altura y del peso
en función del sexo. Es decir, obtener el promedio de la altura y peso de la población femenina
y masculina. */

    $sexo = "";
    $altura = 0.00;
    $peso = 0.00;
    $acumAF = 0.00;
    $acumPF= 0.00;
    $acumAM = 0.00;
    $acumPM = 0.00;
    $contF = 0;
    $contM = 0;
    $proAlturaF = 0;
    $proPesoF = 0;
    $proAlturaM = 0;
    $proPesoM = 0;
        

    for ($i=1; $i <= 4; $i++) { 
        
        $sexo = readline("Ingrese sexo F=femenina, M=masculino ");
        $sexo = strtoupper($sexo);

        $peso = readline("Ingrese Peso de Persona: ".$i." ");
        $altura = readline("Ingrese Altura de Persona: ".$i." ");


        if ($sexo == "F") {

            $acumAF += $altura;
            $acumPF += $peso;

            $contF++;

        }else if($sexo == "M"){

            $acumAM += $altura;
            $acumPM += $peso;

            $contM++;
        }        
        
    }

    $proAlturaF = $acumAF / $contF;
    $proPesoF = $acumPF / $contF;

    $proAlturaM = $acumAM / $contM;
    $proPesoM = $acumPM / $contM;

    echo "Su promedio de peso con sexo femenino es: ". $proPesoF."\n";
    echo "Su promedio de altura con sexo femenino es: ". $proAlturaF."\n";

    
    echo "Su promedio de peso con sexo masculino es: ".$proPesoM."\n";
    echo "Su promedio de altura con sexo masculino es: ".$proAlturaM."\n";
    

?>