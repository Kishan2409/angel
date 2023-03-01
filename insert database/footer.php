<script>
  $(function () {

    $("#sub").click(function () {

     

      $.holdReady( true );
      $("#commentForm").validate({
       
        rules: {
        fn: "required",
        ln: "required",
        dob: "required",
        email: "required",
        phone: {
          required: true,
          digits: true
        },
        ph: { accept: "image/*" }

      }

      });

  })



  })
</script>
</div>
</div>
</div>
</div>
</div>
</section>
</body>

</html>