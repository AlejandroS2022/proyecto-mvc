<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <?php
    //------MENU DE ADMINISTRADORES------//
		if (isset($_POST['Login'])) {
			require_once 'abrirconex.php';
			$usuario=$_POST['usuario'];
			$clave=$_POST['clave'];
			$verificar = mysqli_query($conexion, "SELECT contrasena FROM usuarios WHERE nombre='$usuario' AND contrasena='$clave' AND eliminar=0");
			$verificarus = mysqli_query($conexion, "SELECT nombre FROM usuarios WHERE nombre='$usuario'");
			$data = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre='$usuario'");
			while ($filas2=mysqli_fetch_assoc($data)) {
				$id=$filas2['id'];
				$nombre=$filas2['nombre'];
			}
			if (mysqli_num_rows($verificarus)==0) {
				echo '<script>
				    alert("El usuario no está registrado");
				</script>';
				require_once ("html/index.php");
			} else if (mysqli_num_rows($verificarus)>0 && mysqli_num_rows($verificar)==0) {
				echo '<script>
					alert("La clave del usuario es incorrecta");
				</script>';
				require_once ("html/index.php");
			} else if (mysqli_num_rows($verificarus)>0 && mysqli_num_rows($verificar)>0) {
				$_SESSION['usuario']=$_POST['usuario'];
				$_SESSION['id']=$id;
				$_SESSION['nombre']=$nombre;
				echo '<script>
				    window.location = "menu1.php";
				</script>';
			}
		} else {
			require_once("html/index.php");
		}
		//----------------------------------//
    ?>
</html>
