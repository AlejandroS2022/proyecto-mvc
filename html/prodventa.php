<?php
    require_once 'abrirconex.php';
    $seleccion="SELECT * FROM ventas WHERE id='".$_POST['IdFactura']."' ";
	$resultado=mysqli_query($conexion, $seleccion);
	$filas=mysqli_fetch_assoc($resultado);
?>
<h2 align="center">Registrar Producto en Salida</h2>
<div class="panel-body">
	<form class="form-horizontal" method="POST" action="">
	    <input type="hidden" name="IdFactura" id="IdFactura" value="<?php echo $filas['id']; ?>">
		<div class="form-group">
            <label class="col-md-2 control-label" for="IdFactura">ID Salida: </label>
            <div class="col-md-8">
				<div class="input-group">							
					<span class="input-group-addon">
						<i class="fa fa-info"></i>
					</span>
					<input type="text" class="form-control1" style="background-color: #eee;" name="p" id="p" value="<?php echo $filas['id']; ?>" required disabled>
				</div>
			</div>
		</div>
		<div class="form-group">
            <label class="col-md-2 control-label" for="IdProducto">Producto: </label>
            <div class="col-md-8">
				<div class="input-group">	
				    <span class="input-group-addon">						
				        <i class="fa fa-dropbox"></i>
					</span>
					<select class="form-control1" name="IdProducto" id="IdProducto" required>
                    <?php
                    $seleccion2="SELECT * FROM datosproducto WHERE cantidad>0 AND eliminar=0";
					$resultado2=mysqli_query($conexion, $seleccion2);
					while($filas2=mysqli_fetch_assoc($resultado2))
					{
						echo "<option value='".$filas2['id']."'>";echo $filas2['nombre']." - ".$filas2['cantidad'];echo "</option>";
					}
					?>
                    </select>
				</div>
			</div>
		</div>
		<div class="form-group">
            <label class="col-md-2 control-label" for="Cantidad">Cantidad: </label>
            <div class="col-md-8">
				<div class="input-group">	
				    <span class="input-group-addon">						
				        <i class="fa fa-info"></i>
					</span>
					<input type="number" class="form-control1" name="Cantidad" id="Cantidad" required>
				</div>
			</div>
		</div>
        <button type="submit" class="verde2" value="AggProd2" name="AggProd2" id="AggProd2">Agregar <i class="fa fa-plus-circle"></i></button>
    </form>
    <form class="form-horizontal" method="POST" action="">
        <button type="submit" class="blanco2" value="Salir1" name="Salir1" id="Salir1">Salir <i class="fa fa-reply-all"></i></button>
    </form>
</div>