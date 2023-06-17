<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "itech_zone";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // $conn = new mysqli("localhost", "root", "", "first");

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
?>