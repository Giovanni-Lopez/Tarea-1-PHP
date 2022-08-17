<?php
    $compra = 0;
    $numero = 0;
    $descuento = 0;
    $totalFinal = 0;

    if(isset($_POST['compra'])){
        $compra = $_POST['compra'];
        $numero = $_POST['numero'];

        if($numero < 74){
            $descuento = $compra * 0.15;
        }else if($numero >= 74){
            $descuento = $compra * 0.20;
        }

        $totalFinal = $compra - $descuento;
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
    <title>Ejercicio 4</title>
</head>
<body>

<div class="contenedor">
        <div class="select">
            <form class="Form" method="post" action="Ejercicio4.php">
                <div class="mb-3"> 
                
                    <label for="exampleInputNumber" class="form-label">Total Compra</label>
                    <input type="text" class="form-control" id="compra" name="compra" aria-describedby="numberHelp" required>
                    <br>
                    <label for="exampleInputNumber" class="form-label">Ingrese numero al azar</label>
                    <input type="text" class="form-control" id="numero" name="numero" aria-describedby="numberHelp" required>  

                </div>
                <button type="submit" class="btn btn-primary">Calcular</button>  
            </form>
        </div>
</div>

        <!-- 4.En un supermercado se hace una promoción mediante la cual el cliente 
        obtiene un descuento dependiendo de un número que escoge al azar. Si el 
        número escogido es menor a 74 el descuento es del 15% sobre el total de 
        la compra y si es mayor o igual a 74 es de 20%. Obtener cuánto dinero se 
        le descuenta y el pago final.  -->

        <table class="table table-striped">
            <thead >
                <tr class="table-info">
                <th scope="col">N°</th>
                <th scope="col">Compra</th>
                <th scope="col">Numero al azar</th>
                <th scope="col">Descuento %</th>
                <th scope="col">Total Final</th>                
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>                
                <td><?php echo $compra ?></td>
                <td><?php echo $numero ?></td>
                <td><?php echo $descuento ?></td>
                <td><?php echo $totalFinal ?></td>                    
                </tr>    
            </tbody>
        </table>

</body>
</html>