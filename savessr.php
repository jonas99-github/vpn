<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ssr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$a=$_GET['ssr'];

$sql2 = "INSERT INTO ssr_info(ssr_info) VALUES('$a')";

if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
  }
  
  $conn->close();

  header("location:index.php");

?>