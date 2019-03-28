<?php
include("conexion/conexion.php");
ConectarBD();
?>

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
<div class="banner-top">
	<div class="container">
		<h1>Registro</h1>
		<em></em>
		
	</div>
</div>
<!--login-->
<div class="container">
		<div class="login">
			<form name="form1" method="post" autocomplete="off" enctype="multipart/form-data" action="conexionconsultas/queryRegistrarCliente.php">
            
            
            

            
            
			<div class="col-md-6 login-do">
			<div class="login-mail">
					<input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
					<i  class="glyphicon glyphicon-user"></i>
				</div>
				<div class="login-mail">
					<input type="text" name="numero" id="numero"placeholder="Nº de contacto" required>
					<i  class="glyphicon glyphicon-phone"></i>
				</div>
                
                	<div class="login-mail">
					<input type="text" name="direccion" id="direccion" placeholder="Dirección" required>
					<i  class="glyphicon glyphicon-user"></i>
				</div>
                
                
                
				<div class="login-mail">
					<input type="text" name="email" id="email"placeholder="Email" required>
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
                
				<div class="login-mail">
					<input type="password" name="password" id="password" placeholder="Password" required>
					<i class="glyphicon glyphicon-lock"></i>
				</div>
				<div class="login-mail">
					 <?php
	    
	    $sql2="Select * from ciudad";
		$result2=mysql_query($sql2);
		 ;
		?>
            <select class="dropdown-header" name="ciudad" id="ciudad">
            <option value="0">Seleccionar</option>
            <?php	 
		while($var_cat=mysql_fetch_array($result2))
		{
				
		  ?>
            <option value="<?php echo  
		   $var_cat['nombreciudad'];?>"><?php echo $var_cat['nombreciudad'];?></option>
            <?php 
			;
		 }
		 ?>
            </select>
				
				</div>
                
                 
				<label class="hvr-skew-backward">
					<input class="btn btn-success" type="submit" name="Registrar" id="Registrar" onclick="" value="Registrar" >
				</label>
				
				</div>
                
           
			
			</div>
			<div class="col-md-6 login-right">
				 <h3>Logearse</h3>
				 
				 <p>&nbsp;</p>
				<a href="login.php" class="hvr-skew-backward">Iniciar sesión</a>

			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>

</div>

	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
 
</body>
</html>