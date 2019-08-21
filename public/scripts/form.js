$(document).ready(function () {
    $('form').submit(function (event) {
        var json;
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'), //метод отправки
            url: $(this).attr('action'), //url страницы (action_ajax_form.php)
            data: new FormData(this),  // Сеарилизуем объект
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) { //Данные отправлены успешно
                json = jQuery.parseJSON(result);
                if (json.url) {
                    window.location.href = '/' + json.url;
                } else {
                    alert(json.status + ' - ' + json.message);
                }
            },
        });
    });
});

