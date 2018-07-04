<?php include('includes/header.php');?>
  
  <section class="formulario">
    <form action="" class="form">
      <div class="titulo">
        <h1> CONTACTOS</h1>
      </div>
      <label for="nombre" class="form-label">Nombres:</label>
      <input type="text" name="nombre" class="form-input" placeholder="Escriba su Nombre">
      <label for="direccion" class="form-label">Direccion:</label>
      <input type="text" name="direccion" class="form-input" placeholder="Escriba su Direccion">
      <label for="correo" class="form-label">Correo Electronico:</label>
      <input type="email" name="correo" class="form-input" placeholder="Escriba su Email">
      <label for="consulta" class="form-label">Consulta:</label>
      <textarea name="consulta" class="form-textarea" placeholder="Aqui Escriba su Consulta"></textarea>
      <input type="submit" class="btn-submit" value="Enviar Consulta ">
    </form>
  </section>
  <section class="ubi">
    <h3> UBICACIÓN </h3>
    <img src="../imagenes/ubicacion.png" width="450" height="350" />
  </section>
  
<?php include('includes/footer.php');?>