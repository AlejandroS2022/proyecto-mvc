<?php 
    require_once 'abrirconex.php';
    $seleccion="SELECT * FROM usuarios WHERE eliminar=0";
	$resultado=mysqli_query($conexion, $seleccion);
?>
<div style="overflow-x:scroll;" class="bs-example4" data-example-id="contextual-table">
	<center><h2><label><b>Administradores</b></label></h2></center>
	<form method="POST" action="">
	    <button type="submit" class="verde" value="Regusr" name="Regusr" id="Regusr">Registrar <i class="fa fa-plus-circle"></i></button>
	</form>
	<table class="table">
		<thead>
		    <tr class="success">
                <th>Id</th>
				<th>Usuario</th>
				<th>Clave</th>
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
			echo "<td>"; echo $filas['nombre']; echo "</td>";
            echo "<td>"; echo $filas['contrasena']; echo "</td>";
			echo "<form method='POST' action=''>";
			echo "<input type='hidden' name='IdUsr' id='IdUsr' value='".$filas['id']."'>";
			echo "<td><button type='submit' value='Elimusr' name='Elimusr' id='Elimusr'> <img src='images/remove-user.png' width=25px height=25px> </button></td>";
			echo "</tr>";
			echo "</tbody>";
			echo "</form>";
		  }
		}
		?>
	</table>
</div>