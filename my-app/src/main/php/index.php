<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Pagina Web</title>
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
					<?php
						if(!$_SESSION){
							echo "<li><a href=\"registro.php\">Registro</a></li>";
							echo "<li class=\"last\"><a href=\"login.php\">Login</a></li>";
						}else{
							$id_usuario=$_SESSION['id_usuario'];
							$usuario=$_SESSION['usuario'];
							echo "<li><a href=\"#\">$usuario</a></li>";
							echo "<li class=\"last\"><a href=\"logout.php\">Salir</a></li>";
						}
					?>
				</ul>
			</div>
		</div>
		<!-- End Header -->
		
		
		<div id="slider">
			<div id="slider-holder">
				<ul>
				<!--
				    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/slide2.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/slide2.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/slide2.jpg" alt="" /></a></li>
				-->
				</ul>
			</div>
			<div id="slider-nav">
				<a href="#" class="prev">Previous</a>
				<a href="#" class="next">Next</a>
			</div>
		</div>
		
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
				    <li><a href="#" class="active"><span>Catalogo</span></a></li>
					<?php
						if($_SESSION){
							if($_SESSION['tipo']==1)
								echo "<li><a href=\"#\" class=\"active\"><span>Nuevo Anuncio</span></a></li>";
						}
					?>
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
						Sugerencias<div style="min-height:1px; clear:both; width:100%; border-bottom:1px solid #d1d1d1; height:1px; padding-top:5px; margin-top:5px; margin-bottom:10px;"></div>
						<div class="items">
							<?php include 'sugerencias.php'; ?>
						</div>
					</div>
					<!-- Tab Catalogo -->
				
					<!-- Agregar Contenido -->
					<?php
					if($_SESSION){
						if($_SESSION['tipo']==1){
							echo "<div class=\"tab-content\" style=\"display:block;\"><div>";
							echo "<form action=\"nuevoAnuncio.php\" method=\"POST\" enctype=\"multipart/form-data\"><div style=\"float:left;width:50%;\"><p>Imagen del Producto</p><input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"700000\" /><p><input type=\"file\" name=\"imagen1\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p>
							<br /><p><input type=\"file\" name=\"imagen2\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br /><p><input type=\"file\" name=\"imagen3\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br /><br /><br /><br /><p>Categoria</p><p><select name=\"categoria\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\">";
							include 'categoria.php';
							echo "</select></p><br />
							<input type=\"hidden\" name=\"condicion\" value=\"Nuevo\" /></div>
							<div style=\"float:left;width:50%;\">
							<p>Nombre</p><p><input type=\"text\" name=\"producto\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
							<p>Descripccion</p><p><textarea name=\"descripccion\" rows=\"3\" style=\"width:90%;background:WhiteSmoke;border:0;color:BLACK\"></textarea></p><br />
							<p>Costo</p><p><input type=\"number\" name=\"precio\" step=\"any\" min=\"0\" value=\"0.00\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
							<input type=\"hidden\" name=\"cantidad\" value=\"1\" />
							<p>Fecha de expiracion</p><p><input type=\"date\" name=\"fecha\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
							<input type=\"hidden\" name=\"prioridad\" value=\"0\" /><br /><br />
							<p><input type=\"submit\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p></div></form>";
							echo "</div></div>";
						}
					}
					?>
					<!-- Agregar Contenido -->
				
				</div>
				
				<!-- Footer -->
				<div id="footer">
					<div class="left">
						<a href="Index.php">Inicio</a>
						<span>|</span>
						<?php
							if(!$_SESSION){
								echo "<a href=\"registro.php\">Registro</a><span>|</span>";
								echo "<a href=\"login.php\">Login</a>";
							}else{
								echo "<a href=\"logout.php\">Salir</a>";
							}
						?>
					</div>
					<div class="right">
						&copy; Sitename.com. Design by <a href="http://chocotemplates.com" target="_blank" title="CSS Templates">ChocoTemplates.com</a>
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
