	<div class="product">
			<div class="container">
			<div class="col-md-9">
				<div class="mid-popular">
                <?php
	   
	    $sql_consulta=" select a.id_producto,a.nombre,a.precio,a.stock,a.detalle,a.foto,b.nom_proveedor from productos a INNER JOIN proveedor b on (a.fk_proveedor=b.id_proveedor);";
		$result_consulta=mysql_query($sql_consulta);
	   ?>
<?php
  
  while($Datos_productos=mysql_fetch_array($result_consulta))
		{
  ?>
					<div class="col-md-4 item-grid1 simpleCart_shelfItem">
					<div class=" mid-pop">
					<div class="pro-img">
						<img src="<?php echo "images/productos".$Datos_productos['foto'] ; ?>" class="img-responsive" alt="" style="max-width: 200px; max-height: 200px" >
						<div class="zoom-icon ">
						<a class="picture" href="images/pc.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
						<a href="single.php?ID=<?php echo $Datos_productos['id_producto']; ?>"><i class="glyphicon glyphicon-menu-right icon"></i></a>
						</div>
						</div>
						<div class="mid-1">
						<div class="women">
						<div class="women-top">
							<span>Women</span>
							<h6><a href="single.php"><?php echo $Datos_productos['nombre'];?></a></h6>
							</div>
							<div class="img item_add">
								<a href="#"><img src="images/ca.png" alt=""></a>
							</div>
							<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								<p ><label>$100.00</label><em class="item_price"><?php echo $Datos_productos['precio'];?></em></p>
								  <div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								
								<div class="clearfix"></div>
							</div>
							
						</div>
					</div>
					</div>
                    <?php }
  ?>