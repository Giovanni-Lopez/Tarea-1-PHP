<?php
    $horas = 0;
    $salarioFinal = 0;
    $horaNormal = 0;
    $horaExtras = 0;    
    

    if(isset($_POST['horas'])){
        $horas = $_POST['horas'];

        if($horas <= 40){
            $salarioFinal = $horas * 4; 
            $horaNormal = $horas;
            $horaExtras = 0;          
        }else if($horas > 40 ){
            $horaExtras = $horas - 40;
            $calc = $horaExtras * 6;
            $horaNormal = $horas - $horaExtras;
            $salarioFinal = $horaNormal * 4 + $calc;
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
    <title>Ejercicio 5</title>
</head>
<body>

    <!-- 5.Un obrero necesita calcular su salario semanal, el cual se obtiene 
    de la siguiente manera:Si trabaja 40 horas o menos se le paga $4 por hora.
    Si trabaja más de 40 horas se le paga $4 por cada una de las primeras 40 horas 
    y $6 por cada hora extra.Calcule el nuevo salario del obrero. -->

    <div class="contenedor">
        <div class="select">
            <form class="Form" method="post" action="Ejercicio5.php">
                <div class="mb-3">      

                    <label for="exampleInputNumber" class="form-label">Horas Trabajadas</label>
                    <input type="number" class="form-control" id="horas" name="horas" aria-describedby="numberHelp" required>   
                    
                </div>
                <button type="submit" class="btn btn-primary">Calcular</button>  
            </form>
        </div>
        
    </div>

    <table class="table table-striped">
        <thead >
            <tr class="table-info">
            <th scope="col">N°</th>
            <th scope="col">Horas Normales</th>
            <th scope="col">Horas Extras</th>
            <th scope="col">Salario Final</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td><?php echo $horaNormal ?></td>
            <td><?php echo $horaExtras ?></td>
            <td><?php echo $salarioFinal ?></td>    
            
            </tr>    
        </tbody>
    </table>

</body>
</html>