<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Találd ki a számot</title>
</head>
<body>
<?php
$id = $_POST['number'];
if ($id==11) {
    echo "<p>Eltaláltad, a szám a 11 volt:))</p>";
} else {
    echo "<p>Sajnos nem találtad el:(</p>";
}

?>
<form id="formm" action="guess.php">
    <input type="submit" value="További próbálkozás.">
</form>
</body>
</html>




