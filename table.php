<!DOCTYPE html>
<html>
<link rel="stylesheet" href="assets/form-basic.css">
<body>
<div class="col span_1_of_2">
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

	$sql = "SELECT AI, TYPE, NAME, SERVICE, DATA, LNAME, TITLE FROM my_posts";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    echo "<table><tr><th>#</th><th>Name</th><th>Service</th><th>Queued at</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["AI"]."</td><td>".$row["TITLE"]." ".$row["NAME"]." ".$row["LNAME"]."</td><td>".$row["SERVICE"]."</td><td>".$row["DATA"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
	?>  
</div>
</body>
</html>