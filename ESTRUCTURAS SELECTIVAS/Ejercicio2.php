<?php

$sueldo = 0;
$aumento = 0;
$SueldoFinal = 0;

if(isset($_POST['sueldo'])){
    $sueldo = $_POST['sueldo'];

    if($sueldo < 600){
        $aumento = $sueldo * 0.1;
    }else{
        $aumento = 0;
    }

    $SueldoFinal = $sueldo + $aumento;
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
    <title>Ejercicio 2</title>
</head>
<body>
    
    <!-- 2. Dado el sueldo de un empleado, encontrar el nuevo sueldo si obtiene un 
    aumento del 10% si su sueldo es inferior a $600, en caso contrario no tendrá aumento. -->

    <div class="contenedor">
            <div class="select">
                <form class="Form" method="post" action="Ejercicio2.php">
                    <div class="mb-3"> 

                    <label for="exampleInputNumber" class="form-label">Sueldo</label>
                        <input type="text" class="form-control" id="sueldo" name="sueldo" aria-describedby="numberHelp" required>

                        
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular</button>  
                </form>
            </div>
    </div>

    <table class="table table-striped">
            <thead >
                <tr class="table-info">
                <th scope="col">N°</th>
                <th scope="col">Sueldo</th>
                <th scope="col">Aumento</th>
                <th scope="col">Nuevo Sueldo</th>
                

                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>$ <?php echo $sueldo ?></td>
                <td>$ <?php echo $aumento ?></td>             
                <td>$ <?php echo $SueldoFinal ?></td>     
                </tr>    
            </tbody>
    </table>

</body>
</html>