<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<?php
session_start();
$id=$_SESSION['id'];
$usuario=$_SESSION['usuario'];

include("conexion.php");

$producto = (unserialize(base64_decode($_POST['result'])));
    
include ("conexion.php");
$time=time();
for ($i=0; $i < count($producto); $i++) { 
    
    
    for ($j=0; $j < count($producto[$i]) ; $j++) { 

        if ($j==8) {
            
            $sql2 = "INSERT INTO orden (idcliente,idcotizacion,idempleado,nombrecliente,lugarentrega,fecha,hora)
            VALUES ($id,1,1,'$usuario','tienda','" . $DateAndTime = date('m-d-Y') ."','" . date('h:i a', $time) . "')";
            $resultado2 = $db->query($sql2);  
            
            


            $sql = "INSERT INTO OrdenDetalle (idorden,nombre,color,talla,cantidad,precio,descuento,total,metododepago)
            VALUES (" . $producto[$i][0] . ",'" . $producto[$i][1] . "','". $producto[$i][5] . "','" . $producto[$i][4] . "','1','" . $producto[$i][6] . "','" . $producto[$i][7] . "','" .$producto[$i][8] . "','efectivo')";
            $resultado =$db->query($sql);  
            


            $sqlupdate = "UPDATE carrito SET estatus = 0 WHERE id = " . $producto[$i][0];
            $resultado3 =$db->query($sqlupdate);  


        }
    }
}
?>
<div class="bg-primary text-white" align=center>
<a1 class="display-3" ><b>COMPRA EXITOSA</b></a1><br><br>
<a algin="rhigt"  href="tienda.php" ><button type="button"  class="btn btn-success">ACEPTAR</button></a><br><br>
</div>
</body>
</html>