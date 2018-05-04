
<?php 

	require_once("conexion.php");


	function altaUsuario($nombre,$email,$password,$edad){


		$conexion=conexion();

		$sql="INSERT INTO usuario (nombre,email,password,edad) VALUES (?,?,?,?)";
		
		$query= $conexion->prepare($sql);
		$query->execute(array($nombre,$email,$password,$edad));
		$resultado=$query->rowCount();
		if($resultado > 0){
			return true;
		}else{
			return false;
		}


	}


	function getAllUsuarios(){


		$conexion=conexion();

		$sql="SELECT * FROM  usuario ";
		
		$query= $conexion->prepare($sql);
		$query->execute();
		$resultado=$query->fetchAll();
		if( count($resultado) > 0){
			return $resultado;
		}else{
			return false;
		}


	}





	function deleteUsuario($id_usuario){


		$conexion=conexion();

		$sql="DELETE FROM usuario WHERE id=? ";
		
		$query= $conexion->prepare($sql);
		$query->execute(array($id_usuario));
		$resultado=$query->rowCount();
		if( $resultado > 0){
			return $resultado;
		}else{
			return false;
		}


	}



/*

	prueva de que la funcion esta insertando
		echo var_dump(altaUsuario("Miguel","migue@gmail.com","1234","20"));
	resultado
		bool(true) 
*/	