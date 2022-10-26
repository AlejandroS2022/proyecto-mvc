<?php 
    require_once 'abrirconex.php';
?>
<h2 align="center">Registrar Nuevo Producto</h2>
<div class="panel-body">
	<form class="form-horizontal" method="POST" action="">
		<div class="form-group">
            <label class="col-md-2 control-label" for="nombreProducto">Nombre del producto: </label>
            <div class="col-md-8">
				<div class="input-group">							
					<span class="input-group-addon">
						<i class="fa fa-user"></i>
					</span>
					<input type="text" class="form-control1" name="nombreProducto" id="nombreProducto" required>
				</div>
			</div>
		</div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="tipoProducto">Tipo de producto: </label>
            <div class="col-md-8">
				<div class="input-group">							
					<span class="input-group-addon">
						<i class="fa fa-user"></i>
					</span>
					<input type="text" class="form-control1" name="tipoProducto" id="tipoProducto" required>
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
		<div class="form-group">
            <label class="col-md-2 control-label" for="precio">Precio: </label>
            <div class="col-md-8">
				<div class="input-group">	
				    <span class="input-group-addon">						
				        <i class="fa fa-dollar"></i>
					</span>
					<input type="number" class="form-control1" name="precio" id="precio" required>
				</div>
			</div>
		</div>
        <button type="submit" class="verde2" value="Regprod2" name="Regprod2" id="Regprod2">Registrar <i class="fa fa-plus-circle"></i></button>
    </form>
    <form class="form-horizontal" method="POST" action="">
        <button type="submit" class="blanco2" value="Salir1" name="Salir1" id="Salir1">Salir <i class="fa fa-reply-all"></i></button>
    </form>
</div>