<?php

 
function ConectarBD(){
mysql_connect("localhost","root","cristian");
mysql_query("SET NAMES 'utf8'");
mysql_select_db("basegrand");
}


/*	$con = new mysqli('localhost','root','cristian','bd_orientados');


mysql_connect("localhost","root","cristian");

 */ 
 
 ?>