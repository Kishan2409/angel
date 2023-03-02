<script>
  $(function () {
    $(".chaking").keyup(function(e){
      var p=$(".chaking").val();
      //
      $.ajax({
        type: "POST",
        url: "controller.php",
        data: {
          "check_submit_btn":1,
          "phone":p

        },
        success: function (response) {
          $("#demo").html(response);
          response.preventDefault();
        }
      });
    })
    $("#sub").click(function () {
      $("#commentForm").validate({
        rules: {
          fn: "required",
          ln: "required",
          dob: "required",
          email: "required",
          phone: {
            required: true,
            digits: true,
          },
          ph: { accept: "image/*" }
        }
      });
    });
  });
</script>
</div>
</div>
</div>
</div>
</div>
</section>
</body>

</html>