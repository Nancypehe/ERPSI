<form action="" method="post">
<input type="text" name="fecha" placeholder="Fecha: "><br>
<input type="text" name="IDCliente" placeholder="IDcliente: "><br>
<input type="text" name="total" placeholder="Total "><br>
<input type="text" name="tipo_pago" placeholder="Tipo de pago: "><br>
</select><br>
<input type="submit" name="alta" value="Guardar Venta">
</form>
<?php
if(isset($_POST["alta"])){
    $fecha=$_POST["fecha"];
    $IDCliente=$_POST["IDCliente"];
    $total=$_POST["total"];
    $tipo_pago=$_POST["tipo_pago"];
    require_once("venta.php");
    $obj=new Venta();
    $obj->alta($fecha,$IDCliente,$total,$tipo_pago);
    echo"<h2>Venta Registrado<h2>";
}
require_once("venta.php");
$obj=new Venta();
?>
<table>
<tr>
<th>fecha</th>
<th>IDCliente</th>
<th>Total</th>
<th>Tipo de Pago</th>
</tr>
<?php
    $res = $obj->consulta();
    while($fila = $res->fetch_assoc()){
        echo"<tr>";
        echo"<td>".$fila["fecha"]."</td>";
        echo"<td>".$fila["IDCliente"]."</td>";
        echo"<td>".$fila["total"]."</td>";
        echo"<td>".$fila["tipo_pago"]."</td>";
        echo"</tr>";
    }
    ?>
</table>
