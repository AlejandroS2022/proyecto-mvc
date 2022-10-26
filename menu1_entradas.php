<?php
    session_start();
?>
<!DOCTYPE HTML>
<meta charset="UTF-8">
<html>
    <?php
    if (isset($_SESSION['usuario'])) {
        require_once("html/navegacion.php");
        if (isset($_POST['Regcmp'])) {
			require_once("html/regcompra.php");
        } else if (isset($_POST['AggProd'])) {
			require_once("html/prodcompra.php");
        } else if (isset($_POST['Regcmp2'])) {
        	require_once("abrirconex.php");
			$Fecha=$_POST['Fecha'];
			mysqli_query($conexion, "INSERT INTO compras(fecha,eliminar) values('$Fecha',0)");
			echo '<script>
				alert("Datos guardados");
			</script>';
			require_once("html/tablacompras.php");
        } else if (isset($_POST['AggProd2'])) {
        	require_once("abrirconex.php");
        	$IdPedido=$_POST['IdPedido'];
			$IdProducto=$_POST['IdProducto'];
			$Cantidad=$_POST['Cantidad'];
			$data = mysqli_query($conexion, "SELECT * FROM datosproducto WHERE id='$IdProducto'");
			while ($filas2=mysqli_fetch_assoc($data)) {
				$cantidad_original=$filas2['cantidad'];
				$nueva_cantidad=$cantidad_original+$Cantidad;
			}
			mysqli_query($conexion, "INSERT INTO comprasdetalle(id_entrada,id_producto,cantidad) values('$IdPedido','$IdProducto','$Cantidad')");
			mysqli_query($conexion, "UPDATE datosproducto SET cantidad='$nueva_cantidad' WHERE id='$IdProducto'");
			echo '<script>
				alert("Datos guardados");
			</script>';
			require_once("html/tablacompras.php");
        } else if (isset($_POST['Elimcmp'])) {
			$IdPedido=$_POST['IdPedido'];
			echo'<script>
		    if(confirm("Está seguro que desea eliminar esta compra?"))
		    {
		        window.location = "menu1_entradasborrar.php?IdPedido='.$IdPedido.'";
		    }else{
		        window.location = "menu1_entradas.php";
		    }
		    </script>';
		} else {
			require_once("html/tablacompras.php");
		}
		require_once("html/footer.php");
    } else {
		echo '<script>
		    window.location = "index.php";
		</script>';
	}
    ?>
</html>
