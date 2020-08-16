<!doctype html>
<html lang="fa">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100i,300,400,600,700" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="app/css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="app/css/style.css" />

    @yield('styles')
    <title>
        {{config('app.name').' | '}}@yield('title')
    </title>

</head>

<body>
<div class="loading">
    <div class="text-center middle">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>
</div>



<!-- =====================================
==== Start Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">

        <!-- Logo -->
        <a class="logo" href="#">Hadi</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-scroll-nav="0">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="1">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="2">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="5">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="6">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar ====
======================================= -->



<!-- =====================================
==== Start Header -->
<header class="header valign bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="app/img/bg.jpg" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="vertical-center full-width text-center caption">
                <h2>I Love To Design</h2>
                <h1 class="cd-headline clip">
                    <span class="blc">I Am </span>
                    <span class="cd-words-wrapper">
				              <b class="is-visible">Yekta Behzadi</b>
				              <b>a Developer</b>
				              <b>a Designer</b>
				            </span>
                </h1>
            </div>
        </div>
    </div>

    <div class="arrow">
        <a href="#" data-scroll-nav="1">
            <i class="fas fa-chevron-down"></i>
        </a>
    </div>
</header>
<!-- End Header ====
======================================= -->

@yield("header")

@yield("contents")




<footer class="footer">
    <p>Copyright &copy; And Made With Love All Rights Reserved.</p>
</footer>

<!-- jQuery -->
<script src="/app/js/jquery-3.0.0.min.js"></script>
<script src="/app/js/jquery-migrate-3.0.0.min.js"></script>

<!-- popper.min -->
<script src="/app/js/popper.min.js"></script>

<!-- bootstrap -->
<script src="/app/js/bootstrap.min.js"></script>

<!-- scrollIt -->
<script src="/app/js/scrollIt.min.js"></script>

<!-- animated.headline -->
<script src="/app/js/animated.headline.js"></script>

<!-- jquery.waypoints.min -->
<script src="/app/js/jquery.waypoints.min.js"></script>

<!-- jquery.counterup.min -->
<script src="/app/js/jquery.counterup.min.js"></script>

<!-- owl carousel -->
<script src="/app/js/owl.carousel.min.js"></script>

<!-- jquery.magnific-popup js -->
<script src="/app/js/jquery.magnific-popup.min.js"></script>

<!-- stellar js -->
<script src="/app/js/jquery.stellar.min.js"></script>

<!-- isotope.pkgd.min js -->
<script src="/app/js/isotope.pkgd.min.js"></script>

<!-- validator js -->
<script src="/app/js/validator.js"></script>

<!-- custom scripts -->
<script src="/app/js/scripts.js"></script>
<script>

</script>
@yield('scripts')

</body>
</html>
