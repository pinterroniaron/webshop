<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="loginicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
<?php
include_once 'header.php';
?>
    <h1>Login</h1><br /><br />
<div id="login">
    <fieldset>
        <legend>LOGIN</legend>
            <form action="includes/login.inc.php" method="POST">
            <label class="labels" for="Name">Username/email</label><br />
                <input type="text" name="uid" for="name" class="inputs" placeholder="Username/email"><br /><br />
                <label class="labels" for="Password">Password</label><br />
                <input type="password" name="pwd" for="Paswsword" class="inputs" placeholder="Password" maxlength="8"><br /><br />
                <button type="submit" name="submit" id="submitbtn">Log in</button>
            </form>
            <?php 
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields</p>";
                }
                else if ($_GET["error"] == "none") {
                    echo "<p>You have signed up!</p>";
                }
                else if ($_GET["error"] == "wrongloginp") {
                    echo "<p>Wrong password!</p>";
                }
                else if ($_GET["error"] == "wronglogin") {
                    echo "<p>Wrong username/email!</p>";
                }
            }
            
            ?>
    </fieldset>
</div>

</body>
</html>