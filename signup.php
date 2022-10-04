
<section id="signup-form">
  <h2>Sign up</h2>
  <div class="signup-form-form">
  <form action="signup.inc.php" method="POST">
    <input type="text" name="name" placeholder="Full name...."><br>
    <input type="text" name="email" placeholder="Email...."><br>
    <input type="text" name="uid" placeholder="Username...."><br>
    <input type="password" name="password" placeholder="password...."><br>
    <input type="password" name="pwdrepeat" placeholder="Repeat password...."><br>   
    <button type="submit" name="submit">Sign up</button>
    </form>
    </div>
    <?php
    if(isset($_GET["error"])){
          if($_GET["error"]=="emptyInput"){
            echo "<p>Fill all the options</p>";
          }
          else if($_GET["error"]=="invalidUid"){
            echo "<p>Choose proper username</p>";
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

