<!DOCTYPE html>
<head><title></title>
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
<h2>This is a table</h2>
<table class="table" style="margin-left:50px;width:400px;">
    <tr>
        <th>IP Address</th>
        <th>TCP</th>
        <th>UDP</th>
        
    </tr>
    <tr>
    <td>210.209.125.34</td>
    <td>
    <?php 
    $tcpRes = "true";
    $tcpstatus = 'powershell -InputFormat none -ExecutionPolicy ByPass -NoProfile -Command "& { . \"C:\xampp\htdocs\vpn\test.ps1\"; }"';
    $result = shell_exec($tcpstatus);
  //echo json_encode($result);
  $a = True;
  echo "0: " .(boolval(0) ? 'true' : 'false') . "<br>";
  echo $result;
 
  /*
    if($result == True){
    echo "<strong style='color:green;'>Connected</strong>";    
    }
    else{
        echo "<strong style='color:red;'>Failed</strong>"; 
    }
    */
  //  else{
      //  $tcpRes = "Failed";
  //  }
   
    ?>
    </td>
</tr>
<tr>
<td>123.1.189.100</td>
    <td>
    <?php 
    $tcpRes2 = "True";
    $tcpstatus2 = Shell_Exec('powershell -InputFormat none -ExecutionPolicy ByPass -NoProfile -Command "& { . \"C:\xampp\htdocs\vpn\test2.ps1\"; }"');
 echo "<strong style='color:green;'>" . $tcpstatus2 . "</strong>";
 ?>
 </td>
  </tr>
</table>
</body>
</html>







