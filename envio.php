<?php
include "conexion2.php";
$nom=$_POST["Nombre"];
$app=$_POST["apellido"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$dir=$_POST["direc"];
$obse=$_POST["obs"];




//echo"Listo";
$sql="INSERT INTO usuario (Id_Usuario, Nombre, Apellido_P,Correo,Telefono,Observaciones,Direccion)VALUES('','$nom','$app','$email','$tel','$dir','$obse')";
$insertar=mysql_query($sql,$conexion);

if($insertar){

echo "Nombre:" .$nom."<br>";
echo "Apellidos:" .$app."<br>";
echo "Email:" .$email."<br>";
echo "Telefono:" .$tel."<br>";
echo "Direccion:" .$dir."<br>";
echo "Observaciones:" .$obse."<br>";



echo "Datos guardados satisfactoriamente";
}else{
echo "Error al enviar los datos: ".mysql_error();
}
mysql_close($conexion);


?>



