<form action="" method="post">
<input type="text" name="nombre" placeholder="Nombre: ">
<br>
<input type="password" name="password" placeholder="Password "><br>
Tipo:
<select name="Tipo">
<option value="1">Admin</option>
<option value="2">Usuario</option>
</select><br>
<input type="submit" name="alta" value="Guardar Usuario">
</form>
<?php

require_once("usuario.php");
$obj=new Usuario();
if(isset($_POST["alta"])){
    $nombre=$_POST["nombre"];
    $password=$_POST["password"];
    $tipo=$_POST["Tipo"];
    require_once("usuario.php");
    $obj=new Usuario();
    $obj->alta($nombre,$tipo,$password);
    echo"<h2>Usuario Registrado<h2>";
}
if(isset($_POST["eliminar"])){
    echo "<script>
    var opcion = confirm('¿Deseas eliminar el Usuario?');
    if(opcion===true){
        window.location.href= 'index.php?el=".$_POST["id"]."';
    }
    </script>";
}
    if(isset($_GET["el"])){
        $obj->eliminar($_GET["el"]);
        echo "<script>alert('Usuario eliminado');</script>";
    }   
?>
<table>
<tr>
<th>Nombre</th>
<th>Password</th>
<th>tipo</th>
</tr>
<?php
    $res = $obj->consulta();
    while($fila = $res->fetch_assoc()){
        echo"<tr>";
        echo"<td>".$fila["nombre"]."</td>";
        echo"<td>*********</td>";
        echo"<td>".$fila["tipo"]."</td>";
    ?>
    <td>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $fila['IDusuario']; ?>">
            <input type="submit" name="eliminar" value="Eliminar">
        </form>
    </td>
    <?php
        echo"</tr>";
    }     
    ?>

</table>    