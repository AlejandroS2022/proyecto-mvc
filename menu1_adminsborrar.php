<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <?php
    if (isset($_SESSION['usuario'])) {
		$IdUsr=$_GET['IdUsr'];
		include 'abrirconex.php';
		$seleccion="UPDATE usuarios SET eliminar=1 WHERE id='".$IdUsr."' ";
		mysqli_query($conexion,$seleccion);
		echo '<script>
		    alert("Usuario eliminado exitosamente");
		</script>';
		echo '<script>
		    window.location = "menu1_admins.php";
		</script>';
    } else {
		echo '<script>
		    window.location = "index.php";
		</script>';
	}
    ?>
</html>
