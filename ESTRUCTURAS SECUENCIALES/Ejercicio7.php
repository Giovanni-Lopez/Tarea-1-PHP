<?php

$sueldo = 0;
$vent1 = 0;
$vent2 = 0;
$vent3 = 0;

$comision = 0;
$suelFinal = 0;

if (isset($_POST["calcular"])) {

    $sueldo = $_POST["suel"];
    $vent1 = $_POST["ven1"];
    $vent2 = $_POST["ven2"];
    $vent3 = $_POST["ven3"];

    $comision = ($vent1 + $vent2 + $vent3) * 0.10;
    $suelFinal = $sueldo + $comision;
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
    <title>Ejercicio - 7</title>
</head>

<body>

    <!-- 7. Un vendedor recibe un sueldo base más un 10% extra por comisión de sus ventas, el vendedor desea saber
    cuánto dinero obtendrá por concepto de comisiones por las tres ventas que realiza en el mes y el total que
    recibirá en el mes tomando en cuenta su sueldo base y comisiones. -->

    <div class="contenedor">
        <div class="select">
            <form class="Form" method="post" action="Ejercicio7.php">
                <div class="mb-3">

                    <label for="exampleInputText" class="form-label">Ingrese Sueldo Base</label>
                    <input type="number" class="form-control" id="suel" name="suel" required>
                    <br>
                    <label for="exampleInputText" class="form-label">Valor de venta 1</label>
                    <input type="number" class="form-control" id="ven1" name="ven1" required>
                    <br>
                    <label for="exampleInputText" class="form-label">Valor de venta 2</label>
                    <input type="number" class="form-control" id="ven2" name="ven2" required>
                    <br>
                    <label for="exampleInputText" class="form-label">Valor de venta 3</label>
                    <input type="number" class="form-control" id="ven3" name="ven3" required>
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

                    echo "Comision de ventas: $" . round($comision, 2) . "<br>";
                    echo "Salario base, mas comision: $" . round($suelFinal, 2) . "<br>";

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