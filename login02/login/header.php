<?php 
    session_start();
?>

<body>
    <fieldset>
            <a href="index.php">Home</a>
            <a href="#" class="float"><img style="width:25px" src="pics/kosar.png" alt=""></a>
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
</body>
</html>
