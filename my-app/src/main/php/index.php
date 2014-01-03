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
				    <li><a href="#"><img src="css/images/ecualizador.png" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/peliculas.png" alt="" /></a></li>
					<li><a href="#"><img src="css/images/multimedia_banner.jpg" alt="" /></a></li>
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
				    <li><a href="#" class="active"><span>Contenidos</span></a></li>
					<?php
						if($_SESSION){
							if($_SESSION['tipo']==1)
								echo "<li><a href=\"#\" class=\"active\"><span>Nuevo Anuncio</span></a></li>";
						}else{
							echo "<li><a href=\"#\" class=\"active\"><span>Registro</span></a></li>";
							echo "<li><a href=\"#\" class=\"active\"><span>Login</span></a></li>";
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
					
					<!-- Tab Registro -->
					<div class="tab-content" style="display:block;">
						<div>
<?php
if($_GET){
	$usuario=$_GET['usuario'];
	$nombre=$_GET['nombre'];
	$apellido=$_GET['apellido'];
	$direccion=$_GET['direccion'];
	$correo=$_GET['correo'];
	$error=$_GET['error'];
	echo "<form action=\"registro.php\" method=\"POST\">
		<div style=\"float:left;width:50%;\">
			<p>Usuario</p><p><input type=\"text\" name=\"usuario\" value=\"$usuario\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
			<p>Nombre(s)</p><p><input type=\"text\" name=\"nombre\" value=\"$nombre\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
			<p>Apellido(s)</p><p><input type=\"text\" name=\"apellido\" value=\"$apellido\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
			<p>Direccion</p><p><input type=\"text\" name=\"direccion\" value=\"$direccion\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
			<p>$error</p>
		</div>
		<div style=\"float:left;width:50%;\">
			<p>Contrase&ntildea </p><p><input type=\"password\" name=\"clave1\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
			<p>Repetir Contrase&ntildea </p><p><input type=\"password\" name=\"clave2\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
			<p>Correo</p><p><input type=\"email\" name=\"correo\" value=\"$correo\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
			<br /><p><input type=\"submit\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p>
		</div>
	</form>";
}else if($_POST){
	$usuario=$_POST['usuario'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$direccion=$_POST['direccion'];
	$clave1=$_POST['clave1'];
	$clave2=$_POST['clave2'];
	$correo=$_POST['correo'];
	$conn = mysql_connect("localhost","root" ,"");
	mysql_select_db("catalogo", $conn);
	$valido=true;
	$error="";
	$query = "SELECT username FROM usuario WHERE username like '$usuario';";
	$resultado = mysql_query($query, $conn);
	if($fila = mysql_fetch_row($resultado)){
		$valido=false;
		$error=$error."Nombre de usuario ya existe<br>";
	}
	mysql_free_result($resultado);
	if($nombre==""){
		$valido=false;
		$error=$error."Ingrese Nombre<br>";
	}
	if($apellido==""){
		$valido=false;
		$error=$error."Ingrese Apellido<br>";
	}
	if($direccion==""){
		$valido=false;
		$error=$error."Ingrese direccion<br>";
	}
	if($clave1!=$clave2){
		$valido=false;
		$error=$error."La clave no coincide<br>";
	}
	if($correo==""){
		$valido=false;
		$error=$error."Correo no valido<br>";
	}
	if($valido){
		$query = "INSERT INTO usuario VALUES (NULL,'$usuario','$clave1','$nombre','$apellido','$direccion','$correo',0);";
		mysql_query($query, $conn);
		header("Location: index.php");
	}else{
		$url="Location: registro.php?usuario=$usuario&nombre=$nombre&apellido=$apellido&direccion=$direccion&correo=$correo&error=$error";
		header($url);
	}
}else{
	echo "<form action=\"registro.php\" method=\"POST\">
		<div style=\"float:left;width:50%;\">
			<p>Usuario</p><p><input type=\"text\" name=\"usuario\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
			<p>Nombre(s)</p><p><input type=\"text\" name=\"nombre\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
			<p>Apellido(s)</p><p><input type=\"text\" name=\"apellido\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
			<p>Direccion</p><p><input type=\"text\" name=\"direccion\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
		</div>
		<div style=\"float:left;width:50%;\">
			<p>Contrase&ntildea </p><p><input type=\"password\" name=\"clave1\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
			<p>Repetir Contrase&ntildea </p><p><input type=\"password\" name=\"clave2\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
			<p>Correo</p><p><input type=\"email\" name=\"correo\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
			<br /><p><input type=\"submit\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p>
		</div>
	</form>";
}
?>
						</div>
					</div>
					<!-- Tab Registro -->

					<!-- Tab Loggin -->
					<div class="tab-content" style="display:block;">
						<div>
<?php
if($_GET){
	$usuario=$_GET['usuario'];
	$error=$_GET['error'];
	echo "<form action=\"login.php\" method=\"POST\"><div style=\"float:left;width:35%;\"><p> <br /> </p></div><div style=\"float:left;width:30%;\">
			<p>Usuario</p><p><input type=\"text\" name=\"usuario\" value=\"$usuario\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
			<p>Contrase&ntildea </p><p><input type=\"password\" name=\"clave\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
			<br />$error
			<br /><p><input type=\"submit\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p>
		</div><div style=\"float:left;width:35%;\"><p> <br /> </p></div></form>";
}else if($_POST){
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];
	$conn = mysql_connect("localhost","root" ,"");
	mysql_select_db("catalogo", $conn);
	$error="";
	$query = "SELECT id_usuario, username, Administrador FROM usuario WHERE username like '$usuario' AND password like '$clave';";
	$resultado = mysql_query($query, $conn);
	if($fila = mysql_fetch_row($resultado)){
		$_SESSION['id_usuario']=$fila[0];
		$_SESSION['usuario']=$fila[1];
		$_SESSION['tipo']=$fila[2];
		header("Location: index.php");
	}else{
		$error=$error."El nombre de usuario y/o la contraseña estan incorrectos<br>";
		$url="Location: login.php?usuario=$usuario";
		header($url);
	}
	mysql_free_result($resultado);
}else{
	echo "<form action=\"login.php\" method=\"POST\"><div style=\"float:left;width:35%;\"><p> <br /> </p></div><div style=\"float:left;width:30%;\">
			<p>Usuario</p><p><input type=\"text\" name=\"usuario\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
			<p>Contrase&ntildea </p><p><input type=\"password\" name=\"clave\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p><br />
			<br /><p><input type=\"submit\" style=\"width:90%;height:25px;background:WhiteSmoke;border:0;color:BLACK\" /></p>
		</div><div style=\"float:left;width:35%;\"><p> <br /> </p></div></form>";
}
?>
						</div>
					</div>
					<!-- Tab Loggin -->
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