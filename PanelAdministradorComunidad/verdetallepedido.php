<?php
include("conexion/conexion.php");
ConectarBD();




session_start();

 
$idpedido=$_GET['ID'];

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

    <title>Eliminar tejedoras</title>

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
                <div class="panel-heading"> Pedido </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                  
                  
         <?php
	   
	    $sql_consulta1=" select * from pedidos where idpedido=".$idpedido."";
		$result_consulta1=mysql_query($sql_consulta1);
		 while($Datos_productos1=mysql_fetch_array($result_consulta1))
		{
			echo "Estado:".$Datos_productos1['estado'];
		
		
		}
		
		
	   ?>
       <?php    
if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $input = $_POST['inputText']; //get input text
  $message = "Success! You entered: ".$input;


$sql ="UPDATE pedidos SET estado='".$input."' WHERE idpedido='".$idpedido."'";
mysql_query($sql);

  $sql_consulta1=" select * from pedidos where idpedido=".$idpedido."";
		$result_consulta1=mysql_query($sql_consulta1);
		 while($Datos_productos1=mysql_fetch_array($result_consulta1))
		{
			echo "---->Nuevo Estado:".$Datos_productos1['estado'];
		
		
		}
}    
?>
                 
                  
                  <form action="" method="post">
    <div class="form-group">
      <label for="sel1">Cambiar estado del pedido:</label>
      <select class="form-control" id="sel1" name="inputText">
        <option>Transferencia aceptada</option>
        <option>En proceso</option>
        <option>Enviado</option>
        <option>Cancelado</option>
         <option>Esperando transferencia bancaria</option>
      </select>

<button type="submit" class="btn btn-default" name="SubmitButton">Cambiar</button>
    </div>
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

