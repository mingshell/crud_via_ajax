
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
	
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-0"></div>
			<div class="col-md-6">
				
					<h2>Registrar Usuario Via Ajax</h2>
				<form id="altaUsuario">
					<div class="form-group">
				    	<label for="nombre">Nombre</label>
				    	<input type="test" class="form-control" id="nombre" name="nombre" placeholder="nombre" required="">
				  	</div>
				  <div class="form-group">
				    <label for="email">Correo Electronico</label>
				    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="email" required="">
				   
				  </div>
				  <div class="form-group">
				    <label for="Password">Contraseña</label>
				    <input type="password" class="form-control" id="Password" name="password"  placeholder="Password" required="">
				  </div>
				  <div class="form-group">
				    <label for="edad">Edad</label>
				    <input type="number" class="form-control" id="edad" min="1" name="edad" max="99" placeholder="Edad" required="">
				  </div>
				  <button type="submit" class="btn btn-primary">Guardar</button>
				</form>
				<div id="respuesta" class="mt-4"></div>
			</div>
			<div class="col-md-6">

				<table class="table" id="tablaUsuarios">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Email</th>
							<th>Edad</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
				<div id="mensajeDatosTabla">
					
				</div>
			</div>
		</div>
	</div>
	


	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


	<script src="script.js"></script>
</body>
</html>