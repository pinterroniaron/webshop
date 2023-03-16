<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pics/loginicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Index</title>
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
        
<h1 class="headers">Roni's protein</h1><br />
<p>Welcome to my website, feel free to look around and sign up to contact us and get more information about us</p>


</body>
</html>