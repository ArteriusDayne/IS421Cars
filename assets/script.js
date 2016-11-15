$(document).ready(function () {
    $('.vin-test').click(function () {
        var $alert = $('.vehicle-not-found');
        if ($('#inputVIN').val()) {
            $.ajax({
                dataType: "json",
                type: 'GET',
                url: 'index.php?controller=vehicle&action=vin&vin=' + $('#inputVIN').val(),
                success: function (data) {

                    $alert.addClass('hide');
                    if (Object.keys(data).length > 0) {
                        $('#inputMake').val(data.Make);
                        $('#inputModel').val(data.Model);
                        $('#inputYear').val(data.Year);
                        if (data.Photo) {
                            $('#inputPhoto').val(data.Photo);
                            $('.photo-block').html('<img src="' + data.Photo + '"/>')
                        }
                    } else {
                        $alert.removeClass('hide');
                    }
                }
            });
        } else {
            $alert.removeClass('hide');
        }
    })
});