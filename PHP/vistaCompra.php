<form action="" method="post">
Fecha:
<input type="date" name="fecha"><br>
Total:
<input type="text" name="total" placeholder="Total: "><br>
Tipo de Pago:
<input type="text" name="tipodepago" placeholder="Tipo de pago"><br>
ID Cliente:
<input type="text" name="IDcliente" placeholder="IDcliente: "><br>
<input type="submit" name="balance" value="Guardar Compra">
</form>
<?php
if(isset($_POST["alta"])){
    $fecha=$_POST["fecha"];
    $total=$_POST["total"];
    $tipo_pago=$_POST["tipodepago"];
    $IDcliente=$_POST["IDcliente"];
    require_once("compra.php");
    $obj= new Compra();
    $obj->alta($fecha,$total,$tipo_pago,$IDcliente);
    echo"<h2>Compra Guardada<h2>";
}
require_once("compra.php");
$obj=new Compra();
?>
<table>
<tr>
<th>Fecha</th>
<th>Total</th>
<th>Tipo de pago</th>
<th>ID cliente</th>
</tr>
</table>
<?php
    $res = $obj->consulta();
    while($fila = $res->fetch_assoc()){
        echo"<tr>";
        echo"<td>".$fila["fecha"]."</td>";
        echo"<td>".$fila["total"]."</td>";
        echo"<td>".$fila["tipo_pago"]."</td>";
        echo"<td>".$fila["IDcliente"]."</td>";
        echo"</tr>";
    }
    ?>