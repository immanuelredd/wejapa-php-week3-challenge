<?php

session_start();

    $fErr= $lErr= $eErr= $cErr= $dErr= $dobErr=  $gErr=  $pErr= "";
    $fname= $lname= $email= $color=$departs=$dob= $gender= $pass = "";

if ($_SERVER['REQUEST_METHOD']  == 'POST') {
    
    if (empty ($_POST["fname"])) {
       $fErr = "First Name required."; 
    }else{
          $fname = $_SESSION["fname"] = htmlentities($_POST["fname"]);

          // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
            $fErr = "Only letters and white space allowed";
        }
    }

    if (empty ($_POST["lname"])) {
       $lErr = "Last Name required."; 
    } else {
         $lname = $_SESSION["lname"] = htmlentities($_POST["lname"]);
        
    // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
            $lErr = "Only letters and white space allowed";
        }
    }

    if (empty ($_POST["email"])) {
       $eErr = "Email required."; 
    } else {
         $email = $_SESSION["email"] = htmlentities($_POST["email"]);
        
        // check if name only contains letters and whitespace
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $eErr = "Invalid email format.";
        }
    }

     if (empty ($_POST['date'])) {
        $dobErr = 'Date of Birth is required';
    } elseif (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $_POST['date'])) {
        $dobErr = 'Invalid date';
    } else {
        $today = date("Y-m-d");
        $dob = $_SESSION["date"] = htmlentities($_POST["date"]);  
        if ($dob >= $today) {
            $dobErr = 'Invalid date';
        }
    }
    if (empty ($_POST["color"])) {
        $cErr = ""; 
    } else {
         $color = $_SESSION["color"] = htmlentities($_POST["color"]);
    }
    if (empty ($_POST["department"])) {
        $dErr = ""; 
    } else {
        $departs = $_SESSION["department"] = htmlentities($_POST["department"]);
    }
    if (empty ($_POST["gender"])) {
        $gErr = ""; 
    } else {
        $gender = $_SESSION["gender"] = htmlentities($_POST["gender"]);
    }
    if (empty ($_POST["password"])) {
        $pErr = "Password required."; 
    } else {
        $pass = $_SESSION["password"] = htmlentities($_POST["password"]);

        if ( !preg_match("#.*^(?=.{15,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $pass)) {
          $pErr = "Use a password with at least 6 letters, 3 capital letters, 6 numbers and 3 special characters.";  
        }
    }

   if ($fErr == '' && $lErr == '' && $eErr == '' && $pErr == '' &&  $dobErr == ''){
       return header("location:signup_success.php");
   } else{
       return True;
   }
   

}

?>