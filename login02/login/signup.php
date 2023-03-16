<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pics/loginicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign up</title>
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
        
    <h1>Sign up</h1><br /><br />
<div id="signUp">
    <fieldset>
        <legend>SIGN UP</legend>
            <form action="includes/signup.inc.php" method="POST">
                <label class="labels" for="Name">Name</label><br />
                <input type="text" name="name" for="name" class="inputs" placeholder="Full name..."><br /><br />
                <label class="labels" for="email">Email</label>
                <input type="text" name="email" for="email" class="inputs" placeholder="Email"><br /><br />
                <label class="labels" for="Username">Username</label>
                <input type="text" name="uid" for="username" class="inputs" placeholder="Username"><br /><br />
                <label class="labels" for="Password">Password</label><br />
                <input type="password" name="pwd" for="Paswsword" class="inputs" placeholder="Password" maxlength="8"><br /><br />
                <input type="password" name="pwdrepeat" for="Paswsword" class="inputs" placeholder="Repeat password" maxlength="8"><br /><br />
                <button type="submit" name="submit" id="submitbtn">Sign up</button>
            </form>
            <?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields</p>";
    }
    else if ($_GET["error"] == "invaliduid") {
        echo "<p>Username is taken or invalid!</p>";
    }
    else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email!</p>";
    }
    else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Password don't match!</p>";
    }
    else if ($_GET["error"] == "stmtfields") {
        echo "<p>Something went wrong, try again!</p>";
    }
    else if ($_GET["error"] == "usernameoremailtaken") {
        echo "<p>This username/email has been already taken!</p>";
    }
    else if ($_GET["error"] == "none") {
        echo "<p>You have signed up!</p>";
    }
}


?>
    </fieldset>
</div>


</body>
</html>