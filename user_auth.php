<?php
session_start();
include_once "connection.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];

    $sql = "SELECT username, email,password FROM evm_table";

    $result = mysqli_query($connection, $sql);
    $check = false;


    if ($result) {
        while ($row = $result->fetch_assoc()) {

            if ($row['username'] == $name && $row['email'] == $email && $row['password'] == $pass1) {
                $check = true;
                $welcome = $row['email'];
                $_SESSION['username'] = $welcome;

                break;
            }
        }
    }

    // if username not found in database 
    if ($check) {

        header('location:index.php');
    } else {

?>
        <script>
            alert("Incorrect Information!\nPlease Try Again");
            location.assign("login.php");
        </script>
<?php
    }
}
