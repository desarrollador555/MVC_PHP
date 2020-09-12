<?php
    class VehiculosController{
        //El contructor siempre se ejecuta de primera forma, al hacer esto, lo que se ejecute en el constructor, se puede usar en cualquier metodo siguiente
        public function __construct()
        {
            require_once('models/VehiculosModel.php');
        }
// ------------------------------
        public function index(){
            $vehiculos=new VehiculosModel();
            $data['title']="Vehiculos";
            $data['vehiculos']=$vehiculos->get_vehiculos();

            require_once('views/vehiculos/vehiculos.php');
        }
// ------------------------------
        
        public function nuevo(){
            $data['title']="Vehiculos";
            require_once('views/vehiculos/vehiculos.nuevo.php');
        }
        public function guarda(){
            if(empty($_POST['placa']) or empty($_POST['marca']) or empty($_POST['modelo']) or empty($_POST['año']) or empty($_POST['color'])){
                $this->index();
            }else{
                $placa=$_POST['placa'];
                $marca=$_POST['marca'];
                $modelo=$_POST['modelo'];
                $año=$_POST['año'];
                $color=$_POST['color'];
                $vehiculos=new VehiculosModel();

                $vehiculos->insertar($marca,$modelo,$año,$color,$placa);
                
                $this->index();
            }
        }
// ------------------------------

        public function modificar(){
            $data['id']=$_GET['id'];

            $vehiculos=new VehiculosModel();
            
            $vehiculo=$vehiculos->vehiculo($data['id']);
            print_r($vehiculo);
            echo $vehiculo['id'];
            $data['title']="Vehiculos";
            require_once('views/vehiculos/vehiculos.modificar.php');
        }
        
        public function actualizar(){
            if(empty($_POST['id']) or empty($_POST['placa']) or empty($_POST['marca']) or empty($_POST['modelo']) or empty($_POST['año']) or empty($_POST['color'])){
                $this->index();
            }else{
                $id=$_POST['id'];
                $placa=$_POST['placa'];
                $marca=$_POST['marca'];
                $modelo=$_POST['modelo'];
                $año=$_POST['año'];
                $color=$_POST['color'];

                $vehiculos=new VehiculosModel();

                $vehiculos->actualizar($id,$marca,$modelo,$año,$color,$placa);
                
                $this->index();
            }
        }
        public function eliminar(){
            $id=$_GET['id'];
            $vehiculos=new VehiculosModel();
            $vehiculos->eliminar($id);
            $this->index();
        }
        
    }
?>