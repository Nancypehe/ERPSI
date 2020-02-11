<form action="" method="post">
Horas Trabajadas:
<input type="text" name="hrs_trabajadas"><br>
Días Trabajados:
<input type="text" name="dias_trabajados"><br>
Pago de hora:
<input type="text" name="pago_hora"><br>
Hora Extra:
<input type="text" name="hora_extra"><br>
Bonos:
<input type="text" name="bonos"><br>
ID Empleado:
<input type="text" name="IDempleado"><br>
<input type="submit" name="evaluacion" value="Guardar">
</form>
<?php
if(isset($_POST["alta"])){
    $hrs_trabajadas=$_POST["hrs_trabajadas"];
    $dias_trabajados=$_POST["dias_trabajados"];
    $pago_hora=$_POST["pago_hora"];
    $hora_extra=$_POST["hora_extra"];
    $bonos=$_POST["bonos"];
    $IDempleado=$_POST["IDempleado"];
    require_once("jornada.php");
    $obj= new Jornada();
    $obj->alta($hrs_trabajadas,$dias_trabajados,$pago_hora,$hora_extra,$bonos,$IDempleado);
    echo"<h2>Jornada Guardada<h2>";
}
require_once("jornada.php");
$obj=new Jornada();
?>
<table>
<tr>
<th>Horas Trabajadas</th>
<th>Dias Trabajados</th>
<th>Pago de Hora</th>
<th>Hora Extra</th>
<th>Bonos</th>
<th>ID Empleado</th>
</tr>
</table>
<?php
    $res = $obj->consulta();
    while($fila = $res->fetch_assoc()){
        echo"<tr>";
        echo"<td>".$fila["hrs_trabajadas"]."</td>";
        echo"<td>".$fila["dias_trabajados"]."</td>";
        echo"<td>".$fila["pago_hora"]."</td>";
        echo"<td>".$fila["hora_extra"]."</td>";
        echo"<td>".$fila["bonos"]."</td>";
        echo"<td>".$fila["IDempleado"]."</td>";
        echo"</tr>";
    }
    ?>