
function reform() {

    $.ajax({
        url: '',
        data: {type: 'check1'},
        type: 'POST',
        success: function (data) {
            data = JSON.parse(data.replace(/\n/g, "\\n"));

            if (data.success === '1') {
                document.getElementById('form').innerHTML = data.partForm;
            }
        },
        error: function () {
            alert('Ошибка! Пожалуйста, обновите страницу!');
        }
    });
}


