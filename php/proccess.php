<?php 

include('SQL.php');

$conec = new Conexion;
//Registro de usuarios en la app
$var = Conexion::ConectSQL();
	//REGISTRO
	if (isset($_POST['usuario'])) {
		$dato = $_POST['usuario'];
		$tipous = 'usuario';
		$usuario = $_POST['usuario'];
		$nombre = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$pass = $_POST['pass'];
		$correo = $_POST['correo'];
		
		////////////////////////////////////////
		$sql = $var->prepare("SELECT * FROM usuarios WHERE usuario ='$dato'");
	$sql->execute();
	$key = $sql->fetch();
	
	if ($dato !== $key[2]) {
		$sql = "INSERT INTO usuarios (tipousuario, usuario, nombre, apellidos, pass, correo)
				VALUES ('usuario','".$usuario."','".$nombre."','".$apellidos."',md5('".$pass."'),'".$correo."')";
		$var->query($sql);
		echo "Registrado Exitosamente!!!";
	}else{
		echo "El Usuario:   ";
		echo $key[2];
		echo "   se encuentra ya registrado";
	}
	}

	//LOGIN 
	if (isset($_POST['user'])) {
		$passw = $_POST['passw'];
		$user = $_POST['user'];
		$ql = $var->prepare("SELECT * FROM usuarios WHERE usuario ='$user' ");
		$ql->execute();
		$fila = $ql->fetch();

		if ($user === $fila[2]) {
			echo "Bienvenido";
			echo $fila[3];
		}else{
			echo "Usuairo no existe";
		}
	}
	
	
	
	
	
	