<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "artist_portfolio";

    $conn = new mysqli($hostname,$username,$password,$database);

    if ($conn->connect_error) {
        die('Sorry, connection failed! : ' . $conn->connect_error);
    }
?>