<?php session_start(); ?>
<header>
  <div class="container">
    <?php if(isset($_SESSION['uname'])){ ?>

    <?php if($_SESSION['status'] == 'patient') { ?>

    <a href="#" class="logo"><span>H</span>ello!
      <?php echo $_SESSION['uname']; ?>
    </a>

    <?php } else if($_SESSION['status'] == 'doctor'){ ?>

    <a href="#" class="logo"><span>H</span>ello! <span>D</span>r.
      <?php echo $_SESSION['uname']; ?>
    </a>

    <?php }} else{ ?>

    <a href="#" class="logo"><span>H</span>ealth<span>G</span>uard.</a>

    <?php } ?>

    <nav class="nav">
      <ul>

        <?php if(isset($_SESSION['uname'])){ ?>

        <!-- nav for doctor -->

        <?php if($_SESSION['status'] == 'doctor'){ ?>

        <li><a href="#home">home</a></li>
        <li><a href="#about">about</a></li>
        <li><a href="#facility">facility</a></li>
        <li><a href="#review">review</a></li>
        <li><a href="patient_appointment.php">patients</a></li>
        <li><a href="#post">post</a></li>
        <li><a href="logout.php" class="log-btn">Logout</a></li>

        <?php } else if($_SESSION['status'] == 'patient'){ ?>

        <!-- nav for patient -->

        <li><a href="#home">home</a></li>
        <li><a href="#about">about</a></li>
        <li><a href="#facility">facility</a></li>
        <li><a href="#review">review</a></li>
        <li><a href="#appoint">appointment</a></li>
        <li><a href="#post">post</a></li>
        <li><a href="logout.php" class="log-btn">Logout</a></li>

        <?php }} else{ ?>

        <!-- general nav  -->

        <li><a href="#home">home</a></li>
        <li><a href="#about">about</a></li>
        <li><a href="#facility">facility</a></li>
        <li><a href="#review">review</a></li>
        <li><a href="#contact">contact</a></li>
        <li><a href="#post">post</a></li>
        <li><a href="login.php" class="log-btn">Login</a></li>

        <?php } ?>

      </ul>
    </nav>

    <div class="fas fa-bars"></div>
  </div>
</header>