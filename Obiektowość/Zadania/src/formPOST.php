<?php

require_once('pozyczka/pozyczka.php');
require_once('pozyczka/pozyczkaSwiateczna.php');

session_start();

$pozyczkaOrg = new Pozyczka(
    $_POST['imie'],
    $_POST['drugieImie'],
    $_POST['nazwisko'],
    $_SESSION['kwota'],
    $_SESSION['okres']
);

$pozyczkaSwieta = new PozyczkaSwiateczna(
    $_POST['imie'],
    $_POST['drugieImie'],
    $_POST['nazwisko'],
    $_SESSION['kwota'],
    $_SESSION['okres']
);


print_r($pozyczkaOrg);
echo '<br/><br/>';

print_r($pozyczkaSwieta);
echo '<br/><br/>';

echo $pozyczkaOrg->wyliczOprocentowanie() . '<br/>';
echo $pozyczkaSwieta->wyliczOprocentowanie() . '<br/>';
