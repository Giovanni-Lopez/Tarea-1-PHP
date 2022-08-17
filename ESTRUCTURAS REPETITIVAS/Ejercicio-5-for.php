<?php 

/* 5. Dados 24 números reales que representan las temperaturas del exterior en un período de 24 horas. 

Encuentre la temperatura media del día y las temperaturas más alta y más baja del día */

    $temperatura = 0.00;
    $temMedia = 0.00;
    $temMenor = 0.00;
    $temMayor = 0.00;
    $acumlTemp = 0.00;
    $promeTemp = 0.00;
    

    for ($i=1; $i <= 24; $i++) { 
        
        $temperatura = readline("Ingrese temperatura ".($i).": ");
        $acumlTemp += $temperatura;
        
        if ($i == 1)
        {
            $temMayor = $temperatura;
            $temMenor = $temperatura;
        }

        if ($temperatura > $temMayor)
        {
            $temMayor = $temperatura;
        }

        if ($temperatura < $temMenor)
        {
            $temMenor = $temperatura;
        }

        $temMedia = $acumlTemp / 24;
        
    }

    echo "Temperatura Media es: " .$temMedia."\n";
    echo "Temperatura mayor: ".$temMayor."\n";
    echo "Temperatura menor: ".$temMenor."\n";                                                     

?>