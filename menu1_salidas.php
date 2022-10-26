<?php
    session_start();
?>
<!DOCTYPE HTML>
<meta charset="UTF-8">
<html>
    <?php
    if (isset($_SESSION['usuario'])) {
        require_once("html/navegacion.php");
        if (isset($_POST['Regvnt'])) {
			require_once ("html/regventa.php");
        } else if (isset($_POST['AggProd'])) {
			require_once ("html/prodventa.php");
        } else if (isset($_POST['Regvnt2'])) {
        	require_once ("abrirconex.php");
			$Fecha=$_POST['Fecha'];
			mysqli_query($conexion, "INSERT INTO ventas(fecha,eliminar) values('$Fecha',0)");
			echo '<script>
				alert("Datos guardados");
			</script>';
			require_once ("html/tablaventas.php");
        } else if (isset($_POST['AggProd2'])) {
			require_once("abrirconex.php");
        	$IdFactura=$_POST['IdFactura'];
			$IdProducto=$_POST['IdProducto'];
			$Cantidad=$_POST['Cantidad'];
			$data = mysqli_query($conexion, "SELECT * FROM datosproducto WHERE id='$IdProducto'");
			while ($filas2=mysqli_fetch_assoc($data)) {
				$cantidad_original=$filas2['cantidad'];
				$nueva_cantidad=$cantidad_original-$Cantidad;
			}
			$verificar = mysqli_query($conexion, "SELECT * FROM datosproducto WHERE id='$IdProducto' AND eliminar=0");
			$filas=mysqli_fetch_assoc($verificar);
			if ($filas['cantidad'] >= $Cantidad && $filas['cantidad'] >= 0) {
				mysqli_query($conexion, "INSERT INTO ventasdetalle(id_salida,id_producto,cantidad) values('$IdFactura','$IdProducto','$Cantidad')");
				mysqli_query($conexion, "UPDATE datosproducto SET cantidad='$nueva_cantidad' WHERE id='$IdProducto'");
				echo '<script>
				    alert("Datos guardados");
				</script>';
				require_once("html/tablaventas.php");
			} else {
				echo '<script>
					alert("No hay suficiente cantidad del producto seleccionado");
				</script>';
				require_once ("html/tablaventas.php");
			}
        } else if (isset($_POST['Elimvnt'])) {
			$IdFactura=$_POST['IdFactura'];
			echo'<script>
		    if(confirm("Está seguro que desea eliminar esta venta?"))
		    {
		        window.location = "menu1_salidasborrar.php?IdFactura='.$IdFactura.'";
		    }else{
		        window.location = "menu1_salidas.php";
		    }
		    </script>';
		} else {
			require_once ("html/tablaventas.php");
		}
		require_once("html/footer.php");
    } else {
		echo '<script>
		    window.location = "index.php";
		</script>';
	}
    ?>
</html>