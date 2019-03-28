
<!DOCTYPE html>
<html>
<head>
<title>Contacto</title>
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
				<div class="search-top">
					<div class="login-search">
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
	<div class="banner-top">
	<div class="container">
		<h1>Contacto</h1>
		<em></em>
		
	</div>
</div>	
		
			<div class="contact">
					
				<div class="contact-form">
					<div class="container">
                    
                    
    
				<div class="col-md-6 contact-top">
					<h3>Envíanos tú mensaje</h3>
					<form name="form1" method="post" autocomplete="off" enctype="multipart/form-data" action="">
						<div>Tú nombre
						  <input type="text" value="" placeholder="Nombre" id="nombre" name="nombre">						
					  </div>
						<div>Tú correo
						  <input type="text" value="" placeholder="Correo electrónico" name="correo" id="correo">						
					  </div>
						<div>
							<span>Escriba su mensaje</span>		
							<textarea rows="4" cols="50" value=""  name="mensaje" id="mensaje" >	</textarea>
						</div>
                        
                        
						<div>
							
						</div>
                        
						<label class="hvr-skew-backward">
								<input type="submit" value="Enviar" name="Enviar" id="Enviar">
						</label>
</form>					


<?php
 
  /***enviar correo al cliente*/
 if(isset($_POST['Enviar'])){
	  echo "".$_POST['nombre'];
	  echo "".$_POST['correo']; 
	  echo "".$_POST['mensaje'];
	  die();
 
  
 $destinatario = "k_z_ada@hotmail.com"; 
$asunto = "".$_POST['correo'].""; 
$cuerpo = ' 
<html> 
<head> 
   <title>Consulta</title> 
</head> 
<body> 
 "'.$_POST['mensaje'].'"
 
  
</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: ".$_POST['nombre']." <".$_POST['correo'].">\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: \r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: k_z_ada@hotmail.com\r\n"; 

//direcciones que recibián copia 
$headers .= "Cc: \r\n"; 

//direcciones que recibirán copia oculta 
$headers .= "Bcc: \r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers);
 
 
	
  
 }
  /****/
  
  
  ?>
	
				</div>
                
                
                
		<div class="clearfix"></div>
		</div>
		</div>
        
        
      
			</div>
			
		</div>





	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
 
</body>
</html>