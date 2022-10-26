<head>
	<title>Inventario</title>
	<meta charset="UTF-8">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/lines.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/d3.v3.js"></script>
    <script src="js/rickshaw.js"></script>	    
</head>

<body>
	<div id="wrapper">
		<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="">Repuestos MVC</a>
		        </br>
		    </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a id="Inicio" name="Inicio" href="menu1.php"><i class="fa fa-indent"></i>  Inicio</a>
                        </li>
                        <li>
                            <a id="Productos" name="Productos" href="menu1_productos.php"><i class="fa fa-dropbox"></i>  Productos</a>
                        </li>
                        <li>
                            <a id="Entradas" name="Entradas" href="menu1_entradas.php"><i class="fa fa-plus-square"></i>  Entradas</a>
                        </li>
                        <li>
                            <a id="Salidas" name="Salidas" href="menu1_salidas.php"><i class="fa fa-minus-square"></i>  Salidas</a>
                        </li>
                        <li>
                            <a id="Empleados" name="Empleados" href="menu1_empleados.php"><i class="fa fa-user"></i>  Empleados</a>
                        </li>
                        <li>
                            <a id="Admins" name="Admins" href="menu1_admins.php"><i class="fa fa-key"></i>  Usuarios del sistema</a>
                        </li>
                        <li>
                            <a id="Reportes" name="Reportes" href="menu1_reportes.php"><i class="fa fa-clipboard"></i>  Recibos y reportes</a>
                        </li>
                        <li>
                            <a href="cerrar.php"><i class="fa fa-sign-out"></i>  Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="graphs">