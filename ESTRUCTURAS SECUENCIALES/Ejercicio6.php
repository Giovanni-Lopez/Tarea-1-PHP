<?php

    $num1 = 0;
    $num2 = 0;
    $num3 = 0;
    $media = 0;


    if (isset($_POST["calcular"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        $media = ($num1 + $num2 + $num3) / 3;

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
    <title>Ejercicio - 6</title>
</head>

<body>


    <!-- 6. Calcular la media de tres números pedidos por teclado -->

    <div class="contenedor">
        <div class="select">
            <form class="Form" method="post" action="Ejercicio6.php">
                <div class="mb-3">

                    <label for="exampleInputText" class="form-label">Ingrese Numero 1</label>
                    <input type="number" class="form-control" id="num1" name="num1" required>
                    <br>
                    <label for="exampleInputText" class="form-label">Ingrese Numero 2</label>
                    <input type="number" class="form-control" id="num2" name="num2" required>
                    <br>
                    <label for="exampleInputText" class="form-label">Ingrese Numero 3</label>
                    <input type="number" class="form-control" id="num3" name="num3" required>
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

                    echo "Su Media es: ". round($media, 2)."<br>";                    

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