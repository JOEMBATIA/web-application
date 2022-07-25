<?php

$email = $_POST['email'];
$cv = $_POST['cv'];
$position = $_POST['Position'];
$employment = $_POST['employment'];
$day = $_POST['day'];
$gender = $_POST['gender'];

if (!empty($email )|| !empty($cv )|| !empty($position) || !empty($employment) || !empty($day) || !empty($gender) )
{
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "application_db";



	$con = new mysqli($host, $dbusername, $dbpassword, $dbname);

	if(!$con){

		die("failed to connect!");
    }
    else {
            $Select = "SELECT email FROM appDetails WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO appDetails(email, cv , Position, employment, day, gender) values(?, ?, ?, ?, ?, ?)";
            $stmt = $con->prepare($Select);
            $stmt->bind_param("s", $email);
            /* Execute the statement */
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                /* Prepare an insert statement */ 
                $stmt = $con->prepare($Insert);
                /* Bind variables to parameters */
                $stmt->bind_param("ssssss", $email, $cv, $position, $employment, $day, $gender);
                if ($stmt->execute()) {
                    echo  "<script> alert 
                    ('Job successfully applied!');
                        window.location.href= 'index.php';
                    </script>"; 
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "<script> 
                alert ('Sorry, someone has already applied using the email!');
                window.location.href= 'employee.php'
                </script>";
            }
            $stmt->close();
            $con->close();
        }
    
    
}

else{
	echo "All fields are required";
	die();
}


?>