$(document).ready(function()
{
    var form = $('#registerForm');
    $(form).submit(function(event) {
        event.preventDefault();
        var formData = $(form).serialize();
        console.log(formData);
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        }).done(function(data) {
            console.log('done: '+data);
        }).fail(function(data) {
            console.log('fail: '+data);
        });
    });
});