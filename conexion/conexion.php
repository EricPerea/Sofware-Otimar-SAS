<?php
$host = "localhost"; // MySQL server hostname (usually "localhost" on XAMPP)
$user = "root"; // MySQL username (default is "root" on XAMPP)
$password = ""; // MySQL password (default is empty on XAMPP)
$database = "crc_otimar_sas"; // Name of the database you created

// Create a connection
$conn = new mysqli($host, $user, $password, $database); 

/*/ Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful
echo "Connected to MySQL successfully";

// Close the connection when you're done
$conn->close();
*/
?>