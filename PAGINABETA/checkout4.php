<?php
session_start();
unset($_SESSION['carrito']);

unset($_SESSION['valorcarro']);

header("Location:checkout3.php");

?>
