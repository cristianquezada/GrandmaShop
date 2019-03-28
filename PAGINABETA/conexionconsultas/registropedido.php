<?php
session_start();

include("../conexion/conexion.php");
ConectarBD();


$tot=0;
if(isset($_SESSION['carrito'])){
	$micarro=$_SESSION['carrito'];
	foreach($micarro as $clave => $fila) {
		$sub=$fila['cantidad']*$fila['precio'];
		$tot=$tot+$sub;
	}
			  
	
}else{
	 $micarro=false;
}
$total=0;
$i=0;
?>


<? 
session_start();  
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){

}else {

	}

?>

<?php
date_default_timezone_set('Chile/Continental');
$hoy=date_default_timezone_get();
$caca=getdate();
//$hoy = getdate();
//echo $hoy[minutes];
$conv=array_merge((array)$caca['year'],(array)$caca['mon'], (array)$caca['mday']);
//$asco=concat($derial['0'],'-',$derial['1'],'-',$derial['2']);
$fechapedido = implode("-", $conv);
//echo $fechapedido;
?>

 <?php
    $sql2="INSERT INTO pedidos SET fechapedido='".$fechapedido."',estado='Esperando transferencia bancaria',
fkcliente='".$_SESSION['id']."'";

mysql_query($sql2);
//echo $sql2;
//die;
  
  $rs = mysql_query("SELECT @@identity AS id");
if ($row = mysql_fetch_row($rs)) {
$idpedido = trim($row[0]);
}
echo $idpedido;

  ?>

    <?php
	
	
	
	
	
 
if($micarro){
	
?>
    <table class="table-heading simpleCart_shelfItem">
    <tr></tr>
    <tr>
      <th class="table-grid">Item</th>
      <th >Delivery </th>
      <th >Cantidad </th>
      <th>Subtotal</th>
    </tr>
    <?php
		  
		  foreach($micarro as $clave => $fila) {
			  $sub=$fila['cantidad']*$fila['precio'];
			  $total=$total+$sub;
			  $pico=$total;
		  ?>
    <tr class="cart-header">
      <td>
        <p><?php echo $fila['nombre'] ?></p></td>
      <td><?php echo $fila['detalle']; ?></td>
      <td><?php echo $fila['cantidad'] ?></td>
      <td><?php echo $sub ?></td>
    </tr>
    
    
    
    
    
     <?php
    $sql2="INSERT INTO productospedidos SET cantidad='".$fila['cantidad'] ."',
preciosumado='".$fila['precio']."',
total='".$sub."',
fkproducto='".$fila['id']."',
fkpedido='".$idpedido."'";

mysql_query($sql2);
  
  
  /***enviar correo al cliente*/
  echo "correo ".$_SESSION['correo'];
 $destinatario = "".$_SESSION['correo'].""; 
$asunto = "Pedido"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Comprobante de pedido</title> 
</head> 
<body> 
<h1>Buenas!</h1> 
<p> 
<b>Comprobante de pago</b>
 
 
  
</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: cristian <k_z_ada@hotmail.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

//direcciones que recibián copia 
$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

//direcciones que recibirán copia oculta 
$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers); 
 
 
  
  
  /****/
  ?>
    
    
    
    
    <?php $i++; }
}
		 ?>
   
    </table>
    <hr>
    <p><?php echo $_SESSION['username']; ?></p>
    <p><?php echo $_SESSION['id']; ?></p>
    <?php 
	unset($_SESSION['carrito']);
	?>
    
   <?php
header("Location: ../index.php");
?>




