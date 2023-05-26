<?php
    session_start();

    if (isset($_SESSION['id_admin'])) {
        echo "
                <script>
                    alert('You are logged in!'); 
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
    <title>Login</title>
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
            <p class="text-primary" style="font-size: 25px; font-weight: 600;">LOGIN ADMIN</p>
        </div>
    </div>
    
    <div class="d-flex justify-content-center" style="margin-bottom: 100px;">
        <div class="w-25">
            <form action="LoginProcess.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label text-primary">USERNAME</label>
                    <input type="text" class="form-control border border-primary" name="username" id="username" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label text-primary">PASSWORD</label>
                    <input type="password" class="form-control border border-primary" name="password" id="password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary" name="submit">LOGIN</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    include '../../components/footer.php';
    ?>
</body>

</html>