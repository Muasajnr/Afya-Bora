<?php
// Include your database connection details
require('../database/config.php');

// Check if the form data is received and if 'id' is set
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    // Retrieve data from the POST request
    $fullName = isset($_POST['editFullName']) ? $_POST['editFullName'] : '';
    $position = isset($_POST['editPosition']) ? $_POST['editPosition'] : '';
    $contact = isset($_POST['editContact']) ? $_POST['editContact'] : '';
    $idNumber = isset($_POST['editIdNumber']) ? $_POST['editIdNumber'] : '';
    $attendPurpose = isset($_POST['editAttendPurpose']) ? $_POST['editAttendPurpose'] : '';
    $paymentMethod = isset($_POST['editPaymentMethod']) ? $_POST['editPaymentMethod'] : '';
    $age = isset($_POST['editAge']) ? $_POST['editAge'] : '';
    $role = isset($_POST['editRole']) ? $_POST['editRole'] : '';
    $visitPurpose = isset($_POST['editVisitPurpose']) ? $_POST['editVisitPurpose'] : '';
    $patientVisitedName = isset($_POST['editPatientVisitedName']) ? $_POST['editPatientVisitedName'] : '';
    $relationship = isset($_POST['editRelationship']) ? $_POST['editRelationship'] : '';
    $timeIn = isset($_POST['editTimeIn']) ? $_POST['editTimeIn'] : '';
    $timeOut = isset($_POST['editTimeOut']) ? $_POST['editTimeOut'] : '';

    // Use prepared statements to prevent SQL injection
    $sql = "UPDATE visitors SET 
            UPDATE visitors SET 
            fullname = ?, 
            position = ?, 
            contact = ?, 
            idNumber = ?, 
            attendPurpose = ?, 
            paymentMethod = ?, 
            age = ?, 
            role = ?, 
            visitPurpose = ?, 
            patientVisitedName = ?, 
            relationship = ?, 
            timeIn = ?, 
            timeOut = ?
            WHERE id = LAST_INSERT_ID() ";

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "sssssssssssssi", $fullName, $position, $contact, $idNumber, $attendPurpose, $paymentMethod, $age, $role, $visitPurpose, $patientVisitedName, $relationship, $timeIn, $timeOut, $id);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo 'Record updated successfully';
    } else {
        echo 'Error updating record: ' . mysqli_error($conn);
    }

    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    echo 'Invalid request';
}
?>
