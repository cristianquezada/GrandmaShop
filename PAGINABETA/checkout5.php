<?php
$index=$_GET["ID"];
session_start();


//print_r($_SESSION['carrito']);
//echo $index;
//die;
////print_r($micarro);
////die;
//$index = array_search("0",$micarro);
//if ($index!==false){
//unset($micarro[$index]);
//print_r($micarro);
//die;
//unset($_SESSION['carrito'],'id'=>$a);

if(isset($_SESSION['carrito'])){
	$micarro=$_SESSION['carrito'];
	unset($micarro[$index]);
	$micarro=array_values($micarro);
	$_SESSION['carrito']=$micarro;
	
	if(count($micarro)==0){
		//session_unset($micarro);
		unset($_SESSION['carrito']);
	}
	
}
	
header("Location:checkout3.php");

?>
