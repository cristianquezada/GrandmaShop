<?php
session_start();

include("conexion/conexion.php");
ConectarBD();

if(!isset($cantidad)){$cantidad=1;}

$id=$_POST['id_txt'];

	$nombre=$_POST['nombre'];
	$precio=$_POST['precio'];
	$detalle=$_POST['detalle'];
	
if(isset($_SESSION['carrito']))
//si tiene datos los asignamos a un array
 
$micarro=$_SESSION['carrito'];
 
//Ahora insertamos el nuevo producot en la matriz
//Si el producto id existe le sumamos 1
 
 
$cantidad=$micarro[$id]['cantidad']+1;
 
//Lo añadimos si no existe o actualizamos si existe
 
$micarro[$id]=array($id,
'nombre'=>$nombre,'precio'=>$precio,
'cantidad'=>$cantidad,
'detalle'=>$detalle,'id'=>$id);
 
//Actualizamos la sesion carrito on la matriz
$_SESSION['carrito']=$micarro;
//print_r($_SESSION['carrito']);
//die;

header("Location:checkout3.php");

?>
