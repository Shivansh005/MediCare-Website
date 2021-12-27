<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/customm.css">
  <link rel="stylesheet" href="css/login_style.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form class="sign-in-form login-fm-dt">
          <div class="msg"></div>
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="uname" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="upass" required />
          </div>
          <input type="hidden" value="signin" name="tb_name" />
          <input type="submit" value="Login" class="btn solid" />
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        <form class="sign-up-form login-fm-dt">
          <div class="msg"></div>
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="uname" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="uemail" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="upass" required />
          </div>
          <input type="hidden" value="signup" name="tb_name" />
          <input type="submit" class="btn" value="Sign up" />
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Sign up here to enjoy the facilities of our hospital and proper
            get treatment.
          </p>
          <button class="btn transparent" id="sign-up-btn">Sign up</button>
        </div>
        <img src="images/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Sign in here to enjoy the facilities of our hospital and proper
            get treatment.
          </p>
          <button class="btn transparent" id="sign-in-btn">Sign in</button>
        </div>
        <img src="images/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- login & signup app js -->
  <script src="js/app.js"></script>
  <!-- jQuery cdn js link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- custom jQuery code -->
  <script>
    $(document).ready(function () {
      $(".login-fm-dt").on("submit", function (e) {
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
            if (arr[0] == "login_success") {
              console.log("successful !");
              $("form").trigger("reset");
              window.location.href = "index.php";
            } else if (arr[0] == "signup_success") {
              console.log("successful !");
              $(".msg").addClass('success').removeClass('error').html("Registered Successfully !");
              $(".msg").show(800).delay(600).hide(800);
              $("form").trigger("reset");
            } else if (arr[0] == "fail") {
              console.log("failed !");
              $(".msg").addClass('error').removeClass('success').html("Invalid details !");
              $(".msg").show(400).delay(1000).hide(800);
            }
          },
        });
      });
    });
  </script>
</body>

</html>