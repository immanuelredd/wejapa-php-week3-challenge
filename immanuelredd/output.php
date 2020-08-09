    <?php

    
        session_start();
         
        $name = $_SESSION["lastname"]." ".$_SESSION["firstname"];
        $email =  $_SESSION["email"];
        $dob = $_SESSION["dob"]; 
        $color =   $_SESSION["color"];
        $gender = $_SESSION["gender"];
        $departs = $_SESSION["departments"];

    
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP session</title>

        <style>
        .wrapper {
            background: black;
            color: white;
            text-align: center;
            width: 50%;
            display: block;
            padding: 10px !important;
            margin: 10px auto;
        }

        ul {
            list-style: none;
            margin-top: -5px;
        }

        li {
            margin: 7px;
        }
        </style>
    </head>

    <body <?php echo "body style='background:$color';"?>>


        <div class="wrapper">

            <h1>You Have Signed Up Successfully!</h1>

            <p><?php  echo "Welcome ".$name; ?></p>
            <h2><u> <?php echo "Below are your Details" ?></u></h1>
                <ul>
                    <li><?php echo "<b>Email:</b> ".$email; ?></li>
                    <li><?php echo "<b>DOB:</b> ".$dob; ?></li>
                    <li><?php echo "<b>Gender:</b> ".$gender; ?></li>
                    <li><?php echo "<b> Email:</b> ".$email; ?></li>
                    <li><?php echo "<b>Department:</b> ".$departs; ?></li>
                </ul>

                <h3><?php  echo "Thank you for Signing Up ! ".$name; ?> </h3>

        </div>
    </body>

    </html>