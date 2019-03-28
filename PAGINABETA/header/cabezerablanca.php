	<?php
	$_SESSION['valorcarro']=0;
	$tot=0;
	if(isset($_SESSION['carrito'])){
	$micarro=$_SESSION['carrito'];
	foreach($micarro as $clave => $fila) {
		$sub=$fila['cantidad']*$fila['precio'];
		$tot=$tot+$sub;
		
		
		$_SESSION['valorcarro']=$tot;
		
          if(isset($_GET['tx']))
{
  $tx = $_GET['tx'];
  $estado = $_GET['st'];
  // Further processing
}
		
			
			if($estado==="Completed"){
				
				unset($_SESSION['valorcarro']);
				
				unset($_SESSION['carrito']);
				$_SESSION['valorcarro']=0;
               
			    }		
		
		
		

		
	}
}else{
	 $micarro=false;
}
	
	
	?>
    
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
            <li><a class="color" href="index.php">Inicio</a></li>

			</li>
			<li><a class="color3" href="producto.php">Productos</a></li>
			<li><a class="color4" href="404.php">Nuestra historia</a></li>
            <li ><a class="color6" href="contact.php">Contacto</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->

</nav>
			</div>
			<div class="col-sm-2 search-right">
				<ul class="heart">
				<li>
			
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
					</ul>
					<div class="cart box_1">
						<a href="checkout3.php">
						<h3> <div class="total">
							<span class="">$<?php echo $_SESSION['valorcarro'];?></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="checkout4.php" class="simpleCart_empty">Vaciar Carro</a></p>
                        <!--
<p><a href="javascript:;" class="simpleCart_empty">Tu Carro</a></p>

-->
					</div>
		