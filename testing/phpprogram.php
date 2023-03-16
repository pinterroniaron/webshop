<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label for="Number">Number</label>
        <input type="text" name="number" placeholder="Number" pattern="[0-9]{2}-[0-9]{3}-[0-9]{4}">
        <label for="quantity">Quantity (between 1 and 5):</label>
        <input type="range" id="quantity" name="quantity" min="1" max="5">
    </form>
    <form action="idk.php" method="get">
        <input type="text" name="num01" placeholder="Number 1">
        <select name="operation">
            <label>Choose operation!</label>
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
        </select>
        <input type="text" name="num02" placeholder="Number 2">
        <input type="submit" value="Submit">
    </form>


    <?php
    $roni = 5;
    $anya = 4;
    $tirza = $roni + $anya;
    echo $tirza;
    ?>
</body>
</html>