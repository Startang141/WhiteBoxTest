<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panda-ecommerce</title>
    <!-- Bootstrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- costomize style -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- header start -->

    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

            <div class="container">
                <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt=""></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Petik">Petik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Pukul">Pukul</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Tiup">Tiup</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Subscribe">Subscribe</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- imsge slider -->

        <section class="container mt-5">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row p-5 panda-bg-info d-flex align-items-center">
                            <div class="col-lg-7">
                                <h1>Cort CR200 Electric Guitar</h1>
                                <p>The Classic Rock Series delivers the look, feel and performance of the much sought-after vintage instruments from the Golden Era of electric guitars</p>
                                <h1 class=" text-panda">Rp3.830.000</h1>
                                <button class="panda-button-bye-now">Buy Now</button>
                            </div>
                            <div class="col-lg-5">
                                <img src="assets/images/banner-images/banner1.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row p-5 panda-bg-info d-flex align-items-center">
                            <div class="col-lg-7">
                                <h1>Yamaha Drum Rydeen Set</h1>
                                <p>The level of equipment and manufacturing techniques found in Yamaha’s Rydeen 5-Piece Drum Set easily equals that of kits costing hundreds more.</p>
                                <h1 class=" text-panda">Rp10.990.000</h1>
                                <button class="panda-button-bye-now">Buy Now</button>
                            </div>
                            <div class="col-lg-5">
                                <img src="assets/images/banner-images/banner2.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row p-5 panda-bg-info d-flex align-items-center">
                            <div class="col-lg-7">
                                <h1>Yamaha YSL-891Z Trombone</h1>
                                <p>Student trombones need to be reliable and well made due to the importance of the slides.</p>
                                <h1 class=" text-panda">Rp45.640.000</h1>
                                <button class="panda-button-bye-now">Buy Now</button>
                            </div>
                            <div class="col-lg-5">
                                <img src="assets/images/banner-images/banner3.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </section>

    </header>

    <main>

        <!-- categories section -->

        <section class="container">
            <div class="row g-5 my-4  categories">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="p-3 rounded-3 bg-warning d-flex align-items-center justify-content-between">
                        <h1 class="text-white">Petik</h1>
                        <img src="assets/images/categories/petik.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="p-3 rounded-3 panda-bg-success d-flex align-items-center justify-content-between">
                        <h1 class="text-white">Pukul</h1>
                        <img src="assets/images/categories/pukul.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="p-3 rounded-3 bg-primary d-flex align-items-center justify-content-between">
                        <h1 class="text-white">Tiup</h1>
                        <img src="assets/images/categories/tiup.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- Petik container -->

        <section class="container my-5" id="Petik">
            <div class="row  gx-5 mb-4 ">
                <h2 class="mt-5">Alat Musik Petik</h2>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="assets/images/petik/gitar1.jpg" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Cort AD-810-OP Acoustic Guitar</h4>
                            <p class="card-text">Cort’s oldest acoustic series, the Standard Series defines superb performance and value for the money. 
                                The Standard Series guitars are affordable but offer good solid performance for beginners 
                                and hobbyists alike in a variety of models with different types of features for any playing situation.</p>
                            <h4>Rp1.110.000</h4>
                            <button class="panda-button-bye-now">Buy Now>></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="assets/images/petik/gitar2.jpg" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Cort CR100 Electric Guitar </h4>
                            <p class="card-text">The Classic Rock Series delivers the look, feel and performance of the much sought-after 
                                vintage instruments from the Golden Era of electric guitars. At the heart of each CR Series guitar is the specially designed ClassicRocker pickups for an authentic vintage rock sound and response.</p>
                            <h4>Rp2.710.000</h4>
                            <button class="panda-button-bye-now">Buy Now>></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="assets/images/petik/gitar3.jpg" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Fender Grace VanderWaal Moonlight Soprano Ukulele</h4>
                            <p class="card-text">Grace-fully packed uke is dressed to impress.Inspired by the soprano ukulele that accompanied Grace VanderWaal as 
                                she learned to play, the Grace VanderWaal Moonlight Soprano Ukulele is a marvelous introduction to this easy play</p>
                            <h4>Rp1.650.000</h4>
                            <button class="panda-button-bye-now">Buy Now>></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pukul container -->

        <section class="container my-5" id="Pukul">
            <div class="row  gx-5 ">
                <h2 class="mt-5">Alat Musik Pukul</h2>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="assets/images/pukul/drum1.jpg" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Behringer XD8USB 8-Piece Electronic Drum Set</h4>
                            <p class="card-text">Behringer XD8USB 8-piece Electronic Drum Set Features: 8-piece electronic drum set with HDS110USB sound module ships ready to rock 10 factory presets plus 5 user-customizable drum sets</p>
                            <h4>Rp5.750.000</h4>
                            <button class="panda-button-bye-now">Buy Now>></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="assets/images/pukul/drum2.jpg" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Roland SPD-30-BK Octa Pad Total Percussion Pad</h4>
                            <p class="card-text">Roland Octapad SPD-30 Drum Controller Features:Eight large, touch-sensitive pads Uses the latest V-Drums triggering technology Easy-to-use controls, large display, and USB connectivity</p>
                            <h4>Rp10.300.000</h4>
                            <button class="panda-button-bye-now">Buy Now>></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="assets/images/pukul/drum3.jpg" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Roland SPD-SX Sampling Pad</h4>
                            <p class="card-text">Roland SPD-SX Sampling Percussion Pad Features: Huge selection of dynamic sounds, controlled by highly responsive, velocity-sensitive trigger pads Quick and easy sampling for capturing inspiration when it hits Blending superior sound</p>
                            <h4>Rp10.300.000</h4>
                            <button class="panda-button-bye-now">Buy Now>></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tiup Container -->
        <section class="container my-5" id="Tiup">
            <div class="row  gx-5 ">
                <h2 class="mt-5">Alat Musik Tiup</h2>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="assets/images/tiup/tiup1.jpg" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Yamaha YFL-212 Flute</h4>
                            <p class="card-text">Yamaha YFL-212 Transverse Flute True to the motto "The Best Student Flute just got Better" Yamaha presents the 200, 300 and 400 series.</p>
                            <h4>Rp7.450.000</h4>
                            <button class="panda-button-bye-now">Buy Now>></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="assets/images/tiup/tiup2.jpg" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Yamaha Soprano Saxophone YSS-875EX</h4>
                            <p class="card-text">The Custom EX represents one answer to Yamaha’s pursuit of the ideal saxophone sound</p>
                            <h4>Rp89.610.000</h4>
                            <button class="panda-button-bye-now">Buy Now>></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="assets/images/tiup/tiup3.jpg" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">Suzuki 1072-E Folk Master 10-Hole Harmonica</h4>
                            <p class="card-text">The Suzuki Folkmaster harmonica is both easy to play and economical to purchase.</p>
                            <h4>Rp99.000</h4>
                            <button class="panda-button-bye-now">Buy Now>></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Subscribe -->

        <section style="height: 350px;" id="Subscribe"
            class="container rounded-3 panda-bg-info d-flex justify-content-center align-items-center">
            <div>
                <h1>LET'S STAY IN TOUCH</h1>
                <p>Get updates on sales, specials and more</p>
                <input class="form-control" type="text" placeholder="Your Email">
                <br>
                <button class="panda-button-bye-now">SUBMIT</button>
            </div>
        </section>

    </main>

    <footer>
        <section class="container mt-5 text-center">
            <p><small>©2020. Panda Commerce. All rights reserved. Sofia, Bulgaria.</small></p>
        </section>
    </footer>


    <!-- Js-bandle stylesheets -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>