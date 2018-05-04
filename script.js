



	/*
		funcion que nos permite cargar datos a la tabla de usuarios

	*/
	llenarTabla();

	function llenarTabla() {
	
	var	tabla=$("#tablaUsuarios").find('tbody');
		$.ajax({
		    url : 'servicios.php',
		    data : {servicio: "getAllUsuarios" },
	    	type : 'POST',
	    	dataType : 'json',
			success : function(data) {
				tabla.html("");
				if( data==false){
					$("#mensajeDatosTabla").html("<p>No hay usuarios registrados</p>");
				}else{
					$("#mensajeDatosTabla").html("");
				}
				for (var i = 0; i < data.length; i++) {
					var registro="<tr>";
						registro+="<td>"+data[i].id+"</td>";
						registro+="<td>"+data[i].nombre+"</td>";
						registro+="<td>"+data[i].email+"</td>";
						registro+="<td>"+data[i].edad+"</td>";
						registro+="<td><button class='btn btn-danger btn-sm' onclick='borrarUsuario("+data[i].id+")'>Eliminar</button></td>";

					registro+="<tr>";

	      		//console.log(registro);
				tabla.append(registro)
				}

	    },
	    error : function(xhr, status) {
	        alert('Disculpe, existió un problema al intentar Cargar la tabla de usuarios');
	    },
	    
		});
	
	}











	/*
		codigo  que nos permite cagreagregar usuarios via ajax

	*/


	var formulario=$("#altaUsuario");

	$("#altaUsuario").on("submit",function(event) {

		var Nombre_del_servicio="altaUsuaurio";



		event.preventDefault();
		var datos= $( this ).serializeArray();
		datos.push({ name:"servicio" , value: Nombre_del_servicio});
		console.log(datos);
	$.ajax({
	    // la URL para la petición
	    url : 'servicios.php',
	 
	    // la información a enviar
	    // (también es posible utilizar una cadena de datos)
	    data : datos,
	    	/*servicio: "altaUsuaurio",
	    	datos
	    },*/
	 
	    // especifica si será una petición POST o GET
	    type : 'POST',
	 
	    // el tipo de información que se espera de respuesta
	    dataType : 'json',
	 
	    // código a ejecutar si la petición es satisfactoria;
	    // la respuesta es pasada como argumento a la función
	    success : function(data) {
	    	
			//	la variable data es por donde nos llega la informacion de php
	    	


	      if(data.stutus){
	      		$("#respuesta").html('<div class="alert alert-success" role="alert"> Registro existoso</div>');
	      }else{
	      		$("#respuesta").html('<div class="alert alert-danger" role="alert"> Ocurrio un error al intentar guardar el registro </div>');
	      }

	      llenarTabla();
	    },
	 
	    // código a ejecutar si la petición falla;
	    // son pasados como argumentos a la función
	    // el objeto de la petición en crudo y código de estatus de la petición
	    error : function(xhr, status) {
	        alert('Disculpe, existió un problema');
	    },
	 
	    // código a ejecutar sin importar si la petición falló o no
	    complete : function(xhr, status) {
	  
	       document.getElementById("altaUsuario").reset(); 

	    }
	});
	});









		function borrarUsuario(id) {
		

		
		$.ajax({
		    url : 'servicios.php',
		    data : {servicio: "deleteUsuario", id: id },
	    	type : 'POST',
	    	dataType : 'json',
			success : function(data) {
				llenarTabla();
		    },
		    error : function(xhr, status) {
		        alert('Disculpe, existió un problema al intentar Cargar la tabla de usuarios');
		    },
		    
		});
	
	}