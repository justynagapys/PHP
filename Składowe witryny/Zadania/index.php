<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Składowe witryny</title>
    <link href="https://unpkg.com/tailwindcss@1.8.10/dist/tailwind.css" rel="stylesheet">
</head>

<body>
    <?php
    session_start();
    ?>
    <form action="src/potwierdzenieGET.php" method="GET" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 inline-block relative w-max">
        <div class="mb-4">
            metoda GET
        </div>
        <div class="mb-4">
            <label for="imie" class="block text-gray-700 text-sm font-bold mb-2">Imię: </label>
            <input name="imie" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Imię">
        </div>
        <div class="mb-4">
            <label for="nazwisko" class="block text-gray-700 text-sm font-bold mb-2">Nazwisko: </label>
            <input name="nazwisko" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Nazwisko">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">E-mail: </label>
            <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="E-mail">
        </div>
        <button type="submit" name="zatwierdz" value="zatwierdzenie" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
            Wyślij
        </button>
    </form>
    <form action="src/potwierdzeniePOST.php" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 inline-block relative w-max">
        <div class="mb-4">
            metoda POST
        </div>
        <div class="mb-4">
            <label for="imie" class="block text-gray-700 text-sm font-bold mb-2">Imię: </label>
            <input name="imie" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Imię">
        </div>
        <div class="mb-4">
            <label for="nazwisko" class="block text-gray-700 text-sm font-bold mb-2">Nazwisko: </label>
            <input name="nazwisko" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Nazwisko">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2" for="username">E-mail: </label>
            <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="E-mail">
        </div>
        <button type="submit" name="zatwierdz" value="zatwierdzenie" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
            Wyślij
        </button>
    </form>
</br>
    <form action="src/ciasteczkoPOST.php" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-6 mb-4 inline-block relative w-max">
        <div class="mb-4">
            Ciasteczko
        </div>
        <div class="mb-4">
            <label for="imie" class="block text-gray-700 text-sm font-bold mb-2">Imię: </label>
            <input name="imie" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Imię">
        </div>
        <div class="mb-4">
            <button type="submit" name="zatwierdz" value="zatwierdzenie" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                Wyślij
            </button>
        </div>
        <div class="mb-4">
            <?php
            include 'src/ciasteczko.php';
            ?>
        </div>
    </form>

    <form action="src/sesjaPOST.php" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-6 mb-4 inline-block relative w-max">
        <div class="mb-4">
            Sesja
        </div>
        <div class="mb-4">
            <label for="nazwisko" class="block text-gray-700 text-sm font-bold mb-2">Nazwisko: </label>
            <input name="nazwisko" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Nazwisko">
        </div>
        <div class="mb-4">
            <button type="submit" name="zatwierdz" value="zatwierdzenie" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                Wyślij
            </button>
        </div>
        <div class="mb-4">
            <?php
            include 'src/sesja.php';
            ?>
        </div>
    </form>

</body>

</html>