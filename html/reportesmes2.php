<?php
    require_once 'abrirconex.php';
    $mes=date("Y-m");
    $seleccion="SELECT * FROM datosproducto WHERE eliminar=0";
    $resultado=mysqli_query($conexion, $seleccion);
?>
<h2 align="center">Reportes del Mes</h2>
<div class="panel-body">
	<form class="form-horizontal" method="POST" action="">
		<div class="form-group">
            <label class="col-md-2 control-label" for="mes">Mes: </label>
            <div class="col-md-8">
				<div class="input-group">							
					<span class="input-group-addon">
						<i class="fa fa-calendar"></i>
					</span>
					<input type="month" class="form-control1" name="mes" id="mes" required>
				</div>
			</div>
	    </div>
        <button type="submit" class="verde2" value="Genreporte" name="Genreporte" id="Genreporte">Buscar <i class="fa fa-search"></i></button>
    </form>
</div>
<div class="bs-example4" data-example-id="contextual-table">
	<h4><center>Reporte de productos para el mes <?php echo $mes; ?></center></h4>
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
				$seleccion2="SELECT d.cantidad as cantidad, c.fecha as fecha FROM comprasdetalle d, compras c WHERE d.id_producto='".$filas['id']."' AND DATE_FORMAT(STR_TO_DATE(c.fecha,'%Y-%m-%d'),'%Y-%m')='$mes'";
                $resultado2=mysqli_query($conexion, $seleccion2);
                if (mysqli_num_rows($resultado2)>0) {
                    while ($filas2=mysqli_fetch_assoc($resultado2)) {
						$filas2['fecha']=date("Y-m");
						if ($filas2['fecha'] === $mes) {
							$compras=$compras+$filas2['cantidad'];
						}
                    }
                } else {
                	$compras=0;
                }
				$ventas=0;
				$seleccion3="SELECT * FROM ventasdetalle d, ventas v WHERE d.id_producto='".$filas['id']."' AND DATE_FORMAT(STR_TO_DATE(v.fecha,'%Y-%m-%d'),'%Y-%m')='$mes'";
                $resultado3=mysqli_query($conexion, $seleccion3);
                if (mysqli_num_rows($resultado3)>0) {
                    while($filas3=mysqli_fetch_assoc($resultado3)) {
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