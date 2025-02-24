<?php
$servername = "localhost"; // Replace with your database server name (e.g., 'localhost' or IP address)
$username = "root"; // Replace with your database username
$password = "UserRoot!"; // Replace with your database password
$dbname = "mydb"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo '<div class="message">Connection successful!</div>';
    // Optionally, you can redirect back to the HTML page or perform other tasks.
}

// Close connection
$conn->close();
?>
