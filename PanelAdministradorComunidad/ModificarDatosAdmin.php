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

    <title>Mi cuenta</title>

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
                            Mis datos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
   


  





 
            
            
            
                             
          
          <?php
$id=$_SESSION['fk'];

$sql="select * from administradorcomunidad where idadmin=".$id.";";

$resultado=mysql_query($sql);


?>                  
                            
                            <form name="form1" method="post" autocomplete="off" enctype="multipart/form-data" action="" >
<?php
  while($datos=mysql_fetch_array($resultado))
  
  {

?>

<table width="375">

<tr>
<td width="84">Nombre</td>
<td><input class="form-control"  name="nombre" type="text" class="Campo_Texto" id="nombre" value="<?php echo  
		   $datos['nombreadmin'];?>" />
            </td>
</tr>

<tr>
<td width="84">Email</td>
<td width="279"><input class="form-control" readonly name="email" type="text" class="Campo_Texto" id="email" value="<?php echo  
		   $datos['correoadmin'];?>" />
</td>
</tr>

<tr>
<td width="84">Télefono</td>
<td width="279"><input class="form-control" name="telefono" type="text" class="Campo_Texto" id="telefono" value="<?php echo  
		   $datos['telefonoadmin'];?>" />
</td>
</tr>

<tr>
<td width="84">Contraseña</td>
<td width="279"><input readonly class="form-control" name="pass" type="password" class="Campo_Texto" id="pass" value="<?php echo  
		   $datos['passwordadmin'];?>" />
</td>
</tr>
<br>

<tr>
<td></td>
<td><br>
   <input class="btn btn-success" type="submit" name="Actualizar" id="Actualizar"  value="Actualizar datos" onClick="validar()"/>
</td>

<td><br>

 
</td>
</tr>

</table>
<?php
  }
?>
</form>

 <?php    
if(isset($_POST['Actualizar']))
{ 
  $input = $_POST['inputText']; 
  $message = "Success! You entered: ".$_POST['id_proveedor'];
  


$sql="UPDATE administradorcomunidad
SET nombreadmin='".$_POST['nombre']."', correoadmin='".$_POST['email']."', telefonoadmin='".$_POST['telefono']."', passwordadmin='".$_POST['pass']."' WHERE idadmin = '".$_SESSION['fk']."'";
mysql_query($sql);
?>

<div class="alert alert-success alert-dismissable">
 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Datos actualizados</strong></div>

<?php
}    
?>

<br>
<br>

<div>
<table  width="375">
<tr><td>
    <form name="form2" method="post" autocomplete="off" enctype="multipart/form-data" action="ModificarPass.php">
    
 <input class="btn btn-success" type="submit" name="cambiar" id="cambiar"  value="Cambiar contraseña" />
                            
         </form>  
         </td></tr>                 
</table>

     </div>                       
                            
                            
                            
                            
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
    
    <script language="javascript">
function validar()
{
	var nombre,numero;
	nombre= document.getElementById("nombre").value;
	numero= document.getElementById("numero").value;

		if(nombre==="" || numero==="" ){
			alert("No debe dejar campos vacios"); 
			return false;	
		}
		else if(isNaN(numero)) {
			alert("Debe ingresar el precio en números");
			return false;
			}
	


	
}
</script>
    
    
    
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