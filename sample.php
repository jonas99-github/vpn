<?php
header("refresh: 1;");
echo "<pre><strong>";
echo Shell_Exec('powershell -InputFormat none -ExecutionPolicy ByPass -NoProfile -Command "& { . \"C:\xampp\htdocs\vpn\test.ps1\"; }"');
echo "</strong></pre>";

?>