<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <?php
    //---------MENU DEL USUARIO---------//
        if (isset($_SESSION['usuario'])) {
			require_once("html/navegacion.php");
			echo "<h1>Bienvenido al sistema, ".$_SESSION['nombre']."</h1>";
			require_once("html/footer.php");
		} else {
			echo '<script>
		        window.location = "index.php";
			</script>';
		}
	//----------------------------------//
    ?>
</html>
