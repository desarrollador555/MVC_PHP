<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title'] ?></title>
    <style>
        table,thead,tr,th,td{
            border-collapse:collapse;
            margin:2px;
            border:1px solid black;
            padding: 4px 10px;
        }
    </style>
</head>
<body>
    <h2><?php echo $data['title'] ?></h2>
    <a href="index.php?c=vehiculos&a=nuevo">Agregar Vehiculos</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>Identificador</th>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Color</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['vehiculos'] as $data): ?>
            <tr>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['placa'] ?></td>
                <td><?php echo $data['marca'] ?></td>
                <td><?php echo $data['modelo'] ?></td>
                <td><?php echo $data['año'] ?></td>
                <td><?php echo $data['color'] ?></td>
                <td>
                    <a href="index.php?c=vehiculos&a=modificar&id=<?php echo $data['id'] ?>">Actualizar</a>
                    <a href="index.php?c=vehiculos&a=eliminar&id=<?php echo $data['id'] ?>">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>