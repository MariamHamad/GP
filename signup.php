<?php include('header.html');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthcare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)  {
	echo "FAILED";
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO registration (firstName,lastName,email,birth,age,sex,bloodGroup,password)
VALUES ('".$_POST["fname"]."', '".$_POST["lname"]."', '".$_POST["email"]."', '".$_POST["dob"]."', '".$_POST["age"]."', '".$_POST["sex"]."','".$_POST["bldgroup"]."', '".$_POST["password"]."')";

if ($conn->query($sql) === TRUE) {
  echo "Welcome " . $_POST["fname"] .". It's our pleasure to guide you!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

	
$conn->close();

include('footer.html'); ?> 
