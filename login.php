
<section id="login-form">
  <h2>Log in</h2>
  <form action="login.inc.php" method="post">
    <input type="text" name="name" placeholder="Username/email ...."><br>
    <input type="password" name="pwd" placeholder="password...."><br>   
    <button type="submit" name="submit">Log In</button>
    </form>
    <?php
    if(isset($_GET["error"])){
          if($_GET["error"]=="emptyInput"){
            echo "<p>Fill all the options</p>";
          }
          else if($_GET["error"]=="wrongLogin"){
            echo "<p>Incorrect Login</p>";
          }
          else if($_GET["error"]=="invalidEmail"){
            echo "<p>Enter proper Email</p>";
          }
          else if($_GET["error"]=="passwordsdontMatch"){
            echo "<p>Type Correct password</p>";
          }
          else if($_GET["error"]=="stmtfailed"){
            echo "<p>something went wrong try again!</p>";
          }
          else if($_GET["error"]=="usernametaken"){
            echo "<p>Username already taken</p>";
          }
          else if($_GET["error"]=="none"){
            echo "<p>You have signed up</p>";
          }

    }
    ?>
     
  </section>

