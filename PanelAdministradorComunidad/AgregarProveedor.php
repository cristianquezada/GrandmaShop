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

    <title>Agregar tejedoras</title>

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
                    <h1 class="page-header">Agregar Tejedora</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          <div class="row">
                <div class="col-lg-12">
                   
<?php  $a=$_SESSION['fk']?>
  <form name="form1" method="post" autocomplete="off" enctype="multipart/form-data" action="querycreartejedora.php" onSubmit="return validar();">
    <div border="0">
      <table width="1001" border="0" align="center">
        <tr>
          <td width="132" height="35">Nombre </td>
          <td width="150"><input class="form-control" name="nombre" type="text" class="Campo_Texto" id="nombre" placeholder="Nombre" maxlength="50" required/></td>
          </tr>
          <tr>
          <td width="132" height="35">Apellido </td>
          <td width="150"><input class="form-control" name="apellido" type="text" class="Campo_Texto" id="apellido" placeholder="Apellidos" maxlength="50" required/></td>
          </tr>
          <tr>
          <td width="132" height="35">Dirección</td>
          <td width="150"><input class="form-control" name="direccion" type="text" class="Campo_Texto" id="direccion" placeholder="Dirección" maxlength="50" required/></td>
          </tr>
          <tr>
          <td width="132" height="35">Email</td>
          <td width="150"><input class="form-control" name="email" type="email" class="Campo_Texto" id="email" placeholder="Correo electrónico" maxlength="50" required/></td>
          </tr>
          <tr>
        
        <td  width="129" height="35">Foto </td>
        
        <td width="858"><input type="file" name="foto" id="foto"/></td>
        
        </tr>
       
     
        <tr>
        
          <td colspan="6" align="center"><p>&nbsp; </p>
            <p>
              <input class="btn btn-success" type="submit" name="Registrar" id="Registrar" onclick="validar()" value="Registrar" />
              
            <p>&nbsp; </p></td>
            <td></td>
        </tr>
      </table>
      </td>
    </div>
  </form>
  
  
  <div>
 
  
  
  
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
	var nombre,apellido,direccion,email;
	nombre= document.getElementById("nombre").value;
	apellido= document.getElementById("apellido").value;
	direccion= document.getElementById("direccion").value;
	email= document.getElementById("email").value;
	
expresion= /\w+@\w+\.+[a-z]/;
patron=/^[a-zA-Z]*$/;

	
	nombre
		if(nombre==="" || apellido ==="" || direccion==="" ){
			alert("Debe completar los campos"); 
			return false;	
		}
		else if (!expresion.test(email)){
			alert("El correo no es válido");
		   	return false;   
			}
		else if(!patron.test(nombre))
{alert("Ingrese un nombre válido");
    return false;
}
else if(!patron.test(apellido))
{alert("Ingrese un apellido válido");
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