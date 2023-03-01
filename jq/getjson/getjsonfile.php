<html>

<head>
    <script src="https://www.tutorialspoint.com/jquery/jquery-3.6.0.js"></script>
    <script>
        $(function () {
            $("#cli").click(function (event) {
                $.getJSON('./jsonload.json', function (jd) {
                    $("#opn").html('<p>Name: ' + jd.name + '<\p>');
                    $("#opn").append('<p>Date Of Birth: ' + jd.dob + '<\p>');
                    $("#opn").append('<p>Gender: ' + jd.gender + '<\p>');
                });

            });
        });
    </script>
</head>

<body>
    <div id="opn">
        open json File
    </div>

    <input type="button" id="cli" value="load">
</body>

</html>