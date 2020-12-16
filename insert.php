<?php
	$connect = mysqli_connect("127.0.0.1","root", "", "twitter");

	$query_text_insert = "INSERT INTO twits (author, twit, img) 
	VALUES ('".$_GET["author"]."','".$_GET["twit"]."', 'img/1.png' )";
											
	$query_insert = mysqli_query($connect, $query_text_insert);
	header('Location: index.php');
	exit;
?>