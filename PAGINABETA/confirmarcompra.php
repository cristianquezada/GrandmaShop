<?php
session_start();

include("conexion/conexion.php");
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
<!DOCTYPE html>
<html>
<head>
<title></title>
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




?>




				<div class="clearfix"> </div>
		</div>
		</div>
		
		<div class="container">
		
			<div class="head-top">
			
		 <div class="col-sm-8 col-md-offset-2 h_menu4">
				<nav class="navbar nav_bottom" role="navigation">
 
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a class="color" href="index.php">Home</a></li>
           
			<li><a class="color3" href="producto.php">Productos</a></li>
			<li><a class="color4" href="404.php">Nuestra historia</a></li>
           
            <li ><a class="color6" href="contact.php">Contacto</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->

</nav>
			</div>
			<div class="col-sm-2 search-right">
				<ul class="heart">
				
				
					</ul>
					<div class="cart box_1">
						<a href="checkout4.php">
						<h3> <div class="total">
							<span class="">$<?php echo $tot ?></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="checkout4.php" class="simpleCart_empty">Vaciar carro</a></p>

					</div>
					<div class="clearfix"> </div>
					
					
			<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
			
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Confirmar compra</h1>
		<em></em>
		
	</div>
</div>
<!--login-->
	<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
						});	  
					});
			   </script>
<div class="check-out">
<div class="container">
	
	<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
    <?php
 
if($micarro){
	
?>
    <table class="table-heading simpleCart_shelfItem">
    <tr></tr>
    <tr>
      <th class="table-grid">Producto</th>
      <th >Detalle </th>
        <th >Precio unitario </th>
        
      <th >Cantidad </th>
      <th>Subtotal</th> 
      <th style="visibility:hidden">Subtotal en dólares </th>
    </tr>
    <?php
		  
		  foreach($micarro as $clave => $fila) {
			  $sub=$fila['cantidad']*$fila['precio'];
			  $total=$total+$sub;
			  $pico=$total;
			  
			  
/**
$endolar=$fila['precio']/649;

	**/		  
		$endolar=$pico/649;	  
			  
		  ?>
    <tr class="cart-header">
      <td><a href="single.php" class="at-in"><img src="" class="img-responsive" alt=""></a>
        <p><?php echo $fila['nombre'] ?></p></td>
      <td><?php echo $fila['detalle']; ?></td>
       <td><?php echo $fila['precio']; ?></td>
       
      <td><?php echo $fila['cantidad'] ?></td> 
      <td><?php echo $sub ?></td>
      <td style="visibility:hidden"><?php echo $endolar ?></td>
    </tr>
    <?php $i++; }
	
		 ?>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>
      <td> TOTAL: <?php echo $total ?></td>
    </tr>
    </table>
    <hr>
      </div>
	</div>
    
    <?php
	$gastoenvio=2500;
	$totalfinal=$total+$gastoenvio;
	?>
   <div align="right">
   Total gastos de envío: <?php echo "$".$gastoenvio ?> <br>
   
   TOTAL: <?php echo "$".$totalfinal ?>
   
   <hr>
   
   </div>
   
 

   
	<div class="produced"><?php if(!isset($_SESSION['username']) && empty($_SESSION['username'])){
?>
    <a href="producto.php" class="hvr-skew-backward">Continuar la compra</a>
    <?php
	}else {
		?>
        
        <!--
	<a href="conexionconsultas/registropedido.php" class="hvr-skew-backward">Realizar compra</a>
    -->
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
           
           
            <input type="hidden" name="cmd" value="_xclick">
            
            
              <input type="hidden" name="bn" value="Grandma shop">
              
              
            <input type="hidden" name="business" value="k_z_ada-facilitator@hotmail.com">
         
         
         <input type="hidden" name="no_shipping" value="1">
         
         
<!-- detalle de lo que se esta vendiendo -->
           <?php foreach($micarro as $clave => $producto) { ?>
           
            <input type="hidden" name="item_name" value="<?php echo $producto['nombre'];?>">
            <input type="hidden" name="amount" value="<?php echo $endolar;?>">
            
           
            
           <?php }?> 
         
            
            
            
            <input type="hidden" name="currency_code" value="USD">
        
        
            <input type="image" src="http://www.paypal.com/es_XC/i/btn/x-click-but01.gif"
                   name="submit"
                   alt="Make payments with PayPal - it's fast, free and secure!">
                   
                   

<input type="hidden" name="return" value="http://localhost/grandma/Proyecto/PAGINABETA/pagoexitoso.php">
<input type="hidden" name="cancel_return" value="http://localhost/grandma/Proyecto/PAGINABETA/pagocancelado.php">
        </form>
    
    
    
    <a href="producto.php" class="hvr-skew-backward">Continuar la compra</a>
    <?php } 
	
	
	
	
	
	
	
	
	?>
    
	 </div>
</div>
</div>

<!--//login-->
<!--brand-->
	
			<!--//brand-->
	<!--//content-->
	
        <?php }else{
	 
	 unset($_SESSION['carrito']);
	 ?> NO HAY PRODUCTOS REGISTRADOS </br> </br><a href="producto.php" class="simpleCart_empty">Volver</a><?php
 }
	
		 ?>
	
	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>