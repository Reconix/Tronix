<!DOCTYPE html>
<html lang="en">

<head>
  <!--=:: Meta Stuff ::=-->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="A basic, simple, clean theme.">
  <meta name="keywords" content="simple, clean, basic">
  <meta name="author" content="Reconix">

  <!--=:: Title ::=-->
  <title>Simplix</title>

  <!--=:: Favicons ::=-->

  <!--=:: CSS Dependencies ::=-->
  <link href="<?= THEME_DIR ?>assets/bootstrap/bootstrap.min.css" rel="stylesheet">

  <!--=:: CSS Theme Syles ::=-->
  <link href="<?= THEME_DIR ?>assets/css/style.css" rel="stylesheet">

  <!--=:: Fonts ::=-->
  <link href="<?= THEME_DIR ?>assets/bootstrap/bootstrap-icons.css" rel="stylesheet">

</head>

<body>

<?php
 /*

 We might do somthing with you later...

  <!--=:: Top Bar ::=-->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@simplex.net">info@simplex.net</a>
        <i class="bi bi-phone-fill phone-icon"></i> 12345678912
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>
*/
?>

  <?php
    // Template::partials('partials/header', $data)
    // Don't think partials work in themes so a simple include should do
    include_once('inc/header.php');
  ?>

  <!--=:: Carousel Slider ::=-->

  <!--=:: Content Section ::=-->

  <main id="main-content">
    <?= Template::display($data) ?>
  </main>

<main>

  <?php include_once('inc/footer.php');?>

  <!--=:: JS Dependencies ::=--->
  <script src="<?= THEME_DIR ?>assets/bootstrap/bootstrap.bundle.min.js"></script>

  <!--=:: JS Theme ::=--->

</body>
</html>
