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

include("header/cabezerablanca.php");

?>	
			  
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
		<h1>Carrito</h1>
		<em></em>
		<h2></h2>
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
             
		  <tr>
			<th class="table-grid">Item</th>
					
			<th>Precio</th>
			<th >Detalle </th>
            <th >Cantidad </th>
			<th>Subtotal</th>
            <th></th>
		  </tr>
          <?php
		  
		  foreach($micarro as $clave => $fila) {
			  $sub=$fila['cantidad']*$fila['precio'];
			  $total=$total+$sub;
			  $pico=$total;
		  ?>
		  <tr class="cart-header">

			<td><a href="single.php" class="at-in"><img src="" class="img-responsive" alt=""></a>
            <a href="single.php?ID=<?php echo $fila['id']; ?>">Ver detalle</a>
				<p><?php echo $fila['nombre'] ?></p>	
             			</td>
			<td><?php echo $fila['precio'] ?> <p>&nbsp;</p>	</td>
			<td><?php echo $fila['detalle']; ?></td>
            
			<td><?php echo $fila['cantidad'] ?></td>
            <td><?php echo $sub ?></td>
			<td><a class="item_add hvr-skew-backward" href="checkout5.php?ID=<?php echo $i;
			 ?>">Borrar</a></td>
            
		  </tr><?php $i++; }
	
		 ?>
         <tr>
         <td>
         TOTAL: <?php echo $total ?>
         </td>
         </tr>
	</table>
	</div>
	</div>
	<div class="produced">
	<a href="confirmarcompra.php" class="hvr-skew-backward">Realizar compra</a>
    <a href="producto.php" class="hvr-skew-backward">Volver</a>
    
	 </div>
</div>
</div>



        <?php }else{
	 
	 //unset($_SESSION['carrito']);
	 ?> NO HAY PRODUCTOS REGISTRADOS </br> </br><a href="producto.php" class="simpleCart_empty">Volver</a><?php
 }
	
		 ?>
	
	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>