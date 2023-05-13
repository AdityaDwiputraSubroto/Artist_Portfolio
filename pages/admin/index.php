<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include '../../components/headLink.php' ?>
    <link rel="stylesheet" href="../../styles/icons.css" />
    <link rel="stylesheet" href="../../styles/navbar.css" />
    <link rel="stylesheet" href="../../styles/footer.css" />
    <link rel="stylesheet" href="../../styles/HomePage.css">
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
    include '../../components/header.php';
    ?>

    <?php
    $activePage = "HOME";
    include '../../components/publicComponents/navbar.php';
    ?>

    <?php
    include '../../components/contact-icon.php';
    ?>
    <div class="mt-4 position-relative">
        <div class="scroll-images">
            <div class="image"> <img src="../../assets/img/Gambar2.png" class="" alt="..."></div>
            <div class="image"> <img src="../../assets/img/Gambar1.png" class="" alt="..."></div>
            <div class="image"> <img src="../../assets/img/Gambar3.png" class="" alt="..."></div>
            <div class="image"> <img src="../../assets/img/Gambar1.png" class="" alt="..."></div>
            <div class="image"> <img src="../../assets/img/Gambar3.png" class="" alt="..."></div>
            <div class="image"> <img src="../../assets/img/Gambar2.png" class="" alt="..."></div>
            <div class="image"> <img src="../../assets/img/Gambar1.png" class="" alt="..."></div>
            <div class="image"> <img src="../../assets/img/Gambar3.png" class="" alt="..."></div>
        </div>
        <button class="arrow left-arrow"><img class="rotate-180" src="../../assets/img/icons/right-arrow.png" alt="left-arrow">;</button>
        <button class="arrow right-arrow"><img src="../../assets/img/icons/right-arrow.png" alt="right-arrow">;</button>
    </div>

    <?php
    include '../../components/footer.php';
    ?>
</body>
<script>
    const scrollImages = document.querySelector('.scroll-images');
    const leftArrow = document.querySelector('.left-arrow');
    const rightArrow = document.querySelector('.right-arrow');

    leftArrow.addEventListener('click', () => {
        scrollImages.scrollLeft -= 300;
    });

    rightArrow.addEventListener('click', () => {
        scrollImages.scrollLeft += 300;
    });

    scrollImages.addEventListener('scroll', () => {
        if (scrollImages.scrollLeft === 0) {
            leftArrow.classList.add('disabled');
        } else {
            leftArrow.classList.remove('disabled');
        }
        if (scrollImages.scrollLeft + scrollImages.clientWidth === scrollImages.scrollWidth) {
            rightArrow.classList.add('disabled');
        } else {
            rightArrow.classList.remove('disabled');
        }
    });
</script>

</html>