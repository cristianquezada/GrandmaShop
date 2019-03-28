<?php
 
    function ConectarBD(){
     mysql_connect("localhost","root","cristian");
        mysql_query("SET NAMES 'utf8'");
        mysql_select_db("basegrand");
  
  /* 
   $mysqli = new mysqli("localhost", "root", "cristian", "grandma");
   */
	}
?>