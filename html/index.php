<head>
	<title>Inventario</title>
	<meta charset="UTF-8">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fontawesome-all.js"></script>
</head>

<body id="login">
	<div class="login-logo">
	    <label style="color: black; font-size: 20px;"><b>Repuestos MVC</b></label>
	</div>
	<h2 class="form-heading"><label>Ingreso al sistema</label></h2>
    <div class="app-cam">
	    <form method="POST" action="">
	        <label class="texto" for="usuario">Usuario: </label>
	        <input type="text" class="text" name="usuario" id="usuario" autofocus required>
	        <label class="texto" for="clave">Clave: </label>
	        <input type="password" name="clave" id="clave" required>
	        <div><button type="submit" class="verde2" value="Login" name="Login" id="Login">Entrar <i class="fas fa-sign-in-alt"></i></button></div>
	    </form>
		<br/>           
    </div>
</body>
