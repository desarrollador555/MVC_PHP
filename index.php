<?php
    require_once('config/config.php'); //accion para el controlador principal
    require_once('core/route.php');
    require_once('config/database.php');
    require_once('controllers/VehiculosController.php');
     
    if(isset($_GET['c'])){

        $controlador=cargarControlador($_GET['c']);
        if(isset($_GET['a'])){
            cargarAccion($controlador,$_GET['a']);
        }else{
            cargarAccion($controlador,ACCION_PRINCIPAL);
        }
    }else{

        $controlador=cargarControlador(CONTROLADOR_PRINCIPAL);
        cargarAccion($controlador,ACCION_PRINCIPAL);
    }

?>