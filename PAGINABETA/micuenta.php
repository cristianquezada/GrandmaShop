<?php
include("conexion/conexion.php");
ConectarBD();



session_start();  
 $_SESSION['username'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>


            <div id="main2">
              <div >
                <table class="table-bordered" width="900" border="2" cellpadding="4" cellspacing="4" >
                  
                  <tr >
                    
                      <th width="73" align="center">Fecha</th>
                    <th width="73" align="center">Ver pedido</th>
                  </tr>
                  <?php
	   
	    $sql_consulta=" select * from pedidos where fkcliente= ".$_SESSION['id']."";
		$result_consulta=mysql_query($sql_consulta);
	   ?>
                  <?php
  
  while($Datos_productos=mysql_fetch_array($result_consulta))
		{
  ?>
                  <tr  class="alt">
                   
                         <tr  class="alt">
                   
                    <td align="center"><?php echo $Datos_productos['fechapedido'];?></td>
                    
                  
                
                    
                  
                     
                    <td align="center"><p><a href="pedido.php?ID=<?php echo $Datos_productos['idpedido']; ?>">Ver</a></p>
                  </tr>
                  <?php
   
		}
  ?>
                </table>
              </div>
            </div>
         
</body>
</html>