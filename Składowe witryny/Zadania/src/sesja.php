<?php
session_start();
$session_name = 'nazwisko';

if (empty($_SESSION[$session_name])) {
    echo "Brak sesji";
} else {
    echo $_SESSION[$session_name]. '<br>';
}
?>