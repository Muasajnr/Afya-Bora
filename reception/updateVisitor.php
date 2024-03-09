<?php
// Include your database connection details
require('../database/config.php');

// Check if the form data is received
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from the POST request
    $id = $_POST['id'];
    $fullName = $_POST['fullName'];
    $position = $_POST['position'];
    $contact = $_POST['contact'];
    $idNumber = $_POST['idNumber'];
    $attendPurpose = $_POST['attendPurpose'];
    $paymentMethod = $_POST['paymentMethod'];
    $age = $_POST['age'];
    $role = $_POST['role'];
    $visitPurpose = $_POST['visitPurpose'];
    $patientVisitedName = $_POST['patientVisitedName'];
    $relationship = $_POST['relationship'];
    $timeIn = $_POST['timeIn'];
    $timeOut = $_POST['timeOut'];

    // Perform the database update
    $sql = "UPDATE visitors SET 
            fullname = '$fullName', 
            position = '$position', 
            contact = '$contact', 
            idNumber = '$idNumber', 
            attendPurpose = '$attendPurpose', 
            paymentMethod = '$paymentMethod', 
            age = '$age', 
            role = '$role', 
            visitPurpose = '$visitPurpose', 
            patientVisitedName = '$patientVisitedName', 
            relationship = '$relationship', 
            timeIn = '$timeIn', 
            timeOut = '$timeOut' 
            WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo 'Record updated successfully';
    } else {
        echo 'Error updating record: ' . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    echo 'Invalid request';
}
?>
