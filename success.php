<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
}


if (isset($_POST['submit'])) {
    
    // $user = $_POST['voting_btn'];

    echo "this is user vote ".$user;


    // $check = false;

    // $sql = "SELECT user, vote_on FROM evm_vate";

    // $result = mysqli_query($connection, $sql);
    
    // while ($row = $result->fetch_assoc()) {
    //     if ($row['user'] == $user) {
    //         $check = true;
    // ?>
    //         <script>
    //             alert("Already Register! \nTry Again...");
    //         </script>
    //     <?php

    //     }
    // }




    if (!($check)) {
        $sql = "INSERT INTO evm_vote( user, vote_on) VALUES ('$user','5')";

        $result = mysqli_query($connection, $sql);

        if ($result) {
        ?>

            <script>
                alert("Congratulations!\nYour Voting Successfully completed.");
            </script>

        <?php
        } else {
       
            echo "some weting wrong";

        }
    } else {
        echo "you are under age ";

    }
}



?>