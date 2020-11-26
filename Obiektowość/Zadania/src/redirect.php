<?php
    // zapisanie danych w sesji i przeniesienie do kolejnego formularza

    session_start();

    $_SESSION['kwota'] = $_POST['kwota'];
    $_SESSION['okres'] = $_POST['okres'];

    header("Location: form.php");
    exit;
?>