<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Találd ki a számot</title>
</head>
<body>
    <h2>Találd ki, hogy melyik számra gondoltam.</h2>
    <p class="size">Páratlan, kétjegyű prímszám, egyes és tizedes jegye azonos, 0-20 között van.</p>
<!-- <form action="test.php" method="POST">
    <input type="text" name="number" placeholder="write a number here" maxlength="2" min="0" max="20"/>
    <input type="submit" value="Submit">
</form> -->
<form id="form1" action="test.php" method="POST">
    <select id="guess" name="number">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
    </select>
    
</form>
<input type="submit" value="Oké" id="submit1" style="font-size:30px"/>
</body>
</html>


