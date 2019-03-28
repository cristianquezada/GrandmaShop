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

    <title>Agregar productos</title>

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
                    <h1 class="page-header">Agregar Producto</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          <div class="row">
                <div class="col-lg-12">
                   
<?php  $a=$_SESSION['fk']?>
  
  
  <?php 
  
  /////////////
     
if(isset($_POST['Registrar'])){ //check if form was submitted
			
		
$sql ="select * from productos  where nombre='".$_POST['nombre_producto']."'";

$resultado=mysql_query($sql);

	//echo $sql1;
	
	
if(mysql_num_rows($resultado)===0)
{	


	$nombreimagen=$_FILES['frm_archivo']['name'];
	$archivo="../Imagenes/productos/".$nombreimagen;
	
	$sql3 ="select id_proveedor from proveedor  where nom_proveedor='".$_POST['proveedor']."'";

$resultado2=mysql_query($sql3);

//echo $sql3;


$sql4 ="select id_cat from categoria  where nombre_cat='".$_POST['categoria']."'";

$res=mysql_query($sql4);

$resultado2=mysql_query($sql3);
	 
	 
	// echo $sql4;

	 while($Datos_ciudad=mysql_fetch_array($resultado2))
		{
 $idproveedor=$Datos_ciudad['id_proveedor'];
  
		}
		$res=mysql_query($sql4);
		
		
	 while($d=mysql_fetch_array($res))
		{
 $idcat=$d['id_cat'];
  
		}
	
	
if($nombreimagen=="")
{	$foto = 'noproducto.png';
	

$sql2="INSERT INTO productos SET nombre='".$_POST['nombre_producto']."',
precio='".$_POST['precio']."',
stock='".$_POST['stock']."',
detalle='".$_POST['detalle']."',
talla='".$_POST['talla']."',
material='".$_POST['material']."',
historia='".$_POST['historia']."',
foto='".$foto."',
fk_proveedor='".$idproveedor."',
fk_categoria='".$idcat."'";

}
else{
	

while(file_exists($archivo))
{
	mt_srand(time());
	$numero=mt_rand(0,5000);
	$aux=explode(".",$nombreimagen);
	$tamano=sizeof($aux);
	$extension=$aux[$tamano-1];
	$pos=0;
	$nombreimagen="";
	while($pos<$tamano-1)
	{
		$nombre.=$aux[$pos];
		$pos=$pos+1;
	}
	
	$nombreimagen=$nombre.$numero.".".$extension;
	$archivo="../Imagenes/productos/".$nombreimagen;
}
$nombreimagen=$nombreimagen;
	
	
$sql2="INSERT INTO productos SET nombre='".$_POST['nombre_producto']."',
precio='".$_POST['precio']."',
stock='".$_POST['stock']."',
detalle='".$_POST['detalle']."',
talla='".$_POST['talla']."',
material='".$_POST['material']."',
historia='".$_POST['historia']."',
foto='".$nombreimagen."',
fk_proveedor='".$idproveedor."',
fk_categoria='".$idcat."'";	



	move_uploaded_file($_FILES['frm_archivo']['tmp_name'], $archivo);
}

if(mysql_query($sql2)){




?>
<div class="alert alert-success alert-dismissable">
 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Producto agregado</strong></div>
<?php
}else {
	?>
	<div class="alert alert-danger alert-dismissable">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Producto no se agregó</strong> 
</div>

<?php
	}


}
else
{
?>
	<div class="alert alert-danger alert-dismissable">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Ya hay un producto con ese nombre</strong> 
</div>

<?php

}




}  
?>
  
  
   <form name="form1" method="post" autocomplete="off" enctype="multipart/form-data" action="" onSubmit="return validar();">
    <div border="0">
      <table width="1008" border="0" align="center">
        <tr>
          <td width="129" height="35">Nombre producto</td>
          <td width="858"><input class="form-control" name="nombre_producto" type="text" id="nombre_producto" maxlength="50" placeholder="Nombre producto" /></td>
          
          
          
        </tr>
        <tr>
        
        <td  width="129" height="35">Precio producto</td>
        
        <td width="858"><input class="form-control" name="precio" type="text"  id="precio" maxlength="9" placeholder="Precio" />
        
        </td>
        
        </tr>
        
        <tr>
        <td  width="129" height="35">Cantidad</td>
        <td width="858"><select class="dropdown-header" name="stock"  id="stock">
            <option value="0">Seleccionar</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            </select></td>
        </tr>
        <tr>
        
        <td  width="129" height="35">Detalle producto</td>
        
        <td width="858"><input class="form-control" name="detalle" type="text"  id="detalle" maxlength="50" placeholder="Detalle"/>
        
        </td>
        
        </tr>
        <tr>
        
        <td  width="129" height="35">Talla</td>
        
        <td width="858"><input class="form-control" name="talla" type="text"  id="talla" maxlength="50" placeholder="Talla"/>
        
        </td>
        
        </tr>
        <tr>
        
        <td  width="129" height="35">Material</td>
        
        <td width="858"><input class="form-control" name="material" type="text"id="material" maxlength="50" placeholder="Material"/>
        
        </td>
        
        </tr>
        <tr>
        
        <td  width="129" height="35">Historia</td>
        
        <td width="858"><input class="form-control" name="historia" type="text"  id="historia" maxlength="300" placeholder="Historia"/>
        
        </td>
        
        </tr>
        
        <tr>
        
        <td  width="129" height="35">Foto producto</td>
        
        <td width="858"><input type="file" name="frm_archivo" id="frm_archivo"/></td>
        
        </tr>
        
        <tr>
        
        <td  width="129" height="35">Proveedor</td>
        
        <td width="858">
        
        <?php
	    
	    $sql="select * from proveedor t INNER JOIN comunidad c on (t.fkcomunidad=c.idcomunidad) inner JOIN administradorcomunidad a on (c.fkadmincomunidad=a.idadmin) where a.idadmin='".$_SESSION['fk']."';";
		$result=mysql_query($sql);
		 ;
		?>
            <select class="dropdown-header" name="proveedor"  id="proveedor">
            <option value="0">Seleccionar</option>
            <?php	 
		while($var_proveedor=mysql_fetch_array($result))
		{
				
		  ?>
            <option value="<?php echo  
		   $var_proveedor['nom_proveedor'];?>"><?php echo $var_proveedor['nom_proveedor'];?></option>
            <?php 
			;
		 }
		 ?>
            </select>
        
        
        </td>
        
        </tr>
        
       
        
        
        
        </tr>
         <tr>
        
        <td  width="129" height="35">Categoría</td>
        
        <td width="858">
        
        <?php
	    
	    $sql2="Select * from categoria";
		$result2=mysql_query($sql2);
		 ;
		?>
            <select class="dropdown-header" name="categoria" id="categoria">
            <option value="0">Seleccionar</option>
            <?php	 
		while($var_cat=mysql_fetch_array($result2))
		{
				
		  ?>
            <option value="<?php echo  
		   $var_cat['nombre_cat'];?>"><?php echo $var_cat['nombre_cat'];?></option>
            <?php 
			;
		 }
		 ?>
            </select>
        
        
        </td>
        
        </tr>
        
       
        
        
        
        </tr>
                
        <tr>
          <td colspan="6" align="center"><p>&nbsp; </p>
            <p>
                   <input class="btn btn-success" type="submit" name="Registrar" id="Registrar" onclick="validar()" value="Registrar" />
              
            <p>&nbsp; </p></td>
        </tr>
        
        
      </table>
      </td>
    </div>
  </form>
  
  <?php 
  
  /////////////
     
