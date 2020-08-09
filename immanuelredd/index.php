<?php
    
   session_start();
    $fErr= $lErr= $eErr= $cErr= $dErr= $dobErr=  $gErr=  $pErr= "";
    $fname= $lname= $email= $color=$departs=$dob= $gender= $pass = "";
    
    if ($_POST) {
       
   }

if (isset($_POST["submit"])) {
   
   
    if (empty ($_POST["fistname"])) {
        $fErr = "";
    } else {
         $fname = $_SESSION["firstname"] = htmlentities($_POST["firstname"]);
    }

    if (empty ($_POST["lastname"])) {
       $lErr = "Last Name required."; 
    } else {
        $lname = $_SESSION["lastname"] = htmlentities($_POST["lastname"]);
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
    if (empty ($_POST["dob"])) {
        $dobErr = ""; 
    } else {
        $dob = $_SESSION["dob"] = htmlentities($_POST["dob"]);
    }
    if (empty ($_POST["color"])) {
        $cErr = ""; 
    } else {
        $color = $_SESSION["color"] = htmlentities($_POST["color"]);
    }
    if (empty ($_POST["departments"])) {
        $dErr = ""; 
    } else {
        $departs = $_SESSION["departments"] = htmlentities($_POST["departments"]);
    }
    if (empty ($_POST["gender"])) {
       $gErr = "Gender required."; 
    } else {
        $gender = $_SESSION["gender"] = htmlentities($_POST["gender"]);
    }

    if (empty ($_POST["password"])) {
       $pErr = "Password required."; 
    } else {
        $pass = $_SESSION["password"] = htmlentities($_POST["password"]);
        
        //validated password
        if( strlen($pass ) < 15 ) {
            $pErr = "Mininum of 15 characters Password short!";
        }
        if (!preg_match("#[0-9]+#", $pass )) {
            $pErr = "Password must include at least one number!";
        }
        if( !preg_match("#[a-z]+#", $pass ) ) {
            $pErr .= "Password must include at least one letter!";
        }

            if( !preg_match("#[A-Z]+#", $pass ) ) {
            $pErr .= "Password must include at least one CAPS!";
            }
        
        if (!preg_match("#\W+#", $pass ) ) {
            $pErr = "Password must include at least one symbol!";
        }

        if ($pErr) {
            $pErr = "Password validation failure(your choise is weak): $pErr";
        } else{
            header("location:output.php"); 
        }
    }
 

 //print_r($errors);
    //header("location:output.php");   
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\CSS\style.css">
    <title>PHP sesssions</title>
</head>

<body>

    <div id="form-div">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post">

            <div class="content">
                <h1 id="title">Reddville Internship SignUp Form</h1>
                <p id="description">Please fill in your details.</p>
            </div>

            <div id="form-error">

            </div>

            <div class="box">
                <div>
                    <label for="firstname">First Name: </label>
                    <input type="text" name="firstname" id="firstname">
                </div>

                <div>
                    <label for="lastname">Last Name: </label>
                    <input type="text" name="lastname" id="lastname">
                    <p class="error"> <?php echo $lErr; ?></p>
                </div>

            </div>

            <div class="box">
                <div>
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email">
                    <p class="error"> <?php echo $eErr; ?></p>
                </div>

                <div>
                    <label for="dob">Date Of Birth: </label>
                    <input type="date" name="dob" id="dob">
                </div>

            </div>

            <div class="box">
                <div>
                    <label for="color">Favorite color: </label>
                    <input type="color" name="color" id="color">
                </div>

                <div>
                    <label for="departments">Departments:</label>
                    <select name="departments" id="departments">
                        <option value="IT">IT</option>
                        <option value="HR">HR</option>
                        <option value="Management">Management</option>
                    </select>
                </div>

            </div>

            <div class="selectbox">
                <fieldset>
                    <p>Gender</p>
                    <label for="male">Male:</label>
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="male">Female:</label>
                    <input type="radio" name="gender" id="female" value="female">
                    <p class="error"><?php echo $gErr; ?></p>
                </fieldset>

            </div>

            <div class="passbox">
                <label for="pass">Password: </label>
                <input type="password" name="password" id="password">
                <p class="error"><?php echo $pErr; ?></p>
            </div>


            <input type="submit" value="Sign Up" name="submit" class="btn">

        </form>
    </div>

    <script src="assets\Js\jquery.min.js"></script>
    <script src="assets\Js\script.js"></script>
</body>

</html>