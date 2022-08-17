<?php
    $sueldo = 0;
    $aumento = 0;
    $nuevoSueldo = 0;

     if(isset($_POST['sueldo'])){
        $sueldo = $_POST['sueldo'];

        if($sueldo >= 550){
            $aumento = $sueldo * 0.15;
        }else{
            $aumento = 0;
        }

        $nuevoSueldo = $sueldo + $aumento;
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
    <title>Ejercicio 1</title>
</head>
<body>

    <!-- 1. Dado como dato el sueldo de un trabajador, aplique un aumento del 15% 
    si su sueldo es mayor o igual a $550.
    Imprimir en ese caso el nuevo sueldo del trabajador. -->

    <div class="contenedor">
            <div class="select">
                <form class="Form" method="post" action="Ejercicio1.php">
                    <div class="mb-3"> 

                        <label for="exampleInputNumber" class="form-label">Sueldo Trabajador</label>
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
            <td>$ <?php echo $nuevoSueldo ?></td>     
            </tr>    
        </tbody>
    </table>

</body>
</html>