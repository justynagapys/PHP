<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$databasename = "phpdb";
$connect = new mysqli(
    $hostname,
    $username,
    $password,
    $databasename
);

$queryDoOdczytuDanych = "SELECT * FROM wartosci";
if ($result = $connect->query($queryDoOdczytuDanych)) {
    while ($row = $result->fetch_assoc()) {
        echo $row["wartosc"] . '</br>';
    }
    $result->free();
}

?>