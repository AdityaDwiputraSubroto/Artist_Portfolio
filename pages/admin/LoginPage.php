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
        <div class="w-25 text-center">
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control border border-primary" id="username" placeholder="USERNAME">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control border border-primary" id="password" placeholder="PASSWORD">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">LOGIN</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    include '../../components/footer.php';
    ?>
</body>

</html>