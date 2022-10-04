<?php
   if(isset($_POST["submit"])) {
       $name = $_POST["name"];
       $email = $_POST["email"]; 
       $username = $_POST["uid"];
       $pwd= $_POST["password"];
       $pwdRepeat = $_POST["pwdrepeat"];
   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';
   
   if(emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== FALSE ){
       header("location:signup.php?error=emptyInput");
       exit();
    }
    if (invalidUid($username)!== FALSE){
        header("location:signup.php?error=invalidUid");
        exit();

    }
   if(invalidEmail($email) !== FALSE ){
    header("location:signup.php?error=invalidEmail");
    exit();
     }
     
    if(pwdMatch($pwd, $pwdRepeat) !== FALSE ){
    header("location:signup.php?error=passwordsdontMatch");
    exit();
     }
    if(uidExists($conn, $username,$email) !== FALSE ){
    header("location:signup.php?error=usernameTaken");
    exit();
    }
    createUser($conn, $name, $email, $username, $pwd);
   
     }
    else{
     header("location:file.php");
     exit();
     }