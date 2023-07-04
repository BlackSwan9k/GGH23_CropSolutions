<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "crop";

    $conn = mysqli_connect($server, $username, $password, $database);
    $conni = new mysqli($server, $username, $password, $database);
    if (!$conn || !$conni) {
        die("Error" . mysqli_connect_error());
    }
?>