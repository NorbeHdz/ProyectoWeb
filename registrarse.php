<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>REGISTRAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
	body{
		background:rgb(37, 36, 48) ;
		background:linear-gradient(to right, rgb(37, 36, 48),rgb(37, 36, 48));
	}
	.bg{
		background-image: url(imagenes/DN.jpg) ;
		background-position: center center;
	}
</style>

</head>
<body>
	<div class="container w-75 bg-primary mt-5 rounded shadow">
			<div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded"></div>
			<div class="col bg-white p-5 rounded-end">
				<div class="text-end">
					
				</div>
				<h2 class="fw-bold text-center py-5">Registrarse</h2>
				<form name="login" action="registrarusuario.php" method="post">
					<div class="mb-4">
						<label for="email" class ="form-label">Correo electronico</label>
						<input type="email" class="form-control" name="email">
					</div>
					<div class="mb-4">
					    <label for="password" class ="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="contrasena">
					</div>

					<div class="d-grid">
						<button type="submit" class="btn btn-primary">Registrar</button>
					</div><br>
				</form>
				<form action="../proyectoweb">

					<div class="d-grid">
						<button type="submit" class="btn btn-danger">Cancelar</button>
					</div>
                </form>
            </div>
	    </div>
	</div>
</div>
</body>
</html>