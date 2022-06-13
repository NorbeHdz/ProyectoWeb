<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUJER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<?php
session_start();
$iniciarsesion = 0;
$usuario= $_SESSION['usuario'];
$id=$_SESSION['id'];

if (empty($_SESSION['usuario'])) 
{
  header('location: ../../proyectoweb');
  return;
}

?>
<header class="p-3 bg-dark text-white">

    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="../carrito.php" class="nav-link px-2 text-white">Carrito</a></li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="hombre.php">Hombre</a></li>
            <li><a class="dropdown-item" href="mujer.php">Mujer</a></li>
            <li><a class="dropdown-item" href="niñoniña.php">Niño y niña</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
          <li><a href="../tienda.php" class="nav-link px-2 text-white"> Regresar</a></li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $usuario  ?>  
          </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="../cerrar.php">Cerrar sesion</a></li>
          </ul>

        </li>
        </ul>

      </div>



      </div>
    </div>
    <br><br><br><br><br>
<a href="../categorias/ropa.php?tabla=ropahombre&&regresar=hombre&&usuario=<?php  echo $usuario?>&&id=<?php echo $id?>"><img src="../imagenes/ropahombre.jpg" class="img-thumbnail" alt="ROPA" width="350" height="350"></a>
<a href="../categorias/zapatos.php?tabla=zapatoshombre&&regresar=hombre"><img src="../imagenes/zapatoshombre.jpg" class="img-thumbnail" alt="ZAPATOS" width="350" height="350"></a>
<a href="../categorias/joyeria.php?tabla=joyeriahombre&&regresar=hombre"><img src="../imagenes/joyeriahombre.jpg" class="img-thumbnail" alt="JOYERIA" width="350" height="350"></a>
<a href="../categorias/relojes.php?tabla=relojeshombre&&regresar=hombre"><img src="../imagenes/relojhombre.jpg" class="img-thumbnail" alt="RELOJ" width="250" height="250"></a>
<br><br><br><br><br><br><br></body>
</div>
</header>
</body>
</html>