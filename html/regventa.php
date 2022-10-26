<?php 
    require_once 'abrirconex.php';
?>
<h2 align="center">Registrar Nueva Salida</h2>
<div class="panel-body">
	<form class="form-horizontal" method="POST" action="">
		<div class="form-group">
            <label class="col-md-2 control-label" for="Fecha">Fecha: </label>
            <div class="col-md-8">
				<div class="input-group">	
				    <span class="input-group-addon">						
				        <i class="fa fa-calendar"></i>
					</span>
					<input type="date" class="form-control1" name="Fecha" id="Fecha" required>
				</div>
			</div>
		</div>
        <button type="submit" class="verde2" value="Regvnt2" name="Regvnt2" id="Regvnt2">Registrar <i class="fa fa-plus-circle"></i></button>
    </form>
    <form class="form-horizontal" method="POST" action="">
        <button type="submit" class="blanco2" value="Salir1" name="Salir1" id="Salir1">Salir <i class="fa fa-reply-all"></i></button>
    </form>
</div>