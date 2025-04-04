<?php
include 'Project1.php';


$patientid = $_POST['patientid'];
$name = $_POST['name'];
$age = $_POST['age'];
$phone_number = $_POST['phone_number'];
$gender = $_POST['gender'];


if (!empty($patientid) && !empty($name) && !empty($age) && !empty($phone_number) && $gender != "Select") {
    $sql = "UPDATE patients SET name = '$name', age = '$age', phone_number = '$phone_number', gender = '$gender' WHERE patientid = $patientid";
    $conn->query($sql);
    header("Location:project2.php");
}
if (empty($patientid) && !empty($name) && !empty($age) && !empty($phone_number) && $gender != "Select") {
    $sql = "INSERT INTO patients (name, age, phone_number, gender) VALUES ('$name', '$age', '$phone_number' , '$gender')";
    $conn->query($sql);
    header("Location:project2.php");
} 
?>