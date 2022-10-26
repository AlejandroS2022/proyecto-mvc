<?php 
    require_once 'abrirconex.php';
    $seleccion="SELECT * FROM datosproducto WHERE eliminar=0";
	$resultado=mysqli_query($conexion, $seleccion);
?>
<div style="overflow-x:scroll;" class="bs-example4" data-example-id="contextual-table">
	<center><h2><label><b>Productos</b></label></h2></center>
	<form method="POST" action="">
	    <button type="submit" class="verde" value="Regprod" name="Regprod" id="Regprod">Registrar <i class="fa fa-plus-circle"></i></button>
	</form>
	<table class="table">
		<thead>
		    <tr class="success">
                <th>Nombre del producto</th>
				<th>Tipo de producto</th>
				<th>Cantidad</th>
				<th>Precio</th>
				<th></th>
			</tr>
		</thead>
        <?php
		if (mysqli_num_rows($resultado)>0) {
		  while($filas=mysqli_fetch_assoc($resultado))
		  {
			echo "<tbody>";
			echo "<tr class='active'>";
			echo "<td>"; echo $filas['nombre']; echo "</td>";
			echo "<td>"; echo $filas['tipo']; echo "</td>";
            echo "<td>"; echo $filas['cantidad']; echo "</td>";
            echo "<td>"; echo $filas['precio']; echo "</td>";
			echo "<form method='POST' action=''>";
			echo "<input type='hidden' name='idProducto' id='idProducto' value='".$filas['id']."'>";
			echo "<td><button type='submit' value='Elimprod' name='Elimprod' id='Elimprod'> <img src='images/remove-user.png' width=25px height=25px> </button></td>";
			echo "</tr>";
			echo "</tbody>";
			echo "</form>";
		  }
		}
		?>
	</table>
</div>