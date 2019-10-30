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

// sql to delete a record
$sql = "DELETE FROM studentInfo WHERE stdMobileNo=03067094949";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>