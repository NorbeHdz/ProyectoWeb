<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class=" p-3 mb-2 bg-primary text-white">
<header>
<?php
session_start();
include("conexion.php");
$email=$_POST["email"];
$contra=$_POST["contrasena"];

$sql="SELECT * from Usuario where usuario = '$email'";

foreach($array = $db->Execute($sql) as $dato):
if($dato[3]==$contra)
{
    echo "BIENVENIDO";
    $_SESSION['usuario']=$dato[3];
    $_SESSION['id']=$dato[0];
    header('Location: tienda.php');
}
else 
{
    echo '<div class="mi-auto" align="center" >
    <h1>Contraseña incorrecta </h1><br><br>
    <a algin="rhigt"  href="login.html" ><button type="button"  class="btn btn-danger">Regresar</button></a>
    </div>';
    return;
}
endforeach;
?>
</thead>
</table>
</div>
</body>
</html>
