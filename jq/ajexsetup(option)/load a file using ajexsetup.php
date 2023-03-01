<html>

<head>
<script src="https://www.tutorialspoint.com/jquery/jquery-3.6.0.js"></script>
<script>
    $(function(){
        $("#sub").click(function(event){
            $.ajaxSetup({
                url:"result.html"
            });
            $.ajax({
                success:function(data){
                    $("#show").html(data);
                }
            })
        });
    });
</script>
</head>

<body>
    <p id="show"></p>
    <input type="submit" id="sub" value="Load a File using ajexsetup">
</body>
</html>