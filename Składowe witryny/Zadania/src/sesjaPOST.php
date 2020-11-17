<?php
session_start();
$session_value='nazwisko';
if ($_POST['zatwierdz']) {
    $_SESSION['nazwisko'] = $_POST[$session_value];
}
header("Location: " . $_SERVER['HTTP_REFERER']);
?>