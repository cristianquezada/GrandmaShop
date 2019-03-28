<?php
include("conexion/conexion.php");
ConectarBD();


$sql ="select id_clientes,nombre,numero,direccion,correo, contraseña,estado from clientes  where correo='".$_POST['correo']."'and contraseña='".$_POST['password']."'";

$resultado=mysql_query($sql);
$datos=mysql_fetch_array($resultado);

if($datos!=0 && $datos['estado']==="Activa")
{

	
	session_start();
	$_SESSION['username']=$datos['nombre'];
	$_SESSION['id']=$datos['id_clientes'];
	$_SESSION['correo']=$datos['correo'];
	$_SESSION['direccion']=$datos['direccion'];
	/*header(" header('Refresh: 0; URL = index.php'));
*/

header("Location: index.php");

}
else
{

	
	header("Location: login.php");
}
?>