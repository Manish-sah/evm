<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUP Form</title>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>


    <div class="main">
        <div class="headingWalaDiv">

            <h3>Registration for voting </h3>
        </div>


        <div class="formWalaDiv">



            <form action="save_db.php" method="post">

                <input name="name" type="text" placeholder="Enter your name" required>

                <input name="email" type="email" placeholder="Enter your Email" required>

                <input name="mobile" type="text" placeholder="Enter your Mobile number" required>

                <input name="adhar" type="text" placeholder="Enter your Aadhar number" required>

                <input name="pass1" type="password" placeholder="Enter your password" required>

                <input name="pass2" type="password" placeholder="Confirm your password" required>


                <button name="submit" type="submit">Submit</button>

                <button type="reset">reset</button>

                <a href="login.php">Already Register? Login now</a>

            </form>

        </div>




    </div>






</body>

</html>