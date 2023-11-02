<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- my style -->
    <link rel="stylesheet" href="css/homepage.css">

    <!-- log tittle -->
    <link rel="icon" href="assets/img/logo tittle.png" type="image/x-icon">
    <title>MY TEE</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container mt-3">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo tittle.png" alt="" width="30" class="d-inline-block align-text-top">
                MY TEE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item  mx-2">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="homepage.php">Partner</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div>
                    <form action="d-flex">
                        <a href="login.php" class="button-primary">Login</a>
                        <a href="register.php" class="button-secondary">Regist</a>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- hero -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>
                        Temukan Event Mu
                    </h2>
                    <p>Jangan Lewatkan Kesempatan Mu untuk mendapatkan eksperimen yang tak terlupakan, dengan event - event seru bersama MYTEE</p>
                </div>
                <div class="col-10 mx-auto">
                    <div class="input-group input-cari mb-3">
                        <input type="text" class="form-control" placeholder="cari event mu" aria-label="cari event mu" aria-describedby="button-addon2">
                        <button class="button-primary" type="button" id="button-addon2">search</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our previous work -->
    <section id="work" class="mt-5 overflow-hidden">
        <div class="container ">
            <div class="row mb-4">
                <div class="col-9">
                    <h2>our previous work</h2>
                </div>
                <div class="col-3">
                    <button class="button-lainnya">
                        lihat semua..
                        <img src="assets/img/Vector.png" alt="" class="ms-4">
                    </button>
                </div>
            </div>

            <div class="container position-relative">
                <div class="row">
                    <div class="col-12 d-flex justify-content-start">
                        <div class="card-work me-3 position-relative">
                            <img src="assets/img/john-mayer 1.png" alt="">

                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>
                                        John Mayer
                                    </h5>
                                    <span>5 April 2019</span>
                                    <H6>ASIA TOUR 2019</H6>
                                    <button>lihat</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-work me-3 position-relative">
                            <img src="assets/img/arianaa 1.png" alt="">

                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>
                                        Ariana Grande
                                    </h5>
                                    <span>26 Agustus 2017</span>
                                    <H6>The Honeymoon Tour</H6>
                                    <button>lihat</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-work me-3 position-relative">
                            <img src="assets/img/WayV-fanmeeting-Artwork-Jakarta-SQUARE 1.png" alt="">

                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>
                                        WayV : Phantom
                                    </h5>
                                    <span>29 April 2023</span>
                                    <H6>fanmeeting Tour</H6>
                                    <button>lihat</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-work me-3 position-relative">
                            <img src="assets/img/vlive 1.png" alt="">

                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>
                                        Isyana Sarasvati
                                    </h5>
                                    <span>29 Oktober 2020</span>
                                    <H6>Fan Meeting</H6>
                                    <button>lihat</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-work me-3 position-relative">
                            <img src="assets/img/SQUARE 1.png" alt="">

                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>
                                        Red Velvet
                                    </h5>
                                    <span>20 Mei 2023</span>
                                    <H6>RtoV 4th Concert</H6>
                                    <button>lihat</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="button-kekiri position-absolute start-0 top-50 translate-middle-y">
                    <img src="assets/img/kekiri.png" alt="">
                </button>
                <button class="button-kekanan position-absolute end-0 top-50 translate-middle-y">
                    <img src="assets/img/Vector.png" alt="">
                </button>
            </div>
        </div>
    </section>

    <!-- event -->
    <section id="event">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2>Event</h2>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="assets/img/sod.png" alt="">
                        <div class="card-body">
                            <h4>Sounds of Downtown Vol.5</h4>
                            <p class="mb-4">Surabaya <br> <span class="text-danger">05 - 06 Agustus 2023</span></p>
                        </div>

                        <div class="card-harga">
                            <span>
                                <h4>IDR 167.900</h4>
                                <p>include tax</p>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="assets/img/taylor.png" alt="">
                        <div class="card-body">
                            <h4>Taylor Swift The Eras Tour</h4>
                            <p class="mb-4">Jakarta Selatan <br> <span class="text-danger">21 - 22 Februari 2024</span></p>
                        </div>

                        <div class="card-harga">
                            <span>
                                <h4>IDR 5.224.628</h4>
                                <p>include tax</p>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="assets/img/NCT-Dream.png" alt="">
                        <div class="card-body">
                            <h4>NCT DREAM TOUR ‘THE DREAM SHOW2 : In A DREAM’ in JAKARTA</h4>
                            <p class="mb-4">Tanggerang <br> <span class="text-danger">04 - 06 Agustus 2023</span></p>
                        </div>

                        <div class="card-harga">
                            <span>
                                <h4>IDR 1.000.000</h4>
                                <p>include tax</p>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="assets/img/raisa.png" alt="">
                        <div class="card-body">
                            <h4>Raisa: Live in Concert</h4>
                            <p class="mb-4">Jakarta Selatan <br> <span class="text-danger">23 Juli 2023</span></p>
                        </div>

                        <div class="card-harga">
                            <span>
                                <h4>IDR 200.00</h4>
                                <p>include tax</p>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="assets/img/nct 127.png" alt="">
                        <div class="card-body">
                            <h4>NCT 127 2nd Tour Neo City : Jakarta The Link</h4>
                            <p class="mb-4">Tanggerang <br> <span class="text-danger">04 - 05 November 2023</span></p>
                        </div>

                        <div class="card-harga">
                            <span>
                                <h4>IDR 1.045.000</h4>
                                <p>include tax</p>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="assets/img/honne 1.png" alt="">
                        <div class="card-body">
                            <h4>HONNE ASIA TOUR 2023</h4>
                            <p class="mb-4">Jakarta Utara <br> <span class="text-danger">07 Juli 2023</span></p>
                        </div>

                        <div class="card-harga">
                            <span>
                                <h4>IDR 1.188.000</h4>
                                <p>include tax</p>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>