<?php
include("../conexion/conexion.php");
ConectarBD();

			
$sql ="select * from administradorcomunidad  where correoadmin='".$_POST['correo']."'";

$resultado=mysql_query($sql);

	

if(mysql_num_rows($resultado)===0)
{	



$sql2="INSERT INTO administradorcomunidad SET nombreadmin='".$_POST['nombre']."',
correoadmin='".$_POST['correo']."',
telefonoadmin='".$_POST['telefono']."',
passwordadmin='".$_POST['pass']."',
estado='Solicitando acceso'";




mysql_query($sql2);
header("Location: ../registrocompleto.php");
}else{

header("Location: ../contact.php");
}




?>
