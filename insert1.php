<?php
	$connect = mysqli_connect("127.0.0.1","root", "", "twitter");

	$query_text_insert = "INSERT INTO followings (author, twit, img) 
	VALUES ('".$_GET["name"]."','".$_GET["channel"]."', '".$_GET["images"]."' )";
											
	$query_insert = mysqli_query($connect, $query_text_insert);
	header('Location: index.php');
	exit;
?>