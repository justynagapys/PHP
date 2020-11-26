<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>

    <link href="https://gist.githack.com/PeterPorzuczek/0064e0fb05e87e79b8e158fd5a71be30/raw/dab9b612eb0a31b3a2e1db8ab2e42469bc8677f1/tailwind.css" rel="stylesheet">
</head>
<body>
    <div class="flex justify-around items-center p-8">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data" action="formPOST.php" method="post">

            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2">
                    Imie
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" type="text" name="imie" />
            </div>
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2">
                    Drugie Imie
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" type="text" name="drugieImie" />
            </div>
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2">
                    Nazwisko
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" type="text" name="nazwisko" />
            </div>
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2">
                    PESEL
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" type="text" name="pesel" pattern="\d{11}" title="11 cyfr" />
            </div>
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2">
                    e-mail
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" placeholder="mail@mail.com" />
            </div>
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2">
                    Zgody
                </label>
                <fieldset>
                    <legend class="block text-grey-darker text-sm font-bold mb-2">Wymagane zgody</legend>
                    <label class=" block text-grey font-bold leading-tight text-sm">
                        <input type="checkbox" name="zgoda[]" value="Osobowe">
                        Przetwarzanie danych osobowych
                    </label>
                    <label class=" block text-grey font-bold leading-tight text-sm">
                        <input type="checkbox" name="zgoda[]" value="Status" />
                        Otrzymywanie informacji o statusie wniosku
                    </label>
                    <label class=" block text-grey font-bold leading-tight text-sm">
                        <input type="checkbox" name="zgoda[]" value="Marketing" />
                        Wykorzystanie danych w celach marketingowych
                    </label>
                </fieldset>

            </div>
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2">
                    Potwierdzenie zatrudnienia
                </label>

                <div class=" block text-grey font-bold leading-tight text-sm">
                    <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                    <input name="umowa" type="file" />
                </div>

            </div>
            <div class="mb-4">
                <td colspan="2"><input class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 w-full rounded focus:outline-none focus:shadow-outline" type="submit" name="zatwierdz" value="zatwierdź" />
            </div>

        </form>
    </div>
</body>
</html>