

<!DOCTYPE html>
<html>
<head>
<title>Registro</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
<link href="css/style4.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script src="js/jquery.min.js"></script>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->
</head>
<body>
<!--header-->
<? 
session_start();  
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
include("header/cabezeralogeado.php");
}else {
include("header/cabezera.php");
	}

include("header/cabezerablanca.php");

?>
		
		
					<div class="clearfix"> </div>
					
						<!----->

						<!---pop-up-box---->					  
			<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
			<div id="small-dialog" class="mfp-hide">
				<div class="login-search">
					<div class="login">
						<input type="submit" value="">
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">		
					</div>
					<p>Shopin</p>
				</div>				
			</div>
		 <script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
			});
																						
			});
		</script>		
						<!----->
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>
<!--banner-->
<div class="banner-top"></div>
<!--login-->
<div class="container">
		
     
        
        
        <?php  
		
	$pdt_identity_token	="sDT4hFC5Jnnm6sa-Omd32B7cY9aT736NnxyAFVHJOQ34W3FAdd-aTT3dvNq";
		 function paypal_PDT_request($tx,$pdt_identity_token) {
    $request = curl_init();
 
    // Set request options
    curl_setopt_array($request, array
        (    CURLOPT_URL => 'https://www.sandbox.paypal.com/cgi-bin/webscr',
          CURLOPT_POST => TRUE,
          CURLOPT_POSTFIELDS => http_build_query(array
              (
                'cmd' => '_notify-synch',
                'tx' => $tx,
                'at' => $pdt_identity_token,
              )
          ),
          CURLOPT_RETURNTRANSFER => TRUE,
          CURLOPT_HEADER => FALSE,
          // CURLOPT_SSL_VERIFYPEER => TRUE,
          // CURLOPT_CAINFO => 'cacert.pem',
        )
    );
 
    // Realizar la solicitud y obtener la respuesta
    // y el código de status
    $response = curl_exec($request);
    $status   = curl_getinfo($request, CURLINFO_HTTP_CODE);
 
    // Cerrar la conexión
    curl_close($request);
    return $response;
} 



?>
				<?php
          if(isset($_GET['tx']))
{
  $tx = $_GET['tx'];
  $estado = $_GET['st'];
  // Further processing
}
			//echo "".$tx;
			//echo " ".$estado;
			
			if($estado==="Completed"){
				////////////////
				
				
	include("conexion/conexion.php");
ConectarBD();

/////insertar pedido				
				
				

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
 
 if($estado==="Completed"){
	 $estado="Pagado";
	 }
 
    $sql2="INSERT INTO pedidos SET fechapedido='".$fechapedido."',estado='".$estado."',identificador='".$tx."',
fkcliente='".$_SESSION['id']."'";

mysql_query($sql2);
//echo $sql2;
//die;
  
  $rs = mysql_query("SELECT @@identity AS id");
if ($row = mysql_fetch_row($rs)) {
$idpedido = trim($row[0]);
}
//echo $idpedido;

  
		////////////////		
				
				
				
				
				
				
				
				if($micarro){
	
?>
    <table style="display:none" class="table-heading simpleCart_shelfItem">
    <tr></tr>
    <tr>
      <th class="table-grid">nombre</th>
      <th >Direccion </th>
      <th >cantidad </th>
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
      <td><?php echo $_SESSION['direccion']; ?></td>
      <td><?php echo $fila['cantidad'] ?></td>
      <td><?php echo $sub ?></td>
    </tr>
    
    
     </table>
    
    
     <?php
    $sql2="INSERT INTO productospedidos SET cantidad='".$fila['cantidad'] ."',
preciosumado='".$fila['precio']."',
total='".$sub."',
fkproducto='".$fila['id']."',
fkpedido='".$idpedido."'";


//echo "".$sql2;
//die();
mysql_query($sql2);
  
  
   $i++; }
}
   
				
				
				
				
				
				
			$_SESSION['valorcarro']=0;
				
				
				/***enviar correo al cliente*/
  //echo "correo ".$_SESSION['correo'];
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
                
                
                 <h3 align="center">Pago completado con éxito</h3>
                 <div align="center" class="container" >
                 <img align="center" src="images/compra.png" width="200" height="200"></div>
                 
			   <?php }else {
				   
				 ?>
				   
                   <div class="container">
		<div class="four">
		<h3>404</h3>
		<p>no hay nada</p>
		<a href="index.php" class="hvr-skew-backward">Volver a inicio</a>
		</div>
	</div>
                   
                   <?php
				   
				   
				   
				   }?>
				 
				 

		

</div>

	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
 
</body>
</html>