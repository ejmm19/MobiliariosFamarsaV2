<?php 	
	class Conexion
	{
		public function ConectSQL(){
			$usuario = 'root';
			$contrasena = '';
			return $mbd = new PDO('mysql:host=localhost;dbname=pizzeria', $usuario, $contrasena);
		}		
	}
 ?>