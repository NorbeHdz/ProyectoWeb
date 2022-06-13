<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RELOJES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<header class="p-3 bg-dark text-white">
<?php
        
session_start();
$iniciarsesion = 0;
$usuario= $_SESSION['usuario'];
$id=$_SESSION['id'];
        
$regresar=$_REQUEST['regresar'];

if (empty($_SESSION['usuario'])) 
{
  header('location: ../../proyectoweb');
  return;
}
?>
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
                <li><a class="dropdown-item" href="../genero/hombre.php">Hombre</a></li>
                <li><a class="dropdown-item" href="../genero/mujer.php">Mujer</a></li>
                <li><a class="dropdown-item" href="../genero/niñoniña.php">Niño y niña</a></li>
                <li><hr class="dropdown-divider"></li>
              </ul>
              <li><a href="../genero/<?php echo $regresar?>.php" class="nav-link px-2 text-white">Regresar</a></li>
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
<?php          
$tabla=$_GET['tabla'];

include("../conexion.php");
if ($tabla=="relojeshombre") 
{
  $SELECT = "SELECT * FROM RelojesHombre";
  echo '<br><h1 class="display-3" align="center">Relojes Hombre</h1>';
}
    
    else if ($tabla=="relojesmujer") 
    {
      $SELECT = "SELECT * FROM relojesmujer";
      echo '<br><h1 class="display-3" align="center">Relojes Mujer</h1>';
    }
    
    else if ($tabla=="relojesninonina") 
    {
      $SELECT = "SELECT * FROM relojesninonina";
      echo '<br><h1 class="display-3" align="center">Relojes Niño y Niña</h1>';
    }
           
$array=$db->getAll($SELECT);
$db->close();

$db->connect('LAPTOP-GHBFROAB\SQLEXPRESS','','','TiendaWeb') or die("Error");

$rs=$db->execute($SELECT);
$db->close();

echo '<table class="table table-success table-striped >">
<thead class="table-secondary"';
echo '<tr>';
    for ($j=0; $j < $rs->FieldCount(); $j++) 
    {
      echo '<th>'.strtoupper($rs->FetchField($j)->name).'</th>';
    }
    echo '<th>AGREGAR</th>';
    echo '</tr>';

    for ($i=0; $i < count($array); $i++)
    {   
        echo '<tr>';
        for ($j=0; $j < $a=count($array[$i]); $j++) 
        {
            echo '<td>'.$array[$i][$j].'</td>';
        }
        ?>
        <td><a href="../agregarcarrito.php?tabla=<?php echo $tabla?>&id=<?php echo ($array[$i][0])?>"><button type="button" class="btn btn-success">Agregar al carrito</button></td>
<?php

        echo '</tr>';
    }?>
</thead>
</table>
</body>
</div>
  </header>
</body>
</html>