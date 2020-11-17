<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Składowe witryny</title>
</head>

<body>
    <form action="src/potwierdzenieGET.php" method="GET">
        <div>
            metoda GET
        </div>
        <div>
            <label for="imie">Imię: </label>
            <input name="imie">
        </div>
        <div>
            <label for="nazwisko">Nazwisko: </label>
            <input name="nazwisko">
        </div>
        <div>
            <label for="email">E-mail: </label>
            <input name="email">
        </div>
        <button type="submit" name="zatwierdz" value="zatwierdzenie">
            Wyślij
        </button>
    </form>
    <form action="src/potwierdzeniePOST.php" method="POST">
        <div>
            metoda POST
        </div>
        <div>
            <label for="imie">Imię: </label>
            <input name="imie">
        </div>
        <div>
            <label for="nazwisko">Nazwisko: </label>
            <input name="nazwisko">
        </div>
        <div>
            <label for="email">E-mail: </label>
            <input name="email">
        </div>
        <button type="submit" name="zatwierdz" value="zatwierdzenie">
            Wyślij
        </button>
    </form>
    <form action="src/ciasteczkoPOST.php" method="POST">
        <div>
            Ciasteczko
        </div>
        <div>
            <label for="imie">Imię: </label>
            <input name="imie">
        </div>
        <div>
            <button type="submit" name="zatwierdz" value="zatwierdzenie">
                Wyślij
            </button>
        </div>
    </form>
    <div>
        <?php
        include 'src/ciasteczko.php';
        ?>
    </div>
</body>

</html>