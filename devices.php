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
    background-color:#DCDCDC;
}
</style>
</head>
<body>
<h3 style="text-align:center;"><a href="index.php">SSR Links</a><a href="devices.php">  Networks</a></h3><br>
<h2>PING</h2>

<div class='testdiv'>
<?php

header("refresh: 1;");
echo "ACCTG-SERVER";

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
    echo "Computer is <strong>ONLINE</strong>";
}
else {
    echo "Computer is <strong style='color:red' >OFFLINE</strong>";
}
echo "</pre>";

echo "<br>GOOGLE.COM <br><br><br><pre>";
$command3 = "ping -n 1 google.com";
$ping3 = shell_exec($command3);;
   
if(strpos($ping3, $good)){
    echo "This computer has <strong>INTERNET ACCESS.</strong>";
}
else {
    echo "<strong style='color:red' >Failed to connect to GOOGLE.COM.</strong>";
}
echo "</pre>";

echo "<br>Default Gateway <br><br><br><pre>";
$command4 = "ping -n 1 172.31.1.1";
$ping4 = shell_exec($command4);
   
if(strpos($ping4, $good)){
    echo "Computer is <strong>ONLINE</strong>";
}
else {
    echo "Computer is <strong style='color:red' >OFFLINE</strong>";
}
echo "</pre>";
?>

</body>
</html>