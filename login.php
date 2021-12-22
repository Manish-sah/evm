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
    <title>Login Form</title>
    <link rel="stylesheet" href="/css/register.css">
</head>

<body>
    <div class="main">

        <div class="headingWalaDiv">
            <h3>Login For voting </h3>
        </div>

        <div class="formWalaDiv">
            <form action="user_auth.php" method="post">
                <input name="name" type="text" placeholder="Enter your name" required>
                <input name="email" type="email" placeholder="Enter your Email" required>
                <input name="pass1" type="password" placeholder="Enter your password" required>
                <button name="submit" type="submit">Login</button>
                <a href="register.php">Not a member? Register now</a>

            </form>
        </div>

    </div>




</body>

</html>