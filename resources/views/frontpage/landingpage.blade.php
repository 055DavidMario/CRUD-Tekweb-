<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>I-Travel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Shortcut Web Icon -->
    <link rel="shortcut icon" href="{{asset('template')}}/img/logo2.png" />

    <!-- Favicon -->
    <link href="{{asset('template')}}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('template')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('template')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('template')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('template')}}/css/style.css" rel="stylesheet">

    <!-- Script -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="p-0 bg-white container-xxl">
        <!-- Spinner Start -->
        <div id="spinner" class="bg-white show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="bg-transparent container-fluid nav-bar">
            <nav class="px-4 py-0 navbar navbar-expand-lg bg-dark navbar-light">
                <a href="" class="text-center navbar-brand d-flex align-items-center">
                    <div class="p-2 icon me-2">
                        <img class="img-fluid" src="{{asset('template')}}/img/logo1.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-white text-primary;">I-Travel</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                    <a href="/" class="text-white nav-item nav-link active">Home</a>
                        <a href="/about" class="text-white nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="text-white nav-link dropdown-toggle" data-bs-toggle="dropdown">Destination</a>
                            <div class="m-0 dropdown-menu rounded-0 bg-dark">
                                <a href="property-list.html" class="text-white dropdown-item">Recomended</a>
                                <a href="property-type.html" class="text-white dropdown-item">Local Nusantara</a>
                                <a href="property-agent.html" class="text-white dropdown-item">International Place</a>
                            </div>
                        </div>
                        <a href="/contact" class="text-white nav-item nav-link">Contact</a>
                        <a href="/favorit" class="text-white nav-item nav-link"><i class="fab fa-gratipay"></i>Favorit</a>
                    </div>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="px-3 text-white btn btn-primary d-none d-lg-flex" href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">Logout</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="p-0 bg-white container-fluid header">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="p-5 col-md-6 mt-lg-5">
                    <h1 class="mb-4 display-5 animated fadeIn">Nikmati <span class="text-primary">Wisata </span> Baik Di Nusantara Maupun Dunia</h1>
                    <p class="pb-2 mb-4 animated fadeIn">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure rem hic iste quasi omnis labore odio? Voluptatum, perferendis quae amet velit a minus odio nulla illum cum, minima mollitia voluptates.</p>
                    <a href="" class="px-5 py-3 btn btn-primary me-3 animated fadeIn">Get Started</a>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="{{asset('template')}}/img/bg1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="{{asset('template')}}/img/london.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="{{asset('template')}}/img/paris.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="{{asset('template')}}/img/candi-borobudur-jawa-tengah.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div class="mb-5 container-fluid bg-primary wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="py-3 border-0 form-control" placeholder="Search Keyword">
                            </div>
                            <div class="col-md-4">
                                <select class="py-3 border-0 form-select">
                                    <option selected>Nusantara</option>
                                    <option value="1">International</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="py-3 border-0 form-select">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="py-3 border-0 btn btn-dark w-100">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->


        <!-- Category Destination Start -->
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Top 8 Wisata Nusantara</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta laborum ipsam nam esse harum incidunt ipsum libero, minus fugiat porro quas assumenda animi debitis iste quae doloremque ex repellat maiores.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="p-3 text-center rounded cat-item d-block bg-light" href="">
                            <div class="p-4 rounded">
                                <div class="mb-3 icon">
                                    <img class="img-fluid rounded-3" src="{{asset('template')}}/img/Top1-RajaAmpat.jpg" alt="Icon">
                                </div>
                                <h6>Raja Ampat</h6>
                                <span>Papua</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="p-3 text-center rounded cat-item d-block bg-light" href="">
                            <div class="p-4 rounded">
                                <div class="mb-3 icon">
                                    <img class="img-fluid rounded-3" src="{{asset('template')}}/img/Top2-PulauBunaken.jpeg" alt="Icon">
                                </div>
                                <h6>Pulau Bunaken</h6>
                                <span>Sulawesi Utara</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="p-3 text-center rounded cat-item d-block bg-light" href="">
                            <div class="p-4 rounded">
                                <div class="mb-3 icon">
                                    <img class="img-fluid rounded-3" src="{{asset('template')}}/img/Top3-GunungBromo.jpeg" alt="Icon">
                                </div>
                                <h6>Gunung Bromo</h6>
                                <span>Jawa Timur</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="p-3 text-center rounded cat-item d-block bg-light" href="">
                            <div class="p-4 rounded">
                                <div class="mb-3 icon">
                                    <img class="img-fluid rounded-3" src="{{asset('template')}}/img/Top4-CandiBorobudur.jpg" alt="Icon">
                                </div>
                                <h6>Candi Borobudur</h6>
                                <span>Yogyakarta</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="p-3 text-center rounded cat-item d-block bg-light" href="">
                            <div class="p-4 rounded">
                                <div class="mb-3 icon">
                                    <img class="img-fluid rounded-3" src="{{asset('template')}}/img/Top5-PulauKomodo.jpg" alt="Icon">
                                </div>
                                <h6>Pulau Komodo</h6>
                                <span>Nusa Tenggara Timur</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="p-3 text-center rounded cat-item d-block bg-light" href="">
                            <div class="p-4 rounded">
                                <div class="mb-3 icon">
                                    <img class="img-fluid rounded-3" src="{{asset('template')}}/img/Top6-TanaToraja.jpg" alt="Icon">
                                </div>
                                <h6>Tana Toraja</h6>
                                <span>Sulawesi Selatan</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="p-3 text-center rounded cat-item d-block bg-light" href="">
                            <div class="p-4 rounded">
                                <div class="mb-3 icon">
                                    <img class="img-fluid rounded-3" src="{{asset('template')}}/img/Top7-Pulau Dewata.png" alt="Icon">
                                </div>
                                <h6>Pulau Dewata</h6>
                                <span>Bali</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="p-3 text-center rounded cat-item d-block bg-light" href="">
                            <div class="p-4 rounded">
                                <div class="mb-3 icon">
                                    <img class="img-fluid rounded-3" src="{{asset('template')}}/img/Top8-Lombok.jpg" alt="Icon">
                                </div>
                                <h6>Lombok</h6>
                                <span>Nusa Tenggara Barat</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start -->
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="bg-dark col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="p-5 overflow-hidden about-img position-relative pe-0">
                            <img class="img-fluid w-100" src="{{asset('template')}}/img/logo1.png">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4 text-6xl font-semibold">I-Travel - Solusi Wisata Perjalanan</h1>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit, amet? Nisi magni quaerat sit porro temporibus quasi saepe quibusdam molestias, aperiam ut necessitatibus laboriosam, quos quia reprehenderit ea voluptatem sapiente!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Property List Start -->
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="mx-auto mb-5 text-start wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3 text-4xl font-semibold">Price with Transport</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum animi laborum reprehenderit facilis voluptatem eius nihil? Vero, velit fugiat cupiditate inventore omnis magni quis aut temporibus harum ducimus repudiandae beatae.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="mb-5 nav nav-pills d-inline-flex justify-content-end">
                            <li class="nav-item me-2">
                               <a id="transportasi"  class="btn btn-outline-primary active" data-bs-toggle="pill" href="#pesawat"><i class="fas fa-plane me-2"></i>Pesawat</a>
                            </li>
                            <li class="nav-item me-2">
                                <a id="transportasi" class="btn btn-outline-primary" data-bs-toggle="pill" href="#keretaapi"><i class="fas fa-train me-2"></i>Kereta Api</a>
                            </li>
                            <li class="nav-item me-0">
                                <a id="transportasi" class="btn btn-outline-primary" data-bs-toggle="pill" href="#bus"><i class="fas fa-bus me-2"></i>Bus</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="pesawat" class="p-0 tab-pane fade show active">
                        <div class="row g-4">
                            <div id="wisata1" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="{{asset('template')}}/img/London2.jpg" alt=""></a>
                                        <div class="top-0 px-3 py-1 m-4 bg-white rounded text-primary position-absolute start-0"><i class="fas fa-plane me-2"></i>Pesawat</div>
                                        <a href="#cart"><button type="button" class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2"><i class="fab fa-gratipay"></i></button></a>
                                        
                                        <div class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">Indonesia -> London</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">Rp20,000,000</h5>
                                        <a class="mb-2 d-block h5" href="">London</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>London, All Airport</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-clock text-primary me-2"></i>13 jam 30 menit</small>
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-utensils text-primary me-2"></i>2x</small>
                                        <small class="py-2 text-center flex-fill"><i class="fa fa-globe text-primary me-2"></i>No Transit</small>
                                    </div>
                                </div>
                            </div>
                            <div id="wisata2" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="{{asset('template')}}/img/Jepang.jpg" alt=""></a>
                                        <div class="top-0 px-3 py-1 m-4 bg-white rounded text-primary position-absolute start-0"><i class="fas fa-plane me-2"></i>Pesawat</div>
                                        <a href="#cart"><button type="button" class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2"><i class="fab fa-gratipay"></i></button></a>
                                        <div class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">Indonesia -> Jepang</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">Rp10,000,000</h5>
                                        <a class="mb-2 d-block h5" href="">Jepang</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Tokyo Airport</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-clock text-primary me-2"></i>7 jam 20 menit</small>
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-utensils text-primary me-2"></i>1x</small>
                                        <small class="py-2 text-center flex-fill"><i class="fa fa-globe text-primary me-2"></i>No Transit</small>
                                    </div>
                                </div>
                            </div>
                            <div id="wisata3" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="{{asset('template')}}/img/Australia.jpg" alt=""></a>
                                        <div class="top-0 px-3 py-1 m-4 bg-white rounded text-primary position-absolute start-0"><i class="fas fa-plane me-2"></i>Pesawat</div>
                                        <a href="#cart"><button type="button" class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2"><i class="fab fa-gratipay"></i></button></a>
                                        <div class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">Indonesia -> Australia</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">Rp7,000,000</h5>
                                        <a class="mb-2 d-block h5" href="">Australia</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Sydney Airport</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-clock text-primary me-2"></i>6 jam 55 menit</small>
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-utensils text-primary me-2"></i>1x</small>
                                        <small class="py-2 text-center flex-fill"><i class="fa fa-globe text-primary me-2"></i>No Transit</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="{{asset('template')}}/img/Top7-Pulau Dewata.png" alt=""></a>
                                        <div class="top-0 px-3 py-1 m-4 bg-white rounded text-primary position-absolute start-0"><i class="fas fa-plane me-2"></i>Pesawat</div>
                                        <!-- <a href="/favorit"><button type="button" class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2"><i class="fab fa-gratipay"></i></button></a> -->
                                        <div class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">Jakarta -> Bali</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">Rp750,000</h5>
                                        <a class="mb-2 d-block h5" href="">Bali</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Denpasar Airport</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-clock text-primary me-2"></i>2 jam 0 menit</small>
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-utensils text-primary me-2"></i>0x</small>
                                        <small class="py-2 text-center flex-fill"><i class="fa fa-globe text-primary me-2"></i>No Transit</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="{{asset('template')}}/img/danautoba.jpg" alt=""></a>
                                        <div class="top-0 px-3 py-1 m-4 bg-white rounded text-primary position-absolute start-0"><i class="fas fa-plane me-2"></i>Pesawat</div>
                                        <!-- <a href="/favorit"><button type="button" class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2"><i class="fab fa-gratipay"></i></button></a> -->
                                        <div class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">Jakarta -> Sumatera Utara</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">Rp1,700,000</h5>
                                        <a class="mb-2 d-block h5" href="">Medan</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Kualanamo Airport</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-clock text-primary me-2"></i>2 jam 20 menit</small>
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-utensils text-primary me-2"></i>0x</small>
                                        <small class="py-2 text-center flex-fill"><i class="fa fa-globe text-primary me-2"></i>No Transit</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="{{asset('template')}}/img/Top8-Lombok.jpg" alt=""></a>
                                        <div class="top-0 px-3 py-1 m-4 bg-white rounded text-primary position-absolute start-0"><i class="fas fa-plane me-2"></i>Pesawat</div>
                                        <!-- <a href="/favorit"><button type="button" class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2"><i class="fab fa-gratipay"></i></button></a> -->
                                        <div class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">Jakarta -> Lombok</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">Rp900,000</h5>
                                        <a class="mb-2 d-block h5" href="">Lombok</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lombok Airport</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-clock text-primary me-2"></i>2 jam 0 menit</small>
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-utensils text-primary me-2"></i>1x</small>
                                        <small class="py-2 text-center flex-fill"><i class="fa fa-globe text-primary me-2"></i>No Transit</small>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center col-12 wow fadeInUp" data-wow-delay="0.1s">
                                <a class="px-5 py-3 btn btn-primary" href="">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                    <div id="keretaapi" class="p-0 tab-pane fade show">
                        <div class="row g-4">
                            <div id="wisata4" class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="{{asset('template')}}/img/Top4-CandiBorobudur.jpg" alt=""></a>
                                        <div class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0"><i class="fas fa-train me-2"></i>Kereta Api</div>
                                        <a href="#cart"><button type="button" class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2"><i class="fab fa-gratipay"></i></button></a>
                                        <div class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">Jakarta -> Yogyakarta</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">Rp300,000</h5>
                                        <a class="mb-2 d-block h5" href="">Candi Borobudur</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lempuyang, Yogyakarta</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-clock text-primary me-2"></i>8 jam 55 menit</small>
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-fan text-primary me-2"></i>No AC</small>
                                        <small class="py-2 text-center flex-fill"><i class="fa fa-map text-primary me-2"></i>No Transit</small>
                                    </div>
                                </div>
                            </div>
                            <div id="wisata5" class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="{{asset('template')}}/img/surabaya.jpg" alt=""></a>
                                        <div class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0"><i class="fas fa-train me-2"></i>Kereta Api</div>
                                        <a href="#cart"><button type="button" class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2"><i class="fab fa-gratipay"></i></button></a>
                                        <div class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">Jakarta -> Surabaya</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">Rp540,000</h5>
                                        <a class="mb-2 d-block h5" href="">Surabaya</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Surabaya Pasar Turi</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-clock text-primary me-2"></i>10 jam 40 menit</small>
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-fan text-primary me-2"></i>AC</small>
                                        <small class="py-2 text-center flex-fill"><i class="fa fa-map text-primary me-2"></i>No Transit</small>
                                    </div>
                                </div>
                            </div>
                            <div id="wisata6" class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="{{asset('template')}}/img/surabaya.jpg" alt=""></a>
                                        <div class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0"><i class="fas fa-train me-2"></i>Kereta Api</div>
                                        <a href="#cart"><button type="button" class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2"><i class="fab fa-gratipay"></i></button></a>
                                        <div class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">Jakarta -> Surabaya</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">Rp540,000</h5>
                                        <a class="mb-2 d-block h5" href="">Surabaya</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Surabaya Pasar Turi</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-clock text-primary me-2"></i>10 jam 40 menit</small>
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-fan text-primary me-2"></i>AC</small>
                                        <small class="py-2 text-center flex-fill"><i class="fa fa-map text-primary me-2"></i>No Transit</small>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center col-12 wow fadeInUp" data-wow-delay="0.1s">
                                <a class="px-5 py-3 btn btn-primary" href="">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                          
                    <div id="bus" class="p-0 tab-pane fade show">
                        <div class="row g-4">
                            <div id="wisata7" class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="{{asset('template')}}/img/kebunrayabogor.jpg" alt=""></a>
                                        <div class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0"><i class="fas fa-bus me-2"></i>Bus</div>
                                        <a href="#cart"><button type="button" class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2"><i class="fab fa-gratipay"></i></button></a>
                                        <div class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">Jakarta -> Bogor</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">Rp18,000</h5>
                                        <a class="mb-2 d-block h5" href="">Kebun Raya Bogor</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Bogor</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-clock text-primary me-2"></i>2 jam 15 menit</small>
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-fan text-primary me-2"></i>No AC</small>
                                        <small class="py-2 text-center flex-fill"><i class="fa fa-toilet text-primary me-2"></i>No Toilet</small>
                                    </div>
                                </div>
                            </div>
                            <div id="wisata8" class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="{{asset('template')}}/img/monas.jpg" alt=""></a>
                                        <div class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0"><i class="fas fa-bus me-2"></i>Bus</div>
                                        <a href="#cart"><button type="button" class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2"><i class="fab fa-gratipay"></i></button></a>
                                        <div class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">Bogor -> Jakarta</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">Rp15,000</h5>
                                        <a class="mb-2 d-block h5" href="">Monumen Nasional</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Monas, Jakarta Pusat</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-clock text-primary me-2"></i>2 jam 10 menit</small>
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-fan text-primary me-2"></i>No AC</small>
                                        <small class="py-2 text-center flex-fill"><i class="fa fa-toilet text-primary me-2"></i>No Toilet</small>
                                    </div>
                                </div>
                            </div>
                            <div id="wisata9" class="col-lg-4 col-md-6">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="{{asset('template')}}/img/TangkubanPerahu.jpg" alt=""></a>
                                        <div class="top-0 px-3 py-1 m-4 text-white rounded bg-primary position-absolute start-0"><i class="fas fa-bus me-2"></i>Bus</div>
                                        <a href="#cart"><button type="button" class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2"><i class="fab fa-gratipay"></i></button></a>
                                        <div class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">Jakarta -> Jawa Barat</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">Rp250,000</h5>
                                        <a class="mb-2 d-block h5" href="">Gunung Tangkuban Perahu</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Jawa Barat</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-clock text-primary me-2"></i>1 jam 55 menit</small>
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-fan text-primary me-2"></i>AC</small>
                                        <small class="py-2 text-center flex-fill"><i class="fa fa-toilet text-primary me-2"></i>No Toilet</small>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center col-12">
                                <a class="px-5 py-3 btn btn-primary" href="">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->


        <!-- Contact -->
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="p-3 rounded bg-light">
                    <div class="p-4 bg-white rounded" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="rounded img-fluid w-100" src="{{asset('template')}}/img/call-to-action.jpg" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">Contact With Our Certified Agent</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas ex dolores animi, inventore iste, optio iure reiciendis illum nobis distinctio minima ullam. Dolore cupiditate ipsa, animi repellat eum rem dolorem!</p>
                                </div>
                                <a href="" class="px-4 py-3 btn btn-primary me-2"><i class="fa fa-phone-alt me-2"></i>Make A Call</a>
                                <a href="" class="px-4 py-3 btn btn-dark"><i class="fa fa-envelope me-2"></i>Send A Mail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact -->


        <!-- Reviews Web -->
        <div class="p-0 bg-white container-fluid header">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="p-5 col-md-6 mt-lg-5">
                    <h1 class="mb-4 display-5 animated fadeIn text-primary">Give Your Review</h1>
                    <form action="//www.html.am/html-codes/forms/html-form-tag-action.cfm" target="result" method="get">
                    Message:<br>
                    <textarea rows="3" cols="20" maxlength="90" name="msg">Enter text here...
                    </textarea>
                    <br>
                    <button type="button" onclick="alert('Thank You!')">Submit</button>
                    </form>
                    
                </div>
                <div id="cart" class="rounded-full col-md-6 bg-primary">
                <div class="flex flex-col items-start justify-start w-full p-6 rounded-lg bg-primary dark:bg-gray-800 md:p-14">
                <div>
                    <h1 class="text-2xl font-semibold leading-6 text-gray-800 dark:text-white">I-Travel</h1>
                </div>
                <div class="flex flex-col items-end w-full space-y-6 mt-7">
                <div class="flex items-center justify-between w-full">
                        <p class="text-lg leading-4 text-gray-600 dark:text-gray-300">Nama Tempat :</p>
                        <p class="text-lg font-semibold leading-4 text-gray-600 dark:text-gray-300" id="Tempat"></p>
                    </div>
                    <div class="flex items-center justify-between w-full">
                        <p class="text-lg leading-4 text-gray-600 dark:text-gray-300">Lokasi :</p>
                        <p class="text-lg font-semibold leading-4 text-gray-600 dark:text-gray-300" id="Lokasi"></p>
                    </div>
                    <div class="flex items-center justify-between w-full">
                        <p class="text-lg leading-4 text-gray-600 dark:text-gray-300">Estimasi Harga :</p>
                        <p class="text-lg font-semibold leading-4 text-gray-600 dark:text-gray-300" id="Harga">Rp. </p>
                    </div>
                    <div class="flex items-center justify-between w-full">
                        <p class="text-lg leading-4 text-gray-600 dark:text-gray-300">Estimasi Waktu :</p>
                        <p class="text-lg font-semibold leading-4 text-gray-600 dark:text-gray-300" id="Waktu"></p>
                    </div>
                </div>
                <div class="flex items-center justify-between w-full mt-24">
                    <p class="text-xl font-semibold leading-4 text-gray-800 dark:text-white">Transportasi :</p>
                    <p class="text-lg font-semibold leading-4 text-gray-800 dark:text-white " id="Transport"></p>
                </div>
            </div>
            </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        

        <!-- Footer Start -->
        <div class="pt-5 mt-5 container-fluid bg-dark text-white-50 footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="mb-4 text-white">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Singaraja, Bali</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 21 2345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="pt-2 d-flex">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="mb-4 text-white">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="mb-4 text-white">Photo Gallery</h5>
                        <div class="pt-2 row g-2">
                            <div class="col-4">
                                <img class="p-1 rounded img-fluid bg-light" src="{{asset('template')}}/img/mandalika.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="p-1 rounded img-fluid bg-light" src="{{asset('template')}}/img/danautoba.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="p-1 rounded img-fluid bg-light" src="{{asset('template')}}/img/labuanbajo.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="p-1 rounded img-fluid bg-light" src="{{asset('template')}}/img/Top1-RajaAmpat.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="p-1 rounded img-fluid bg-light" src="{{asset('template')}}/img/Top2-PulauBunaken.jpeg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="p-1 rounded img-fluid bg-light" src="{{asset('template')}}/img/Top3-GunungBromo.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="mb-4 text-white">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="mx-auto position-relative" style="max-width: 400px;">
                            <input class="py-3 bg-transparent form-control w-100 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="mb-3 text-center col-md-6 text-md-start mb-md-0">
                            &copy; <a class="border-bottom" href="#">I-Travel</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://github.com/055DavidMario">055DavidMario</a>
                        </div>
                        <div class="text-center col-md-6 text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('template')}}/lib/wow/wow.min.js"></script>
    <script src="{{asset('template')}}/lib/easing/easing.min.js"></script>
    <script src="{{asset('template')}}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{asset('template')}}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('template')}}/js/main.js"></script>
    <!-- <script src="{{asset('template')}}/js/app.js"></script> -->
</body>

</html>