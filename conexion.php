<?php
include 'adodb5/adodb.inc.php';
$db = ADONewConnection('mssqlnative');
$db->connect('LAPTOP-GHBFROAB\SQLEXPRESS','','','TiendaWeb') or die("Error");
return $db;
?>