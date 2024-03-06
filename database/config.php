<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "afyabora";

        // Create a database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }
?>
