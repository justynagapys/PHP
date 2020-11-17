<?php
session_start();

if ($_POST['zatwierdz']) {
    $_SESSION['session_value'] = ($_SESSION['nazwisko']);
}
header("Location: " . $_SERVER['HTTP_REFERER']);
?>

W katalogu src utwórz plik sesjaPOST.php, a w pliku index.php stwórz formularz typu POST z polem nazwisko posiadający action z odniesieniem do wcześniej stworzonego pliku.

<!-- Zapisz wartość pola nazwisko. 
Wykorzystaj zmienną superglobalną $_POST i sprawdź 
czy istnieje wartość zatwierdz, 
jeżeli istnieje utwórz w sesji poprzez zmienną $_SESSION pole nazwisko 
i przypisz wartość pola nazwisko. 
Przed odwołaniem się do sesji należy ja uruchomić wywołaniem funkcji session_start. 
Przekieruj użytkownika na stronę główną instrukcją header. -->