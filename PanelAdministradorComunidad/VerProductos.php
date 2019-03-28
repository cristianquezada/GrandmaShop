<?php
include("conexion/conexion.php");
ConectarBD();




session_start();

if(isset($_SESSION['username']) && !empty($_SESSION['username'])){

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ver Productos</title>

    <!-- Bootstrap Core CSS -->
 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- MetisMenu CSS -->

<link rel="stylesheet"  href="metisMenu/metisMenu.min.css">
    <!-- DataTables CSS -->

<link rel="stylesheet"  href="datatables-plugins/dataTables.bootstrap.css">
    <!-- DataTables Responsive CSS -->
    
    <link rel="stylesheet"  href="datatables-responsive/dataTables.responsive.css">

    <!-- Custom CSS -->
  
<link rel="stylesheet"  href="css/sb-admin-2.css">
    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" >
    
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    



</head>

<body>

    <div id="wrapper">

    <?php include("Menu/MenuPanel.php"); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                
           
                
                
                
                    <h1 class="page-header"> <?php echo "Comunidad ". $_SESSION['comunidad'] ; ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Productos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            
                 
                
                 <!--  <table id="example" class="display" width="900" border="2" cellpadding="4" cellspacing="4" >-->
                  <thead>                  
                  <tr >
                       <th width="45" align="center">Código producto</th>
                    <th width="45" align="center">Producto</th>
                    <th width="45" align="center">Nombre</th>
                    <th width="45" align="center">Precio</th>
                    <th width="125" align="center">Stock</th>
                    <th width="73" align="center">Detalle</th>
                   
                      <th width="73" align="center">Proveedor</th>
                  </tr>
                  </thead>
                  
                  
                  
                  <?php
		
				  
				  
	   
	    $sql_consulta="select * from productos p inner join proveedor t on (p.fk_proveedor=t.id_proveedor) 
INNER JOIN comunidad c on (t.fkcomunidad=c.idcomunidad)
inner JOIN administradorcomunidad a on (c.fkadmincomunidad=a.idadmin)
where a.idadmin='".$_SESSION['fk']."';";
		

			$result_consulta=mysql_query($sql_consulta);
	   ?>
                  <?php
  
  while($Datos_productos=mysql_fetch_array($result_consulta))
		{
  ?>
                  <tr  class="alt">
                    <td align="center"><?php echo $Datos_productos['id_producto'];?></td>
                    <td align="center"><img width="100" src="<?php echo"../Imagenes/productos/".$Datos_productos['foto'] ; ?>">
				
					</td>
                    <td align="center"><?php echo $Datos_productos['nombre'];?></td>
                    <td align="center">$ <?php echo $Datos_productos['precio'];?></td>
                    <td align="center"><?php echo $Datos_productos['stock'];?></td>
                    <td align="center"><?php echo $Datos_productos['detalle'];?></td>
                   
                          <td align="center"><?php echo $Datos_productos['nom_proveedor'];?></td>
                  </tr>
                  <?php
   
		}
  ?>
                </table>
                            
                            
           
                            
                            
                            <!-- /.table-responsive -->
                           
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <!-- /.col-lg-6 -->
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <!-- /.col-lg-6 -->
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <!-- /.col-lg-6 -->
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="datatables/js/jquery.dataTables.min.js"></script>
    <script src="datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>

<?php
}
else
{
	header("Location: loginAdministradorComunidad.php");
}

?>

