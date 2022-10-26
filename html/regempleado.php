<?php 
    require_once 'abrirconex.php';
?>
<h2 align="center">Registrar Nuevo Empleado</h2>
<div class="panel-body">
	<form class="form-horizontal" method="POST" action="">
		<div class="form-group">
            <label class="col-md-2 control-label" for="Nombre">Nombre del empleado: </label>
            <div class="col-md-8">
				<div class="input-group">							
					<span class="input-group-addon">
						<i class="fa fa-user"></i>
					</span>
					<input type="text" class="form-control1" name="Nombre" id="Nombre" required>
				</div>
			</div>
		</div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="Cedula">Cédula: </label>
            <div class="col-md-8">
				<div class="input-group">							
					<span class="input-group-addon">
						<i class="fa fa-user"></i>
					</span>
					<input type="text" class="form-control1" name="Cedula" id="Cedula" required>
				</div>
			</div>
		</div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="Direccion">Dirección: </label>
            <div class="col-md-8">
				<div class="input-group">	
				    <span class="input-group-addon">						
				        <i class="fa fa-home"></i>
					</span>
					<input type="text" class="form-control1" name="Direccion" id="Direccion" required>
				</div>
			</div>
		</div>
		<div class="form-group">
            <label class="col-md-2 control-label" for="Telefono">Teléfono: </label>
            <div class="col-md-8">
				<div class="input-group">	
				    <span class="input-group-addon">						
				        <i class="fa fa-phone"></i>
					</span>
					<input type="number" class="form-control1" name="Telefono" id="Telefono" required>
				</div>
			</div>
		</div>
        <button type="submit" class="verde2" value="Regemp2" name="Regemp2" id="Regemp2">Registrar <i class="fa fa-plus-circle"></i></button>
    </form>
    <form class="form-horizontal" method="POST" action="">
        <button type="submit" class="blanco2" value="Salir1" name="Salir1" id="Salir1">Salir <i class="fa fa-reply-all"></i></button>
    </form>
</div>