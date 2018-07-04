<?php
  include 'includes/header.php';
  
  $id=$_GET['id'];
  $sql="select * from producto where idproducto=$id";
  $rs=mysql_query($sql);
  
  $fila=mysql_fetch_array($rs);
?>

<h3>Editar Empleado</h3>
<form action="producto_update.php" method="GET">
  <p> Codigo<input type="text" name="Codigo" value="<?php echo $fila[0];?>"></p>
  <p> Nombre<input type="text" name="Nombre"  value="<?php echo $fila[1];?>"</p>
  <p> Apellido<input type="text" name="Apellido" value="<?php echo $fila[2];?>"></p>
  <p> Cargo<input type="text" name="Cargo" value="<?php echo $fila[3];?>"></p>
  <p> Sueldo<input type="text" name="Sueldo" value="<?php echo $fila[4];?>">></p>
  <p> <input type="submit" value="Registrar" ></p>
</form>

<?php include 'includes/footer.php' ?>

