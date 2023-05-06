<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles/icons.css" />
  <link rel="stylesheet" href="styles/navbar.css" />
  <link rel="stylesheet" href="styles/footer.css" />
  <title>Home</title>
  <style>
    * {
      padding: 0;
      margin: 0;
      font-family: "Karla", sans-serif;
    }
  </style>
</head>

<body>
  <?php
  include 'components/header.php';
  ?>

  <!-- <?php
        include 'components/navbar.php';
        ?> -->
  <?php
  $activePage = "HOME";
  ?>
  <nav class="navbar">
    <ul>
      <?php
      $navbarItems = array(
        "HOME" => "index.php",
        "GALLERY" => "GalleryPage.php",
        "COMMISSION INFO" => "CommissionInfoPage.php",
        "CONTACT" => "ContactPage.php"
      );

      foreach ($navbarItems as $navName => $navLink) { ?>
        <li><a class=" 
        <?php
        if ($activePage == $navName) {
          echo "active";
        }
        ?>" href="pages/public/<?php echo $navLink ?>"><?php echo $navName ?></a></li>
      <?php } ?>
    </ul>
  </nav>

  <?php
  include 'components/contact-icon.php';
  ?>

  <?php
  include 'components/footer.php';
  ?>
</body>

</html>