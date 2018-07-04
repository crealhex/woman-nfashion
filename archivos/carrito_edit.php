<?php
  
  session_start();
  
  $cod = $_GET['cod'];
  $can = $_GET['can'];
  
  $cesta = $_SESSION['carrito'];
  
  $cesta[$cod][2] = $can;
  
  $_SESSION['carrito'] = $cesta;
  
  header('Location: carrito.php');