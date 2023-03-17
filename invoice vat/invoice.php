<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>fatch data using ajax</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- bootstrap -->
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
    <!-- bootstrap end -->
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- ajax end -->
    <!-- jquery validater -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <!-- jquery validater end -->
    <!-- select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- select2 end -->

    <script>
        $(function () {
            $(".product").select2();

            function totalamount() {
                var sum_amount = 0;
                $('.amount').each(function () {
                    sum_amount += +$(this).html();
                    $('#total_amount').html(sum_amount.toFixed(2));
                });
            }

            function totalvat() {
                var sum_vat = 0;
                $('.vatamount').each(function () {
                    sum_vat += +$(this).html();
                    $('#total_vat').html(sum_vat.toFixed(2));
                })
            }

            function grandtotal() {
                var gt = 0;
                $('#total_amount').each(function () {
                    gt += +$(this).html();
                    $('#grand_total').html(gt.toFixed(2));
                });
                $('#total_vat').each(function () {
                    gt += +$(this).html();
                    $('#grand_total').html(gt.toFixed(2));
                });
            }


            var rows = 0, count = 0, count1 = 0, count2 = 0, c = 0;
            $("#tbody").on('click', '.add', function (e) {
                // add row in table

                $("#tbody").append(`<tr ${++c} ${++count} ${++count1} ${++count2}id="R${++rows}">
                        <td>
                            <select name="product" id="product${count}" style="width: 150px;" data-price_id="${count}" class="product form-control">
                            <option>Select Product</option><?php
                            foreach ($product as $key) {
                                ?><option value="<?php echo $key['id'] ?>"><?php echo $key['name']; ?></option><?php
                            }
                            ?>
                            </select>
                        </td>
                        <td>
                            <input type="number" name="price" id="price${count}" data-p_id="${c}"  class="form-control price" style="width: 100px;" >
                        </td>
                        <td>
                            <input class="form-control qty" name="qty" value="0" data-qty_id="${count1}" min="0" id="qty${count1}"  type="number" style="width: 100px;"> 
                        </td>
                        <td>
                            <label class="form-control amount" id="amount${count1}" name="amount" type="text" style="width: 100px;">0</label>
                        </td>
                        <td>
                            <input class="form-control vat" name="vat" value="0" data-vat_id="${count2}" min="0" id="vat${count2}"
                                type="number" style="width: 100px;">
                        </td>
                        <td>
                            <label class="form-control vatamount" id="vatamount${count2}" name="vatamount" type="text" style="width: 100px;">0</label>
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
                totalvat();
                grandtotal();
                totalamount();
            });

            //fatch data 
            $("#tbody").on("change", ".product", function (event) {
                var productId = $(this).val();
                var price = $(this).data('price_id');
                $.ajax({
                    type: "POST",
                    url: "controller.php",
                    data: { id: productId },
                    //dataType: "html",
                    success: function (data) {
                        $("#price" + price).val(data);
                        var p = $("#price" + price).val();
                        var q = $("#qty" + price).val();
                        var t = p * q;
                        $("#amount" + price).html(t.toFixed(2));

                        var tp = $("#amount" + price).html();
                        var v = $("#vat" + price).val();
                        var v1 = tp * v / 100;
                        $("#vatamount" + price).html(v1.toFixed(2));

                        totalamount();
                        totalvat();
                        grandtotal();
                    }
                })
                event.preventDefault();
            });

            $("#tbody").on("change", ".qty", function (event) {
                var qty = $(this).data('qty_id');
                var p = $("#price" + qty).val();
                var q = $("#qty" + qty).val();
                var t = p * q;
                $("#amount" + qty).text(t.toFixed(2));


                //var vat = $(this).data('vat_id');
                var tp = $("#amount" + qty).html();
                var v = $("#vat" + qty).val();
                var v1 = tp * v / 100;
                $("#vatamount" + qty).text(v1.toFixed(2));

                totalamount();
                totalvat();
                grandtotal();

                event.preventDefault();
            })

            $("#tbody").on("change", ".vat", function (event) {
                $("#myform").validate({
                    rules: {
                        vat: {
                            max: 100
                        }
                    }
                });
                var vat = $(this).data('vat_id');
                var tp = $("#amount" + vat).html();
                var v = $("#vat" + vat).val();
                var v1 = tp * v / 100;
                $("#vatamount" + vat).text(v1.toFixed(2));
                totalamount();
                totalvat();
                grandtotal();
                event.preventDefault();
            })

            $("#tbody").on("change", ".price", function () {
                var c = $(this).data('p_id');
                var p = $("#price" + c).val();
                var q = $("#qty" + c).val();
                var t = p * q;
                $("#amount" + c).html(t.toFixed(2));

                var tp = $("#amount" + c).html();
                var v = $("#vat" + c).val();
                var v1 = tp * v / 100;
                $("#vatamount" + c).html(v1.toFixed(2));

                totalamount();
                totalvat();
                grandtotal();
            })
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
                        <td>
                            <label><b>Select Product</b></label><br>
                        </td>
                        <td>
                            <label><b>Price</b></label><br>
                        </td>
                        <td>
                            <label><b>Qty</b></label><br>
                        </td>
                        <td>
                            <label><b>Amount</b></label><br>
                        </td>
                        <td>
                            <label><b>vat</b></label><br>
                        </td>
                        <td>
                            <label><b>Vat amount</b></label><br>
                        </td>
                        <td align="center">
                            <label><b>Action</b></label><br>
                        </td>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <tr id="R0">
                        <td>
                            <select name="product" id="product0" data-price_id="0" style="width: 150px;"
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
                            <input type="number" name="price" id="price0" data-p_id="0" class="form-control price" style="width: 100px;">
                        </td>
                        <td>
                            <input class="form-control qty" name="qty" value="0" data-qty_id="0" min="0" id="qty0"
                                type="number" style="width: 100px;">
                        </td>
                        <td>
                            <label class="form-control amount" id="amount0" name="amount" type="text" style="width: 100px;">0</label>
                        </td>
                        <td>
                            <input class="form-control vat" name="vat" value="0" data-vat_id="0" min="0" id="vat0"
                                type="number" style="width: 100px;">
                        </td>
                        <td>
                            <label class="form-control vatamount" id="vatamount0" name="vatamount" type="text" style="width: 100px;">0</label>
                        </td>
                        <td align="center" class="">
                            <input type="submit" name="add" id="add" class="add  btn btn-success" value="+">
                            <input type="submit" name="remove" id="remove" class="remove  btn btn-danger" value="-">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="shadow-lg p-1">
                <label class="bg-primary text-white"> Sub Total:- </label>
                <label class="bg-primary mt-1 text-white" id="total_amount">0</label>
                <br> <br>
                <label class="bg-success text-white"> Vat Total:- </label>
                <label class="bg-success text-white" id="total_vat">0</label>
                <br><br>
                <label class="bg-danger text-white"> Total bill:- </label>
                <label class="bg-danger text-white" id="grand_total">0</label>
            </div>
        </form>
    </div>
    <script>

    </script>
</body>

</html>