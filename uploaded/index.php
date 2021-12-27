<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>website - html and css</title>
  <!-- all important css links  -->
  <?php include 'partial/_css_links.php'; ?>
</head>

<body>
  <!-- nav section start -->
  <?php include 'partial/_nav.php'; ?>

  <!-- home section start -->
  <?php include 'partial/_home.php'; ?>

  <!-- about section start -->
  <?php include 'partial/_about.php'; ?>

  <!-- facility section start -->
  <?php include 'partial/_facility.php'; ?>

  <!-- review section start -->
  <?php include 'partial/_review.php'; ?>

  <!-- counter section start -->
  <?php include 'partial/_counter.php'; ?>

  <!-- appointment section start -->
  <?php if(isset($_SESSION['uname']) && $_SESSION['status'] == 'patient'){ ?>
  <?php include 'partial/_appointment.php'; ?>
  <?php } ?>

  <!-- post section start -->
  <?php include 'partial/_post.php'; ?>

  <!-- footer section start -->
  <?php include 'partial/_footer.php'; ?>

  <!-- all important js links -->
  <?php include 'partial/_js_links.php'; ?>

</body>

</html>