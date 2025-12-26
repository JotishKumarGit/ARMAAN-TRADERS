<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARMAAN TRADERS AN MANUFACTURE - Premium INCENSE STICKS Manufacturer</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/style.css">

</head>

<body>

    <!-- header  -->
    <?php include('header.php') ?>

    <!-- award sections  -->
    <section class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">🏅 Awards & Recognition</h2>
            <p class="text-muted">Honored for excellence in Agarbatti Industry</p>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Award 1 -->
            <div class="col-md-6 col-lg-5">
                <div class="card border-0 shadow award-card" data-bs-toggle="modal" data-bs-target="#award1">
                    <img src="./assets/img/urman_g_1.JPG" class="card-img-top award-img" alt="Best Company Award">
                </div>
            </div>

            <!-- Award 2 -->
            <div class="col-md-6 col-lg-5">
                <div class="card border-0 shadow award-card" data-bs-toggle="modal" data-bs-target="#award2">
                    <img src="./assets/img/urman_g_2.JPG" class="card-img-top award-img"
                        alt="Lifetime Membership Award">
                </div>
            </div>

        </div>
    </section>

    <!-- Award 1 Modal -->
    <div class="modal fade" id="award1" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-dark">
                <img src="./assets/img/urman_g_1.JPG" class="img-fluid rounded">
                <div class="p-4 text-white">
                    <h4>Best Company Award</h4>
                    <p class="mb-1">To Armaan Traders An Manufacture</p>
                    <small class="text-warning">
                        By Shri Laxmikant Chandakji<br>
                        Treasurer – Agarbatti Welfare Association
                    </small>
                </div>
            </div>
        </div>
    </div>

    <!-- Award 2 Modal -->
    <div class="modal fade" id="award2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-dark">
                <img src="./assets/img/urman_g_2.JPG" class="img-fluid rounded">
                <div class="p-4 text-white">
                    <h4>Life Time Membership Award</h4>
                    <p class="mb-1">To M Aasif R Makda</p>
                    <small class="text-warning">
                        Armaan Traders An Manufacture<br>
                        Shri Bholanath Agarbatti Welfare Association, Nagpur
                    </small>
                </div>
            </div>
        </div>
    </div>

    <style>
        .award-card {
            cursor: pointer;
            transition: transform .4s ease, box-shadow .4s ease;
        }

        .award-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, .25);
        }

        .award-img {
            height: 350px;
            object-fit: contain;
            padding: 20px;
        }
    </style>

    <!-- footer  -->
    <?php include('footer.php') ?>