<?php
include("conexion/conexion.php");
ConectarBD();
$var_producto=$_GET['ID'];
if(!isset ($var_producto)){
	header("Location:404.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Single</title>
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
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
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
		<h1>Detalle producto</h1>
		<em></em>
		
        </div></div>
	

<div class="single">

<?php

$consulta="select a.id_producto,a.nombre,a.precio,a.stock,a.detalle,a.talla,a.material,a.historia,a.foto,b.nom_proveedor,b.foto_proveedor,c.nombre_cat from productos a INNER JOIN proveedor b on (a.fk_proveedor=b.id_proveedor) INNER JOIN categoria c on (a.fk_categoria=c.id_cat)  WHERE id_producto='".$var_producto."'";
$result_consulta=mysql_query($consulta);

?>
<?php
while($Datos_productos=mysql_fetch_array($result_consulta))
		{
/*../Imagenes/productos/*/
?>
<div class="container">
<div class="col-md-9">
	<div class="col-md-5 grid">		
		<div class="flexslider">
			  <ul class="slides">
			    <li data-thumb="<?php echo "../Imagenes/productos/".$Datos_productos['foto'] ; ?>">
			        <div class="thumb-image"> <img src="<?php echo "../Imagenes/productos/".$Datos_productos['foto'] ; ?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="<?php echo "../Imagenes/productos/".$Datos_productos['foto'] ; ?>">
			         <div class="thumb-image"> <img src="<?php echo "../Imagenes/productos/".$Datos_productos['foto'] ; ?>"data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="<?php echo "../Imagenes/productos/".$Datos_productos['foto'] ; ?>">
			       <div class="thumb-image"> <img src="<?php echo "../Imagenes/productos/".$Datos_productos['foto'] ; ?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li> 
			  </ul>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						<div class="span_2_of_a1 simpleCart_shelfItem">
				<h3><?php echo $Datos_productos['nombre']; ?></h3>
				<p class="in-para">cat: <?php echo $Datos_productos['nombre_cat']; ?></p>
			    <div class="price_single">
				  <span class="reducedfrom item_price">$<?php echo $Datos_productos['precio']; ?></span>
				 
                 
                 
				 <div class="clearfix"></div>
				</div>
				<h4 class="quick">Detalle:</h4>
				<p class="quick_desc"> <?php echo $Datos_productos['detalle']; ?></p>
			  <h4 class="quick">Talla:</h4>
				<p class="quick_desc"> <?php echo $Datos_productos['talla']; ?></p>
				 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span>
                                    
                                 
                                    </div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
							<!--quantity-->
	<script>
    $('.value-plus').on('click', function(){
    	var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
    	divUpd.text(newVal);
    });

    $('.value-minus').on('click', function(){
    	var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
    	if(newVal>=1) divUpd.text(newVal);
    });
	</script>
	<!--quantity-->
				<!-- 
			    <a href="#" class="add-to item_add hvr-skew-backward">Agregar al carro</a>
                -->
               
               
            <div class="produced">
			
			
			
			<?php if($Datos_productos['stock']!=='0'){
?>   
               
               
               
                <div class="img item_add">
								<form action="checkout2.php" method="post" name="compra"><input name="id_txt" type="hidden" value="<?php echo $Datos_productos['id_producto'];?>">
                                <input name="detalle" type="hidden" value="<?php echo $Datos_productos['detalle'];?>">
                                <input name="nombre" type="hidden" value="<?php echo $Datos_productos['nombre'];?>">
                                <input name="precio" type="hidden" value="<?php echo $Datos_productos['precio'];?>">
                                
                                
                                
                                             <input type="image"value="Comprar" src="images/ca.png" /> </form>
							</div>
                
               
  <?php }?>
  </div>             
               
               
               
                
			<div class="clearfix"> </div>
			</div>
		
					</div>
			<div class="clearfix"> </div>
			<!---->
			<div class="tab-head">
			 <nav class="nav-sidebar">
		<ul class="nav tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">Descripción del producto</a></li>
          <li class=""><a href="#tab2" data-toggle="tab">Historia Prenda</a></li> 
        
		</ul>
	</nav>
	<div class="tab-content one">
<div class="tab-pane active text-style" id="tab1">
 <div class="facts">
									  <p > 
                                      
                                      <?php echo $Datos_productos['material']; ?></p>
										<ul>
											<li></li>
										</ul>         
							        </div>

</div>
<div class="tab-pane text-style" id="tab2">
	
									<div class="facts">									
										<p ><?php echo $Datos_productos['historia']; ?> </p>
                                        
                                        <img width="300" src="<?php echo "../Imagenes/productos/".$Datos_productos['foto_proveedor'] ; ?>" class="img-responsive">
										
							        </div>	

</div>

    <?php }
  ?>
  <br>
  <br>
  </div>
  <div class="clearfix"></div>
  </div>
			<!---->	
</div>
<!----->

<div class="col-md-3 product-bottom product-at">
			<!--categories-->
				       <div  class=" rsidebar span_1_of_left">
  <h4 class="cate">Categorías</h4>
 <?php
	   
	    $sql_consulta=" select *from categoria";
		$result_consulta=mysql_query($sql_consulta);
	   ?>
<?php
  
  while($Datos_productos=mysql_fetch_array($result_consulta))
		{
  ?>

						<a href="<?php echo $Datos_productos['nombre_cat'];?>.php"><?php echo $Datos_productos['nombre_cat'];?></a>
					</div>
                 
                    <?php
		}
		
		
					?>
            
             
             
             
             
             
	  <!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
 <section  class="sky-form">
					<h4 class="cate">&nbsp;</h4>
 </section>
</div>
		<div class="clearfix"> </div>
	</div>
	
			<!--brand-->
		
			<!--//brand-->
		</div>	
		
	<!--//content-->
	<script src="js/imagezoom.js"></script>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>


</body>
</html>