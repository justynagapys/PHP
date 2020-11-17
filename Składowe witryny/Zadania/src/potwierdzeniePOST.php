<?php
if($_POST['zatwierdz']) {
    echo urlencode($_REQUEST['imie']) . "<br />";
    echo $_POST['nazwisko'] . "<br />";
    echo $_POST['email'] . "<br />";
}
?>