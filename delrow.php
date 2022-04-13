<?php
include "connection.php";

echo "<img src='underc.jpg' style='display: block;
margin-left: auto;
margin-right: auto;
margin-top:200px;
width: 320; height:250;' alt=under construction>
";

$a = $_GET['d'];

$sql = "DELETE FROM ssr_info WHERE ssr_id=$a ";

if ($conn->query($sql) === TRUE) {
    echo "Deleted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

  header("location:index.php");

?>