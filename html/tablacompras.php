<?php 
    require_once 'abrirconex.php';
    $seleccion="SELECT * FROM compras WHERE eliminar=0";
	$resultado=mysqli_query($conexion, $seleccion);
?>
<div style="overflow-x:scroll;" class="bs-example4" data-example-id="contextual-table">
	<center><h2><label><b>Entradas</b></label></h2></center>
	<form method="POST" action="">
	    <button type="submit" class="verde" value="Regcmp" name="Regcmp" id="Regcmp">Registrar <i class="fa fa-plus-circle"></i></button>
	</form>
	<table class="table">
		<thead>
		    <tr class="success">
		        <th>Id</th>
				<th>Productos - cantidad</th>
				<th></th>
				<th>Fecha</th>
				<th></th>
			</tr>
		</thead>
        <?php
		if (mysqli_num_rows($resultado)>0) {
		  while($filas=mysqli_fetch_assoc($resultado))
		  {
			echo "<tbody>";
			echo "<tr class='active'>";
			echo "<td>"; echo $filas['id']; echo "</td>";
			$seleccion2="SELECT * FROM comprasdetalle WHERE id_entrada='".$filas['id']."'";
		    $resultado2=mysqli_query($conexion, $seleccion2);
		    if (mysqli_num_rows($resultado2)>0) {
		    	echo "<td>";
				while($filas2=mysqli_fetch_assoc($resultado2))
				{
					$seleccion3="SELECT * FROM datosproducto WHERE id='".$filas2['id_producto']."'";
			        $resultado3=mysqli_query($conexion, $seleccion3);
			        if (mysqli_num_rows($resultado3)>0) {
			        	while($filas3=mysqli_fetch_assoc($resultado3))
			        	{
			        		echo $filas3['nombre'].' - '.$filas2['cantidad'];
			        		echo '</br>';
			        	}
			        }
				}
				echo "</td>";
			} else {
				echo "
				<td></td>";
			}
			echo "<form method='POST' action=''>";
			echo "<input type='hidden' name='IdPedido' id='IdPedido' value='".$filas['id']."'>";
			echo "<td><button type='submit' value='AggProd' name='AggProd' id='AggProd'> <img src='images/add-product.png' width=25px height=25px> </button></td>";
			echo "</form>";
			echo "<td>"; echo $filas['fecha']; echo "</td>";
			echo "<form method='POST' action=''>";
			echo "<input type='hidden' name='IdPedido' id='IdPedido' value='".$filas['id']."'>";
			echo "<td><button type='submit' value='Elimcmp' name='Elimcmp' id='Elimcmp'> <img src='images/remove-user.png' width=25px height=25px> </button></td>";
			echo "</tr>";
			echo "</tbody>";
			echo "</form>";
		  }
		}
		?>
	</table>
</div>