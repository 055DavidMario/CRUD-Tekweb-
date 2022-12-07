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

</head>
<!-- Navbar Start -->
        <div class="bg-transparent container-fluid nav-bar">
            <nav class="px-4 py-0 navbar navbar-expand-lg bg-dark navbar-light">
                <a href="/home" class="text-center navbar-brand d-flex align-items-center">
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
                    <a href="/home" class="text-white nav-item nav-link active">Home</a>
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
                @foreach($pricing as $p)
                    <div id="{{$p->Transportasi}}" class="p-0 tab-pane fade show active">
                        <div class="row g-4">
                        
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="overflow-hidden rounded property-item">
                                    <div class="overflow-hidden position-relative">
                                        <a href=""><img class="img-fluid" src="{{asset('template')}}/img/London2.jpg" alt=""></a>
                                        <div class="top-0 px-3 py-1 m-4 bg-white rounded text-primary position-absolute start-0"><i class="fas fa-plane me-2"></i>{{$p->Transportasi}}</div>
                                        <a href="#cart"><button type="button" class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2"><i class="fab fa-gratipay"></i></button></a>
                                        
                                        <div class="bottom-0 px-3 pt-1 mx-4 bg-white rounded-top text-primary position-absolute start-0">{{$p->Destinasi}}</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="mb-3 text-primary">{{$p->Harga}}</h5>
                                        <a class="mb-2 d-block h5" href="">{{$p->Nama_Wisata}}</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$p->Alamat}}</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-clock text-primary me-2"></i>{{$p->Waktu}}</small>
                                        <small class="py-2 text-center flex-fill border-end"><i class="fa fa-utensils text-primary me-2"></i>{{$p->Makan}}</small>
                                        <small class="py-2 text-center flex-fill"><i class="fa fa-globe text-primary me-2"></i>{{$p->Transit}}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="text-center col-12 wow fadeInUp" data-wow-delay="0.1s">
                                <a class="px-5 py-3 btn btn-primary" href="">Browse More Property</a>
                            </div>
                        </div>
                    </div>
        <!-- Property List End -->

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