<?php
    // rutas de reenvio
    function cargarControlador($controlador){
        $nombreControlador=ucwords($controlador)."Controller";
        $archivoControlador="controllers/".ucwords($controlador)."Controller.php";
        
        if(!is_file($archivoControlador)){
            $archivoControlador="controllers/".CONTROLADOR_PRINCIPAL.".php";
        }
        
        require_once($archivoControlador);

        $control=new $nombreControlador;
        return $control;
    }
    function cargarAccion($controlador,$accion){
        if(isset($controlador) && method_exists($controlador,$accion)){
            $controlador->$accion();
        }else{
            $accionPrincipal=ACCION_PRINCIPAL;//Para poder pasar datos de constantes a tipo funciones al realizar instanciacion, se debe guardar la contante en una variable y mandar dicha variable como si fuera $obj->accion(); con el $ antes de accion
            $controlador->$accionPrincipal();
        }
    }

?>