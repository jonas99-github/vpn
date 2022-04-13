<?php
echo 
"<!DOCTYPE html>
<head><title>SSR</title>
<link rel='icon' href='ssr.png'>
<link rel='stylesheet' href='style.css'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- Latest compiled and minified CSS -->
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>

<!-- jQuery library -->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

<!-- Latest compiled JavaScript -->
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
</head>
<body>

<div class='navbar'>
<ul>
  <!-- <li><a href='#link'>Deploy</a></li> -->
  <li><a href='devices.php'>Networks</a></li>
 </ul>
 </div>

<br><br><br>
 <div class='popup' onclick='myFunction()' style='margin-left:20px;'><button class='btn btn-info'>How to access?</button>
 <span class='popuptext' id='myPopup'>Run XAMPP. Enter into the search bar: 172.31.1.169:3030/vpn.<br>If cannot access, add 172.31.1.169 to the Firewall.</span>
</div>

<div class='ssr'>
 <div class='ssrcopy'>
<h1>SSR LINK:</h1>

<form action='savessr.php' method='GET'>
<input type='text' name='ip' placeholder='IP Address' required><br><br>
<textarea id='ssr' name='ssr' rows='4' cols='50' placeholder='SSR link' required></textarea><br>
<input type='submit' name='submit' value='submit' class='btn btn-primary'>
</form><br>

<form action='delssr.php'>
<input type='submit' name='submit' value='clear ALL' class='btn btn-danger'>
</form>
</div>
</div>

<div class='footer'><div style='margin-top:6px;'>Gemotech Inc. © 2022</div></div>
<br><br>
</body>
</html>";

include "connection.php"; //Database connection

$sql = "SELECT * FROM ssr_info"; 
$result = $conn->query($sql);

?>
<div class='ssr_body'>

<table class="table" style="width: 55%;"> 
  <tr>
    <th style=" text-align:center;">IP Address</th>
    <th style=" text-align:center;">Description</th>
    <th style=" text-align:center;">Action</th>
</tr>
  <?php
if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {

      $a = $row['ssr_id'];

      echo "<tr><td>" . $row["ssr_id"] . "</td><td>" . $row["ssr_info"] . "</td><td style='text-align:center;'><button class='btn btn-primary'>Copy</button><a href='delrow.php?d=$a' class='btn btn-danger'>Delete</a></td></tr>";
    }
  } else {
    echo "0 results";
  }
  ?>
  </div>
  
  <!-- <div style="float:right;"><img src="tree.png" alt="tree" height="200" width="200"></div> -->

  <?php
  $conn->close();
?>

<script>
  var ssrdel = document.getElementById('delssr');
function delfn(ssrdel) {
  window.location.href = "delrow.php?a=";
}

// When the user clicks on <div>, open the popup
function myFunction() {
  
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>









