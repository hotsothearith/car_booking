<?php
// db_conn.php
$servername = "localhost"; // Update if using a different host
$username = "root";        // Update with your DB username
$password = "";            // Update with your DB password
$dbname = "carrent_db"; // Update with your DB name

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Test connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>