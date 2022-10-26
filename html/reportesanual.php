<?php
    require_once 'abrirconex.php';
    $fecha=date("Y");
    $seleccion="SELECT * FROM datosproducto WHERE eliminar=0";
    $resultado=mysqli_query($conexion, $seleccion);
?>
<h2 align="center">Reportes del Año</h2>
<div class="bs-example4" data-example-id="contextual-table">
    <h4><center>Reporte de productos para el año <?php echo $fecha; ?></center></h4>
    </br>
    <h5><center>Movimientos</center></h5>
    <div style="overflow-x:scroll;">
    	<table class="table">
	        <thead>
	            <tr class="success">
	    			<th>Nombre del producto</th>
	    			<th>Cantidad actual</th>
	    			<th>Compras</th>
	    			<th>Ventas</th>
	    		</tr>
	    	</thead>
            <tbody>
            <?php
            while($filas=mysqli_fetch_assoc($resultado)) {
				$id=$filas['id'];
				$compras=0;
				$seleccion2="SELECT * FROM comprasdetalle d, compras c WHERE d.id_producto='".$filas['id']."' AND DATE_FORMAT(STR_TO_DATE(c.fecha,'%Y-%m-%d'),'%Y')='$fecha'";
                $resultado2=mysqli_query($conexion, $seleccion2);
                if (mysqli_num_rows($resultado2)>0) {
                    while($filas2=mysqli_fetch_assoc($resultado2))
                    {
                    	$compras=$compras+$filas2['cantidad'];
                    }
                } else {
                	$compras=0;
                }
				$ventas=0;
				$seleccion3="SELECT * FROM ventasdetalle d, ventas v WHERE d.id_producto='".$filas['id']."' AND DATE_FORMAT(STR_TO_DATE(v.fecha,'%Y-%m-%d'),'%Y')='$fecha'";
                $resultado3=mysqli_query($conexion, $seleccion3);
                if (mysqli_num_rows($resultado3)>0) {
                    while($filas3=mysqli_fetch_assoc($resultado3))
                    {
                    	$ventas=$ventas+$filas3['cantidad'];
                    }
                } else {
                	$ventas=0;
                }
                echo '
                    <tr class="active">
                        <th>'; echo $filas['nombre']; echo'</th>
                        <th>'; echo $filas['cantidad']; echo'</th>
                        <th>'; echo $compras; echo'</th>
                        <th>'; echo $ventas; echo'</th>
		    		</tr>';
	    	}
	    	?>
		    	</tbody>
	    	</table>
	    </div>
	    </br>
	</div>
</div>