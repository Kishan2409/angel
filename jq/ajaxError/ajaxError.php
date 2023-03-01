<html>
    <head>
        <script src="https://www.tutorialspoint.com/jquery/jquery-3.6.0.js"></script>
        <script>
            $(function(){
                $("#sub").click(function(event){
                    $("#p1").load('result.txt');
                });
                $(document).ajaxError(function(event,request,setting){
                    $("#p2").html("<h1>Error in loading page.</h1>")
                });
            });
        </script>
    </head>
    <body>
        <p id="p2"></p>
        <p id="p1"></p>
        <input type="submit" id="sub" value="Load Data">
    </body>
</html>