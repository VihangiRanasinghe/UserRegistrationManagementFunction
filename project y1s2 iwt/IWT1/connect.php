<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="registration";//make a database and write the database name 
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>