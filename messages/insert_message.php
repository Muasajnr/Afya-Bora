<?php
require_once('../database/config.php');
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $senderDepartment = $_POST['senderDepartment'];
    $senderName = $_POST['senderName'];
    $receiverName = $_POST['receiverName'];
    $messageContent = $_POST['messageContent'];

    

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert message into database
    $sql = "INSERT INTO messages (department, sender_name, receiver_name, message) 
            VALUES ('$senderDepartment', '$senderName', '$receiverName', '$messageContent')";

    if (mysqli_query($conn, $sql)) {
        echo "Message send successfully";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
} else {
    echo "Invalid request method";
}
?>
