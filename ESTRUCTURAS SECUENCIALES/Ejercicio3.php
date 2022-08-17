<?php

$suma = 0;
$a = 0;
$b = 0;
$raizCuadrada = 0;

if (isset($_POST["calcular"])) {
    $a = $_POST["a"];
    $b = $_POST["b"];

    $r1 = pow($a, 2);
    $r2 = pow($b, 2);

    $suma = $r1 + $r2;

    $raizCuadrada = Sqrt($suma);    
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
    <title>Ejercicio - 3</title>
</head>

<body>

    <!-- 3. Dados los catetos de un triángulo rectángulo, calcular su hipotenusa -->


    <div class="contenedor">
        <div class="select">
            <form class="Form" method="post" action="Ejercicio3.php">
                <div class="mb-3">

                    <label for="exampleInputText" class="form-label">Ingrese Cateto a</label>
                    <input type="number" class="form-control" id="a" name="a" required>
                    <br>
                    <label for="exampleInputText" class="form-label">Ingrese Cateto b</label>
                    <input type="number" class="form-control" id="b" name="b" required>
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

                    echo "Valor de la Hipotenusa: " . round($raizCuadrada, 2);                   


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