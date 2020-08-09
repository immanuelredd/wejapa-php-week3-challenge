<?php
    
   session_start();
    $fErr= $lErr= $eErr= $cErr= $dErr= $dobErr=  $gErr=  $pErr= "";
    $fname= $lname= $email= $color=$departs=$dob= $gender= $pass = "";
    
      error_reporting(E_ALL);

        if (isset($_POST["submit"])) {
        
        
            if (empty ($_POST["firstname"])) {
                $fErr = "First Name required.";
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
                    $pErr = "Password is weak: $pErr";
                !isset( $_POST["submit"]);
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
    <title>Sign Up | Form</title>
</head>

<body>

    <div class="container">
        <form name=form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post" id="form">
            <ul>
                <div class="content">
                    <h1>Sign Up</h1>
                    <p>Please Enter your Details</p>
                </div>

                <div id="error">


                </div>
                <li class="input">
                    <label for="fname">Full Name<span class="required">*</span></label>
                    <input type="text" name="firstname" id="fname" placeholder="First" class="field-long"><br>
                    <small id="fErr" class="required"><?php echo $fErr; ?></small>
                <li class="input">
                    <label for="fname">Last Name<span class="required">*</span></label>
                    <input type="text" name="lastname" id="lname" placeholder="Last" class="field-long"><br>
                    <small id="lErr" class="required"><?php echo $lErr; ?></small>
                </li>
                <li class="input">
                    <label for="email">Email<span class="required">*</span></label>
                    <input type="text" name="email" id="email" placeholder="@example.com" class="field-long"><br>
                    <small id="eErr" class="required"><?php echo $eErr; ?></small>
                </li>

                <li class="input">
                    <label for="dob">Date Of Birth<span class="required">*</span></label>
                    <input type="date" name="dob" id="dob" class="field-long"><br>
                    <small id="dobErr" class="required"></small>
                </li>

                <li class="input">
                    <label for="color">Favourite Color</label>
                    <input type="color" name="color" id="color" class="">
                </li>

                <li>
                    <fieldset id="gender">
                        <label for="gender"><b>Gender</b><span class="required">*</span></label><br>
                        <input onclick=check(0); type="checkbox" name="gender" id="male" value="male"
                            class="checklist"><label for="male">Male</label>
                        <input onclick=check(1); type="checkbox" name="gender" id="female" value="female"
                            class="checklist"><label for="female">Female</label><br>
                        <small id="gErr" class="required"><?php echo $gErr; ?></small>
                    </fieldset>

                </li>

                <li class="input">
                    <label>Departments</label>
                    <select name="field4" class="field-select">
                        <option value="IT">IT</option>
                        <option value="HR">HR</option>
                        <option value="Management">Management</option>
                    </select>
                </li>

                <li class="input">
                    <label for="pass">Password<span class="required">*</span></label>
                    <input type="password" name="password" id="pass" class="field-long"><br>
                    <small id="pErr" class="required"><?php echo $pErr; ?></small>

                    <ul id="message">
                        <p>Password must contain the following:</p>
                        <li id="symbol" class="invalid">A <b>Symbol</b></li>
                        <li id="letter" class="invalid">A <b>lowercase</b> letter</li>
                        <li id="capital" class="invalid">A <b>capital (uppercase)</b> letter</li>
                        <li id="number" class="invalid">A <b>number</b></p>
                        <li id="length" class="invalid">Minimum <b>15 characters</b></li>
                    </ul>
                </li>


                <li style="text-align: center;">
                    <button type="submit" name="submit">Sign Up</button>
                </li>
            </ul>

        </form>
    </div>

    <script src="assets\Js\jquery.min.js"></script>
    <script src="assets\Js\script.js"></script>
</body>

</html>