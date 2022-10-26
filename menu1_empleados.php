<?php
    session_start();
?>
<!DOCTYPE HTML>
<meta charset="UTF-8">
<html>
    <?php
    if (isset($_SESSION['usuario'])) {
        require_once("html/navegacion.php");
        if (isset($_POST['Regemp'])) {
			require_once("html/regempleado.php");
        } else if (isset($_POST['Regemp2'])) {
        	inclurequire_oncede ("abrirconex.php");
        	$Nombre=$_POST['Nombre'];
			$Cedula=$_POST['Cedula'];
			$Direccion=$_POST['Direccion'];
			$Telefono=$_POST['Telefono'];
			$verificar_emp = mysqli_query($conexion, "SELECT cedula FROM empleados WHERE cedula='$Cedula' AND eliminar=0");
			if (mysqli_num_rows($verificar_emp)>0) 
			{
				echo '<script>
					alert("El empleado ya está registrado");
				</script>';
				require_once("html/regempleado.php");
			} else {
				mysqli_query($conexion, "INSERT INTO empleados(nombre,cedula,direccion,telefono,eliminar) values('$Nombre','$Cedula','$Direccion','$Telefono',0)");
				echo '<script>
					alert("Datos guardados");
				</script>';
				require_once("html/tablaempleados.php");
			}
        } else if (isset($_POST['Elimemp'])) {
			$IdEmpleado=$_POST['IdEmpleado'];
			echo'<script>
		    if(confirm("Está seguro que desea eliminar este empleado?"))
		    {
		        window.location = "menu1_empleadosborrar.php?IdEmpleado='.$IdEmpleado.'";
		    }else{
		        window.location = "menu1_empleados.php";
		    }
		    </script>';
		} else {
			require_once("html/tablaempleados.php");
		}
		require_once("html/footer.php");
    } else {
		echo '<script>
		    window.location = "index.php";
		</script>';
	}
    ?>
</html>
