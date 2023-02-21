<?php
	
	session_start();
	$productName =$_POST['productName'];
	$productPrice =$_POST['productPrice'];
	$bookAuthor =$_POST['bookAuthor'];

	$product = array($productName,$productPrice,$bookAuthor);
	
	$_SESSION[$productName]= $product;
	header('admin.php  ');
?>