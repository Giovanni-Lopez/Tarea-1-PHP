<?php

    $not1 = 0;
    $not2 = 0;
    $not3 = 0;
    $exFinal = 0;
    $trabFinal = 0;
    $calExamFinal = 0;
    $calTrabaFinal = 0;
    $calPromParci = 0;
    $calFinal = 0;

    if (isset($_POST["calcular"])) {
        $not1 = $_POST["not1"];
        $not2 = $_POST["not2"];
        $not3 = $_POST["not3"];
        $exFinal = $_POST["exFinal"];
        $trabFinal = $_POST["trabFinal"];

        $calPromParci= (($not1 + $not2 + $not3) / 3) * 0.55;
        $calExamFinal = $exFinal * 0.30;
        $calTrabaFinal = $trabFinal * 0.15;

        $calFinal = $calPromParci + $calExamFinal + $calTrabaFinal;
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
    <title>Ejercicio - 9</title>
</head>

<body>

    <!-- 9. Un alumno desea saber cuál será su calificación final en la materia de lógica de programación. 
    Dicha calificación se compone de los siguientes porcentajes:
        55% del promedio de sus tres calificaciones parciales.
        30% de la calificación del examen final.
        15% de la calificación de un trabajo final -->

    <div class="contenedor">
        <div class="select">
            <form class="Form" method="post" action="Ejercicio9.php">
                <div class="mb-3">

                    <label for="exampleInputText" class="form-label">Ingrese Nota 1</label>
                    <input type="number" class="form-control" id="not1" name="not1" required>
                    <br>
                    <label for="exampleInputText" class="form-label">Ingrese Nota 2</label>
                    <input type="number" class="form-control" id="not2" name="not2" required>
                    <br>
                    <label for="exampleInputText" class="form-label">Ingrese Nota 3</label>
                    <input type="number" class="form-control" id="not3" name="not3" required>
                    <br>
                    <label for="exampleInputText" class="form-label">Ingrese Nota Final</label>
                    <input type="number" class="form-control" id="exFinal" name="exFinal" required>
                    <br>
                    <label for="exampleInputText" class="form-label">Ingrese Nota Trabajo Final</label>
                    <input type="number" class="form-control" id="trabFinal" name="trabFinal" required>
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

                    echo "Sun Notal Final: " . round($calFinal, 2) . "<br>";                   

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