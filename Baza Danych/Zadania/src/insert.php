<?php
$wartoscZZapytania = $_POST['wartosc'];

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

$queryDoZapisuDanych = "INSERT INTO wartosci (wartosc) VALUE ('" . $wartoscZZapytania . "')";

$result = $connect->query($queryDoZapisuDanych);
echo $result;

header("Location: " . $_SERVER['HTTP_REFERER']);
?>