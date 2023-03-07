<script>
  $(function () {
    // $(".chaking").keyup(function (e) {
    //   var p = $(".chaking").val();
    //   //load ajax
    //   $.ajax({
    //     type: "POST",
    //     url: "controller.php",
    //     data: {
    //       //"check_submit_btn": 1,
    //       "phone": p
    //     },
    //     success: function (event) {
    //       $("#demo").html(event);
    //       // //alert('Something was wrong')
    //        event.preventDefault();
    //     }
    //   });
    // });
    $("#sub").click(function () {

      $("#commentForm").validate({
        rules: {
         /* fn: "required",
          ln: "required",
          dob: "required",
          email: "required",*/
          phone: {
            required: true,
            digits: true,
            remote: {
              url:'controller.php',
              type:'POST', 
              data: {
                phone:function(){
                  return $('#phone').val();
                }
              }
            }
          },
          //ph: { accept: "image/*" }
        }, 
        messages:{
          phone:{
            remote:'Number already exists',
          }
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