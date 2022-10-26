<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <?php
    if (isset($_SESSION['usuario'])) {
		$IdFactura=$_GET['IdFactura'];
		require_once 'abrirconex.php';
		$seleccion="UPDATE ventas SET eliminar=1 WHERE id='".$IdFactura."' ";
		mysqli_query($conexion,$seleccion);
		echo '<script>
		    alert("Salida eliminada exitosamente");
		</script>';
		echo '<script>
		    window.location = "menu1_salidas.php";
		</script>';
    } else {
		echo '<script>
		    window.location = "index.php";
		</script>';
	}
    ?>
</html>
