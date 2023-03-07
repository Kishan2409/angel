<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>fatch data using ajax</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(function () {
            var rows = 0;
            $("#tbody").on('click','.add',function (e) {
                $("#tbody").append(`<tr id="r${++rows}">
                <td>
                            <select name="country" class="form-control" id="country">
                                <option selected> ---- Select Country ----</option>
                                <?php
                                foreach ($contry as $row) {
                                    ?>
                                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <select name="state" class="form-control" id="state">
                                <option selected> ---- Select State ----</option>
                                <?php
                                foreach ($stateall as $row) {
                                    ?>
                                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["state_name"]; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <select name="city" class="form-control" id="city">
                                <option selected> ---- Select City ----</option>
                                <?php
                                foreach ($cityall as $row) {
                                    ?>
                                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["city_name"]; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                        <input type="submit" name="add" id="add" class="add btn btn-success" value="+">
                         <input type="submit" name="remove" id="remove" class="remove  btn btn-danger"
                                value="-">
                        </td>
                </tr>
                `);
                e.preventDefault();
            });

            $("#tbody").on('click', '.remove', function () {
                if(rows!=0){
                    $(this).closest('tr').remove();
                rows--
                }
            });

            // $("#country").on("change", function () {
            //     var countryId = $(this).val();
            //     $.ajax({
            //         type: "POST",
            //         url: "controller.php",
            //         data: { id: countryId },
            //         dataType: "html",
            //         success: function (data) {
            //             $("#state").html(data);
            //         }
            //     });
            // });
            // $("#state").on("change", function () {
            //     var stateId = $(this).val();
            //     $.ajax({
            //         type: "POST",
            //         url: "controller.php",
            //         data: { sid: stateId },
            //         dataType: "html",
            //         success: function (data) {
            //             $("#city").html(data);
            //         }
            //     });
            // });
        });
    </script>
</head>

<body>
    <br><br>
    <div class="container shadow-lg p-5">
        <form method="post">
            <h3>Table row add and remove using jquery</h3>     <br>
            
            <br><br>
            <table border="1" class="table shadow">
                <thead>
                    <tr>
                        <td>
                            <label><b>Select country</b></label><br>
                        </td>
                        <td>
                            <label><b>Select State</b></label><br>
                        </td>
                        <td>
                            <label><b>Select City</b></label><br>
                        </td>
                        <td align="center">
                            <label><b>Action</b></label><br>
                        </td>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <tr >
                        <td>
                            <select name="country" class="form-control" id="country">
                                <option selected> ---- Select Country ----</option>
                                <?php
                                foreach ($contry as $row) {
                                    ?>
                                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <select name="state" class="form-control" id="state">
                                <option selected> ---- Select State ----</option>
                                <?php
                                foreach ($stateall as $row) {
                                    ?>
                                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["state_name"]; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <select name="city" class="form-control" id="city">
                                <option selected> ---- Select City ----</option>
                                <?php
                                foreach ($cityall as $row) {
                                    ?>
                                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["city_name"]; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                        <td class="align-self-center">
                        <input type="submit" name="add" id="add" class="add  btn btn-success" value="+">
                            <input type="submit" name="remove" id="remove" class="remove  btn btn-danger"
                                value="-">
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>

</body>

</html>