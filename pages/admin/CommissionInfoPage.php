<?php
session_start();

if (!isset($_SESSION['id_admin'])) {
    echo "
                <script>
                    alert('You are not logged in!'); 
                    document.location.href='LoginPage.php';
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
    <link rel="stylesheet" href="../../styles/navbar.css" />
    <link rel="stylesheet" href="../../styles/adminStyles/CommissionInfoPage.css" />
    <link rel="stylesheet" href="../../styles/footer.css" />

    <title>Commission Info</title>
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
    $activePage = "COMMISSION INFO";
    include '../../components/adminComponents/navbar.php';
    ?>

    <div class="d-flex justify-content-center mt-5 mb-5">
        <div class="container-commission-info w-75">
            <div class="d-flex justify-content-center mt-3">
                <div class="text-center">
                    <p class="text-primary" style="font-size: 25px; font-weight: 600;">COMMISSION INFO</p>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <div class="text-center">
                    <p class="text-primary" style="font-size: 20px; font-weight: 600;">BEFORE YOU COMMISSION</p>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-2">
                <div class="before-you-commission">
                    <ul>
                        <li>
                            <span style="font-weight: bold;"> DO</span> : Fanart and OC
                        </li>
                        <li>
                            <span style="font-weight: bold;"> DONT </span> : Furry, BL, Mecha, NSFW, Vehicle
                        </li>
                        <li>
                            <span style="font-weight: bold;"> These are only the base price, </span> price may increase depending on how complex the background and character design
                        </li>
                        <li>
                            <span style="font-weight: bold;">20$ for additional character </span>
                        </li>
                        <li>
                            <span style="font-weight: bold;"> 4 times max revision </span> : 3x during sketch and 1x during coloring
                        </li>
                        <li>
                            Payment via <span style="font-weight: bold;">Paypal</span> Half payment after the sketch is approved and the rest after the artwork is complete.
                        </li>
                        <li>
                            The art will be done within 3-7 days
                        </li>
                        <li>
                            DM me if you are interested or want to ask more question!
                        </li>
                    </ul>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <div class="text-center">
                    <p class="text-primary" style="font-size: 20px; font-weight: 600;">TYPES OF COMMISSION</p>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <a href="AddCommissionPage.php">
                        <button class="btn btn-primary">ADD COMMISSION</button>
                    </a>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <div class="types-of-commission mb-3">
                    <ul>
                        <?php
                        include '../../proses/Connection.php';
                        $query = "SELECT * FROM commission_info";
                        $result = $conn->query($query);
                        $loop = 1;
                        while ($data = $result->fetch_assoc()) {
                            //$image = urlencode($data['nama_gambar']);
                            if ($loop != 1) {
                                echo "<hr class='mx-5'>";
                            }

                        ?>
                            <div class="overlay-gray">
                                <div class="overlay-confirm">
                                    <p>Delete Commission?</p>
                                    <div class="confirm-buttons">
                                        <button class="button-cancel">
                                            Cancel
                                        </button>
                                        <a href="proses/deleteCommissionProcess.php?id_commission_info=<?= $data['id_commission_info']?>">
                                            <div class="button-delete">Delete</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <li>
                                <div class="card mb-3 mx-5">
                                    <div class="row g-0 position-relative">
                                        <a class="triple-dots"><img src="../../assets/img/icons/vertical-dots.png" alt=""></a>
                                        <div class="overlay-triple-dots">
                                            <a href="EditCommissionPage.php?id_commission_info=<?= $data['id_commission_info']?>">
                                                <button class="item">Edit</button>
                                            </a>

                                            <button class="item delete">Delete</button>

                                        </div>
                                        <div class="col-md-4">
                                            <div id="carousel<?php echo $loop; ?>" class="carousel slide">
                                                <div class="carousel-inner">
                                                    <?php
                                                    include '../../proses/Connection.php';
                                                    $id_commission = $data['id_commission_info'];
                                                    $num = 0;
                                                    $query = "SELECT * FROM gallery WHERE id_commission_info = $id_commission";
                                                    $resultImage = $conn->query($query);
                                                    while ($dataImage = $resultImage->fetch_assoc()) {
                                                        $image = urlencode($dataImage['nama_gambar']);

                                                    ?>
                                                        <div class="carousel-item <?php if ($num == 0) {
                                                                                        echo "active";
                                                                                    }
                                                                                    $num++; ?>">
                                                            <img src="../../assets/img/gallery/<?php echo "$image" ?>" class="d-block w-100" alt=<?php echo "$image" ?>>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                                <?php if ($num > 1) { ?> 
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?php echo $loop; ?>" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel<?php echo $loop; ?>" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-md-8 ps-5">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3"><?php echo $data['jenis_commission']; ?><br><?php echo $data['harga']; ?>$</h5>
                                                <p class="card-text"><?php echo $data['deskripsi']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php $loop++;
                        }
                        ?>
                        <!-- <li>
                            <div class="card mb-3 mx-5">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <div id="carousel1" class="carousel slide">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="../../assets/img/Gambar1.png" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="../../assets/img/Gambar2.png" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="../../assets/img/Gambar3.png" class="d-block w-100" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-8 ps-5">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">HALF BODY<br>200$</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quasi architecto odit, sunt iste distinctio culpa illo maxime velit ea repellendus similique quia mollitia ullam debitis aperiam quo labore veniam possimus, esse porro? Expedita, neque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <hr class="mx-5">

                        <li>
                            <div class="card mb-3 mx-5">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <div id="carousel2" class="carousel slide">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="../../assets/img/Gambar1.png" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="../../assets/img/Gambar2.png" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="../../assets/img/Gambar3.png" class="d-block w-100" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-8 ps-5">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">HALF BODY<br>200$</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quasi architecto odit, sunt iste distinctio culpa illo maxime velit ea repellendus similique quia mollitia ullam debitis aperiam quo labore veniam possimus, esse porro? Expedita, neque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php
    include '../../components/footer.php';
    ?>

    <script>
        //triple dots overlay
        const dotsButton = document.querySelectorAll('.triple-dots');
        const overlayDots = document.querySelectorAll('.overlay-triple-dots');

        dotsButton.forEach((button, index) => {
            button.addEventListener('click', (event) => {
                event.stopPropagation();
                overlayDots[index].style.display = 'block';
            });
        });

        document.addEventListener('click', (event) => {
            overlayDots.forEach((overlayDots) => {
                if (!overlayDots.contains(event.target)) {
                    overlayDots.style.display = 'none';
                }
            });
        });

        overlayDots.forEach((overlayDots) => {
            overlayDots.addEventListener('click', (event) => {
                if (event.target === overlayDots) {
                    overlayDots.style.display = 'none';
                }
            });
        });

        // cancelButtons.forEach((button) => {
        //     button.addEventListener('click', (event) => {
        //         const overlayDelete = event.target.closest('.overlay-delete');
        //         overlayDelete.style.display = 'none';
        //     });
        // });
    </script>

    <script>
        //delete confirmation overlay
        const deleteButton = document.querySelectorAll('.delete');
        const cancelButton = document.querySelectorAll('.button-cancel');
        const overlayGray = document.querySelectorAll('.overlay-gray');
        const overlayConfirm = document.querySelectorAll('.overlay-confirm');

        deleteButton.forEach((button, index) => {
            button.addEventListener('click', (event) => {
                // event.stopPropagation();
                overlayGray[index].style.display = 'block';
                overlayConfirm[index].style.display = 'block';
            });
        });


        cancelButton.forEach((button, index) => {
            button.addEventListener('click', (event) => {
                overlayGray[index].style.display = 'none';
                overlayConfirm[index].style.display = 'none';
            });
        });
    </script>
</body>

</html>