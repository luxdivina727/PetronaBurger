<?php
	session_start();
  	unset($_SESSION['arr'][$_GET['id']]);
	header('location:list.php');
 ?>
