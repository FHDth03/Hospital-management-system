<?php
include 'project1.php';

$sql = "SELECT * FROM appointments";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta doctor="viewport" content="width=device-width, initial-scale=1.0">
        <title>Appointments</title>
        <link rel="stylesheet" href="project.css">
    </head>
    <body>
        <header>
            <h1>Appointment Management</h1>
            <nav>
                <ul>
                    <li><a href="project.php">Home</a></li>
                    <li><a href="project2.php">Patients</a></li>
                    <li><a href="project3.php">Appointments</a></li>
                </ul>
            </nav>
        </header>
        
        <main>
            <h2>List of Appointments</h2>
            <table>
                <tr>
                    <th>Appointment ID</th>
                    <th>Patient ID</th>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>status</th>
                    <th>Delete or Update</th>
                </tr>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $appointmentid = $row["appointmentid"];
                        $patientid = $row["patientid"];
                        $doctor = $row["doctor"];
                        $date = $row["date"];
                        $time = $row["time"];
                        $status = $row["status"];
                        echo "<tr>";
                        echo "<td>" . $appointmentid . "</td>";
                        echo "<td>" . $patientid . "</td>";
                        echo "<td>" . $doctor . "</td>";
                        echo "<td>" . $date . "</td>";
                        echo "<td>" . $time . "</td>";
                        echo "<td>" . $status . "</td>";
                        echo "<td>
                        <button onclick=\"location.href='delete_appointments.php?appointmentid=$appointmentid';\" class='delete'>Delete</button>
                        <button onclick=\"location.href='form.html?appointmentid=$appointmentid&patientid=$patientid&doctor=" . urlencode($doctor) . "&date=$date&time=$time&status=" . urlencode($status) . "';\" class='update'>Update</button>
                        </td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
            
            <div class="container">
            <a href="form.html">
            <button type="button">Add new Appointment</button></a>
            </div>
        </main>

        <footer>
            <p>&copy; 2024 Hospital Mandatement System</p>
        </footer>
    </body>
</html>