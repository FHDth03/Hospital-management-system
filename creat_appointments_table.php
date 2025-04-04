<?php
include 'project1.php';

$sql = "CREATE TABLE appointments (
  appointmentid INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  patientid INT(10) UNSIGNED,
  doctor VARCHAR(50) NOT NULL,
  date DATE,
  time TIME,
  status VARCHAR(30),
  FOREIGN KEY (patientid) REFERENCES patients(patientid)
)"; 
    

if ($conn->query($sql) === TRUE) {
  echo "Table appointments created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
?>