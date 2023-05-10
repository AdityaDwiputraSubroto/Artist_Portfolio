<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include '../../components/headLink.php' ?>
    <link rel="stylesheet" href="../../styles/navbar.css" />
    <link rel="stylesheet" href="../../styles/CommissionInfoPage.css" />
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
    include '../../components/publicComponents/navbar.php';
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
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eius incidunt possimus similique veniam dolorem maiores atque voluptatibus, est velit, saepe et ipsa quibusdam sequi.
                        </li>
                        <li>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores maiores ipsum deserunt at architecto error ratione quos! Incidunt aut, sed consectetur neque ullam est animi!
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nesciunt sunt error? Eius beatae eum libero sunt ut suscipit nostrum cum aperiam cupiditate ad? Corporis.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <div class="text-center">
                    <p class="text-primary" style="font-size: 20px; font-weight: 600;">TYPES OF COMMISSION</p>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <div class="types-of-commission mb-3">
                    <ul>
                        <li>
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
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php
    include '../../components/footer.php';
    ?>
</body>

</html>