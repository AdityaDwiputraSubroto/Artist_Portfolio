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
    <link rel="stylesheet" href="../../styles/footer.css" />
    <title>Add Commission</title>
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

    <div class="d-flex justify-content-center mt-5 mb-3">
        <div class="text-center">
            <p class="text-primary" style="font-size: 25px; font-weight: 600;">ADD COMMISSION TYPE</p>
        </div>
    </div>
    
    <div class="d-flex justify-content-center" style="margin-bottom: 100px;">
        <div class="w-25">
            <form action="proses/addCommissionProcess.php" method="POST">
                <div class="mb-3">
                    <label for="commission_name" class="form-label text-primary">COMMISSION NAME</label>
                    <input type="text" class="form-control border border-primary" name="commission_name" id="commission_name" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label text-primary">PRICE</label>
                    <input type="text" class="form-control border border-primary" name="price" id="price" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="form-label text-primary">DESCRIPTION</label>
                    <textarea style="resize: none;" class="form-control border border-primary" name="description" id="description" rows="5" required></textarea>
                </div>
                <div class="d-flex justify-content-around">
                    <button onclick="location.href='CommissionInfoPage.php'; event.preventDefault();" class="btn btn-danger" name="cancel">CANCEL</button> 
                    <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    include '../../components/footer.php';
    ?>
</body>

</html>