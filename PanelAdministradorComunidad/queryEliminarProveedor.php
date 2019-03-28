<?php
include("conexion/conexion.php");
ConectarBD();

$var_nombre=$_GET['ID'];



$sql = mysql_query("select foto_proveedor FROM proveedor WHERE id_proveedor='".$var_nombre."'"); 


$foto = mysql_fetch_row( $sql ); 


if($foto[0]==='nouser.jpg')
	
{

	}	
	else{
		
		unlink("../Imagenes/proveedores/".$foto[0]);
		
		}
	
	


$sql="DELETE FROM proveedor WHERE id_proveedor='".$var_nombre."'";



mysql_query($sql);




header("Location: EliminarProveedor.php");

?>
