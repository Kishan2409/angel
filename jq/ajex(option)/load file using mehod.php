<html>

<head>
    <script type="text/javascript" src="https://www.tutorialspoint.com/jquery/jquery-3.6.0.js">
    </script>

    <script>
        $(function(){
            $("#sub").click(function(event){
                $.ajax({
                    url:"result.html",success:function(data){
                        $("#show").html(data);
                    }
                });
            });
        });

    </script>
</head>

<body>
    <p id="show">
    </p>
    <input type="submit" id="sub" value="Load File">
</body>

</html>