<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Portal OPD</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer-navbar/">



    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?= base_url() ?>/bootstrap/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="<?= base_url() ?>/bootstrap/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="<?= base_url() ?>/bootstrap/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="<?= base_url() ?>/bootstrap/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="<?= base_url() ?>/bootstrap/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="<?= base_url() ?>/bootstrap/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- style row button -->
    <style>
        .row-centered {
            text-align: center;

        }

        .button {
            background-color: #4CAF50;
            /* Hijau */
            border: none;
            color: white;
            padding: 40px 80px;
            text-align: top;
            text-decoration: none;
            display: inline-block;
            height: 90%;
            width: 80%;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button1 {
            font-size: 24px;
        }

        .button2 {
            font-size: 24px;
        }

        .button3 {
            font-size: 24px;
        }

        .button4 {
            font-size: 24px;
        }

        .button5 {
            font-size: 24px;
        }

        .button6 {
            font-size: 24px;
        }
    </style>
    <!-- style row button -->


    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Portal Resmi Kabupaten Intan Jaya</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul> -->
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main class="flex-shrink-10">


        <div class="container shadow p-3 mb-5 bg-body rounded">



            <div class="row mt-5" style="height: 50%;">
                <div class="col-md-7" style="height: 50%;">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height: 50%;">
                                <img src="<?= base_url() ?>/bootstrap/gambar/satu.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 50%;">
                                <img src="<?= base_url() ?>/bootstrap/gambar/dua.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 50%;">
                                <img src="<?= base_url() ?>/bootstrap/gambar/tiga.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="<?= base_url() ?>/bootstrap/gambar/peta_intan_jaya.jpg" class="d-block w-100">
                </div>
            </div>


            <br>
            <!-- </div> end row 2 -->
            <div class="row">
                <div class="col-md-3">
                    <img src="<?= base_url() ?>/bootstrap/gambar/user_satu.jpg" class="d-block w-100">
                </div>
                <div class="col-md-6">
                    <p class="fw-bold">VISI</p>
                    <p class="fst-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Q
                        uasi accusantium repellat perferendis labore ut facere nulla suscipit nisi neque, temporibus quisquam!
                        Inventore aut maiores iste totam corporis ullam, molestiae est.</p>
                    <p class="fw-bold">MISI</p>
                    <p class="fst-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Q
                        uasi accusantium repellat perferendis labore ut facere nulla suscipit nisi neque, temporibus quisquam!
                        Inventore aut maiores iste totam corporis ullam, molestiae est.</p>
                </div>
                <div class="col-md-3">
                    <img src="<?= base_url() ?>/bootstrap/gambar/user_satu.jpg" class="d-block w-100">
                </div>
            </div>
            <!-- </div> end row 2 -->
            <br>
            <div class="row">
                <!--div row 3 -->
                <div class="col-md-7">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= base_url() ?>/bootstrap/gambar/satu.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url() ?>/bootstrap/gambar/dua.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url() ?>/bootstrap/gambar/tiga.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-md-5">
                   
                </div>


            </div>
            <!--div row 3 -->

            <br>
            <!-- div row 4 -->
            <div class="row justify-content-start">
                <div class="col-4">
                    <h5><b>Album Foto</b></h5>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-3">
                    <img src="<?= base_url() ?>/bootstrap/gambar/satu.jpg" class="img-thumbnail h-100" alt="...">

                </div>
                <div class="col-3">
                    <img src="<?= base_url() ?>/bootstrap/gambar/dua.jpg" class="img-thumbnail h-100" alt="...">
                </div>
                <div class="col-3">
                    <img src="<?= base_url() ?>/bootstrap/gambar/tiga.jpg" class="img-thumbnail h-100" alt="...">
                </div>
                <div class="col-3">
                    <img src="<?= base_url() ?>/bootstrap/gambar/empat.jpg" class="img-thumbnail h-100" alt="...">
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col text-end">
                    <button type="button" class="btn btn-primary" id="liveToastBtn">Selengkapnya</button>
                </div>


            </div>
            <!-- div row 4 -->

            <br>
            <!-- div row 5 -->
            <div class="row justify-content-start">
                <div class="col-4">
                    <h5><b>Album Video</b></h5>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?= base_url() ?>/bootstrap/video/video_satu.mp4" allowfullscreen></iframe>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?= base_url() ?>/bootstrap/video/video_satu.mp4" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3">
                    <iframe class="embed-responsive-item" src="<?= base_url() ?>/bootstrap/video/video_satu.mp4" allowfullscreen></iframe>
                </div>
                <div class="col-md-3">
                    <iframe class="embed-responsive-item" src="<?= base_url() ?>/bootstrap/video/video_satu.mp4" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col text-end">
                    <button type="button" class="btn btn-primary" id="liveToastBtn">Selengkapnya</button>
                </div>
            </div>
            <!-- div row 5 -->


            <br>
            <!-- div row 6 -->
            <div class="row row-centered">
                <div class=" col-md-4 col-centered">

                    <button class="button button1">Mengenal Intan Jaya</button>

                </div>

                <div class="col-md-4 col-centered">
                    <button class="button button2">Visi & Misi</button>
                </div>

                <div class="col-md-4 col-centered">
                    <button class="button button3">Informasi Publik</button>
                </div>
                <div class=" col-md-4 col-centered">

                    <button class="button button4">Struktur Organisasi</button>

                </div>

                <div class="col-md-4 col-centered">
                    <button class="button button5">Profil penjabat</button>
                </div>

                <div class="col-md-4 col-centered">
                    <button class="button button6 btn btn-info">Protal Perangkat Daerah</button>
                </div>


            </div>
            <!-- div row 6 -->



        </div> <!-- container -->



    </main>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Sosial Media</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <img src="<?= base_url() ?>/bootstrap/icon/icons/instagram.svg" alt="Bootstrap" width="32" height="32">
                </a>
                <a href="" class="me-4 text-reset">
                    <img src="<?= base_url() ?>/bootstrap/icon/icons/whatsapp.svg" alt="Bootstrap" width="32" height="32">
                </a>
                <a href="" class="me-4 text-reset">
                    <img src="<?= base_url() ?>/bootstrap/icon/icons/twitter.svg" alt="Bootstrap" width="32" height="32">
                </a>
                <a href="" class="me-4 text-reset">
                    <img src="<?= base_url() ?>/bootstrap/icon/icons/facebook.svg" alt="Bootstrap" width="32" height="32">
                </a>


            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>INTAN JAYA
                        </h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Corrupti exercitationem, harum asperiores illum ratione architecto earum explicabo? Officia incidunt,
                            veritatis odio eum porro adipisci consectetur error culpa voluptatum recusandae optio!
                        </p>
                    </div>
                    <!-- Grid column -->


                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            KONTAK
                        </h6>
                        <p><i class="fas fa-home me-3">
                                <img src="<?= base_url() ?>/bootstrap/icon/icons/house-fill.svg" alt="Bootstrap" width="25" height="25">
                            </i> Intan Jaya, NY 10012, INA</p>
                        <p>
                            <i class="fas fa-envelope me-3">
                                <img src="<?= base_url() ?>/bootstrap/icon/icons/info-circle-fill.svg" alt="Bootstrap" width="25" height="25">
                            </i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3">
                                <img src="<?= base_url() ?>/bootstrap/icon/icons/telephone-fill.svg" alt="Bootstrap" width="25" height="25">
                            </i> + 01 234 567 88</p>

                        <p><img src="<?= base_url() ?>/bootstrap/icon/icons/telephone-fill.svg" alt="Bootstrap" width="25" height="25">
                            <i class="fas fa-print me-3"></i> + 01 234 567 89
                        </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Intan Jaya</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- <footer class="footer mt-auto py-3 bg-primary">
        <div class="container">
            <span class="text-ligth">Place sticky footer content here.</span>
            <span class="text-ligth">Place sticky footer content here.</span>
            <span class="text-ligth">Place sticky footer content here.</span>
            <span class="text-ligth">Place sticky footer content here.</span>
        </div>
    </footer> -->


    <script src="<?= base_url() ?>/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>