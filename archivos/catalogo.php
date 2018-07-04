<?php include('includes/conexion.php'); ?>
<?php include('includes/header.php'); ?>
<?php
  if (isset($_GET['idc'])) {
    $idc = $_GET['idc'];
    $cat = $_GET['cat'];
    
    $sql = "select * from producto where idcategoria=$idc";
  } else {
    $sql = "select * from producto where oferta = 1";
    $cat = "Productos en oferta";
  }
  $rs = mysqli_query($cn, $sql);
?>
  
  <section class="casaca">
    <h2><?= $cat ?></h2>
    <table border="5">
      <tr height="50" align="center" >
        <td width="200">Producto</td>
        <td width="200">Precio</td>
      </tr>
      <?php while ($f = mysqli_fetch_array($rs)) : ?>
        <tr height="50" align="center" >
          <td>
            <img src="imagenes/productos/<?= $f[0] ?>.png" width="80" height="70">
          </td>
          <td>
            S/<?= $f[3] ?>
            <br>
            <form action="carrito_add.php" method="get">
              <input type="hidden" name="idp" value="<?= $f[0] ?>">
              <input type="hidden" name="nombre" value="<?= $f[1] ?>">
              <input type="hidden" name="cantidad" value="1">
              <input type="hidden" name="precio" value="<?= $f[3] ?>">
              <input type="submit" class="btn-submit" value="COMPRAR " width="70" height="70">
            </form>
          </td>
        </tr>
      <?php endwhile; ?>
    </table>
  </section>

<?php include('includes/footer.php'); ?>