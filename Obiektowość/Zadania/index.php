<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <link href="https://gist.githack.com/PeterPorzuczek/0064e0fb05e87e79b8e158fd5a71be30/raw/5ff543a32312eb0eacf80a465b911cb58604ea9f/input-range.css" rel="stylesheet">
    <link href="https://gist.githack.com/PeterPorzuczek/0064e0fb05e87e79b8e158fd5a71be30/raw/dab9b612eb0a31b3a2e1db8ab2e42469bc8677f1/tailwind.css" rel="stylesheet">
</head>
<body>
    <div class="flex justify-around items-center p-8">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="src/redirect.php" method="post">
            <table>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2">
                        Kwota pożyczki (zł)
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" type="number" name="kwota" value="1000" step="1" max="100000" />
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2">
                        Okres pożyczki (lata)
                    </label>
                    <input type="range" name="okres" id="okres" value="1" step="1" max="10" oninput="this.form.okresWartosc.value = this.value" />
                    <output class="block text-grey-darker text-sm font-bold mb-2 w-full flex justify-center" id="okresWartosc">1</output>
                </div>
                <div class="mb-4">
                    <input class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 w-full rounded focus:outline-none focus:shadow-outline" type="submit" name="zatwierdz" value="zatwierdź" />
                </div>
            </table>
        </form>
    </div>
</body>
</html>