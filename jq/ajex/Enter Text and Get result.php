<html>

<head>
    <script src="https://www.tutorialspoint.com/jquery/jquery-3.6.0.js"></script>
    <script>
$(function(){
    $("#sb").click(function(){
        var name=$("#name").val();
        $("#demo").load('./result.php',{"name":name});
    });
});
    </script>
</head>

<body>
  
        <input type="text" id="name"  placeholder="Enter Name">
        <input type="submit" id="sb" name="sub" value="submit">
        <p id="demo" style="background-color: yellowgreen;">
        Enter your name in text box. 
        </p>
   
</body>

</html>