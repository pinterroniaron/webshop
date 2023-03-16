<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="loginicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/welcome.css">
    <title>Welcome</title>
</head>
<body>
<?php
include_once 'header.php';

if (isset($_SESSION["useruid"])) {
    echo '<p>Hello there, ' . $_SESSION["useruid"] . '</p>';
}

if (isset($_GET["error"])) {
    if ($_GET["error"] == "none") {
        echo '<p style="text-align:right">You have logged in</p>';
    }
}
?>
</body>
<p>Now you can buy any product from us!</p>
</html>