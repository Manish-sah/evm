<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
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
        <span class="brand">Election Commision of India</span>

        <span class="user_info">
            <span id="user_name"><?php echo $_SESSION['username'] ?></span>
            <a href="logout.php" class="logout">Log Out</a>
        </span>

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
        <form action="success.php" method="post">

        <input type="text" style="display: none;">
            <div class="right">
                <div class="right_div">
                    <span class="light" id="lightId1"></span>
                    <button id="btn1" value="1" name="submit" type="submit" class="btn" onclick="lightOn(this.id)">1</button>
                </div>


                <div class="right_div">
                    <span class="light" id="lightId2"></span>
                    <button id="btn2" value="2" name="submit" type="submit" class="btn" onclick="lightOn(this.id)">2</button>
                </div>

                <div class="right_div">
                    <span class="light" id="lightId3"></span>
                    <button id="btn3" value="3" name="submit" type="submit" class="btn" onclick="lightOn(this.id)">3</button>
                </div>

                <div class="right_div">
                    <span class="light" id="lightId4"></span>
                    <button id="btn4" value="4" name="submit" type="submit" class="btn" onclick="lightOn(this.id)">4</button>
                </div>

                <div class="right_div">
                    <span class="light" id="lightId5"></span>
                    <button id="btn5" value="5" name="submit" type="submit" class="btn" onclick="lightOn(this.id)">5</button>
                </div>

                <div class="right_div">
                    <span class="light" id="lightId6"></span>
                    <button id="btn6" value="6" name="submit" type="submit" class="btn" onclick="lightOn(this.id)">6</button>
                </div>

                <div class="right_div">
                    <span class="light" id="lightId7"></span>
                    <button id="btn7" value="7" name="submit" type="submit" class="btn" onclick="lightOn(this.id)">7</button>
                </div>

                <div class="right_div">
                    <span class="light" id="lightId8"></span>
                    <button id="btn8" value="8" name="submit" type="submit" class="btn" onclick="lightOn(this.id)">8</button>
                </div>
        </form>
    </div>

    </div>

    <footer>
        <p> &copy; All right Reserved ECI 2022 <br> Developed by <a target="blank" href="http://panditprogrammer.com">PanditProgrammer.com</a> </p>
    </footer>

</body>

</html>

<script>
    let gana = new Audio("src/kerb.wav");

    function lightOn(e) {

        let number = document.getElementById(e);

        let generated_id = `lightId${parseInt(number.value)}`;

        let light = document.getElementById(generated_id);
        light.style.backgroundColor = "green";
        gana.play();

        for (let i = 1; i < 9; i++) {
            document.getElementById(`btn${i}`).disabled = true;
        }



    }
</script>