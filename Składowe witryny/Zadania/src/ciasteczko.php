<?php
    $cookie_name = 'imie';

    if(!isset($_COOKIE[$cookie_name])) {
        echo "Ciasteczko o nazwie "
            . $cookie_name
            . " nie jest ustawione";
    } else {
        echo "Ciasteczko o nazwie "
            . $cookie_name
            . " jest ustawione <br>";

        echo "Wartosc: " . $_COOKIE[$cookie_name];
    }
?>