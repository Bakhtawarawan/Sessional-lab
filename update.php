<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "web_technologies";
// Create connection
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE studentInfo SET name='Bakhtawar' WHERE MobileNo=03335708018";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>