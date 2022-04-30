<!DOCTYPE html>
<head><title>VPN</title>
<link rel='icon' href='ssr.png'>

<link rel='stylesheet' href='style.css'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- Latest compiled and minified CSS -->
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>

<!-- jQuery library -->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

<!-- Latest compiled JavaScript -->
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
<?php 
header("refresh: 1;"); ?>
</head>
<body>
<h3 style="text-align:center;"><a href="index.php">SSR Links</a><a href="devices.php">  Networks</a></h3>
<h2>VPN</h2><br>

<div style="margin-left:50px;">
  <form action="saveIp.php" method="POST">
    <label></label>
    <input type="text" name="" id="" required placeholder="IP Address">
    <label></label>
    <input type="text" name="" id="" required placeholder="Port number">
    <input type="submit" class="btn btn-primary" name="addIp" value="ADD">
</form>
</div>
<br><br><br>
<table class="table" style="margin-left:50px;width:800px;">
    <tr>
        <th>IP Address</th>
        <th>PORT</th>
        <th>TCP</th>
        <th>UDP</th>
        <th>LATENCY</th>
        <th>Actions</th>
    </tr>
    <tr>
    <td>210.209.125.34</td>
    <td>3389</td>
    <td>
    <?php 
    $tcpRes = "True";
    $tcpstatus = 'powershell -InputFormat none -ExecutionPolicy ByPass -NoProfile -Command "& { . \"C:\xampp\htdocs\vpn\test.ps1\"; }"';
    $result = " this is a result " . shell_exec($tcpstatus);

  if(strpos($result,  $tcpRes)){
    echo "<strong style='color:green;'>Connected</strong>";
  }
  else{
    echo "<strong style='color:red;'>Failed</strong>";
  }
    ?>
    </td>
    <td></td>
    <td>
      <?php echo exec("ping -n 1 210.209.125.34"); ?>
</td>
<td><button class="btn btn-success">Edit</button><button class="btn btn-danger">Delete</button></td>

</tr>
<tr>
<td>103.42.58.64</td>
<td>3389</td>
    <td>
    <?php 

    $tcpstatus2 = 'powershell -InputFormat none -ExecutionPolicy ByPass -NoProfile -Command "& { . \"C:\xampp\htdocs\vpn\test2.ps1\"; }"';
    $result2 = " this is a result " . shell_exec($tcpstatus2) ;

 if(strpos($result2,  $tcpRes)){
  echo "<strong style='color:green;'>Connected</strong>";
}
else{
  echo "<strong style='color:red;'>Failed</strong>";
}
 ?>
 </td>
 <td></td>
 <td>
    <?php echo exec("ping -n 1 103.42.58.64"); ?>
</td>
<td><button class="btn btn-success">Edit</button><button class="btn btn-danger">Delete</button></td>
  </tr>
    
  <tr>
<td>123.1.189.100</td>
<td>3389</td>
    <td>
    <?php 

    $tcpstatus3 = 'powershell -InputFormat none -ExecutionPolicy ByPass -NoProfile -Command "& { . \"C:\xampp\htdocs\vpn\test3.ps1\"; }"';
    $result3 = " this is a result " . shell_exec($tcpstatus3) ;

 if(strpos($result3,  $tcpRes)){
  echo "<strong style='color:green;'>Connected</strong>";
}
else{
  echo "<strong style='color:red;'>Failed</strong>";
}
 ?>
 </td>
 <td></td>
 <td>
    <?php echo exec("ping -n 1 123.1.189.100"); ?>
</td>
<td><button class="btn btn-success">Edit</button><button class="btn btn-danger">Delete</button></td>

  </tr>

</table>

</body>
</html>







