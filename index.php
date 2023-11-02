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
    <link rel="stylesheet" href="css/style.css">

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
                        <button class="button-primary"><a href="homepage.php">Login</a></button>
                        <button class="button-secondary"><a href="register.php">Regist</a></button>
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

    <!-- about us-->
    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>About Us</h2>
                    <span class="sub-tittle">MYTEE menjadikan hidup Mu lebih seru ! </span>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 text-center">
                    <div class="card-aboutus">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/img/5-stars 1 1.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Innovative</h3>
                        <p class="mt-3">MYTEE menjadi trobosan baru dalam dunia jual beli tiket dengan mengutamakan kenyamanan customer</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-aboutus">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/img/icons8-hand-shake-64 1.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Quality</h3>
                        <p class="mt-3">memiliki dan menetapkan sebuah standar dengan menempatkan hati & jiwa dalam semua pekerjaan kami, yang hasilnya kemudian tercermin dari kualitas acara kami</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-aboutus">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/img/icons8-data-protection-32 1.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Reliable</h3>
                        <p class="mt-3">Kami memiliki tim berpengalaman yang berkomitmen penuh untuk memenuhi harapan mitra dengan memberikan yang terbaik</p>
                    </div>
                </div>
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

            <div class="row">
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

    <!-- contact -->
    <section id="contact">
        <div class="container-fluid overlay h-100"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Jika Anda memiliki pertanyaan, Anda dapat menghubungi kami.
                    </h3>
                    <div class="kontak">
                        <h6>kontak</h6>
                        <div class="mb-3 d-flex align-items-center">
                            <div>
                                <img src="assets/img/alamat.png" alt="">
                            </div>
                            <a href="#">Jl. Klampis Indah NO.27 -27 Sukolilo Surabaya Indonesia</a>
                        </div>

                        <div class="mb-3">
                            <img src="assets/img/telefon.png" alt="">
                            <a href="#">0813-6565-2023</a>
                        </div>

                        <div class="mb-3">
                            <img src="assets/img/email.png" alt="">
                            <a href="#">mytee@gmail.com</a>
                        </div>
                    </div>
                    <h6>Social Media</h6>
                    <a href="#" class="me-3"><img src="assets/img/facebook.png" alt=""></a>
                    <a href="#" class="me-3"><img src="assets/img/twitter.png" alt=""></a>
                    <a href="#" class="me-3"><img src="assets/img/akar-icons_instagram-fill.png" alt=""></a>
                    <a href="#" class="linkmytee">MYTEE</a>
                </div>

                <div class="col-md-6">
                    <div class="card-kontak w-100">
                        <form>
                            <h2>ada pertanyaan ?</h2>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Pertanyaan...</label>
                            </div>

                            <button type="submit" class="button-kontak">kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="d-flex align-items-center position-relative ">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 position-relative">
                        <span class="position-absolute top-10 start-50 translate-middle text-center w-30">Official Partner <br></span>
                        <div class="foto-partner mt-3">
                            <img src="assets/img/wonderfull indonesia 1.png" alt=""></div>
                    </div>

                    <div class="col-md-6 position-relative">
                        <span class="position-absolute top-10 start-50 translate-middle text-center w-100">Payment Method <br></span>
                        <div class="mt-3">
                            <img src="assets/img/Mandiri 1.png" alt="">
                            <img src="assets/img/R 1.png" alt="">
                        </div>
                    </div>

                    <div>
                        <div class="row position-absolute copyright start-50 translate-middle">
                            <div class="col-12 mt-10">
                                <p>Copyright chatarina & gamaliel All Right Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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