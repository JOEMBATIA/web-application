<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "utf-8"/>
    <title> HUSTLE </title>
    <link rel ="stylesheet" href="styles.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="images/bcd.jpg"> 
    
</head>
    <body> 
    <script src="index.js"></script>    
        
        <nav>
            
            <ul>
                <li><a href="index.php" target=""><b>HOME</b></a></li>
                <li><a href="about.htm" target="_blank"><b>ABOUT US</b></a></li>                
                <li><a href="logout.php" target=""><b>LOG OUT</b></a></li>
                <li><a href="signup.php" target="_blank"><b>SIGN IN</b></a></li>
                
            </ul>
        </nav>   
        <div class= "button" >
            <a href="employer.php"><input class="btn" type="submit" name="" value="EMPLOYER"></a>
            <a href="employee.php"><input class="btn" type="button" name="" value="EMPLOYEE"></a>
            <a class = "btn" href="#"></a>
            
        </div> 
            
         <div class ="content">
         		                 
	        Hello, <i class="fa-solid fa-user">
                <?php 

                echo $user_data['user_name']; 

                ?>
                    
                </i>
	        <a class = "btn" href="#"></a>

         </div>   

	
</body>
</html>