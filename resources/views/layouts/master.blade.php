<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('TitleTab')</title>
        <link rel="icon" type="image/x-icon" href="<?php echo asset('assets/img/favicon.png'); ?>" />
        <!-- Font Awesome icons (free version)-->
        <script src="<?php echo asset('assets/js/all.js'); ?>" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@200;300;400;500;600&display=swap" rel="stylesheet">

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo asset('assets/css/styles.css'); ?>" rel="stylesheet" />
    </head>
    
    <body id="page-top" style="font-family: 'Sarabun', sans-serif;">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                {{-- <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logo_RUS.png" alt="" width="400" height="100" /></a> --}}
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu 
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    @yield('menulist')
                    <!-- {{-- <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul> --}} -->
                </div>
            </div>
        </nav>

        @yield('BodyZone')
        <!-- Footer-->
        <footer class="footer small text-center text-white-50" style="background-color:#fed46e ; margin-top:10px"><div class="container">Copyright © Your Website 2020</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo asset('assets/js/scripts.js'); ?>"></script>
        {{-- Using Sweetalert --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
        {{-- Using Sweetalert --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        

        {{-- Declare Modal --}}
                @yield('loginmodal')
                @yield('ModalZone')
        {{-- Declare Modal --}}

        {{-- using another css and js --}}
        @yield('AnotherLink')
        {{-- using another css and js --}}

        {{-- JS function --}}
        @yield('JsFunction')
    </body>
</html>
