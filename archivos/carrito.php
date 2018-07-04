<?php include 'includes/header.php' ?>
<?php
  session_start();
  
  if (!isset($_SESSION['carrito'])) {
    header('Location: catalogo.php');
  }
  
  $importe = 0;
  $total = 0;
?>
  
  <section class="casaca">
    <h2><?= $cat ?></h2>
    <table border="5">
      <tr height="50" align="center" >
        <td width="200">Foto</td>
        <td width="200">Código</td>
        <td width="200">Producto</td>
        <td width="200">Cantidad</td>
        <td width="200">Precio</td>
        <td width="200">Importe</td>
      </tr>
      <?php foreach ($_SESSION['carrito'] as $key => $value) : ?>
        <?php
        $importe = $value[2] * $value[3];
        $total += $importe;
        ?>
        <tr height="50" align="center" >
          <td>
            <img src="imagenes/productos/<?= $value[0] ?>.png" width="80" height="70">
          </td>
          <td><?= $value[0] ?></td>
          <td><?= $value[1] ?></td>
          <td>
            <form action="carrito_edit.php" method="get">
              <input type="hidden" value="<?= $value[0] ?>" name="cod">
              <input name="can" value="<?= $value[2] ?>" size="7">
              <input type="submit" value="update">
            </form>
          </td>
          <td>S/<?= $value[3] ?></td>
          <td>S/<?= $importe ?></td>
        </tr>
      <?php endforeach; ?>
      <tr height="50">
        <th colspan="5">Total</th>
        <td>S/<?= $total ?></td>
      </tr>
    </table>
    <br><br>
    <a href="del_carrito.php">Vaciar carrito</a>
    <br>
    <a href="pedido.php">Realizar pedido</a>
    <br>
    <a href="catalogo.php">Seguir comprando</a>
  </section>

<?php include 'includes/footer.php' ?>