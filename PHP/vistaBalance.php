<form action="" method="post">
Fecha de inicio:
<input type="date" name="fechainicio">
<br>
Fecha de finalizacion:
<input type="date" name="fechafin">
<br>
Total: <input type="text" name="total" placeholder="Total "><br>
<input type="submit" name="balance" value="Guardar Balance">
</form>
<?php
if(isset($_POST["alta"])){
    $fechaincio=$_POST["fechainicio"];
    $fechafin=$_POST["fechafin"];
    $total=$_POST["total"];
    require_once("balance.php");
    $obj=new balance();
    $obj->alta($fechainicio,$fechafin,$total);
    echo"<h2>Balance Guardado<h2>";
}
require_once("balance.php");
$obj=new balance();
?>
<table>
<tr>
<th>Fecha de Inicio</th>
<th>Fecha final</th>
<th>Total</th>
</tr>
<?php
    $res = $obj->consulta();
    while($fila = $res->fetch_assoc()){
        echo"<tr>";
        echo"<td>".$fila["fechainicio"]."</td>";
        echo"<td>".$fila["fechafin"]."</td>";
        echo"<td>".$fila["total"]."</td>";
        echo"</tr>";
    }
    ?>
</table>