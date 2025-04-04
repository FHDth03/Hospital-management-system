<?php
include 'Project1.php';

$appointmentid = $_GET['appointmentid'];
$csql = "SELECT * FROM appointments WHERE appointmentid = $appointmentid";

if ($conn->query($csql)) {
    $sql = "DELETE from appointments WHERE appointmentid = $appointmentid";
    $conn->query($sql);
}

header("Location:project3.php");
?>