<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smartlist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO my_posts (TYPE, NAME, LNAME, SERVICE, TITLE)
VALUES ('$_POST[type]', '$_POST[firstname]', '$_POST[lastname]', '$_POST[services]', '$_POST[title]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>