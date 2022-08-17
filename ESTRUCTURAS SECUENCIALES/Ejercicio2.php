<?php

    $base = 0;
    $altura = 0;
    $calPerimetro = 0;
    $calArea = 0;

    if(isset($_POST["calcular"])){

        $base = $_POST["base"];
        $altura = $_POST["altura"];

        $calPerimetro = 2 * ($base + $altura);
        $calArea = $base * $altura;

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
    <title>Ejercicio - 2</title>
</head>
<body>


<!-- 2. Calcular el perímetro y área de un rectángulo dada su base y su altura. -->

<div class="contenedor">
            <div class="select">
                <form class="Form" method="post" action="Ejercicio2.php">
                    <div class="mb-3"> 
                    
                        <label for="exampleInputText" class="form-label">Ingrese base de restangulo</label>
                        <input type="number" class="form-control" id="base" name="base" required>
                        <br>
                        <label for="exampleInputText" class="form-label">Ingrese altura de restangulo</label>
                        <input type="number" class="form-control" id="altura" name="altura" required>
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
    
                echo "Perimetro: ".round($calPerimetro, 2)."cm<br>" ;
                echo "Area: ".round($calArea, 2)."cm<sup>2</sup>";
                        
            
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