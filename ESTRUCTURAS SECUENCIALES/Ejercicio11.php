<?php

    $presupuesto = 0;
    $pediatria = 0;
    $oncologia = 0;
    $traumatologia = 0;
    
    if (isset($_POST["calcular"])) {
       
        $presupuesto = $_POST["presupuesto"];

        $pediatria = $presupuesto * 0.30;
        $oncologia = $presupuesto * 0.40;
        $traumatologia = $presupuesto * 0.30;
        
    }


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <title>Ejercicio - 11</title>
</head>

<body>

   
    <!-- 11. En un hospital existen tres áreas: Pediatría, Oncología y Traumatología. 
            
        El presupuesto anual del hospital se reparte conforme a la siguiente tabla:

            ----------------------------------------------------
            |   AREA         |     PROCENTAJE DEL PRESUPUESTO   |
            |----------------|----------------------------------|
            |Pediatria       |                 30%              |
            |Oncologia       |                 40%              |
            |Traumatologia   |                 30%              |
            -----------------------------------------------------
        -->


    <div class="contenedor">
        <div class="select">
            <form class="Form" method="post" action="Ejercicio11.php">
                <div class="mb-3">

                    <label for="exampleInputText" class="form-label">Ingrese Presupuesto Anual</label>
                    <input type="number" class="form-control" id="presupuesto" name="presupuesto" required>
                    <br>                    

                </div>
                <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ver Resultados
                </button>

            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Resultado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <?php

                    echo "Presupuesto de Pediatria: $" . round($pediatria, 2) . "<br>";                   
                    echo "Presupuesto de Oncologia: $" . round($oncologia, 2) . "<br>";                   
                    echo "Presupuesto de Traumatologia: $" . round($traumatologia, 2) . "<br>"; 

                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>