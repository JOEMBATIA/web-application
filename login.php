<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "<script> alert ('Wrong username or password')</script>";
		}else
		{
			echo "<script> alert ('Invalid credentials!')</script>";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="shortcut icon" type="image/jpg" href="images/bcd.jpg"> 
	 
</head>
<body>

	<style type="text/css">
 	
    body{
    	margin:0%;
    	padding: 0%;
    	font-family: Verdana;
    	background: url(images/typo.jpg);
    	background-size: cover;
    }
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: 2px soli beige;
		width: 100%;
		
	}
	
	#button{
		width: 100%;
        background: none;
        border: 2px soli beige;
        color:black;
        padding:5px;
        font-size: 18px;
        cursor: pointer;
        margin-top: 50px;
	}

	#box{

		width:280px;
		position: absolute;
		border: 2px soli beige;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		color: snow;
	}
	#box h1{

		float: left;
        font-size: 40px;
        border-bottom: 3px solid beige;
        margin-bottom: 80px;
        padding: 13px 0;
    }

	#linktxt{

		 color: lightblue;
		 font-family: Verdana;
		 padding: 13px;
	}

	</style>

	<div id="box">

		<h1>Log in</h1>		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;"></div>

			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
			
			<input id="text" type="password" name="password" placeholder="Password"><br><br>
			
			<input id="button" type="submit" value="Login"><br><br>

			<div id= "linktxt">
				Click to  <a href="signup.php"> Signup </a><br><br>
			</div>
		</form>
	</div>
</body>
</html>