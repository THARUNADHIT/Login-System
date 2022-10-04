<?php
  session_start();
  ?>

<!DOCTYPE html>
<html>
<head>
    <title>Project1</title>
    <link rel="stylesheet" href="File.css">
</head>
<body>
    <div id="bar"></div>
    <div id="container">
    <div id="header">
        <img src="Logo.jpg">
    <ul>
       <li><a href="#">Home</a></li>
       <li><a href="#">About</a></li>
       <li><a href="#">Service</a></li>
       <li><a href="#">Gallery</a></li>
       <?php
       if(isset($_SESSION["userUid"])){
           echo   "<li><a href='profile.php'>Profile page</a></li>";
           echo   "<li><a href='logout.php'>Log out</a></li>" ;
       }
       else{
           echo "<li><a href='signup.php'>Sign up</a></li>";
           echo  "<li><a href='login.php'>Log in</a></li>";
       }
       ?>
    </ul>
    </div>
    <img src="robotics.jpg">   
    </div>   
   </div>
