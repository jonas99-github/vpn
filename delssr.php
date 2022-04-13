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

$sql1 = "DELETE FROM ssr_info";

if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
  }

  $conn->close();

  header("location:index.php");

?>