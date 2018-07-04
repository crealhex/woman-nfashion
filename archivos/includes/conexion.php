<?php
  
  $cn=mysqli_connect("localhost","root","")
  or die("No se pudo conectar al servidor");
  
  mysqli_select_db($cn,"dbroxana")
  or die("La base de datos no existe");