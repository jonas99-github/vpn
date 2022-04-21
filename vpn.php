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
<table class="table">
    <tr>
        <th>IP Address</th>
        <th>TCP</th>
        <th></th>
</tr>
<tr>
    <td>210.209.125.34</td>
    <td>
    <?php 
    $tcpRes = "True";
    $tcpstatus = Shell_Exec('powershell -InputFormat none -ExecutionPolicy ByPass -NoProfile -Command "& { . \"C:\xampp\htdocs\vpn\test.ps1\"; }"');
 echo $tcpstatus;
 $res = $tcpRes;
 $b="True";
 echo $res;

 if($tcpstatus == $b){
    echo "<strong style='color:green;'>Connected</strong>";    
    }
    else{
        echo "<strong style='color:red;'>Failed</strong>"; 
    }
  //  else{
      //  $tcpRes = "Failed";
  //  }
   
    ?>
    </td>
    <td><strong style="color:red;"></strong></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
</table>
</body>
</html>







