<?php
  
  include 'conexion.php';
  
  $cod = $_GET['Codigo'];
  $nom = $_GET['Nombre'];
  $apel = $_GET['Apellido'];
  $car = $_GET['Cargo'];
  $sue = $_GET['Sueldo'];
  
  $sql="update producto set nombe='$nom',";
  $sql.="Apellido='$apel',Cargo='$car',Sueldo=$sue";
  $sql.="where idempleado=$id";
  mysql_query($sql);
  
  header("localtion:empleado.php");