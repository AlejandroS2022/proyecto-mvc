<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <?php
    if (isset($_SESSION['usuario'])) {
		$IdPedido=$_GET['IdPedido'];
		require_once 'abrirconex.php';
		$seleccion="UPDATE compras SET eliminar=1 WHERE id='".$IdPedido."' ";
		mysqli_query($conexion,$seleccion);
		echo '<script>
		    alert("Entrada eliminada exitosamente");
		</script>';
		echo '<script>
		    window.location = "menu1_entradas.php";
		</script>';
    } else {
		echo '<script>
		    window.location = "index.php";
		</script>';
	}
    ?>
</html>
