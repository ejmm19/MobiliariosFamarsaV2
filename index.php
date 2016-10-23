<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta name="msvalidate.01" content="ACF53A94081FBE2F66DEEB6F52B3F5FD" />
	<title>Mobiliarios Famarsa</title>
	<link rel="shortcut icon" href="preview.png">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slider.css">
	

</head>
<body class="parallax">

<div id="container">
	
	<header>
		<img src="img/preview.png" alt="Mobiliarios Famarsa" id="banner">
	<div class="menu_bar" >
		<a href="#" class="bt-menu"><span class="icon-paragraph-justify"></span>Menu</a>
	</div>
	<nav id="menu" >
		<ul id="most">
			<li><a href="index.php">Incio&nbsp;<span class="icon-home"></a></li>
			<li><a href="index.php#productos" class="clear">Catalogo&nbsp;<span class="icon-folder-open"></a></li>
			<li><a href="index.php?op=emp">Empresa&nbsp;<span class="icon-office"></a></li>
			<li><a href="#creditos" class="clear">Contactos&nbsp;<span class="icon-users"></a></li>
			<li><a id="sigue" class="clear" onclick="javascript:cambia_propiedades();">Siguenos&nbsp;<span class="icon-rss"></a></li>
		</ul>
	</nav>
	</header>
	<?php 

		if (!isset($_GET['op'])) {
			include("./php/productos.php");
		}elseif ($_GET['op']==1 or $_GET['op']==2 or $_GET['op']==3 or $_GET['op']==4 or $_GET['op']==5 or $_GET['op']==6
			or $_GET['op']==7 or $_GET['op']==8 or $_GET['op']==9 or $_GET['op']==10 or $_GET['op']==11 or $_GET['op']==12) {
			include("./php/catalogo.php");
		}elseif ($_GET['op']=='emp') {
			include("./php/empresa.php");
		}elseif ($_GET['op']=='sig') {
			include("./php/productos.php");
			echo "<script>alert('Sigenos Porfis, si?');</script>";
		}


		 ?>
	<div class="prod2">
		<div class="modl">
		<h5 style="margin-right: -80%;" id="cerrar"><img src="img/delete.png" width="3%"></h5>
			<span id="contm">
				<h2>Siguenos en Nuestras Redes Sociales</h2>
				<ul>
					<li><a href="https://www.facebook.com/mobiliariofamarsa/?fref=ts" target="_blank"><img src="img/facebook.png" alt="Facebook" width="60%"></a></li>
					<li><a href="https://twitter.com/MobiliarioFM" target="_blank"><img src="img/twitter.png" alt="Twitter" width="60%"></a></li>
					<li><a href="https://plus.google.com/116409598853862694593" target="_blank"><img src="img/google-plus.png" alt="G+" width="60%"></a></li>
					<li><a href="" target="_blank"><img src="img/instagram.png" alt="Instagram" width="60%"></a></li>
				</ul>
			</span>

		</div>
	</div>
	<footer id="footer">
		<div id="col1">
			<h4 class="h4">Contáctanos: </h4>
			<h5 class="h5">Dir: Via Quito Km 2 1/2</h5>
			<h5 class="h5">Barrio: Oro negro</h5>
			<h5 class="h5">Diag Roman Hermanos</h5>
			<h5 class="h5">Lago agrio - Sucumbios - Ecuador</h5>
		</div>
		<div id="col2">
			<h4 class="h4">Gerente Propietario</h4>
			<h5 class="h5">Ing: Fabriciano Martínez Sánchez</h5>
			<h5 class="h5">Tels: 0959638071 - 0992506911</h5>
			<h5 class="h5">Sec. General: Odalinda Muentes</h5>
			<h5 class="h5">Tel: 0992114751</h5>
		</div>
		
	</footer>
	<div id="creditos">
		Created By © <a href="#">Eric Js Martínez</a>
	</div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script src="js/menu.js" ></script>
	<script src="js/script.js" ></script>
	<script src="js/jquery.slides.js" ></script>
	<script>

	function cambia_propiedades(){
    document.getElementById("modl").style.display = "block";
	}
		$(function(){
  $(".slides").slidesjs({
  	height:'300',
    play: {
      active: false,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",


        // [string] Can be either "slide" or "fade".
      interval: 3000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }

  	})
  });
	</script>
	
</body>
</html>