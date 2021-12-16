<?php
include_once "connection.php";



if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];

    $sql = "SELECT username, email,password FROM evm_table";

    $result = mysqli_query($connection, $sql);
    $check = false;

    // var_dump($result);


    if ($result)
        while ($row = $result->fetch_assoc()) {
            if ($row['username'] == $name && $row['email'] == $email && $row['password'] == $pass1) {
                $check = true;
                $welcome = $row['email'];
?>
            <script>
                alert("Welcome To  Online Voting System!");
            </script>

        <?php
                echo "Welcome <strong> $welcome </strong>";
            }
        }

    if (!$check) {
        ?>
        <script>
            alert("Incorrect Information!\nPlease Try Again");
            location.assign("login.html");
        </script>

<?php

    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVM </title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="heading">
        <h1>Welcome to Developer Election Zone</h1>
    </div>
    <div class="main">

        <div class="left">
            <div class="candidate"></div>
            <div class="candidate"></div>
            <div class="candidate"></div>
            <div class="candidate"></div>
            <div class="candidate"></div>
            <div class="candidate"></div>
            <div class="candidate"></div>
            <div class="candidate"></div>
        </div>

        <div class="right">
            <div class="right_div">
                <span class="light" id="lightId1"></span>
                <button id="btn1" value="1" class="btn" onclick="lightOn(this.id)">1</button>
            </div>


            <div class="right_div">
                <span class="light" id="lightId2"></span>
                <button id="btn2" value="2" class="btn" onclick="lightOn(this.id)">2</button>
            </div>


            <div class="right_div">
                <span class="light" id="lightId3"></span>
                <button id="btn3" value="3" class="btn" onclick="lightOn(this.id)">3</button>
            </div>

            <div class="right_div">
                <span class="light" id="lightId4"></span>
                <button id="btn4" value="4" class="btn" onclick="lightOn(this.id)">4</button>
            </div>

            <div class="right_div">
                <span class="light" id="lightId5"></span>
                <button id="btn5" value="5" class="btn" onclick="lightOn(this.id)">5</button>
            </div>

            <div class="right_div">
                <span class="light" id="lightId6"></span>
                <button id="btn6" value="6" class="btn" onclick="lightOn(this.id)">6</button>
            </div>

            <div class="right_div">
                <span class="light" id="lightId7"></span>
                <button id="btn7" value="7" class="btn" onclick="lightOn(this.id)">7</button>
            </div>

            <div class="right_div">
                <span class="light" id="lightId8"></span>
                <button id="btn8" value="8" class="btn" onclick="lightOn(this.id)">8</button>
            </div>

        </div>

    </div>
</body>

</html>

<script>
    let gana = new Audio("kerb.wav");


    function lightOn(e) {

        let number = document.getElementById(e);

        let generated_id = `lightId${parseInt(number.value)}`;
        number.disabled = true;

        let light = document.getElementById(generated_id);
        light.style.backgroundColor = "green";
        gana.play();


        setTimeout(() => {
            light.style.backgroundColor = "red";
            this.disabled = false;
        }, 5000);
    }
</script>