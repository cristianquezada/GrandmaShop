<?php
include("conexion/conexion.php");
ConectarBD();
session_start();
$a=$_SESSION['fk'];


$sql ="select * from proveedor  where nom_proveedor='".$_POST['nombre']."'";

$resultado=mysql_query($sql);


$sql4 ="select * from comunidad  where fkadmincomunidad='".$a."'";

$res=mysql_query($sql4);

	 while($d=mysql_fetch_array($res))
		{
 $idcomunidad=$d['idcomunidad'];
  
		}

if(mysql_num_rows($resultado)===0)
{	


$nombreimagen=$_FILES['foto']['name'];
	$archivo="../Imagenes/proveedores/".$nombreimagen;

if($nombreimagen=="")
{	$foto = 'nouser.jpg';
	

$sql="INSERT INTO proveedor SET nom_proveedor='".$_POST['nombre']."',
ape_proveedor='".$_POST['apellido']."',
dir_proveedor='".$_POST['direccion']."',
email_proveedor='".$_POST['email']."',
foto_proveedor='".$foto."',
fkcomunidad='".$idcomunidad."'";
}
else{
	

while(file_exists($archivo))
{
	mt_srand(time());
	$numero=mt_rand(0,5000);
	$aux=explode(".",$nombreimagen);
	$tamano=sizeof($aux);
	$extension=$aux[$tamano-1];
	$pos=0;
	$nombreimagen="";
	while($pos<$tamano-1)
	{
		$nombre.=$aux[$pos];
		$pos=$pos+1;
	}
	
	$nombreimagen=$nombre.$numero.".".$extension;
	$archivo="../Imagenes/proveedores/".$nombreimagen;
}
$nombreimagen=$nombreimagen;
	
	
$sql=$sql="INSERT INTO proveedor SET nom_proveedor='".$_POST['nombre']."', ape_proveedor='".$_POST['apellido']."', dir_proveedor='".$_POST['direccion']."', email_proveedor='".$_POST['email']."', foto_proveedor='".$nombreimagen."',
fkcomunidad='".$idcomunidad."'";	


	move_uploaded_file($_FILES['foto']['tmp_name'], $archivo);
}


mysql_query($sql);
header("Location: index.php");
}
else
{

echo(repetido);

	header("Location: AgregarProveedor.php");
}

?>
