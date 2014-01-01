<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Contenido Media</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />	
	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
	<script src="js/jquery.slide.js" type="text/javascript"></script>
	<script src="js/jquery-func.js" type="text/javascript"></script>
</head>
<body>
<!-- Top -->
<div id="top">
	<div class="shell">
		<!-- Header -->
		<div id="header">
			<div id="navigation">
				<ul>
				    <li><a href="index.php">Inicio</a></li>
				    <li><a href="#">Registro</a></li>
				    <li class="last"><a href="#">Salir</a></li>
				</ul>
			</div>
		</div>
		<!-- End Header -->
	</div>
</div>
<!-- Top -->

<!-- Main -->
<div id="main">
	<div class="shell">
		
		<!--Busqueda-->
		<div class="options">
			<div class="search">
				<form action="index.php" method="POST">
					<span class="field"><input type="text" class="blink" value="Busqueda Avanzada" name="buscar" /></span>
					<input type="hidden" name="tipo" value="1" />
					<input type="hidden" name="pagina" value="1" />
					<input type="submit" class="search-submit" value="GO" />
				</form>
			</div>
			<div class="search">
				<form action="index.php" method="POST">
					<span class="field"><select name="categoria">
						<?php include 'categoria.php'; ?>
						</select></span>
						<input type="hidden" name="tipo" value="2" />
						<input type="hidden" name="pagina" value="1" />
					<input type="submit" class="search-submit" value="GO" />
				</form>
			</div>
		</div>
		<!--Busqueda-->
		
		<!-- Content -->
		<div id="content">
			
			<!-- Tabs -->
			<div class="tabs"><ul>
				    <li><a href="#" class="active"><span>Contenido</span></a></li>
			</ul></div>
			<!-- Tabs -->
			
			<!-- Container -->
			<div id="container">
				<div class="tabbed">
					<!-- Tab Catalogo -->
					<div class="tab-content" style="display:block;">
						<div class="items">
							<?php include 'catalogo.php'; ?>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
					<!-- Tab Catalogo -->
				</div>
				<!-- Footer -->
				<div id="footer">
					<div class="left">
						<a href="index.php">Inicio</a>
						<span>|</span>
						<a href="#">Registro</a>
						<span>|</span>
						<a href="#">Login</a>
						<span>|</span>
						<a href="#">Salir</a>
					</div>
				</div>
				<!-- End Footer -->
			</div>
			<!-- End Container -->
		</div>
		<!-- End Content -->
	</div>
</div>
<!-- End Main -->
	
</body>
</html>