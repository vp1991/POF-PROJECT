<?php
//include_once "header.php";
?>
    <link rel="stylesheet" href="css/style.css">
   <section class="signup-form"> 
    <div>
    <h2>Sign Up</h2>
    <form  action="includes/signup.inc.php" method="POST">
        <input type="text" name="name" placeholder="Full Name..."><br><br>
        <input type="text" name="email" placeholder="Email..."><br><br>
        <input type="text" name="uid" placeholder="Username..."><br><br>
        <input type="password" name="pwd" placeholder="Password..."><br><br>
        <input type="password" name="pwdrepeat" placeholder="Repaeat Password..."><br><br>
        <button type="submit" name="submit">Sign Up</button><br><br>
    </form>
    <?php
    if(isset($_GET["error"]))
    {
        if($_GET["error"] == "emptyinput")
        {
            echo "<p style=color:red> Fill in all fields!</p>";
        }
        else if($_GET["error"] == "invaliduid")
        {
            echo "<p style=color:red> Choose a proper username! </p>";
        }

        else if($_GET["error"] == "invalidemail")
        {
            echo "<p style=color:red> Choose a proper Email! </p>";
        }
        else if($_GET["error"] == "passwordsdonotmatch")
        {
            echo "<p style=color:red> Password do not match! </p>";
        }
        else if($_GET["error"] == "usernametaken")
        {
            echo "<p style=color:red>Username is already taken! </p>";
        }
        else if($_GET["error"] == "none")
        {
            echo "<p style=color:green;>You have signed Up! </p>";
        }
    }
   ?>
  