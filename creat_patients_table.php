<?php
include 'project1.php';

$sql = "CREATE TABLE patients (
  patientid INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  age INT(3),
  phone_number VARCHAR (10),
  gender VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table patients created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
?>