<?php

    $dias = 0;
    $nombre = "";
    $operado = "";
    $pagoDias = 0;
    $pagoTotal = 0;
    $honorarios = 0;
    $pagoDoctor = 0;
    $pagoFinal = 0;

    if(isset($_POST['dias']) && isset($_POST['nomPaciente']) && isset($_POST['operado'])){
        $dias = $_POST['dias'];
        $nombre = $_POST['nomPaciente'];
        $operado = $_POST['operado'];

        if($operado == "Si"){
            $pagoDias = $dias * 25;
            $pagoTotal = 1000;

            $honorarios = ($pagoDias + $pagoTotal) * 0.20;
            $pagoDoctor = $honorarios;

            $pagoFinal = $pagoTotal + $pagoDias + $pagoDoctor;

        }else if($operado == "No"){
            $pagoDias = $dias * 25;
            $pagoTotal = 0;
            $pagoDoctor = 0;
            $pagoFinal = $pagoDias;
        }                     

    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 3</title>
</head>
<body>
    


    <!-- En un hospital se ingresa un paciente cobrándole $25 diarios por hospitalización. 
    Si el paciente es operado deberá además cancelar $1000 por los gastos más 20% del pago 
    total por honorarios del doctor. 
    
    Dados n días que estuvo el paciente, escriba el nombre, 
    número de días que estuvo ingresado y el detalle de todos los pagos hechos. -->

<div class="contenedor">
        <div class="select">
            <form class="Form" method="post" action="Ejercicio3.php">
                <div class="mb-3"> 

                    <label for="exampleInputNumber" class="form-label">Numero de Dias</label>
                    <input type="number" class="form-control" id="dias" name="dias" aria-describedby="numberHelp" required>

                    <label for="exampleInputNumber" class="form-label">Nombre de Paciente</label>
                    <input type="text" class="form-control" id="nomPaciente" name="nomPaciente" aria-describedby="numberHelp" required>                    

                    <br>                    

                    <select name="operado" class="form-select" aria-label="Default select example">
                            <option selected>¿Fue Operado?</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>                            
                    </select>
                    
                </div>
                <button type="submit" class="btn btn-primary">Calcular</button>  
            </form>
        </div>
</div>
    <table class="table table-striped">
        <thead >
            <tr class="table-info">
            <th scope="col">N°</th>
            <th scope="col">Dias</th>
            <th scope="col">Nombre Paciente</th>
            <th scope="col">Operado</th>
            <th scope="col">Pago por Dias</th>
            <th scope="col">Pago por Operacion</th>
            <th scope="col">Pago Por Honorarios</th>
            <th scope="col">Pago Final</th>

            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td><?php echo $dias ?></td>
            <td><?php echo $nombre ?></td>
            <td><?php echo $operado ?></td>
            <td>$ <?php echo $pagoDias ?></td>
            <td>$ <?php echo $pagoTotal ?></td>
            <td>$ <?php echo $pagoDoctor ?></td>                    
            <td>$ <?php echo $pagoFinal ?></td>  
            </tr>    
        </tbody>
    </table>
</body>
</html>