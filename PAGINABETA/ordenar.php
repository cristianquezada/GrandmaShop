
<?php
session_start();

include("conexion/conexion.php");

ConectarBD();

if(isset($_SESSION['carrito'])) {
$micarro=$_SESSION['carrito'];
 
} else {
$micarro=false;
 
}
//print_r($_SESSION['carrito']);
//die;
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
		<h1>Productos</h1>
		<em></em>
		
	</div>
</div>
	<!--content-->
    
    
    <div>
  

  
  
    </div>
		<div class="product">
			<div class="container">
			<div class="col-md-9">
				<div class="mid-popular">
                <?php
	   $cat=$_POST['cate'];
	   if(!isset($cat)){
		   echo "<script language='javascript'>window.location='404.php'</script>"; 
	   }
	   

	    $sql_consulta="select a.id_producto,a.nombre,a.precio,a.stock,a.detalle,a.talla,a.foto,b.nom_proveedor from productos a INNER JOIN proveedor b on (a.fk_proveedor=b.id_proveedor)order by ".$cat."";
		$result_consulta=mysql_query($sql_consulta);
	   ?>
<?php
  
  while($Datos_productos=mysql_fetch_array($result_consulta))
		{
  ?>
					<div class="col-md-4 item-grid1 simpleCart_shelfItem">
					<div class=" mid-pop">
					<div class="pro-img">
						<img src="<?php echo "../Imagenes/productos/".$Datos_productos['foto'] ; ?>" class="img-responsive" alt="" style="max-width: 100px; max-height: 50px" >
						<div class="zoom-icon ">
						<a class="picture" href="<?php echo "../Imagenes/productos/".$Datos_productos['foto'] ; ?>" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
						<a href="single.php?ID=<?php echo $Datos_productos['id_producto']; ?>"><i class="glyphicon glyphicon-menu-right icon"></i></a>
						</div>
						</div>
						<div class="mid-1">
						<div class="women">
						<div class="women-top">
							<span><?php echo $Datos_productos['talla'];?></span>
							<h6><a href="single.php"><?php echo $Datos_productos['nombre'];?></a></h6>
							</div>
							<div class="img item_add">
								<form action="checkout2.php" method="post" name="compra"><input name="id_txt" type="hidden" value="<?php echo $Datos_productos['id_producto'];?>">
                                <input name="detalle" type="hidden" value="<?php echo $Datos_productos['detalle'];?>">
                                <input name="nombre" type="hidden" value="<?php echo $Datos_productos['nombre'];?>">
                                <input name="precio" type="hidden" value="<?php echo $Datos_productos['precio'];?>">
                                <input type="image"value="Comprar" src="images/ca.png" /> </form>
							</div>
							<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								<p ><em class="item_price">$<?php echo $Datos_productos['precio'];?></em></p>
								  <div class="block">
									
								</div>
								
								<div class="clearfix"></div>
							</div>
							
						</div>
					</div>
					</div>
                    <?php }
  ?>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-3 product-bottom">
			<!--categories-->
            <div  class=" rsidebar span_1_of_left">
            <h4 class="cate">Buscar producto</h4>
   <form name="form1" method="post" autocomplete="off" enctype="multipart/form-data" action="busquedaproducto.php">
   <input class="form-control" name="nombre_producto" type="text" class="Campo_Texto" id="nombre_producto" maxlength="50" />
   <input type="submit" value="Buscar"/>
   </form>
   
  
 </div>
 <div>
 </div>
 <div>
 <div  class=" rsidebar span_1_of_left">
  <h4 class="cate">Ordenar por</h4>
 
<form id="form2" action="ordenar.php" method="post">
<SELECT NAME="cate" SIZE=1 onChange="">
<OPTION VALUE="nombre asc">Nombre: de A a Z</OPTION>
<OPTION VALUE="nombre desc">Nombre: de Z a A </OPTION>
<OPTION VALUE="precio desc">Precio: Más caros primero</OPTION>
<OPTION VALUE="precio asc">Precio: Más baratos primero</OPTION>
<OPTION VALUE="talla asc">Talla</OPTION>

</SELECT>
 
<input type="submit" value="Buscar"/>
</form>
 </div>
 <div>
 </div>
 
 
            
            
            </div>
            
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
<!--//menu--><!----></div>
			<div class="clearfix"></div>
			</div>
			
			
		</div>


	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
 <!--light-box-files -->
		<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('a.picture').Chocolat();
		});
		</script>
</body>
</html>