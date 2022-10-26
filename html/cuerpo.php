<?php
	function reportesanual(){
		include 'abrirconex.php';
		$fecha=date("Y");
		echo'
		    <h2 align="center">Reportes del Año</h2>
            <div class="bs-example4" data-example-id="contextual-table">
	    	    <h4><center>Reporte de productos para el año '.$fecha.'</center></h4>
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
		    		<tbody>';
            $seleccion="SELECT * FROM datosproducto WHERE Eliminar=0";
            $resultado=mysqli_query($conexion, $seleccion);
            while($filas=mysqli_fetch_assoc($resultado))
            {
				$id=$filas['idProducto'];
				$compras=0;
				$seleccion2="SELECT * FROM comprasdetalle d, compras c WHERE d.IdProducto='".$filas['idProducto']."' AND DATE_FORMAT(STR_TO_DATE(c.Fecha,'%Y-%m-%d'),'%Y')='$fecha'";
                $resultado2=mysqli_query($conexion, $seleccion2);
                if (mysqli_num_rows($resultado2)>0) {
                    while($filas2=mysqli_fetch_assoc($resultado2))
                    {
                    	$compras=$compras+$filas2['Cantidad'];
                    }
                } else {
                	$compras=0;
                }
				$ventas=0;
				$seleccion3="SELECT * FROM ventasdetalle d, ventas v WHERE d.IdProducto='".$filas['idProducto']."' AND DATE_FORMAT(STR_TO_DATE(v.Fecha,'%Y-%m-%d'),'%Y')='$fecha'";
                $resultado3=mysqli_query($conexion, $seleccion3);
                if (mysqli_num_rows($resultado3)>0) {
                    while($filas3=mysqli_fetch_assoc($resultado3))
                    {
                    	$ventas=$ventas+$filas3['Cantidad'];
                    }
                } else {
                	$ventas=0;
                }
                echo '
                    <tr class="active">
		    		    <th>'; echo $filas['nombreProducto']; echo'</th>
		    		    <th>'; echo $filas['Cantidad']; echo' Kg.</th>
		    		    <th>'; echo $compras; echo' Kg.</th>
		    		    <th>'; echo $ventas; echo' Kg.</th>
		    		</tr>';
	    	}
	    	echo'
		    		</tbody>
	    		</table>
	    		</div>
	    		</br>
	    		</br>
	    		<form method="post" target="_blank" action="menu1_reciboanual.php">
	    		    <input type="hidden" name="fecha" value="'.$fecha.'">
	    		    <button type="submit" class="verde2" style="background-color: #f97c71;">Imprimir reporte <i class="fa fa-file-text"></i></button>
	    		</form>
		    </div>
		    </div>
		';
	}
    //----------------------------------------//
?>
