<?php

$servername = "localhost";
$username = "myphpuser";
$password = "myDbadj5467765FGHD@#!";
$db = "myphpdb";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
