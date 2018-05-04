





<?php 
	

	function conexion(){


		$usuario="root";
		$contraseña="";
		$base_de_datos="ajax";


		try {
			
			return  new PDO("mysql:host=localhost;dbname=".$base_de_datos,
				 $usuario, $contraseña);

		} catch (Exception $e) {
			return false;
		}


	} 


/*Prueva de que la conexion esta bien;
echo var_dump(conexion());

debe salir 
	object(PDO)#1 (0) { } 

*/