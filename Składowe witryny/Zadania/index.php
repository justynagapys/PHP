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
</body>

</html>