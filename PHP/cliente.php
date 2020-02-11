<?php
require_once("conexion.php");
class Cliente extends Conexion{
    public function alta($nombre,$direccion,$telefono,$correo,$apepat,$apemat,$sexo,$fenacimiento){
        $this->sentencia="INSERT INTO cliente (null,'$nombre','$direccion','$telefono','$correo','$apepat','$apemat','$sexo','$fenacimiento')";
        $this->ejecutarSentencia();
        }
        public function eliminar ($id){
            $this->sentencia = "DELETE FROM cliente WHERE IDcliente=$id";
            $this->ejecutarSentencia();
        }
        public function consulta(){
            $this->sentencia = "SELECT * FROM cliente";
            return $this->obtenerSentencia();
        }
    }
?>