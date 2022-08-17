<?php

/* 1. Escribir un programa que pregunte al usuario su nombre, apellido, DUI, edad, teléfono y dirección, y que lo
muestre en pantalla. */

    $nombre = "";
    $apellido = "";
    $dui =  "";
    $edad = "";
    $telefono = "";
    $direccion  = "";

    if (isset($_POST["imprimir"])) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dui = $_POST["dui"];
        $edad = $_POST["edad"];
        $telefono = $_POST["telefono"];
        $direccion = $_POST["direccion"];
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
    <title>Ejercicio - 1</title>
</head>
<body>

    <div class="contenedor">
            <div class="select">
                <form class="Form" method="post" action="Ejercicio1.php">
                    <div class="mb-3"> 
                    
                        <label for="exampleInputText" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                        <br>
                        <label for="exampleInputText" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                        <br>
                        <label for="exampleInputNumber" class="form-label">DUI</label>
                        <input type="number" class="form-control" id="dui" name="dui" required>  
                        <br>
                        <label for="exampleInputNumber" class="form-label">Edad</label>
                        <input type="number" class="form-control" name="edad" id="edad" required>
                        <br>
                        <label for="exampleInputNumber" class="form-label">Telefono</label>
                        <input type="number" class="form-control" name="telefono" id="telefono" required>
                        <br>
                        <label for="exampleInputText">Direccion</label>
                        <textarea name="direccion" id="direccion" class="form-control" cols="30" rows="10"></textarea>

                    </div>
                    <button type="submit" class="btn btn-primary" name="imprimir">Guardar</button>  
                    
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ver Datos
                    </button>
                        
                </form>                
            </div>
    </div>    


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DATOS IMPRESOS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
            <?php
    
                echo "Nombres: ".$nombre."<br>";
                echo "Apellidos: ".$apellido."<br>";
                echo "DUI: ".$dui."<br>";
                echo "Edad: ".$edad."<br>";
                echo "Telefono: ".$telefono."<br>";
                echo "Direccion: ".$direccion."<br>";

            
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

</body>
</html>
