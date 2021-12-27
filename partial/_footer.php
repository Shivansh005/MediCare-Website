<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4" data-aos="fade-right">
        <a href="#" class="logo"><span>H</span>ealth<span>G</span>uard.</a>
        <p>
          Welcome! Everyone to this prestigious hospital to get treatment at low
          cost by highly-skilled doctor's and their supporting staffs.
        </p>
      </div>

      <?php if(isset($_SESSION['uname'])){ ?>

      <!-- nav for doctor -->

      <?php if($_SESSION['status'] == 'doctor'){ ?>

      <div class="col-md-4 text-center" data-aos="fade-up">
        <h3>links</h3>
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#facility">facility</a>
        <a href="#review">review</a>
        <a href="patient_appointment.php">patients</a>
        <a href="#post">post</a>
      </div>

      <?php } else if($_SESSION['status'] == 'patient'){ ?>

      <!-- nav for patient -->

      <div class="col-md-4 text-center" data-aos="fade-up">
        <h3>links</h3>
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#facility">facility</a>
        <a href="#review">review</a>
        <a href="#appoint">appointment</a>
        <a href="#post">post</a>
      </div>

      <?php }} else{ ?>

      <!-- general nav  -->

      <div class="col-md-4 text-center" data-aos="fade-up">
        <h3>links</h3>
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#facility">facility</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <a href="#post">post</a>
      </div>

      <?php } ?>


      <div class="col-md-4 text-center" data-aos="fade-left">
        <h3>share</h3>
        <a href="#">facebook</a>
        <a href="#">twitter</a>
        <a href="#">instagram</a>
        <a href="#">github</a>
      </div>
    </div>
  </div>

  <h1 class="credit text-center mx-auto">
    created by <span>Twisted_Blisters</span> | all rights reserved.
  </h1>
</section>