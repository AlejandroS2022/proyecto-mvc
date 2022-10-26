<?php 
    require_once 'abrirconex.php';
?>
<h2 align="center">Registrar Nuevo Usuario</h2>
<div class="panel-body">
	<form class="form-horizontal" method="POST" action="">
		<div class="form-group">
            <label class="col-md-2 control-label" for="NombreUsr">Usuario: </label>
            <div class="col-md-8">
				<div class="input-group">							
					<span class="input-group-addon">
						<i class="fa fa-user"></i>
					</span>
					<input type="text" class="form-control1" name="NombreUsr" id="NombreUsr" required>
				</div>
			</div>
		</div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="ContrasenaUsr">Clave: </label>
            <div class="col-md-8">
				<div class="input-group">							
					<span class="input-group-addon">
						<i class="fa fa-key"></i>
					</span>
					<input type="text" class="form-control1" name="ContrasenaUsr" id="ContrasenaUsr" required>
				</div>
			</div>
		</div>
        <button type="submit" class="verde2" value="Regusr2" name="Regusr2" id="Regusr2">Registrar <i class="fa fa-plus-circle"></i></button>
    </form>
    <form class="form-horizontal" method="POST" action="">
        <button type="submit" class="blanco2" value="Salir1" name="Salir1" id="Salir1">Salir <i class="fa fa-reply-all"></i></button>
    </form>
</div>