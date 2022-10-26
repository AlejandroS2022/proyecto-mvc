<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <?php
    if (isset($_SESSION['usuario'])) {
		$idProducto=$_GET['idProducto'];
		require_once 'abrirconex.php';
		$seleccion="UPDATE datosproducto SET eliminar=1 WHERE id='".$idProducto."' ";
		mysqli_query($conexion,$seleccion);
		echo '<script>
		    alert("Producto eliminado exitosamente");
		</script>';
		echo '<script>
		    window.location = "menu1_productos.php";
		</script>';
    } else {
		echo '<script>
		    window.location = "index.php";
		</script>';
	}
    ?>
</html>