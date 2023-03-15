<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>fatch data using ajax</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>


        $(function () {

           

            $(".product").select2();

            function tm() {
                var sum_amount = 0;
                var dis = $("#discount").val();
                var vat0 = $('#vat').val();
                $('.amount').each(function () {
                    sum_amount += +$(this).html();
                    $('#total_amount').html("Total:- " + sum_amount);
                    var vat1 = sum_amount * vat0 / 100;
                    var subtotal=vat1+sum_amount;
                    var tot = subtotal * dis / 100;
                    var fto = subtotal - tot;
                    $("#fitotal_amount").text("Total bill:- " + fto);
                    $("#vatbill").text("Total vat:- " + vat1);

                })
            }

            var rows = 0, count = 0, count1 = 0;
            $("#tbody").on('click', '.add', function (e) {
                // add row in table

                $("#tbody").append(`<tr ${++count} ${++count1}id="R${++rows}">
                        <td>
                            <select name="product" id="product${count}" style="width: 100%;" data-price_id="${count}" class="product form-control">
                            <option>Select Product</option><?php
                            foreach ($product as $key) {
                                ?><option value="<?php echo $key['id'] ?>"><?php echo $key['name']; ?></option><?php
                            }
                            ?>
                            </select>
                        </td>
                        <td>
                            <textarea name="price" id="price${count}"  class="form-control" style="height:30px" readonly>0</textarea>
                        </td>
                        <td>
                            <input class="form-control qty" name="qty" value="0" data-qty_id="${count1}" min="0" id="qty${count1}"  type="number"> 
                        </td>
                        <td>
                            <label class="form-control amount" id="amount${count1}" name="amount" type="text">0</label>
                        </td>
                        <td align="center" class="">
                            <input type="submit" name="add" id="add" class="add  btn btn-success" value="+">
                            <input type="submit" name="remove" id="remove" class="remove  btn btn-danger" value="-">
                        </td>
                    </tr>`);
                $(".product").select2();

                e.preventDefault();
            });


            // remove row in table
            $("#tbody").on('click', '.remove', function () {
                if (rows != 0) {
                    $(this).closest('tr').remove();
                    rows--
                }
                var qty = $(".qty").data('qty_id');
                var p = $("#price" + qty).val();
                var q = $("#qty" + qty).val();
                var t = p * q;
                $("#amount" + qty).text(t);
                tm();
            });

            //fatch data 
            $("#tbody").on("change", ".product", function (event) {
                var productId = $(this).val();
                var price = $(this).data('price_id');
                $.ajax({
                    type: "POST",
                    url: "controller.php",
                    data: { id: productId },
                    dataType: "html",
                    success: function (data) {
                        $("#price" + price).html(data);
                        var p = $("#price" + price).val();
                        var q = $("#qty" + price).val();
                        var t = p * q;
                        $("#amount" + price).text(t);
                        tm();
                    }
                });
                event.preventDefault();
            });

            $("#tbody").on("change", ".qty", function (event) {
                var qty = $(this).data('qty_id');
                var p = $("#price" + qty).val();
                var q = $("#qty" + qty).val();
                var t = p * q;
                $("#amount" + qty).text(t);
                tm();
                event.preventDefault();
            })

            $("#discount").change(function (e) {
                tm();
                e.preventDefault();
            });
            $("#vat").change(function (e) {
                
                $("#myform").validate({
                    rules: {
                        vat: {
                            max: 100
                        }
                    }
                });
                tm();
                e.preventDefault();
            });
        });
    </script>
</head>

<body>
    <br><br>
    <div class="container shadow-lg p-5">
        <form method="post" id="myform">
            <h3>Table row add and remove using jquery</h3> <br>


            <table class="table shadow">
                <thead>
                    <tr>
                        <td style="width: 20%;">
                            <label><b>Select Product</b></label><br>
                        </td>
                        <td style="width: 20%;">
                            <label><b>Price</b></label><br>
                        </td>
                        <td style="width: 20%;">
                            <label><b>Qty</b></label><br>
                        </td>
                        <td style="width: 20%;">
                            <label><b>Amount</b></label><br>
                        </td>
                        <td style="width: 20%;" align="center">
                            <label><b>Action</b></label><br>
                        </td>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <tr id="R0">
                        <td style="width: 20%;">
                            <select name="product" id="product0" data-price_id="0" style="width: 100%;"
                                class="product form-control">
                                <option>Select Product</option>
                                <?php
                                foreach ($product as $key) {
                                    ?>
                                    <option value="<?php echo $key['id'] ?>"><?php echo $key['name']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <textarea name="price" id="price0" class="form-control" style="height:30px"
                                readonly>0</textarea>
                        </td>
                        <td>
                            <input class="form-control qty" name="qty" value="0" data-qty_id="0" min="0" id="qty0" type="number">
                        </td>
                        <td>
                            <label class="form-control amount" id="amount0" name="amount" type="text">0</label>
                        </td>
                        <td align="center" class="">
                            <input type="submit" name="add" id="add" class="add  btn btn-success" value="+">
                            <input type="submit" name="remove" id="remove" class="remove  btn btn-danger" value="-">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="shadow-lg p-1">
                <p class="bg-black mt-1 text-white" id="total_amount">
                    Total:- 0
                </p>

                <label for="vat">Enter vat</label>
                <input type="number" name="vat" id="vat" min="0" value="0" class="vat w-25 form-control mb-2">
                <p class="bg-black text-white" id="vatbill">
                    Total vat:- 0
                </p>
                
                <label>Enter Discount</label>
                <input type="number" name="discount" id="discount" min="0" value="5" class="discount w-25 form-control mb-2">
                <p class="bg-black text-white" id="fitotal_amount">
                    Total bill:- 0
                </p>
            </div>
        </form>
    </div>
    <script>

    </script>
</body>

</html>