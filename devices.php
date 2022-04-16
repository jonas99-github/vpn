<!DOCTYPE html>
<head><title>Networks</title>
<link rel='icon' href='ssr.png'>
<link rel='stylesheet' href='style.css'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- Latest compiled and minified CSS -->
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>

<!-- jQuery library -->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

<!-- Latest compiled JavaScript -->
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
<style>
body{
    
}
</style>
</head>
<body>
<h3 style="text-align:center;"><a href="index.php">SSR Links</a><a href="devices.php">  Networks</a></h3>
<h2>PING</h2>

<div class='testdiv'>
<?php

header("refresh: 1;");
echo "ACCOUNTING SHARED";

//$websites = array("google.com", "172.31.1.132", "8.8.8.8");
$good = "Received = 1";
//$successValue;

//echo "<h1>Site Status ".date("h:i:s"). "</h1>";
/*
foreach ($websites as $url){
    unset($result);
    $successValue = "DOWN";
    system("ping -n 1 '$url'", $result);
    foreach($result as $line){
        if(strpos($line,$good) == TRUE){
            $successValue = "UP";
        }
    }
    echo "<strong>Address: ".$url." </strong>";
        if($successValue == "UP") {
            echo " Site is ".$successValue;
        } else {
            echo "Site is ".$successValue;
        }
        echo "<br><br>";
}*/
echo "<br><br><br><pre>";

$command = "ping -n 1 172.31.1.138";

$ping = shell_exec($command);;
   
if(strpos($ping, $good)){
    echo "<strong style='color:green;'>CONNECTED</strong> 
    ";
}
else {
    echo "<strong style='color:red' >OFFLINE</strong>";
    echo "<script type='text/javascript'>
              $(window).on('load', function() {
              $('#voiceModal').modal('show');
              });
            </script>";
}

echo "</pre>";
echo "<br>Google(172.217.27.14) <br><br><br><pre>";
$command3 = "ping -n 1 google.com";
$ping3 = shell_exec($command3);
   
if(strpos($ping3, $good)){
    echo "<strong style='color:green;'>CONNECTED</strong>";
}
else {
    echo "<strong style='color:red;' >Failed to connect to GOOGLE.COM.</strong>";
    echo "<script type='text/javascript'>
              $(window).on('load', function() {
              $('#voiceModal').modal('show');
              });
            </script>";
}
echo "</pre>";

echo "<br>Default Gateway <br><br><br><pre>";
$command4 = "ping -n 1 172.31.1.1";
$ping4 = shell_exec($command4);
   
if(strpos($ping4, $good)){
    echo "<strong style='color:green;'>CONNECTED</strong>";
}
else {
    echo "Computer is <strong style='color:red' >OFFLINE</strong>";
    echo "<script type='text/javascript'>
              $(window).on('load', function() {
              $('#voiceModal').modal('show');
              });
            </script>";
}
echo "</pre>";

echo "<br>MAKATI-PC<br><br><br><pre>";
$command5 = "ping -n 1 172.31.1.184";
$ping5 = shell_exec($command5);
   
if(strpos($ping5, $good)){
    echo "<strong style='color:green;'>CONNECTED</strong>";
}
else {
    echo "<strong style='color:red;'>OFFLINE</strong>";
    echo "<script type='text/javascript'>
              $(window).on('load', function() {
              $('#voiceModal').modal('show');
              });
            </script>";
}
echo "</pre>";
/*https://youtu.be/HS95229Z0Yw */

?>

<!-- Modal -->
<div class="modal fade" id="voiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color:Black;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="text-align:center;">
      <strong style="color: red;">Connection Failed</strong><br>
      

      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<div class='footer'><div style='margin-top:6px; font-size: 11px;'>Gemotech Inc. © 2022</div></div>
</body>
</html>

