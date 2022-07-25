<?php

session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel ="stylesheet" href="styless.css">
		<link rel="shortcut icon" type="image/jpg" href="images/bcd.jpg"> 
		<title>EMPLOYER</title>
	</head>
	<body>
		<div class="cat1">
			<b>GARDENER</b> <br> 
			   ID : 0101 <br>
			   Work location: Kenya. <br>
			   job posted: May 1, 2022  last date to Post: Aug 1, 2022 <br><br>
			   <a href="post.htm"><input class="btn" style="width: 250px; height: 30px; text-decoration: blink;"  type="submit" name="" value="Post"></a> <br><br>			
		</div> <br><br><br>
		<div class="cat2">
			<b>PAINTER</b> <br>
			   ID : 0102 <br>
			   Work location: Kenya. <br>
			   job posted: May 1, 2022  last date to Post: Aug 1, 2022 <br><br>
			   <a href="post.htm"><input class="btn" style="width: 250px; height: 30px; text-decoration: blink;"  type="submit" name="" value="Post"></a> <br><br>				
		</div><br><br><br>
		<div class="cat3">
			<b>BUSH CLEARER</b> <br>
			   ID : 0103 <br>
			   Work location: Kenya. <br>
			   job posted: May 1, 2022  last date to Post: Aug 1, 2022 <br><br>
			   <a href="post.htm"><input class="btn" style="width: 250px; height: 30px; text-decoration: blink;"  type="submit" name="" value="Post"></a> <br><br>				
		</div><br><br><br>
		<div class="cat4">
			<b>MASON</b> <br>
			   ID : 0104<br>
			   Work location: Kenya. <br>
			   job posted: May 1, 2022  last date to Post: Aug 1, 2022 <br><br>
			   <a href="post.htm"><input class="btn" style="width: 250px; height: 30px; text-decoration: blink;"  type="submit" name="" value="Post"></a> <br><br>				
		</div><br><br><br>
		<div class="cat5">
			<b>SECURITY GUARD</b> <br>
			   ID : 0104<br>
			   Work location: Kenya. <br>
			   job posted: May 1, 2022  last date to Post: Aug 1, 2022 <br><br>
			   <a href="post.htm"><input class="btn" style="width: 250px; height: 30px; text-decoration: blink;"  type="submit" name="" value="Post"></a> <br><br>				
		</div>

	
	</body>
	</html>