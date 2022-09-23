<?php
session_start();
 $arrE = $_SESSION['arr'][$_GET['id']];
$_SESSION['id'] = $_GET['id'];
 ?>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link  rel="stylesheet" href="./css/styles.css" TYPE="text/css">
 <h1 align="center" id="titulo">Editar pedido</h1>
 <hr>
 

 <form align="center" action="editar.php" method="post">
 <div id="editable">
 <div id="texto">
  	      Nombre del cliente: <input type = "text" name="NombreE"  value="<?php echo $arrE['nombre'];?>" class="form-control" required ><br><br>
  		  N&uacutemero de pedido: <input type = "text" name="NumPedidoE" class="form-control" value="<?php echo $arrE['NumPedido'];?>"  required><br><br>
          Hamburguesas: <br> Mocana Cantidad: <input type = "number"  class="form-control"name="MocanaE" value="<?php echo $arrE['CantidadHM'];?>">
          <br>Caribe Cantidad: <input type = "number" class="form-control" name="CaribeE" value="<?php echo $arrE['CantidadHC'];?>"  >
          <!------------------------------------------------------------>
  		  <br>
          Bebidas:<br>T&eacute Cantidad: <input type = "number" class="form-control" name="TéE" value="<?php echo $arrE['CantidadBT'];?>">
          <br>Coca cola Cantidad: <input type = "number"class="form-control"  name="CocaE" value="<?php echo $arrE['CantidadBC'];?>">
          <!------------------------------------------------------------>
          <br><br>
  		  Acompa&ntildeantes:<br>Cascos de papas Cantidad: <input type = "number" class="form-control"  name="CascosE" value="<?php echo $arrE['CantidadACP'];?>">
          <br>Papas a la francesa Cantidad: <input type = "number" class="form-control"name="PapasfrE" value="<?php echo $arrE['CantidadAPF'];?>">
			<br><br>
</div>

 	<table align="center">
 			<td>
		<input type="submit" class="btn btn color-background color " value="Volver">
 		<input type="submit" name="guardar"  class="btn btn color-background color " value="Guardar Cambios">
        <input type="reset" class="btn btn color-background color "  value="Limpiar">
      </td>
 		</tr>
 	</table>
	 </div>
 </form>
 <form  action="list.php" method="post">
  
 </form>
<?php


 ?>
