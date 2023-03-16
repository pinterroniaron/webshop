<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
<body>
<?php
  session_start();
?>
<div class="header">
  <a href="index.php" class="home" id="home">Home</a>

  
  <div class="header-right">
  <?php 
            if (isset($_SESSION["useruid"])) {
                echo '<a href="profile.php">Profile page</a>';
                echo '<a href="includes/logout.inc.php">Log out</a>';
            }
                else {
                  echo '<a href="#">Contact</a>';
                  echo '<a href="#">Log in</a>';
                  echo '<a href="#">Sign up</a>';
                }
            ?> 

    
  </div>
</div>

</body>
