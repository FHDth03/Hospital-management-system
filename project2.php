<?php
include 'Project1.php';

$sql = "SELECT * FROM patients";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Patients</title>
        <script src="patients.js"></script>
        <link rel="stylesheet" href="project.css">
    </head>
    <body>
        <header>
            <h1>Patient Management</h1>
            <nav>
                <ul>
                    <li><a href="project.php">Home</a></li>
                    <li><a href="project2.php">Patients</a></li>
                    <li><a href="project3.php">Appointments</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <h2>List of Patients</h2>
            <table>
                <tr>
                    <th>Patient ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>Delete or Update</th>
                </tr>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $patientid = $row["patientid"];
                        $name = $row["name"];
                        $age = $row["age"];
                        $phone_number = $row["phone_number"];
                        $gender = $row["gender"];
                        echo "<tr>";
                        echo "<td>" . $patientid . "</td>";
                        echo "<td>" . $name . "</td>";
                        echo "<td>" . $age . "</td>";
                        echo "<td>" . $phone_number . "</td>";
                        echo "<td>" . $gender . "</td>";
                        if ($gender === "Male") {
                            $index = 1;
                        } else $index = 2;
                        echo "<td>
                        <button onclick= location='delete_patient.php?patientid=$patientid'; class='delete'>Delete</button> 
                        <button onclick='updatePatient($patientid, \"$name\", $age,\"$phone_number\", $index);' class='update'>Update</button>
                        </td>";
                    }
                    $conn->close();
                }  
                ?>
            </table>
            
            <form name="new" action="insert & update_patients.php" onsubmit="return validatePatientForm()" method="post">

            <div class="container">
                <h1 style="text-align: center;">Add new patient</h1>
                <input type="hidden" id="patientid" name="patientid" value="" />
                <label>Name: </label> <input type="text" id="name" name="name"><br><br>
                <label>Age: </label><input type="number" id="age" name="age"><br><br>
                <label>Phone Number: </label><input type="tel" id="phone_number" name="phone_number" pattern="[0-9]{10}" oninvalid="alert('Please enter 10 numbers only')"><br><br>
                <label>Gender:</label> <select id="gender" name="gender">
                    <option selected>Select</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
                <br><br>
                <input type="submit" value="Submit">
                <input type="reset" value="Clear">
            </div>
            </form>
        </main>
        <footer>
            <p>&copy; 2024 Hospital Management System</p>
        </footer>
    </body>
</html>