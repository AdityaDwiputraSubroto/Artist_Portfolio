<?php
session_start();

if (!isset($_SESSION['id_admin'])) {
    echo "
                <script>
                    alert('You are not logged in!'); 
                    document.location.href='index.php';
                </script>
            ";

    die();
}
?>

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
    <link rel="stylesheet" href="../../styles/ContactPage.css">
    <title>Contact</title>
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
    $activePage = "CONTACT";
    include '../../components/adminComponents/navbar.php';
    ?>

    <div class="text-center mt-4">
        <p class="text-primary" style="font-size: 25px; font-weight: 600;">CONTACT & INQUIRIES</p>
        <p class="" style="font-size: 18px; font-weight: 600;">Dnuor.nuar@gmail.com</p>
    </div>

    <?php
    include '../../components/contact-icon.php';
    ?>
    <div class="mt-5 mb-5 contact">
        <p class="text-primary" style="font-size: 20px; font-weight: 600;">CONTACT ME</p>
        <div class="container-contact">
            <div style="width:40%;">
                <p class="" style="font-size: 16px; font-weight: 600;">Do you have any questions or job inquiries? Feel free to contact me using this form or by email and I'll be replying as soon as I'm available.</p>
            </div>
            <div style="width:60%;">
                <form action="" id="emailForm">
                    <!-- <div class="d-flex" style="gap:10px;">
                        <input type="text" placeholder="NAME" name="name">
                        <input type="email" placeholder="EMAIL" name="email">
                    </div> -->
                    <input type="text" placeholder="SUBJECT" id="subject" name="subject">
                    <textarea id="message" name="message" rows="5" cols="50" style="resize: none;" placeholder="TYPE YOUR MESSAGE HERE"></textarea>
                    <input class="btn btn-primary" type="submit" name="input" value="SUBMIT" style="font-weight: 600;">
                </form>
            </div>
        </div>
    </div>

    <?php
    include '../../components/footer.php';
    ?>
</body>
<script>
    const emailForm = document.querySelector('#emailForm');
    emailForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const email = "Dnuor.nuar@gmail.com"
        const subject = emailForm.querySelector('#subject').value;
        const message = emailForm.querySelector('#message').value;

        const mailtoLink = `mailto:${email}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(message)}`;

        window.location.href = mailtoLink;
    });
</script>

</html>