<html>
    <head>
        <script src="https://www.tutorialspoint.com/jquery/jquery-3.6.0.js"></script>
        <script>
            $(function(){
                $("#sub").click(function(event){
                    $.get(
                        "result.php",{name:"Kishan"},function(data){$("#show").html(data);}
                    );
                });
            });
        </script>
    </head>
    <body>
    <input type="submit" name="sub" id="sub" value="get name">
    <p id="show"></p>
    </body>
</html>