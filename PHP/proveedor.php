<?php
require_once("conexion.php");
class Proveedor extends Conexion{
    public function alta($nombre,$telefono,$direccion,$correo,$rfc){
        $this->sentencia = "INSERT INTO proveedor VALUES (null,'$nombre','$telefono','$direccion','$correo','$rfc')";
        $this->ejecutarSentencia();
    }
    public function eliminar ($id){
        $this->sentencia = "DELETE FROM proveedor WHERE Iproveedor=$id";
        $this->ejecutarSentencia();
    }
    public function consulta(){
        $this->sentencia = "SELECT * FROM proveedor";
        return $this->obtenerSentencia();
    }
    public function modificar($nombre,$telefono,$direccion,$correo,$rfc){
        $this->sentencia = "UPDATE FROM preveedor SET nombre='$nombre', telefono='$telefono', direccion='$direccion', correo='$correo', rfc='$rfc' WHERE IDproveedor='$id'";
    }
}
?>