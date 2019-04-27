$(document).ready(function()
{
    var form = $('#loginForm');
    $(form).submit(function(event) {
        event.preventDefault();
        var formData = $(form).serialize();
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData,
            success: function(data) {
                window.top.location.href="../../views/main_page/main-page.php";
            }
        }).done(function(data) {
            console.log("done " . data);
        }).fail(function(data) {
            console.log('fail: '+data);
        });
    });
});