if(isset($_POST['Registrar'])){ //check if form was submitted
			
		
$sql ="select * from productos  where nombre='".$_POST['nombre_producto']."'";

$resultado=mysql_query($sql);

	//echo $sql1;
	
	
if(mysql_num_rows($resultado)===0)
{	


	$nombreimagen=$_FILES['frm_archivo']['name'];
	$archivo="../Imagenes/productos/".$nombreimagen;
	
	$sql3 ="select id_proveedor from proveedor  where nom_proveedor='".$_POST['proveedor']."'";

$resultado2=mysql_query($sql3);

//echo $sql3;


$sql4 ="select id_cat from categoria  where nombre_cat='".$_POST['categoria']."'";

$res=mysql_query($sql4);

$resultado2=mysql_query($sql3);
	 
	 
	// echo $sql4;

	 while($Datos_ciudad=mysql_fetch_array($resultado2))
		{
 $idproveedor=$Datos_ciudad['id_proveedor'];
  
		}
		$res=mysql_query($sql4);
		
		
	 while($d=mysql_fetch_array($res))
		{
 $idcat=$d['id_cat'];
  
		}
	
	
if($nombreimagen=="")
{	$foto = 'noproducto.png';
	

$sql2="INSERT INTO productos SET nombre='".$_POST['nombre_producto']."',
precio='".$_POST['precio']."',
stock='".$_POST['stock']."',
detalle='".$_POST['detalle']."',
talla='".$_POST['talla']."',
material='".$_POST['material']."',
historia='".$_POST['historia']."',
foto='".$foto."',
fk_proveedor='".$idproveedor."',
fk_categoria='".$idcat."'";

}
else{
	

while(file_exists($archivo))
{
	mt_srand(time());
	$numero=mt_rand(0,5000);
	$aux=explode(".",$nombreimagen);
	$tamano=sizeof($aux);
	$extension=$aux[$tamano-1];
	$pos=0;
	$nombreimagen="";
	while($pos<$tamano-1)
	{
		$nombre.=$aux[$pos];
		$pos=$pos+1;
	}
	
	$nombreimagen=$nombre.$numero.".".$extension;
	$archivo="../Imagenes/productos/".$nombreimagen;
}
$nombreimagen=$nombreimagen;
	
	
$sql2="INSERT INTO productos SET nombre='".$_POST['nombre_producto']."',
precio='".$_POST['precio']."',
stock='".$_POST['stock']."',
detalle='".$_POST['detalle']."',
talla='".$_POST['talla']."',
material='".$_POST['material']."',
historia='".$_POST['historia']."',
foto='".$nombreimagen."',
fk_proveedor='".$idproveedor."',
fk_categoria='".$idcat."'";	



	move_uploaded_file($_FILES['frm_archivo']['tmp_name'], $archivo);
}

if(mysql_query($sql2)){




?>
<div class="alert alert-success alert-dismissable">
 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Producto agregado</strong></div>
<?php
}else {
	?>
	<div class="alert alert-danger alert-dismissable">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Producto no se agregó</strong> 
</div>

<?php
	}


}
else
{
?>
	<div class="alert alert-danger alert-dismissable">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Ya hay un producto con ese nombre</strong> 
</div>

<?php

}




}  
?>
  
  
  
  
  
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
	var nombre,precio,cantidad,detalle,talla,material,historia,proveedor,categoria;
	nombre= document.getElementById("nombre_producto").value;
	precio= document.getElementById("precio").value;
cantidad=document.getElementById("stock").value;

talla=document.getElementById("talla").value;

proveedor=document.getElementById("proveedor").value;	
	categoria=document.getElementById("categoria").value;	
		if(nombre==="" || precio==="" || cantidad==="0" || talla===""|| proveedor==="0"|| categoria==="0"){
			alert("Debe completar los campos"); 
			return false;	
		}
		else if(isNaN(precio)) {
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