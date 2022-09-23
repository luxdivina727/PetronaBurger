<?php
session_start();
$_SESSION['arr'][$_SESSION['id']]['nombre']         = $_POST["NombreE"];
$_SESSION['arr'][$_SESSION['id']]['NumPedido']      = $_POST["NumPedidoE"];
$_SESSION['arr'][$_SESSION['id']]['CantidadHM']     = $_POST["MocanaE"];
$_SESSION['arr'][$_SESSION['id']]['CantidadHC']     = $_POST["CaribeE"];
$_SESSION['arr'][$_SESSION['id']]['CantidadBT']     = $_POST["TéE"];
$_SESSION['arr'][$_SESSION['id']]['CantidadBC']     = $_POST["CocaE"];
$_SESSION['arr'][$_SESSION['id']]['CantidadACP']    = $_POST["CascosE"];
$_SESSION['arr'][$_SESSION['id']]['CantidadAPF']    = $_POST["PapasfrE"];
 header('location:list.php');

 ?>
