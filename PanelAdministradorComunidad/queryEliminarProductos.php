<?php
include("conexion/conexion.php");
ConectarBD();
	


$var_nombre=$_GET['ID'];



$sql = mysql_query("select foto FROM productos WHERE nombre='".$var_nombre."'"); 

$foto = mysql_fetch_row( $sql ); 


if($foto[0]==='noproducto.png')
	
{

	}	
	else{
		
		unlink("../Imagenes/productos/".$foto[0]);
		
		}
	
	
		

$consulta="DELETE FROM productos WHERE nombre='".$var_nombre."'";

mysql_query($consulta);

header("Location: EliminarProductos.php");

?>

