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

    <title>Modificar producto</title>

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
                
           
                
                
                
                    <h1 class="page-header">Comunidad <?php echo "". $_SESSION['comunidad'] ; ?></h1>
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
   
<!------------------------

   <?php    
if(isset($_POST['Actualizar'])){ //check if form was submitted
  $input = $_POST['inputText']; //get input text
  $message = "Success! You entered: ".$_POST['id_proveedor'];
  


$sql="UPDATE productos
SET nombre='".$_POST['nombre']."', precio='".$_POST['precio']."', stock='".$_POST['stock']."', detalle='".$_POST['detalle']."', talla='".$_POST['talla']."', material='".$_POST['material']."', historia='".$_POST['historia']."' WHERE id_producto = '".$_POST['id_producto']."'";
mysql_query($sql);

}    
?>




-->
 
            
            
            
                             
          
          <?php
$id=$_GET['ID'];

$sql="select * from productos where id_producto=".$id.";";

$resultado=mysql_query($sql);


?>                  
                            
                            <form name="form1" method="post" autocomplete="off" enctype="multipart/form-data" action="">
<?php
  while($datos=mysql_fetch_array($resultado))
  
  {

?>

<table width="375">
<tr>
<td width="84">Código producto</td>
<td><input class="form-control" readonly name="id_producto" type="text" class="Campo_Texto" id="id_producto" value="<?php echo  
		   $datos['id_producto'];?>" /> </td>
<tr>
<td width="84">Nombre
</td>
<td width="279"><input class="form-control" name="nombre" type="text" class="Campo_Texto" id="nombre" value="<?php echo  
		   $datos['nombre'];?>" />
</td>
</tr>

<tr>
<td width="84">Precio
</td>
<td width="279"><input class="form-control" name="precio" type="text" class="Campo_Texto" id="precio" value="<?php echo  
		   $datos['precio'];?>" />
</td>
</tr>
<tr>
<td width="84">Stock
</td>
<td width="279"><input class="form-control" name="stock" type="text" class="Campo_Texto" id="stock" value="<?php echo  
		   $datos['stock'];?>" />
</td>
</tr>
<tr>
<td width="84">Detalle</td>
<td width="279"><input class="form-control" name="detalle" type="text" class="Campo_Texto" id="detalle" value="<?php echo  
		   $datos['detalle'];?>" />
</td>
</tr>
<tr>
<td width="84">Talla</td>
<td width="279"><input class="form-control" name="talla" type="text" class="Campo_Texto" id="talla" value="<?php echo  
		   $datos['talla'];?>" />
</td>
</tr>
<tr>
<td width="84">Material</td>
<td width="279"><input class="form-control" name="material" type="text" class="Campo_Texto" id="material" value="<?php echo  
		   $datos['material'];?>" />
</td></tr>
<tr>
<td width="84">Historia</td>
<td width="279"><input class="form-control" name="historia" type="text" class="Campo_Texto" id="historia" value="<?php echo  
		   $datos['historia'];?>" />
</td></tr>
</tr>

<tr>
<td>
   <input class="btn btn-success" type="submit" name="Actualizar" id="Actualizar"  value="Actualizar" />
</td>
</tr>

</table>
<?php
  }
?>
</form>
                            
                            
                            
                            
                            
                            
                            
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