<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="/src/assets/styles/tailwind/tailwind.css" rel="stylesheet">

        <title>Projekt wprowadzający</title>
    </head>
    <body>
        <div class="flex relative w-full justify-center">
            <div class="flex flex-wrap w-1/2 justify-center">
                <?php
                    include 'src/zmienne.php';
                    include 'src/operatory.php';
                    include 'src/warunki.php';
                    include 'src/petle.php';
                    include 'src/funkcje.php';                        
                ?>
            </div>
        </div>
    </body>
</html>
