<link  rel="stylesheet" href="./css/styles.css" TYPE="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
	session_start();
	if(!isset($_SESSION['arr'])){
		echo "<h2> No hay pedidos registrados </h2>";
	}
	else
	{
	?>

    <h1 id="title" align="center">LISTADO PEDIDOS</h1>

	<?php
	usort($_SESSION['arr'],function ($a,$b)
    {
        if($_SESSION['arr']!=null)
        return $a["NumPedido"] < $b["NumPedido"] ? 1 : -1;
    });
      for ($i=0; $i<count($_SESSION['arr']);$i++ )
		{
	?>
    <table class="table table-dark" width="70%" border="1px" align="center">

    <tr align="center">
	<td scope="col">Numero de pedido</td>
        <td scope="col">Cédula del cliente</td>
				<td>Hamburguesa</td>
        <td scope="col">T&eacute</td>
				<td>Coca cola</td>
        <td scope="col">Cascos de papas</td>
				<td>Papas a la francesa</td>
				<td>Total a pagar</td>
        <td scope="col">Acciones </td>
		</tr>
		<tr>
        <td scope="col">
		<?php echo $_SESSION['arr'][$i]["NumPedido"]?></td>		
				<td><?php echo $_SESSION['arr'][$i]["nombre"]?></td>
				<td><?php echo $_SESSION['arr'][$i]["CantidadHM"]?></td>
				<td><?php echo $_SESSION['arr'][$i]["CantidadBT"]?></td>
				<td><?php echo $_SESSION['arr'][$i]["CantidadBC"]?></td>
				<td><?php echo $_SESSION['arr'][$i]["CantidadACP"]?></td>
				<td><?php echo $_SESSION['arr'][$i]["CantidadAPF"]?></td>
				<td><?php echo $_SESSION['arr'][$i]["TotalFinal"]?></td>
				<td>
					<a href="delete.php?id=<?php echo $i;?>">Eliminar</a>
				</td>
		</tr>
            <?php
		echo"<br>";
        }
	}
     ?>
    </table>
	<br>
	<form align="center" action="index.php" method="post">
		<input type="submit" class="btn btn-dark" value="Agregar Pedido">
	</form>
