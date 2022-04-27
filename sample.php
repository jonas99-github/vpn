<?php
//the error
$tcpstatus2 = Shell_Exec('powershell -InputFormat none -ExecutionPolicy ByPass -NoProfile -Command "& { . \"C:\xampp\htdocs\vpn\test2.ps1\"; }"');
$result2 = " this is a result " . shell_exec($tcpstatus2) ;
echo $result2;


?>