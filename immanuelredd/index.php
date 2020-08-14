<?php

require_once 'render_form.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="assets\CSS\style.css">
    </style>
</head>

<body>

    <div class="container">

        <form name="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post" class="form"
            id="form">
            <div class="header">
                <h1>Sign Up</h1>
                <p>Please Enter Your Details.</p>
            </div>
            <div class="formgroup">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" class="field-long" value="<?= $fname ?>">
                <small id="fErr" class="required"><?php echo $fErr; ?></small>
            </div>
            <div class="formgroup">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" class="field-long" value="<?= $lname?>">
                <small id="lErr" class="required"><?php echo $lErr; ?></small>
            </div>
            <div class="formgroup">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="field-long" value="<?= $email?>">
                <small id="eErr" class="required"><?php echo $eErr; ?></small>
            </div>
            <div class="formgroup">
                <label for="date">Date Of Birth</label>
                <input type="date" name="date" id="date" class="field-long" value="<?=$dob ?>">
                <small id="dobErr" class="required"><?php echo $dobErr; ?></small>
            </div>
            <div class="formgroup">
                <label for="color">Favourite Color</label>
                <input type="color" name="color" id="color" class="field-long" value="<?= $color?>">
            </div>
            <div class="formcheck">
                <label for=""><b>Gender</b></label> <br>
                <input onclick=check(0); type="checkbox" name="gender" id="male" class="checkbox" value="Male">
                <label for=" male">Male</label>

                <input onclick=check(0); type="checkbox" name="gender" id="female" class="checkbox" value="female">
                <label for="Female">Female</label>
                <br>
                <small id="gErr" class="required"><?php echo $gErr; ?></small>
            </div>
            <div class="formselect">
                <label for="department">Departments</label>
                <select name="department" id="department" class="field-long">
                    <option value="None">None</option>
                    <option value="IT">IT</option>
                    <option value="Management">Management</option>
                    <option value="Finance">Finance</option>
                </select>
            </div>

            <div class="formgroup">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="password field-long" value="<?= $pass ?>">
                <small id=" pErr" class="required"><?php echo $pErr; ?></small>

                <ul id="message">
                    <li><b>Password must contain the following:</b></li>
                    <li id="symbol" class="invalid">A <b>Symbol</b></li>
                    <li id="letter" class="invalid">A <b>lowercase</b> letter</li>
                    <li id="capital" class="invalid">A <b>capital (uppercase)</b> letter</li>
                    <li id="number" class="invalid">A <b>number</b></li>
                    <li id="length" class="invalid">Minimum <b>15 characters</b></li>
                </ul>
            </div>

            <button type="submit" class="Submit" id="submit" name="submit">Sign Up</button>

        </form>

    </div>
    <script src="assets\Js\script.js"></script>
</body>

</html>