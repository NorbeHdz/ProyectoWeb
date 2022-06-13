<?php
include("conexion.php");
$id=$_GET['id'];
$tabla=$_GET['tabla'];
$columna=$_GET['columna'];

echo "DELETE FROM ".$tabla." WHERE ".$columna."=".$id."";
$db->execute("DELETE FROM ".$tabla." WHERE ".$columna."=".$id."");
header('Location:' . getenv('HTTP_REFERER'));
?>