


<?php 




require_once("funciones.php");

if(isset($_POST['servicio']) && $_POST['servicio']=="altaUsuaurio" ){


	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$edad=$_POST['edad'];


	/*
		la variable respuesta nos da un [TRUE o FALSE] 
	*/
	$respuesta= altaUsuario($nombre,$email,$password,$edad);


	/*
		Creamos un array asosiativo y le pasamos la respuesta 
	*/
	$datos = array('stutus' => $respuesta );
	/*
		Comvertimos en array en formato json para poderlo retornar a javascript
	*/
	echo json_encode($datos);


	/*
	Nota:
		si no se desea mandar en fomato json se debe cambiar la propidad de la peticion ajax
			dataType : 'json',
		a la siguiente expresion
			dataType : 'html',
		pero es recomendable trabajar con json por que asi se pueden mandar mas datos

		*/

}else if(isset($_POST['servicio']) && $_POST['servicio']=="getAllUsuarios" ){
	echo json_encode(getAllUsuarios());
}else if(isset($_POST['servicio']) && $_POST['servicio']=="deleteUsuario" ){
	$id_usuario=$_POST["id"];
	echo json_encode(deleteUsuario($id_usuario));
}





