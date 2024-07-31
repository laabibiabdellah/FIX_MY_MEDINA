<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>FixMyMedina </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="keywords" />
        <meta content="" name="description" />

        <!-- Favicon -->
        <link href="{{asset('img/favicon.ico')}}" rel="icon" />

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
            rel="stylesheet"
        />

        <!-- Icon Font Stylesheet -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
            rel="stylesheet"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
            rel="stylesheet"
        />

        <!-- Libraries Stylesheet -->
        <link
            href="{{asset('lib/animate/animate.min.css')}}"
            rel="stylesheet"
        />
        <link
            href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}"
            rel="stylesheet"
        />

        <link
            href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}"
            rel="stylesheet"
        />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet" />

        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />
        <link href="
        https://cdn.jsdelivr.net/npm/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.min.css
        " rel="stylesheet">

        <style>
            #map { height: 500px; width: 50%; }

        </style>

    </head>

    <body onload="getLocation()">
                <!-- Spinner Start -->
                <div
                id="spinner"
                class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
            >
                <div
                    class="spinner-border text-primary"
                    style="width: 3rem; height: 3rem"
                    role="status"
                >
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->

            <!-- Topbar Start -->
            <div class="container-fluid bg-dark px-5 d-none d-lg-block">
                <div class="row gx-0">
                    <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                        <div
                            class="d-inline-flex align-items-center"
                            style="height: 45px"
                        >
                            <small class="me-3 text-light"
                                ><i class="fa fa-map-marker-alt me-2"></i>123
                                Street, New York, USA</small
                            >
                            <small class="me-3 text-light"
                                ><i class="fa fa-phone-alt me-2"></i>+012 345
                                6789</small
                            >
                            <small class="text-light"
                                ><i class="fa fa-envelope-open me-2"></i
                                >info@example.com</small
                            >
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div
                            class="d-inline-flex align-items-center"
                            style="height: 45px"
                        >
                            <a
                                class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                                href=""
                                ><i class="fab fa-twitter fw-normal"></i
                            ></a>
                            <a
                                class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                                href=""
                                ><i class="fab fa-facebook-f fw-normal"></i
                            ></a>
                            <a
                                class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                                href=""
                                ><i class="fab fa-linkedin-in fw-normal"></i
                            ></a>
                            <a
                                class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                                href=""
                                ><i class="fab fa-instagram fw-normal"></i
                            ></a>
                            <a
                                class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"
                                href=""
                                ><i class="fab fa-youtube fw-normal"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar End -->

            <!-- Navbar & Hero Start -->
            <div class="container-fluid p-0">
                <nav
                    class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-lg-0 bg-dark"
                >
                    <a href="" class="navbar-brand p-0">
                        <img src="{{asset('img/logo.png')}}" width="70%" height="100px" alt="logo">
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse"
                    >
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="/" class="nav-item nav-link active"
                                >Acceuil</a
                            >
                            <a href="{{route('post.index')}}" class="nav-item nav-link"
                                >Signalements</a
                            >
                            @auth
                            <a href="{{route('post.create')}}" class="nav-item nav-link"
                            >Signaler</a
                        >
                            @endauth
                            @auth
                            <a href="{{route('my-posts.index')}}" class="nav-item nav-link"
                            >Mes signalements</a
                        >
                            @endauth

                            <a href="{{route('contact')}}" class="nav-item nav-link"
                                >Contact</a
                            >
                        </div>
                        @auth
                        <div class="nav-item dropdown">
                            <a
                                href="None"
                                class="nav-link dropdown-toggle text-white"
                                data-bs-toggle="dropdown"
                                >Profile</a
                            >
                            <div class="dropdown-menu m-0">
                                <a href="{{route('settings.index')}}" class="dropdown-item"
                                    >Settings</a
                                >
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button class="dropdown-item">Logout</button>
                                  </form>
                            </div>
                        </div>
                        @endauth
                        @guest
                            <div>
                                <a href="{{route('register.index')}}" class="btn btn-primary rounded-pill py-2 px-4"
                                >S'inscrire</a>
                                <a href="{{route('login')}}" id="login" class="btn btn-white text-primary border border-primary rounded-pill py-2 px-4"
                                >Se connecter</a>
                            </div>
                        @endguest
                    </div>
                </nav>


            </div>
            <!-- Navbar & Hero End -->

            <div style="margin-top: 50px !important;">
            {{-- <div class="all-content"> --}}
                {{$slot}}
            {{-- </div> --}}
        </div>
                    <!-- Footer Start -->
        <div
        class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s"
    >
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Fixmymedina</h4>
                    <a class="btn btn-link" href="">
                        À propos de nous</a>
                    <a class="btn btn-link" href="">Nous contacter</a>
                    <a class="btn btn-link" href="">S'inscrire</a>
                    <a class="btn btn-link" href="">se connecter</a>
                    {{-- <a class="btn btn-link" href="">FAQs & Help</a> --}}
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2">
                        <i class="fa fa-map-marker-alt me-3"></i>13 rue des ibno katir, Casablanca, Maroc
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-phone-alt me-3"></i>06 12 74 86 38
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-envelope me-3"></i>FixMymedina@gmail.com
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""
                            ><i class="fab fa-twitter"></i
                        ></a>
                        <a class="btn btn-outline-light btn-social" href=""
                            ><i class="fab fa-facebook-f"></i
                        ></a>
                        <a class="btn btn-outline-light btn-social" href=""
                            ><i class="fab fa-youtube"></i
                        ></a>
                        <a class="btn btn-outline-light btn-social" href=""
                            ><i class="fab fa-linkedin-in"></i
                        ></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-white mb-3 text-center"></h4>
                    <p class="text-center">
                        Envoyer nous un message
                    </p>
                    <div
                        class="position-relative mx-auto"
                        style="max-width: 400px"
                    >
                        <input
                            class="form-control border-primary w-100 py-3 ps-4 pe-5"
                            type="text"
                            placeholder="Your email"
                        />
                        <button
                            type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                        >
                        Se connecter
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            {{-- <div class="copyright">
                <div class="row">
                    <div
                        class="col-md-6 text-center text-md-start mb-3 mb-md-0"
                    >
                        &copy;
                        <a class="border-bottom" href="#">Your Site Name</a
                        >, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By
                        <a
                            class="border-bottom"
                            href="https://htmlcodex.com"
                            >HTML Codex</a
                        >
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
    ></a>

        <!-- JavaScript Libraries -->
        <script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
        <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
        <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
        <script src="
        https://cdn.jsdelivr.net/npm/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.min.js
        "></script>

          {{-- Sweet alert --}}
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

          <script src="{{asset('js/delete-confirmation.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/actions.js')}}"></script>
        <script src="{{asset('js/map.js')}}"></script>
        <script src="{{asset('js/postMap.js')}}"></script>
    </body>
</html>
