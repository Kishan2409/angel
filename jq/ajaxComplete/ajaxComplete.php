<html>

<head>
    <script src="https://www.tutorialspoint.com/jquery/jquery-3.6.0.js"></script>
    <script>
        $(function(){
            $("#sub").click(function(event){
                $("#p1").load('result.html');
            });
            $(document).ajaxComplete(function(event,request,setting){
                $("#p2").html("<h1>requet complete</h1>")
            })
        });
    </script>
</head>

<body>
    <p id="p1"></p>
    <p id="p2"></p>
    <input type="submit" id="sub" value="load data">
</body>

</html>