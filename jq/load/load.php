<html>
    <head>
        <script src="https://www.tutorialspoint.com/jquery/jquery-3.6.0.js"></script>
        <script>
            $(document).ready(function(){
                $("#change").click(function(event){
                    $("#stage").load('./result.html');
                });
            }); 
        </script>
    </head>
    <body>
        <div id="stage" style="background-color: yellow;">
            Hello
        </div>
        <input type="button" id="change" value="load">
    </body>
</html>