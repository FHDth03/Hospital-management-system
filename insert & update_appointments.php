<?php
include 'project1.php';

$appointmentid = $_POST['appointmentid'];
$patientid = $_POST['patientid'];
$doctor = $_POST['doctor'];
$date = $_POST['date'];
$time = $_POST['time'];
$status = $_POST['status'];

if ($appointmentid) {
    // Update existing appointment
    $sql = "UPDATE appointments SET patientid='$patientid', doctor='$doctor', date='$date', time='$time', status='$status' WHERE appointmentid='$appointmentid'";
} else {
    // Insert new appointment
    $sql = "INSERT INTO appointments (patientid, doctor, date, time, status) VALUES ('$patientid', '$doctor', '$date', '$time', '$status')";
}

if ($conn->query($sql) === TRUE) {
    header("Location: project3.php");
} else 
    echo '<script>alert("The patient ID is not exist. Please enter an exist patient ID");window.location.href = "form.html";</script>';

?>