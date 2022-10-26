<?php
    session_start();
?>
<!DOCTYPE HTML>
<meta charset="UTF-8">
<html>
    <?php
    if (isset($_SESSION['usuario'])) {
		require_once("html/navegacion.php");
		if (isset($_POST['Buscar'])) {
			if ($_POST['accion'] == "m") {
				require_once("html/reportesmes.php");
			} else if ($_POST['accion'] == "a") {
				require_once("html/reportesanual.php");
			}
		} else if (isset($_POST['GenreporteMes'])) {
			require_once("html/reportesmes2.php");
		} else {
			require_once("html/reportes.php");
		}
		require_once("html/footer.php");
    } else {
		echo '<script>
		    window.location = "index.php";
		</script>';
	}
    ?>
</html>
