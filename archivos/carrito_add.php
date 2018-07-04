<?php
  
  session_start();
  
  $idp = $_GET['idp'];
  $nom = $_GET['nombre'];
  $can = $_GET['cantidad'];
  $pre = $_GET['precio'];
  
  if ($_SESSION['carrito']) {
    $cesta = $_SESSION['carrito'];
  }
  
  $cesta[$idp] = array($idp, $nom, $can, $pre);
  
  $_SESSION['carrito'] = $cesta;
  
  header('Location: carrito.php');