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
    <h2>Insertar nuevo <?=$data['title']?></h2>
    <form action="index.php?c=vehiculos&a=guarda" method="POST" id="nuevo" name="nuevo" autocomplete="off">
        <label for="">Placa</label> <input type="text" name="placa" id="placa"><br>
        <label for="">Marca</label> <input type="text" name="marca" id="marca"><br>
        <label for="">Modelo</label> <input type="text" name="modelo" id="modelo"><br>
        <label for="">Año</label> <input type="text" name="año" id="año"><br>
        <label for="">Color</label> <input type="text" name="color" id="color"><br>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>