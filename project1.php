<?php

$servername = "localhost";
$username = "hospital"; 
$password = "hospital123"; 
$dbname = "hospital_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}   
   
?>