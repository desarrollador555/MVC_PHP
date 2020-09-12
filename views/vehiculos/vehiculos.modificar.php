<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title'] ?></title>
    <style>        
    </style>
</head>
<body>
    <h2>Modificar Registro con id <?=$_GET['id']?> <?=$data['title']?></h2>
    <form action="index.php?c=vehiculos&a=actualizar" method="POST" id="nuevo" name="nuevo" autocomplete="off">
        <input type="hidden" name="id" id="id" value="<?= $data['id']?>">
        <label for="">Placa</label> <input type="text" value="<?php echo $vehiculo['placa']?>" name="placa" id="placa"><br>
        <label for="">Marca</label> <input type="text" value="<?= $vehiculo['marca']?>" name="marca" id="marca"><br>
        <label for="">Modelo</label> <input type="text" value="<?= $vehiculo['modelo']?>" name="modelo" id="modelo"><br>
        <label for="">Año</label> <input type="text" value="<?= $vehiculo['año']?>" name="año" id="año"><br>
        <label for="">Color</label> <input type="text" value="<?= $vehiculo['color']?>" name="color" id="color"><br>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>