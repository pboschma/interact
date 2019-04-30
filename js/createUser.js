$(document).ready(function()
{

    var form = $('#registerForm');

    $(form).submit(function(event) {
        event.preventDefault();

        var requestData = {
            mail: $('#mail').val(),
            first_name: $('#first_name').val(),
            last_name: $('#last_name').val(),
            password: $('#password').val(),
            passwordRepeat: $('#repeat_password').val()
        };

        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: requestData,
            success: function(data) {
                console.log(data);

                if(data.status === 'success'){
                    window.top.location.href="../../views/login/login.php";
                    return;
                }

                console.error('Fehler');
            }
        }).fail(function(data) {
            console.log('fail: '+data);
        });
    });
});