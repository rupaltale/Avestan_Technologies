<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "avestan1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else 

// sql to create table
$sql = "CREATE TABLE contact_us (
fname VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
sub VARCHAR(20) NOT NULL,
msg VARCHAR(200)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table contact_us created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>