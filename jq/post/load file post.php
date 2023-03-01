<html>

<head>
    <script src="https://www.tutorialspoint.com/jquery/jquery-3.6.0.js"></script>
    <script>
        $(function () {
            $("#sub").click(function(event){
                $.post(
                    "result.php",{name:"kishan"},function(data){$("#show").html(data);}
                );
            });
        });
    </script>
</head>

<body>
    <input type="submit" id="sub" value="Load post method">
    <p id="show"></p>
</body>

</html>