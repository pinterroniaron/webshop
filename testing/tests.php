<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<?php



/* $hi = 7;
 if ($hi < 3) {
     echo "child";
 } else {
     echo "naaaah <br />";
 }*/


/* for ($i=0; $i<20; $i++) {
     echo $i . "<br />";
     if ($i==8) {
     break;
     }
 }*/
for ($s="0"; $s<10; $s++) {
    if ($s%2==0) {
        echo $s . "<br />";
    }
}
define("h", 0);
echo h;

?>
<form action="guess.php">
    <input type="submit" value="click here to play a guessing game">
</form>
</body>
</html>