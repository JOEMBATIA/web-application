<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "post_db";



    $con = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if(!$con){

        die("failed to connect!");
    }


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $job = $_POST['job'];
        $price = $_POST['price'];
        $day = $_POST['day'];

        if(!empty($job) && !empty($price) && !empty($day))
        {

            //save to database
            $query = "insert into postdata (price,job,day) values ('$price','$job','$day')";

            mysqli_query($con, $query);

            echo "<script>alert

                  ('Job successfully posted!');
                  window.location.href = 'index.php'

                  </script>";

            die;
        }else
        {
            echo "Please enter some valid information!";
        }

    }
?>