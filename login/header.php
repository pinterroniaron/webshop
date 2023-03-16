<?php 
    session_start();
?>

<nav>
    <fieldset>
    <div>
            <a href="index.php">Home</a>
            <?php 
            if (isset($_SESSION["useruid"])) {
                echo '<a class="float" href="profile.php">Profile page</a>';
                echo '<a class="float" href="includes/logout.inc.php">Log out</a>';
            }
                else {
                    echo '<a class="float" href="login.php">Log in</a>';
                    echo '<a class="float" href="signup.php">Sign up</a>';
                }
            ?>  
      </div>  
        
        </fieldset>
       
    
</nav>

