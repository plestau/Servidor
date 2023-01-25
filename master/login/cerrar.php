<?php
	include_once "usuario.php";
	$p=new usuario();
	$p->logOut();
	header("Location: index2.php");
?>