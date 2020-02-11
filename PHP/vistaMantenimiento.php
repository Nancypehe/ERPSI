<form action="" method="post">
Fecha de Mantenimiento:
<input type="date" name="fecha_man"><br>
Area:
<input type="text" name="area"><br>
ID Mobiliario:
<input type="text" name="IDmob"><br>
Costo del Mantenimiento:
<input type="text" name="costo_man"><br>
ID Empleado:
<input type="text" name="IDempleado"><br>
<input type="submit" name="mantenimiento" value="Guardar">
</form>
<?php
if(isset($_POST["alta"])){
    $fecha_man=$_POST["fecha_man"];
    $area=$_POST["area"];
    $IDmob=$_POST["IDmob"];
    $costo_man=$_POST["costo_man"];
    $IDempleado=$_POST["IDempleado"];
    require_once("mantenimiento.php");
    $obj= new Mantenimiento();
    $obj->alta($fecha_man,$area,$IDmob,$costo_man,$IDempleado);
    echo"<h2>Mantenimiento Guardado<h2>";
}
require_once("mantenimiento.php");
$obj=new Mantenimiento();
?>
<table>
<tr>
<th>Fecha de Mantenimiento</th>
<th>Area</th>
<th>ID Mobiliario</th>
<th>Costo de Mantenimiento</th>
<th>ID Empleado</th>
</tr>
</table>
<?php
    $res = $obj->consulta();
    while($fila = $res->fetch_assoc()){
        echo"<tr>";
        echo"<td>".$fila["fecha_man"]."</td>";
        echo"<td>".$fila["area"]."</td>";
        echo"<td>".$fila["IDmob"]."</td>";
        echo"<td>".$fila["costo_man"]."</td>";
        echo"<td>".$fila["IDempleado"]."</td>";
        echo"</tr>";
    }
    ?>