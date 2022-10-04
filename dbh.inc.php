<?php
   $serverName = "sql204.epizy.com";
   $dbUsername = "epiz_28733465";
   $dbPassword = "h4K9jtJJGBSAXgk"; 
   $dbName = "epiz_28733465_datatharun01";

   $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

   if (!$conn) {
   
      die("connection failed".mysqli_connect_error());

   }