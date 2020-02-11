<form action="" method="post">
ID materia prima:
<input type="text" name="IDmateriaprima"><br>
ID compra:
<input type="text" name="IDcompra"><br>
Cantidad:
<input type="text" name="cantidad"><br>
<input type="submit" name="detallecompra" value="Guardar">
</form>
<?php
if(isset($_POST["alta"])){
    $IDmateriaprima=$_POST["IDmateriaprima"];
    $IDcliente=$_POST["IDcompre"];
    $cantidad=$_POST["cantidad"];
    require_once("detalle_compra.php");
    $obj= new Detallecompra();
    $obj->alta($IDmateriaprima,$IDcompra,$cantidad);
    echo"<h2>Detalle Guardado<h2>";
}
require_once("detalle_compra.php");
$obj=new Detallecompra();
?>
<table>
<tr>
<th>ID materia prima</th>
<th>ID compra</th>
<th>Cantidad</th>
</tr>
</table>
<?php
    $res = $obj->consulta();
    while($fila = $res->fetch_assoc()){
        echo"<tr>";
        echo"<td>".$fila["IDmateriaprima"]."</td>";
        echo"<td>".$fila["IDcompra"]."</td>";
        echo"<td>".$fila["cantidad"]."</td>";
        echo"</tr>";
    }
    ?>