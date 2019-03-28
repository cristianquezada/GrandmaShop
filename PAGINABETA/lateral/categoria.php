<?php
/*
include("../conexion/conexion.php");
ConectarBD();

*/
?>


 
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

							 <ul class="menu-drop">
							<li class="item1"><a href="/categoriaproducto.php"><?php echo $Datos_productos['nombre_cat'];?></a>							</li>
							
						</ul>
					</div>
                  
                    <?php
		}
		
		
					?>
     