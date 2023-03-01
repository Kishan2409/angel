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
                $("#p2").html("<h1>ajaxStart Count :"+count+"</h1>");
            });
            $(document).ajaxSend(function(evt,req,set){
                count++;
                $("#p3").html("<h1>ajaxSend Count : "+count+"</h1>");
                $("#p3").append("<h1>url : "+set.url+"</h1>");
            });
            $(document).ajaxComplete(function(event,request,settings) {
                count++;
                $("#p4").html("<h1>ajaxComplete count : "+count+"</h1");
            });
        });
    </script>
</head>
<body>
    <p id="p1">stage1</p>
    <p id="p2">stage2</p>
    <p id="p3">stage3</p>
    <p id="p4">stage4</p>
    <input type="submit" id="sub" value="Load Data">
</body>
</html>