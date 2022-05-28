<?php
//include_once "header.php";
?>
    <link rel="stylesheet" href="css/style.css">
   <section class="signup-form"> 
    <div>
    <h2>Log in</h2>
    <form  action="includes/login.inc.php" method="POST">
        <input type="text" name="uid" placeholder="UserName / Email..."><br><br>
        <input type="password" name="pwd" placeholder="Password..."><br><br>
       <button type="submit" name="submit">Log In</button><br><br>
    </form>

    <?php
    if(isset($_GET["error"]))
    {
        if($_GET["error"] == "emptyinput")
        {
            echo "<p style=color:red> Fill in all fields!</p>";
        }
        else if($_GET["error"] == "wronglogin")
        {
            echo "<p style=color:red> Incorrect login information!  </p>";
        }
    }
   ?>
    </div>
   </section>
   
