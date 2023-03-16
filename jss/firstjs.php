<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JavaScript</title>
  </head>
  <body>
    <h1>Welcome to my JavaScript page</h1>
    <p>This is a page about javascript</p>
    <form action="firstjs.php" method="post">
      <input type="text" name="kor" placeholder="kor" />
      <input type="submit" name="submit" value="Ok" />
    </form>
    <?php
    $kor = $_POST['kor'];
    if ($kor >= 18) {
      echo("You can join<br />");
    } else {
      echo("You cannot get access to this page<br />");
    }
    ?>
    <script src="jss.js"></script>
  </body>
</html>
