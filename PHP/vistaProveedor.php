<form action="" method="post">
<input type="text" name="nombre" placeholder="Nombre: "><br>
<input type="text" name="telefono" placeholder="Telefono: "><br>
<input type="text" name="direccion" placeholder="Direccion: "><br>
<input type="text" name="correo" placeholder="Correo: "><br>
<input type="text" name="rfc" placeholder="RFC: "><br>
</select><br>
<input type="submit" name="alta" value="Guardar Proveedor">
</form>
<?php
if(isset($_POST["alta"])){
    $nombre=$_POST["nombre"];
    $telefono=$_POST["telefono"];
    $direccion=$_POST["direccion"];
    $correo=$_POST["correo"];
    $rfc=$_POST["rfc"];
    require_once("proveedor.php");
    $obj=new Proveedor();
    $obj->alta($nombre,$telefono,$direccion,$correo,$rfc);
    echo"<h2>Proveedor Registrado<h2>";
}
require_once("proveedor.php");
$obj=new Proveedor();
?>
<table>
<tr>
<th>Nombre</th>
<th>Telefono</th>
<th>Direccion</th>
<th>Correo</th>
<th>RFC</th>
</tr>
<?php
    $res = $obj->consulta();
    while($fila = $res->fetch_assoc()){
        echo"<tr>";
        echo"<td>".$fila["nombre"]."</td>";
        echo"<td>".$fila["telefono"]."</td>";
        echo"<td>".$fila["direccion"]."</td>";
        echo"<td>".$fila["correo"]."</td>";
        echo"<td>".$fila["rfc"]."</td>";
        echo"</tr>";
    }
    ?>
</table>
