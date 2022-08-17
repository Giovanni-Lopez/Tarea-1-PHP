<?php


$num1 = 0;
$num2 = 0;
$suma = 0;
$resta = 0;
$division = 0;
$multiplicacion = 0;


if (isset($_POST["calcular"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;

    if ($num2 > 0) {
        $division = $num1 / $num2;
    }

    $multiplicacion = $num1 * $num2;
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
    <title>Ejercicio - 4</title>
</head>

<body>

    <!-- 4. Dados dos números, mostrar la suma, resta, división y multiplicación de ambos -->

    <div class="contenedor">
        <div class="select">
            <form class="Form" method="post" action="Ejercicio4.php">
                <div class="mb-3">

                    <label for="exampleInputText" class="form-label">Ingrese Numero 1</label>
                    <input type="number" class="form-control" id="num1" name="num1" required>
                    <br>
                    <label for="exampleInputText" class="form-label">Ingrese Numero 2</label>
                    <input type="number" class="form-control" id="num2" name="num2" required>
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

                    echo "Suma: ". $suma ."<br>";
                    echo "Resta: ".$resta."<br>";
                    if ($num2 > 0) {
                        echo "Division: ".$division."<br>";
                    }else{
                        echo "Error!! No es posible dividir entre 0"."<br>";
                    }
                    
                    echo "Multiplicacion: ".$multiplicacion."<br>";

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