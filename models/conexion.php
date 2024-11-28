<?php 

	class Conexion{

		public static function conectar(){
			$link = new PDO("mysql:host=localhost;dbname=2000","root","");
			return $link;
		}
	}



 ?>