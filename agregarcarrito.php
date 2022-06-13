<?php
 session_start();
 $regresar=$_REQUEST['regresar'];
include("conexion.php");
$tabla=$_GET['tabla'];
$id=$_GET['id'];
$idcliente=$_SESSION['id'];
/////////////////////////////////////////////////////////HOMBRE/////////////////////////////////////////

if ($tabla=='ropahombre') 
{
  $SELECT = "SELECT * FROM ". $tabla . " WHERE id=".$id."";
}

else if ($tabla=='joyeriahombre') 
{
  $SELECT = "SELECT * FROM ". $tabla . " WHERE id=".$id."";
}

else if ($tabla=='relojeshombre') 
{
  $SELECT = "SELECT * FROM ". $tabla . " WHERE id=".$id."";
}
else if ($tabla=='zapatoshombre') 
{
  $SELECT = "SELECT * FROM ". $tabla . " WHERE id=".$id."";
}
/////////////////////////////////////////////////////////MUJER/////////////////////////////////////////

if ($tabla=='ropamujer') 
{
  $SELECT = "SELECT * FROM ". $tabla . " WHERE id=".$id."";
}

else if ($tabla=='joyeriamujer') 
{
  $SELECT = "SELECT * FROM ". $tabla . " WHERE id=".$id."";
}

else if ($tabla=='relojesmujer') 
{
  $SELECT = "SELECT * FROM ". $tabla . " WHERE id=".$id."";
}
else if ($tabla=='zapatosmujer') 
{
  $SELECT = "SELECT * FROM ". $tabla . " WHERE id=".$id."";
}
/////////////////////////////////////////////////////////NIÑO Y NIÑA/////////////////////////////////////////

if ($tabla=='ropaninonina') 
{
  $SELECT = "SELECT * FROM ". $tabla . " WHERE id=".$id."";
}

else if ($tabla=='joyerianinonina') 
{
  $SELECT = "SELECT * FROM ". $tabla . " WHERE id=".$id."";
}

else if ($tabla=='relojesninonina') 
{
  $SELECT = "SELECT * FROM ". $tabla . " WHERE id=".$id."";
}
else if ($tabla=='zapatosninonina') 
{
  $SELECT = "SELECT * FROM ". $tabla . " WHERE id=".$id."";
}

////////////////////////////////////////////////////////////////////////////////////////////////////////

$array=$db->getAll($SELECT);
$db->close();

$db->connect('LAPTOP-GHBFROAB\SQLEXPRESS','','','TiendaWeb') or die("Error");
  $rs=$db->execute($SELECT);
  
$total=$rs->FieldCount();
for ($i=0; $i < count($array); $i++)
{   
    
    for ($j=0; $j < $a=count($array[$i]); $j++) 
    {
      for ($j=1; $j < $total-1; $j++) 
      {
        echo '<label>'.strtoupper($rs->FetchField($j)->name).'      '.'</label><br>';
        $VALU .= " '".$array[$i][$j]."',";
        $final="'".$array[$i][$j]."',";
        
      }

    }
}
echo $VALU;
echo $final;
$sql="INSERT INTO carrito (nombre,existencia,genero,marca,talla,color,precio,descuento,total,estatus,idcliente)
VALUES($VALU"."'0%',".$final."'1',". $idcliente . ")";

$resultado =$db->query($sql);  
header('Location:' . getenv('HTTP_REFERER'));
?>