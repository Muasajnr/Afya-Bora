<?php
// Include your database connection details
require('../database/config.php');

// Check if the form data has been submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $id = $_POST['id'];
    $editTimeOut = $_POST['editTimeOut'];

    // Prepare an SQL statement to update the timeOut for the specified visitor ID
    $sql = "UPDATE visitors SET timeOut = ? WHERE id = ?";
    
    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, $sql);
    
    // Bind the parameters and execute the statement
    mysqli_stmt_bind_param($stmt, "si", $editTimeOut, $id);
    $result = mysqli_stmt_execute($stmt);
    
    // Check if the update was successful
    if ($result) {
        echo "Time Out updated successfully";
    } else {
        echo "Error updating Time Out: " . mysqli_error($conn);
    }

    // Close statement
    mysqli_stmt_close($stmt);
} else {
    // If the request method is not POST, return an error
    echo "Invalid request method";
}

// Close connection
mysqli_close($conn);
?>
