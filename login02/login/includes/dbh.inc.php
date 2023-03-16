<?php
$serverName = "localhost";
$dbUserName = "root";
$dbPasswordName = "";
$dbName = "loginsystem01";

$conn = mysqli_connect($serverName, $dbUserName, $dbPasswordName, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}