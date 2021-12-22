<?php
session_start();

if(isset($_SESSION['username']))
{
    header("location:index.php");
}


include "connection.php";


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['mobile'];
    $adhar = $_POST['adhar'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    $check = false;

    $sql = "SELECT email, adhar FROM evm_table";

    $result = mysqli_query($connection, $sql);
    // var_dump($result);

    // Associative array

    while ($row = $result->fetch_assoc()) {
        if ($row['email'] == $email && $row['adhar'] == $adhar) {
            $check = true;
    ?>
            <script>
                alert("Already Register! \nTry Again...");
                location.assign("login.php");
            </script>

        <?php


        }
    }




    if ($pass1 == $pass2 && !($check)) {
        $sql = "INSERT INTO evm_table( username, email, phone, adhar, password) VALUES ('$name','$email','$phone','$adhar','$pass1')";

        $result = mysqli_query($connection, $sql);

        if ($result) {
        ?>

            <script>
                alert("Congratulations!\nYour Registration Successfully completed.");
                location.assign("login.php");
            </script>

        <?php
        } else {
        ?>

            <script>
                location.assign("register.php");
            </script>

        <?php

        }
    } else {
        ?>

        <script>
            location.assign("register.php");
        </script>

<?php

    }
}


?>