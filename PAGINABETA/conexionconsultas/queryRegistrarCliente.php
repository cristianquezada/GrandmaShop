<?php
include("../conexion/conexion.php");
ConectarBD();

			
$sql ="select * from clientes  where correo='".$_POST['email']."'";

$resultado=mysql_query($sql);

	

if(mysql_num_rows($resultado)===0)
{	

$sql4 ="select * from ciudad  where nombreciudad='".$_POST['ciudad']."'";

$res=mysql_query($sql4);

	 while($d=mysql_fetch_array($res))
		{
 $idciudad=$d['idciudad'];
  
		}

$sql2="INSERT INTO clientes SET nombre='".$_POST['nombre']."',
numero='".$_POST['numero']."',
direccion='".$_POST['direccion']."',
correo='".$_POST['email']."',
contraseña='".$_POST['password']."',
estado='Activa',
fkciudad='".$idciudad."'";


mysql_query($sql2);

}

header("Location: ../registrocompleto.php");





?>
