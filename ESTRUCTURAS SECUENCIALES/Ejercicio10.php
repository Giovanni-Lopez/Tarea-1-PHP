<?php

    $totAlumnos = 0;
    $totAlumnas = 0;
    $suma = 0;
    $porcentAlumnos = 0;
    $porcentAlumnas = 0;

    if (isset($_POST["calcular"])) {
        
        $totAlumnos = $_POST["totAlumnos"];
        $totAlumnas = $_POST["totAlumnas"];

        $suma = $totAlumnos + $totAlumnas;

        $porcentAlumnos = ($totAlumnos / $suma) * 100;
        $porcentAlumnas = ($totAlumnas / $suma) * 100;        

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
    <title>Ejercicio - 10</title>
</head>

<body>

    <!-- 10. Se pide crear un programa que calcule el porcentaje de alumnos y alumnas de un salón de clase. -->


    <div class="contenedor">
        <div class="select">
            <form class="Form" method="post" action="Ejercicio10.php">
                <div class="mb-3">

                    <label for="exampleInputText" class="form-label">Ingrese Total de Alumnos</label>
                    <input type="number" class="form-control" id="totAlumnos" name="totAlumnos" required>
                    <br>
                    <label for="exampleInputText" class="form-label">Ingrese Total de Alumnas</label>
                    <input type="number" class="form-control" id="totAlumnas" name="totAlumnas" required>
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

                    echo "Su procentaje de alumnos es de: " . round($porcentAlumnos, 2) . "%<br>";                   
                    echo "Su procentaje de alumnas es de: " . round($porcentAlumnas, 2) . "%<br>";                   


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