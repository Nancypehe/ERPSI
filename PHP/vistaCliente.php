<form action="" method="post">
Nombre:
<input type="text" name="nombre" placeholder="Nombre: "><br>
Apellido Paterno:
<input type="text" name="apepat" placeholder="Apellido Paterno: "><br>
Apellido Materno:
<input type="text" name="apemat"><br>
Direccion:
<input type="text" name="direccion" placeholder="Direccion: "><br>
Telefono:
<input type="text" name="telefono" placeholder="Telefono: "><br>
Correo:
<input type="text" name="correo" placeholder="Correo: "><br>
Sexo:
<input type="text" name="sexo" placeholder="Sexo: "><br>
Fecha de Nacimiento:
<input type="date" name="fenacimiento"><br>
<input type="submit" name="balance" value="Guardar Cliente">
</form>
<?php
if(isset($_POST["alta"])){
    $nombre=$_POST["nombre"];
    $direccion=$_POST["direccion"];
    $telefono=$_POST["telefono"];
    $correo=$_POST["correo"];
    $apepat=$_POST["apepat"];
    $apemat=$_POST["apemat"];
    $sexo=$_POST["sexo"];
    $fenacimiento=$_POST["fenacimiento"];
    require_once("cliente.php");
    $obj=new Cliente();
    $obj->alta($nombre,$direccion,$telefono,$correo,$apepat,$apemat,$sexo,$fenacimiento);
    echo"<h2>Cliente Guardado<h2>";
}
require_once("cliente.php");
$obj=new Cliente();
?>
<table>
<tr>
<th>Nombre</th>
<th>Apellido Paterno</th>
<th>Apellido Materno</th>
<th>Direccion</th>
<th>Telefono</th>
<th>Correo</th>
<th>Sexo</th>
<th>Fecha de Nacimiento</th>
</tr>
</table>
<?php
    $res = $obj->consulta();
    while($fila = $res->fetch_assoc()){
        echo"<tr>";
        echo"<td>".$fila["nombre"]."</td>";
        echo"<td>".$fila["apepat"]."</td>";
        echo"<td>".$fila["apemat"]."</td>";
        echo"<td>".$fila["direccion"]."</td>";
        echo"<td>".$fila["telefono"]."</td>";
        echo"<td>".$fila["correo"]."</td>";
        echo"<td>".$fila["sexo"]."</td>";
        echo"<td>".$fila["fenacimiento"]."</td>";
        echo"</tr>";
    }
    ?>