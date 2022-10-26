<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <?php
    if (isset($_SESSION['usuario'])) {
		$IdEmpleado=$_GET['IdEmpleado'];
		include 'abrirconex.php';
		$seleccion="UPDATE empleados SET eliminar=1 WHERE id='".$IdEmpleado."' ";
		mysqli_query($conexion,$seleccion);
		echo '<script>
		    alert("Empleado eliminado exitosamente");
		</script>';
		echo '<script>
		    window.location = "menu1_empleados.php";
		</script>';
    } else {
		echo '<script>
		    window.location = "index.php";
		</script>';
	}
    ?>
</html>
