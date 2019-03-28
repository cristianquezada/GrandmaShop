<?php
include("conexion/conexion.php");
ConectarBD();

$sql ="select idadmin,nombreadmin,correoadmin,telefonoadmin,passwordadmin,estado from administradorcomunidad where correoadmin='".$_POST['usuario']."' and passwordadmin='".$_POST['Contraseña']."'";

$resultado=mysql_query($sql);
$datos=mysql_fetch_array($resultado);

$fk=$datos['idadmin'];

if($datos!=0)
{
	$estado=$datos['estado'];
	if($estado==='Habilitado'){
	
	
	session_start();
	$_SESSION['username']=$datos['nombreadmin'];

$sql2 ="select fkadmincomunidad,nombrecomunidad from comunidad where fkadmincomunidad='".$fk."'";

$resultado2=mysql_query($sql2);
$comunidad=mysql_fetch_array($resultado2);

$_SESSION['fk']=$comunidad['fkadmincomunidad'];
$_SESSION['comunidad']=$comunidad['nombrecomunidad'];



header("Location: index.php");
}
else
{

	
	header("Location: loginAdministradorComunidad.php");
}



}
else
{

	
	header("Location: loginAdministradorComunidad.php");
}
?>
?>