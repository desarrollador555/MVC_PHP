<?php
    class VehiculosModel{

        private $db;
        private $vehiculos;

        public function __construct(){
            $this->db=Conectar::conexion();
            $this->vehiculos=array();
        }
        
        public function get_vehiculos(){
            
            $sql="SELECT * FROM vehiculos";
            $resultado=$this->db->query($sql);

            while($row=$resultado->fetch_assoc()){

                $this->vehiculos[]=$row;
            }
            return $this->vehiculos;
        }
        public function vehiculo($id){
            
            $sql="SELECT * FROM vehiculos where id= '$id' LIMIT 1";
            $resultado=$this->db->query($sql);
            $row=$resultado->fetch_array();
            return $row;
        }
        public function insertar($marca,$modelo,$año,$color,$placa){
        
            $resultado=$this->db->query("INSERT INTO vehiculos(placa,marca,modelo,año,color) values('$placa','$marca','$modelo','$año','$color')");
        }
        public function actualizar($id,$marca,$modelo,$año,$color,$placa){
        
            $resultado=$this->db->query(
            "UPDATE vehiculos SET 
                placa='$placa',
                marca='$marca',
                modelo='$modelo',
                año='$año',
                color='$color'
                 WHERE id='$id'"
                );
        }
        public function eliminar($id){
        
            $resultado=$this->db->query("DELETE from vehiculos WHERE id='$id'");
        }
    }

?>