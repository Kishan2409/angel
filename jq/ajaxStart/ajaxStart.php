<html>
    <head>
        <script src="https://www.tutorialspoint.com/jquery/jquery-3.6.0.js"></script>
        <script>
            $(function(){
                var count=0;
                $("#sub").click(function(event){
                    $("#p1").load('result.html');
                });
                $(document).ajaxStart(function(){
                    count++;
                    $("#p2").html("<h1>ajexStart Count : "+count+"</h1>");
                });
                $(document).ajaxComplete(function(event,request,set){
                    count++;
                    $("#p3").html("<h1>ajexComplete Count : "+count+"</h1>")
                });
            });
        </script>
    </head>
    <body>
        <p id="p1">
        </p>
        <p id="p2">
        </p>
        <p id="p3">
        </p>
        <input id="sub" value="Load Data" type="submit">
    </body>
</html>