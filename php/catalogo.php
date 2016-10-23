<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="catalogo/estilo.css">
<style>
.mySlides {display:none}
</style>
<body>

<center>
	<ul id="menuslider">
	<li>
		<a href="index.php?op=1#most">Estaciones</a>
	</li>		
	<li>
		<a href="index.php?op=2#most">Sillas</a>
	</li>
	<li>
		<a href="index.php?op=3#most">Counters</a>
	</li>
	<li>
		<a href="index.php?op=4#most">Archivadores</a>
	</li>
	<li>
		<a href="index.php?op=5#most">Mesas</a>
	</li>
	<li>
		<a href="index.php?op=6#most">Escritorios</a>
	</li>
	<li>
		<a href="index.php?op=7#most">Estanterías</a>
	</li>
	<li>
		<a href="index.php?op=8#most">Credemzas</a>
	</li>
	<li>
		<a href="index.php?op=9#most">Closet</a>
	</li>
	<li>
		<a href="index.php?op=10#most">Cocinas</a>
	</li>
	<li>
		<a href="index.php?op=11#most">Divisiones</a>
	</li>
	<li>
		<a href="index.php?op=12#most">Cafe internet</a>
	</li>
</ul>
</center>
<hr>
<?php 
if ($_GET['op']==1) {
			include("./catalogo/estaciones.php");
		}elseif ($_GET['op']==2) {
			include("./catalogo/sillas.php");
		}elseif ($_GET['op']==3) {
			include("./catalogo/counters.php");
		}elseif ($_GET['op']==4) {
			include("./catalogo/archivadores.php");
		}elseif ($_GET['op']==5) {
			include("./catalogo/mesas.php");
		}elseif ($_GET['op']==6) {
			include("./catalogo/escritorios.php");
		}elseif ($_GET['op']==7) {
			include("./catalogo/estanterias.php");
		}elseif ($_GET['op']==8) {
			include("./catalogo/credemzas.php");
		}elseif ($_GET['op']==9) {
			include("./catalogo/closet.php");
		}elseif ($_GET['op']==10) {
			include("./catalogo/cocinas.php");
		}elseif ($_GET['op']==11) {
			include("./catalogo/divisiones.php");
		}elseif ($_GET['op']==12) {
			include("./catalogo/cafe.php");
		}

 ?>




<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-border-red", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-border-red";
}
</script>

</body>
</html>
