<?php
$user="root";
$password="";
$server="localhost";
$BD="datos_personales";

$conexion=mysql_connect($server,$user,$password)or die("error en la conexion".mysql_error());
mysql_select_db($BD,$conexion);



?>