$(document).ready(function()
{
    var form = $('#registerForm');
    $(form).submit(function(event) {
        event.preventDefault();
        var formData = $(form).serialize();
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData,
            success: function(data) {
                window.top.location.href="../../views/login/login.php";
            }
        }).done(function(data) {
            console.log("done " . data);
        }).fail(function(data) {
            console.log('fail: '+data);
        });
    });
});