<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIENDA WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="diseño.css">
</head>
<body>
  <?php
  session_start();
  if (empty($_SESSION['usuario'])) 
  {
    header('location: ../proyectoweb');
    return;
  }
  $iniciarsesion = 0;
  $usuario= $_SESSION['usuario'];
  $id=$_SESSION['id'];
  $nombreusuario = $usuario;

  ?>
<header class="p-3 bg-dark text-white">

    <div class="container">
      <div  class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <form name="id" action="carrito.php" method="post">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        
        
        <button type="submit" class="btn btn-primary"> carrito</button></li>
        </form>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="genero/hombre.php">Hombre</a></li>
            <li><a class="dropdown-item" href="genero/mujer.php">Mujer</a></li>
            <li><a class="dropdown-item" href="genero/niñoniña.php">Niño y niña</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
          

        </li>
        </ul>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php echo $usuario  ?>  
        </a>
             <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             <li><a class="dropdown-item" href="cerrar.php">Cerrar sesion</a></li>
             <li><a class="dropdown-item" href="cerrar.php">Cambiar contrseña</a></li>
             <li><a class="dropdown-item" href="cerrar.php">Cuenta</a></li>
        </ul>
      </div>
    </div>
  </header>

  <div align="center" id="carouselExampleSlidesOnly" class="button-container" data-bs-ride="carousel">
  <div class="p-3 bg-dark text-white">
  <p class="fst-italic h1">INSTITUTO TECNOLOGICO SUPERIOR DE MONCLOVA</p>
  <p class="fst-italic h1">PROYECTO WEB</p>
        <div class="carousel-inner">
          <div class="carousel-item active">
          <img src="imagenes/relojhombre.jpg" class="d-block w-70" alt="...">
            
          </div>
          <div class="carousel-item">
            <img src="imagenes/joyeriahombre.jpg" class="d-block w-90" alt="..." >
          </div>
          <div class="carousel-item">
            <img src="imagenes/joyerianiñoniña.jpg" class="d-block w-90" alt="...">
          </div>
          <div class="carousel-item">
          <img src="imagenes/joyeriamujer.jpg" class="d-block w-70" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagenes/relojmujer.jpg" class="d-block w-70" alt="..." >
          </div>
          <div class="carousel-item">
            <img src="imagenes/ropahombre.jpg" class="d-block w-70" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagenes/ropamujer.jpg" class="d-block w-70" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagenes/ropaniñoniña.jpg" class="d-block w-70" alt="..." >
          </div>
          <div class="carousel-item">
            <img src="imagenes/zapatosmujer.jpg" class="d-block w-70" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="imagenes/zapatosniñoniña.jpg" class="d-block w-70" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagenes/niñoniñareloj.jpg" class="d-block w-70" alt="..." >
          </div>
          <div class="carousel-item">
            <img src="imagenes/zapatoshombre.jpg" class="d-block w-80" alt="...">
          </div>
        </div>
        <br><br><br><br><br>
      </div>

</div>
</div>
</body>
</html>