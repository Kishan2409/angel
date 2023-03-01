<html>
    <head>
        <script          src = "https://www.tutorialspoint.com/jquery/jquery-3.6.0.js">
</script>
        <script>
            $(function(){
                $("#sub").click(function(event){
                    $.getScript('result.js',function(jd) {
                        CheckJS();
                    });
                });
            });
        </script>
</head>
<body>
    <p>Click Button</p>
    <input type="submit" id="sub">
</body>
    </html>