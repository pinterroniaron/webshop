<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pics/loginicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
<?php 
    session_start();
?>

<body>
    <fieldset>
            <a href="index.php">Home</a>
            <a href="#" class="float"><img style="width:20px" src="pics/kosar.png" alt=""></a>
            <?php 
            if (isset($_SESSION["useruid"])) {
                echo '<a class="float" href="profile.php">Profile page</a>';
                echo '<a class="float" href="includes/logout.inc.php">Log out</a>';
            }
                else {
                    echo '<a class="float" href="login.php">Log in</a>';
                    echo '<a class="float" href="signup.php">Sign up</a>';
                    echo '<a class="float" href="#">About us</a>';
                    echo '<a class="float" href="#">Contact</a>';
                }
            ?>  
        </fieldset>
        
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