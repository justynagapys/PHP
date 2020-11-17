<?php
    $cookie_name = "imie";

    if($_POST['zatwierdz']) {
        $cookie_value = urlencode($_REQUEST['imie']);
    }

    setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/");

    header("Location: " . $_SERVER['HTTP_REFERER']);
?>