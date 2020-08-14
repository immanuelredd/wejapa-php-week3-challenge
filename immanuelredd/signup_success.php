<?php


     session_start(); error_reporting(0);

        $name = $_SESSION["lname"]." ".$_SESSION["fname"];
        $email =  $_SESSION["email"];
        $dob = $_SESSION["date"]; 
        $color =   $_SESSION["color"];
        $gender = $_SESSION["gender"];
        $departs = $_SESSION["department"];

        

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Successful</title>

    <style>
    body {
        display: flex;
        justify-content: center;
        align-content: center;
        font: 13px "Lucida Sans Unicode",
            "Lucida Grande",
            sans-serif;
    }

    .container {
        width: 500px;
        margin: 50px auto 0;
        background: #fff;
        padding: 20px;
    }
    </style>
</head>

<body <?php echo "body style='background:$color';"?>>

    <div class="container">
        <div class="header">
            <h1>You Have Signed Up Successfully!</h1>

            <h2><?php  echo "Welcome ".$name; ?></h2>
        </div>
        <div class="signup-details">
            <h2><u> <?php echo "Below are your Details" ?></u></h1>
                <ul>
                    <li><?php echo "<b>Email:</b> ".$email; ?></li>
                    <li><?php echo "<b>DOB:</b> ".$dob; ?></li>
                    <li><?php echo "<b>Gender:</b> ".$gender; ?></li>
                    <li><?php echo "<b>Favourite Color:</b> ".$color; ?></li>
                    <li><?php echo "<b>Department:</b> ".$departs; ?></li>
                </ul>

        </div>
    </div>



</body>

</html>

<?php 
    unset($_SESSION['fname']);
    unset($_SESSION['lname']);
    unset($_SESSION['email']);
    unset($_SESSION['date']);
    unset($_SESSION["color"] );
    unset($_SESSION['gender']);
    unset($_SESSION['department']);
?>