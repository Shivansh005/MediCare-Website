<!-- jQuery cdn js link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- magnific popup js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- aos cdn js link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<!-- custom js link  -->
<script src="js/scroll.js"></script>
<!-- load on scroll -->
<script>
  AOS.init({
    duration: 1000,
    delay: 400,
  });

  // <!-- appointment form submit jquery -->

  $(document).ready(function () {
    $("#p_appoint").on("submit", function (e) {
      e.preventDefault();
      var formData = new FormData(this);
      $.ajax({
        url: "query.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
          console.log(data);
          var arr = JSON.parse(data);
          if (arr[0] == "success") {
            console.log("successful !");
            $("#msg-appoint").addClass('success').removeClass('error').html("Appointment Successfully !");
              $("#msg-appoint").show(800).delay(600).hide(800);
            $("#p_appoint").trigger("reset");
          }

          else if (arr[0] == "fail") {
            console.log("failed !");
            $("#msg-appoint").addClass('error').removeClass('success').html("Kindly check your details !");
              $("#msg-appoint").show(800).delay(600).hide(800);
          }

        }
      });
    });
  });
</script>