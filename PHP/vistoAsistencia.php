<form action="" method="post">
<input type="date" name="fecha">
<br>
<input type="text" name="IDempleado" placeholder="ID de empleado: ">
<br>
<input type="time" name="hora"><br>
<input type="submit" name="alta" value="Guardar Asistencia">
</form>
<?php
if(isset($_POST["alta"])){
    $fecha=$_POST["fecha"];
    $IDempleado=$_POST["IDempleado"];
    $tiempo=$_POST["hora"];
    require_once("asistencia.php");
    $obj=new Asistencia();
    $obj->alta($fecha,$IDempleado,$hora);
    echo"<h2>Asistencia Guardada<h2>";
}
require_once("asistencia.php");
$obj=new Asistencia();
?>
<table>
<tr>
<th>Fecha</th>
<th>ID empleado</th>
<th>Hora</th>
</tr>
<?php
    $res = $obj->consulta();
    while($fila = $res->fetch_assoc()){
        echo"<tr>";
        echo"<td>".$fila["fecha"]."</td>";
        echo"<td>".$fila["ID empleado"]."</td>";
        echo"<td>".$fila["hora"]."</td>";
        echo"</tr>";
    }
    ?>
</table>