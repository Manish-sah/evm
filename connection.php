<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "evm_db";

try {

    if (!$connection = mysqli_connect($server, $username, $password, $database)) {
        die("unable to connect!");
    }
} catch (Exception $e) {
    echo "info wrong";
}
