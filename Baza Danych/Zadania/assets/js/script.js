$(function () {
    $('#wyslij').on(
        'click',
        function (event) {
            event.preventDefault();

            const wartosc = $('#wartosc').val();

            $.ajax({
                type: 'POST',
                url: 'src/insert.php',
                data: {
                    wartosc: wartosc
                }
            });
            location.reload();
        })
})