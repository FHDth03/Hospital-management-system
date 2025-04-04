<?php
include 'Project1.php';

$patientid = $_GET['patientid'];

// Check for foreign key references in the appointments table
$checksql = "SELECT * FROM appointments WHERE patientid = $patientid";
$result = $conn->query($checksql);

if ($result->num_rows > 0) {
    echo "<script>
    alert('Cannot delete this patient. There are associated appointments.');
    window.location.href = 'project2.php';
    </script>";
} else {
    $sql = "DELETE FROM patients WHERE patientid = $patientid";
    if ($conn->query($sql) === TRUE) {
        header("Location: project2.php");
    } else {
        echo "Error deleting patient: " . $conn->error;
    }
}
$conn->close();
?>