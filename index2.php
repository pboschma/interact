<html>
    <head>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script type="text/javascript">
            $(document).ready(function() {
                $('#eingabe').keyup(function() {
                    var inputtext = $('#eingabe').val();
                    $.ajax({
                        url: "data.php",
                        type: "POST",
                        data: {data : inputtext},
                        success: function(data){
                            $('#eingabe').val(data);
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
    <form>
        <h3>Textsäuberer</h3>
        <input type="text" id="eingabe" value="" placeholder="Eingabe" />
    </form>
        <p id="result"></p>
    </body>
</html>
