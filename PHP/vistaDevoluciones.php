<form action="" method="post">
Fecha:
<input type="date" name="fecha"><br>
Cantidad:
<input type="text" name="cantidad"><br>
Descripcion:
<input type="text" name="descripcion"><br>
ID producto:
<input type="text" name="IDproducto"><br>
<input type="submit" name="devoluciones" value="Guardar">
</form>
<?php
if(isset($_POST["alta"])){
    $fecha=$_POST["fecha"];
    $cantidad=$_POST["cantidad"];
    $descripcion=$_POST["descripcion"];
    $IDproducto=$_POST["IDproducto"];
    require_once("devoluciones.php");
    $obj= new Devolucion();
    $obj->alta($fecha,$cantidad,$descripcion,$IDproducto);
    echo"<h2>Devolucion Guardada<h2>";
}
require_once("devoluciones.php");
$obj=new Devolucion();
?>
<table>
<tr>
<th>Fecha</th>
<th>Cantidad</th>
<th>Descripcion</th>
<th>ID producto</th>
</tr>
</table>
<?php
    $res = $obj->consulta();
    while($fila = $res->fetch_assoc()){
        echo"<tr>";
        echo"<td>".$fila["fecha"]."</td>";
        echo"<td>".$fila["cantidad"]."</td>";
        echo"<td>".$fila["descripcion"]."</td>";
        echo"<td>".$fila["IDproducto"]."</td>";
        echo"</tr>";
    }
    ?>