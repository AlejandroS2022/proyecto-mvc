<?php
    session_start();
?>
<!DOCTYPE HTML>
<meta charset="UTF-8">
<html>
    <?php
    if (isset($_SESSION['usuario'])) {
        require_once("html/navegacion.php");
        if (isset($_POST['Regprod'])) {
			require_once("html/regproducto.php");
		} else if (isset($_POST['Regprod2'])) {
			require_once ("abrirconex.php");
			$nombreProducto=$_POST['nombreProducto'];
			$tipoProducto=$_POST['tipoProducto'];
			$Cantidad=$_POST['Cantidad'];
			$precio=$_POST['precio'];
			mysqli_query($conexion, "INSERT INTO datosproducto(nombre,tipo,cantidad,precio,eliminar) values('$nombreProducto','$tipoProducto','$Cantidad','$precio',0)");
			Echo '<script>
				alert("Datos guardados");
			</script>';
			require_once("html/navegacion.php");
		} else if (isset($_POST['Elimprod'])) {
			$idProducto=$_POST['idProducto'];
			echo'<script>
		    if(confirm("Está seguro que desea eliminar este producto?"))
		    {
		        window.location = "menu1_productosborrar.php?idProducto='.$idProducto.'";
		    }else{
		        window.location = "menu1_productos.php";
		    }
		    </script>';
		} else {
			require_once("html/tablaproductos.php");
		}
		require_once("html/footer.php");
	} else {
		echo '<script>
		    window.location = "index.php";
		</script>';
	}
    ?>
</html>

