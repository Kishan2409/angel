<html>

<head>
    <script src="https://www.tutorialspoint.com/jquery/jquery-3.6.0.js"></script>
    <script>
        $(function(){
            $("#sub").click(function(event){
                $.post(
                    "result.php",

                    $("#f1").serialize(),

                    function(data){
                        $("#p1").html(data);
                    }
                );
                var str=$("#f1").serialize();
                $("#p2").text(str);
            });
        });
    </script>
</head>

<body>
    <form id="f1">
        <table border="1" align="center" style="margin-top: 150px;">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age" id="age"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select style="width: 170px;" id="gender" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" id="sub"></td>

            </tr>
        </table>
    </form>
    <p id="p1"></p>
    <p id="p2"></p>
</body>

</html>