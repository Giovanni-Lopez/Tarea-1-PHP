<?php
    $precio = 0;
    $modelo = "";
    $descuento = 0;
    $totalFinal = 0;

    if(isset($_POST['precio']) && isset($_POST['modelo'])){
        $precio = $_POST['precio'];
        $modelo = $_POST['modelo'];

        if($modelo == "Volskwagen" ){
            $descuento = $precio * 0.08;
        }else if($modelo == "Toyota"){
            $descuento = $precio * 0.09;
        }else if($modelo == "Hyundai"){
            $descuento = $precio * 0.06;
        }else if($modelo == "Mazda"){
            $descuento = $precio * 0.05;
        }
        
        $totalFinal = $precio - $descuento;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 8</title>
</head>
<body>
    <div class="contenedor">
        <div class="select">
            <form class="Form" method="post" action="Ejercicio8.php">
                <div class="mb-3">      

                    <label for="exampleInputNumber" class="form-label">Precio Vehiculo</label>
                    <input type="text" class="form-control" id="precio" name="precio" aria-describedby="numberHelp" required>   
                    <br>
                    <select name="modelo" class="form-select" aria-label="Default select example">
                            <option selected>Modelo Vehiculo</option>
                            <option value="Volskwagen">Volskwagen 8%</option>
                            <option value="Toyota">Toyota 9%</option>
                            <option value="Hyundai">Hyundai 6%</option>
                            <option value="Mazda">Mazda 5%</option>
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
            <th scope="col">Precio</th>
            <th scope="col">Modelo</th> 
            <th scope="col">Descuento</th>
            <th scope="col">Total Final</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td><?php echo $precio ?></td>
            <td><?php echo $modelo ?></td>    
            <td><?php echo $descuento ?></td>   
            <td><?php echo $totalFinal ?></td> 
            </tr>    
        </tbody>
    </table>
    
</body>
</html>