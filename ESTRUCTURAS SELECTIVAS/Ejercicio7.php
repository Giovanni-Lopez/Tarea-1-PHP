<?php
    $nameVendedor = "";
    $nameCliente = "";
    $fechaFactura = "";
    $numFactura = 0;
    $sumaVentas = 0;
    $descuento = 0;
    $totalDescuento = 0;
    $message = "";

    if(isset($_POST['sumaVentas'])){
        $sumaVentas = $_POST['sumaVentas'];
        if($sumaVentas > 0 && $sumaVentas < 100 ){   
            $descuento = $sumaVentas * 0.00;
            $totalDescuento = $sumaVentas - $descuento;
        }else if($sumaVentas >= 100 && $sumaVentas <= 500){
            $descuento = $sumaVentas * 0.15;
            $totalDescuento = $sumaVentas - $descuento;
        }else if($sumaVentas > 500 && $sumaVentas <= 1000){
            $descuento = $sumaVentas * 0.20;
            $totalDescuento = $sumaVentas - $descuento;
        }else if($sumaVentas > 1000){
            $descuento = $sumaVentas * 0.30;
            $totalDescuento = $sumaVentas - $descuento;
        }else{
            echo "Ningun descuento aplicado";
        }
        $nameVendedor = $_POST['nameVendedor'];
        $nameCliente = $_POST['nameCliente'];
        $fechaFactura = $_POST['fechaFactura'];
        $numFactura = $_POST['numFactura'];
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
    <title>Ejercicio-7</title>
</head>
<body>
<form class="Form" method="post" action="Ejercicio7.php">
  <div class="mb-3">
    <label for="" class="form-label">Nombre Vendedor</label>
    <input type="text" class="form-control" id="nameVendedor" name="nameVendedor" aria-describedby="textHelp" required>
    
    <label for="" class="form-label">Nombre Cliente</label>
    <input type="text" class="form-control" id="nameCliente" name="nameCliente" aria-describedby="textHelp" required>

    <label for="">Fecha Facturacion</label>
    <input type="date" class="form-control" name="fechaFactura" id="fechaFactura" value="<?php echo date('Y-m-d') ?>">

    <label for="">Numero Factura</label>
    <input type="number" class="form-control" name="numFactura" id="numFactura">

    <label for="exampleInputNumber" class="form-label">Suma Ventas Realizadas</label>
    <input type="number" class="form-control" id="sumaVentas" name="sumaVentas" aria-describedby="numberHelp" required>   
  </div>  
    <button type="submit" class="btn btn-primary">Calcular</button>  
</form>

<table class="table table-striped">
  <thead >
    <tr class="table-info">
      <th scope="col">N°</th>
      <th scope="col">Nombre Vendedor</th>
      <th scope="col">Nombre Cliente</th>
      <th scope="col">Fecha de Facturacion</th>
      <th scope="col">Numero de Factura</th>
      <th scope="col">Suma de Ventas</th>
      <th scope="col">Descuento %</th>
      <th scope="col">Total Final</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $nameVendedor ?></td>
      <td><?php echo $nameCliente ?></td>
      <td><?php echo $fechaFactura ?> </td>
      <td><?php echo $numFactura ?></td>
      <td><?php echo $sumaVentas ?></td>
      <td><?php echo $descuento ?></td>
      <td><?php echo $totalDescuento ?></td>
    </tr>    
  </tbody>
</table>
</body>
</html>