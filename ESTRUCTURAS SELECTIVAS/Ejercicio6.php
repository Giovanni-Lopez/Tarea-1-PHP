<?php

    $compra = 0;
    $descuento = 0;
    $totalFinal = 0;
    $color = "";

    if(isset($_POST['compra']) && isset($_POST['color'])){
        $compra = $_POST['compra'];
        $color = $_POST['color'];

        if($color == "Blanca"){
            $descuento = $compra * 0.00;            

        }else if($color == "verde"){
            $descuento = $compra * 0.10;            

        }else if($color == "amarilla"){
            $descuento = $compra * 0.25;            

        }else if($color == "azul"){
            $descuento = $compra * 0.50;            

        }else if($color == "roja"){
            $descuento = $compra * 1;            

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
    <title>Ejercicio 6</title>
</head>
<body>
    
<div class="contenedor">
        <div class="select">
            <form class="Form" method="post" action="Ejercicio6.php">
                <div class="mb-3">      

                    <label for="exampleInputNumber" class="form-label">Total Compra</label>
                    <input type="text" class="form-control" id="compra" name="compra" aria-describedby="numberHelp" required>   
                    
                    <br>

                    <select name="color" class="form-select" aria-label="Default select example">
                            <option selected>Elige Color de la Bolita</option>
                            <option value="Blanca">Blanca 0%</option>
                            <option value="verde">Verde  10%</option>
                            <option value="amarilla">Amarilla  25%</option>
                            <option value="azul">Azul  50%</option>
                            <option value="roja">Roja 100%</option>
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
                <th scope="col">Color</th>
                <th scope="col">Descuento</th>
                <th scope="col">Total Final</th>                
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td><?php echo $color ?></td>
                <td><?php echo $descuento ?></td>
                <td><?php echo $totalFinal ?></td>                    
                </tr>    
            </tbody>
        </table>

</body>
</html>