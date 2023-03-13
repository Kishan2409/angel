<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>fatch data using ajax</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(function () {
            var rows = 0, c = 0, s = 0, ci = 0, count = 0,count1 = 0;

            $("#tbody").on('click', '.add', function (e) {
                // add row in table
                
                $("#tbody").append(`<tr ${++c}${++count}${++count1}${++s}${++ci}id="R${++rows}">
                <td>
                            <select name="country" class="country form-control"  data-state_id="${count}" id="country${c}">
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
                            <select name="state" class="state form-control" data-city_id="${count1}" id="state${count}">
                                <option selected> ---- Select State ----</option>
                                
                            </select>
                        </td>
                        <td>
                            <select name="city" class="city form-control" id="city${count1}">
                                <option selected> ---- Select City ----</option>
                                
                            </select>
                        </td>
                        <td align="center" class="">
                            <input type="submit" name="add" id="add" class="add  btn btn-success" value="+">
                            <input type="submit" name="remove" id="remove" class="remove  btn btn-danger" value="-">
                        </td>
                </tr>
                `);
                e.preventDefault();
            });
            // remove row in table
            $("#tbody").on('click', '.remove', function () {
                if (rows != 0) {
                    $(this).closest('tr').remove();
                    c--
                    s--
                    ci--
                    rows--
                }
            });

            //fatch data 
           
            
            $("#tbody").on("change", ".country", function (event) {
                var countryId = $(this).val();
                var state=$(this).data('state_id');
                $.ajax({
                    type: "POST",
                    url: "controller.php",
                    data: { id: countryId },
                    dataType: "html",
                    success: function (data) {
                        $("#state" + state).html(data);
                    }
                });
                event.preventDefault();
            });
            $("#tbody").on("change", ".state", function (event) {
                var stateId = $(this).val();
                var city=$(this).data('city_id');
                $.ajax({
                    type: "POST",
                    url: "controller.php",
                    data: { sid: stateId },
                    dataType: "html",
                    success: function (data) {
                        $("#city" +city).html(data);
                    }
                });
                event.preventDefault();
            });
        });
    </script>
</head>

<body>
    <br><br>
    <div class="container shadow-lg p-5">
        <form method="post">
            <h3>Table row add and remove using jquery</h3> <br>


            <table class="table shadow">
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
                    <tr id="R0">
                        <td>
                            <select name="country" class="country form-control" data-state_id="0" id="country0">
                                <option selected> ---- Select Country ---- </option>
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
                            <select name="state" class="state form-control" data-city_id="0" id="state0">
                                <option selected> ---- Select State ---- </option>

                            </select>
                        </td>
                        <td>
                            <select name="city" class="city form-control" id="city0">
                                <option selected> ---- Select City ---- </option>

                            </select>
                        </td>
                        <td align="center" class="">
                            <input type="submit" name="add" id="add" class="add  btn btn-success" value="+">
                            <input type="submit" name="remove" id="remove" class="remove  btn btn-danger" value="-">
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>

</body>

</html>