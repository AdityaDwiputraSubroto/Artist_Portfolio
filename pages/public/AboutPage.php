<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include '../../components/headLink.php' ?>
    <link rel="stylesheet" href="../../styles/navbar.css" />
    <link rel="stylesheet" href="../../styles/AboutPage.css" />
    <link rel="stylesheet" href="../../styles/footer.css" />
    <title>About</title>
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
    include '../../components/header.php';
    ?>

    <?php
    $activePage = "ABOUT";
    include '../../components/publicComponents/navbar.php';
    ?>

    <div class="d-flex justify-content-center mt-5 mb-3">
        <div class="text-center">
            <p class="text-primary" style="font-size: 25px; font-weight: 600;">ABOUT ME</p>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class="w-25 image">
            <img src="../../assets/img/About.png" alt="">
        </div>
        <div class="w-25 description">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed enim nibh, porttitor tempor suscipit eu, dictum non ligula. Vestibulum scelerisque luctus elit quis tincidunt. Cras dapibus mi eu aliquam finibus. bibendum. Maecenas sodales ut nisi nec suscipit. Maecenas gravida augue vitae felis ullamcorper facilisis.
            </p>
        </div>
    </div>

    <?php
    include '../../components/footer.php';
    ?>
</body>

</html>