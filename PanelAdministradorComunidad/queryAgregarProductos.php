<?php
include("conexion/conexion.php");
ConectarBD();

			
		
$sql ="select * from productos  where nombre='".$_POST['nombre_producto']."'";

$resultado=mysql_query($sql);

	echo $sql1;
	
	
if(mysql_num_rows($resultado)===0)
{	


	$nombreimagen=$_FILES['frm_archivo']['name'];
	$archivo="../Imagenes/productos/".$nombreimagen;
	
	$sql3 ="select id_proveedor from proveedor  where nom_proveedor='".$_POST['proveedor']."'";

$resultado2=mysql_query($sql3);

echo $sql3;


$sql4 ="select id_cat from categoria  where nombre_cat='".$_POST['categoria']."'";

$res=mysql_query($sql4);

$resultado2=mysql_query($sql3);
	 
	 
	 echo $sql4;

	 while($Datos_ciudad=mysql_fetch_array($resultado2))
		{
 $idproveedor=$Datos_ciudad['id_proveedor'];
  
		}
		$res=mysql_query($sql4);
		
		
	 while($d=mysql_fetch_array($res))
		{
 $idcat=$d['id_cat'];
  
		}
	
	
if($nombreimagen=="")
{	$foto = 'noproducto.png';
	

$sql2="INSERT INTO productos SET nombre='".$_POST['nombre_producto']."',
precio='".$_POST['precio']."',
stock='".$_POST['stock']."',
detalle='".$_POST['detalle']."',
talla='".$_POST['talla']."',
material='".$_POST['material']."',
historia='".$_POST['historia']."',
foto='".$foto."',
fk_proveedor='".$idproveedor."',
fk_categoria='".$idcat."'";

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
	$archivo="../Imagenes/productos/".$nombreimagen;
}
$nombreimagen=$nombreimagen;
	
	
$sql2="INSERT INTO productos SET nombre='".$_POST['nombre_producto']."',
precio='".$_POST['precio']."',
stock='".$_POST['stock']."',
detalle='".$_POST['detalle']."',
talla='".$_POST['talla']."',
material='".$_POST['material']."',
historia='".$_POST['historia']."',
foto='".$nombreimagen."',
fk_proveedor='".$idproveedor."',
fk_categoria='".$idcat."'";	



	move_uploaded_file($_FILES['frm_archivo']['tmp_name'], $archivo);
}
mysql_query($sql2);

header("Location: index.php");

}
else
{

echo(repetido);
	


header("Location: AgregarProducto.php");

}
?>
