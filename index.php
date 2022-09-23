<?php
session_start();
?>
<html>

	<head>
		 <meta content= " text/html; charset=utf-8" http-equiv="contnt-type">
		 <meta name="viewport" content="width=device-width, user-scakabke=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
		 <title>Parcial</title>
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		 <link  rel="stylesheet" href="./css/styles.css" TYPE="text/css">

	</head>
	<body>
		<div class="row mt-5">
			<div class="col-2 ml-3">
			<form  action="list.php" method="post">
				<input type="submit" class="btn btn-dark " value="Listado de  pedidos">
			</form>
			</div>	
			<div class="col-2 ml-3">
			<form  action="listClientes.php" method="post">
				<input type="submit" class="btn btn-dark " value="Listado de clientes">
			</form>
			</div>	
			<div class="col-2 ml-3">
				<form  action="listOrderFinal.php" method="post">
					<input type="submit" class="btn btn-dark " value="Listado de  pedidos ordenado">
				</form>
			</div>	
		</div>
	<div class="row mt-5">	
		<div class="col-3">
			<table class="table table-light">
				<tbody>
					<tr align="center">
						<td> Menú</td>
					</tr>
					<tr>
						<td> Hamburguesas</td>
						<td> $1000 </td>
					</tr>
					<tr>
						<td> Bebidas</td>
						<td> $5000 </td>
					</tr>
					<tr>
						<td> Acompañantes</td>
						<td> $5000 </td>
					</tr>
				</tbody>
			</table>	
		</div>
		<div class="col-9">
		<form action="" align="center" method="post">
			<h1 align="center" id="titulo">PETRONA BURGER</h1>
		<div id="texto">
  	      Cédula del cliente: <input type = "number" name="Cedula"  class="form-control" required ><br><br>
          Hamburguesas Cantidad:  <input type = "number"  class="form-control"name="CantidadHM" value="0">
          <!------------------------------------------------------------>
  		  <br>
          Bebidas:<br>T&eacute Cantidad: <input type = "number" class="form-control" name="CantidadBT" value="0">
          <br>Coca cola Cantidad: <input type = "number"class="form-control"  name="CantidadBC" value="0">
          <!------------------------------------------------------------>
          <br><br>
  		  Acompa&ntildeantes:<br>Cascos de papas Cantidad: <input type = "number"class="form-control"  name="CantidadACP" value="0">
          <br>Papas a la francesa Cantidad: <input type = "number" class="form-control"name="CantidadAPF" value="0">
			<br><br>
	</div>
          <input type="submit" name="add" class="btn btn-dark " value="Crear pedido">
		</form>


		<?php
			if(isset($_POST['add'])){
				$totalHamburguesa=($_POST["CantidadHM"]* 10000);
				$totalBebidas=(($_POST["CantidadBT"] + $_POST["CantidadBC"] ) * 5000);
				$totalAcompa=(($_POST["CantidadACP"] +$_POST["CantidadAPF"]) * 5000);
				$precioFinal=$totalHamburguesa+$totalBebidas+$totalAcompa;
				$array = array(
						"TotalFinal" 	=> $precioFinal,
						"nombre" 		=>$_POST["Cedula"] ,
						"NumPedido" 	=> count($_SESSION['arr'])+1,
                        "CantidadHM" 	=>  $_POST["CantidadHM"],
                        "CantidadBT" 	=> $_POST["CantidadBT"],
                        "CantidadBC" 	=> $_POST["CantidadBC"],
                        "CantidadACP" 	=> $_POST["CantidadACP"],
                        "CantidadAPF" 	=> $_POST["CantidadAPF"],

				);
                				
				$a=count($_SESSION['arr']);
                $_SESSION['arr'][$a]=$array;

		}

		?>
	</body>
	</div>
	</div>
</html>
<form>

