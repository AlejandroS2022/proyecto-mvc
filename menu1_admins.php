<?php
    session_start();
?>
<!DOCTYPE HTML>
<meta charset="UTF-8">
<html>
    <?php
    if (isset($_SESSION['usuario'])) {
        require_once("html/navegacion.php");
        if (isset($_POST['Regusr'])) {
			require_once("html/regadmin.php");
        } else if (isset($_POST['Regusr2'])) {
        	require_once ("abrirconex.php");
        	$NombreUsr=$_POST['NombreUsr'];
			$ContrasenaUsr=$_POST['ContrasenaUsr'];
			$verificar_emp = mysqli_query($conexion, "SELECT nombre FROM usuarios WHERE nombre='$NombreUsr' AND eliminar=0");
			if (mysqli_num_rows($verificar_emp)>0) {
				echo '<script>
					alert("El usuario ya está registrado");
				</script>';
				require_once("html/regadmin.php");
			} else {
				mysqli_query($conexion, "INSERT INTO usuarios(nombre,contrasena,eliminar) values('$NombreUsr','$ContrasenaUsr',0)");
				Echo '<script>
					alert("Datos guardados");
				</script>';
				require_once("html/tablaadmins.php");
			}
        } else if (isset($_POST['Elimusr'])) {
			$IdUsr=$_POST['IdUsr'];
			echo'<script>
		    if(confirm("Está seguro que desea eliminar este usuario?"))
		    {
		        window.location = "menu1_adminsborrar.php?IdUsr='.$IdUsr.'";
		    }else{
		        window.location = "menu1_admins.php";
		    }
		    </script>';
		} else {
			require_once("html/tablaadmins.php");
		}
		require_once("html/footer.php");
	} else {
		echo '<script>
		    window.location = "index.php";
		</script>';
	}
    ?>
</html>
