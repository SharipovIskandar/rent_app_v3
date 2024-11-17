<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <title>NTRA - Super-puper rent app!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Real Estate Website Landing Page" name="description" />
    <meta content="Real Estate, buy, sell, Rent, tailwind Css" name="keywords" />
    <meta name="author" content="Shreethemes" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="version" content="2.2.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" />

    <!-- Css -->
    <link href="/assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <link href="/assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <link href="/assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">
    <link href="/assets/libs/swiper/css/swiper.min.css" rel="stylesheet">
    <!-- Main Css -->
    <link href="/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <link href="/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    @vite('resources/css/app.css')

</head>
<body class="dark:bg-slate-900">

<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
        <!-- Start Logo container-->
        <a class="logo" href="/">
            <span class="inline-block dark:hidden">
                <img src="assets/images/logo-dark.png" class="l-dark" height="24" alt="">
                <img src="assets/images/logo-light.png" class="l-light" height="24" alt="">
            </span>
            <img src="assets/images/logo-light.png" height="24" class="hidden dark:inline-block" alt="">
        </a>
        <!-- End Logo container-->

        <!-- Start Mobile Toggle -->
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Mobile Toggle -->

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">

            <?php if(auth()->user()): ?>
                <!-- Logout Button -->
            <li class="sm:inline ps-1 mb-0 hidden">
                <form action="/logout" method="POST" class="inline">
                        <?php echo csrf_field(); ?>
                    <button type="submit" class="btn bg-red-600 hover:bg-red-700 border-red-600 dark:border-red-600 text-white rounded-full">
                        Logout
                    </button>
                </form>
            </li>
            <?php else: ?>
                <!-- Login and Register Buttons -->
            <li class="sm:inline ps-1 mb-0 hidden">
                <a href="/login" class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Login</a>
            </li>
            <?php endif; ?>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end nav-light">
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">E'lonlar</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="/" class="sub-menu-item">Barcha e'lonlar</a></li>
                        <li><a href="/ads/create" class="sub-menu-item">E'lon qo'shish</a></li>
                    </ul>
                </li>
                <li><a href="/my/profile" class="sub-menu-item">Shaxsiy ma'lumotlar</a></li>
                <li><a href="/branches" class="sub-menu-item">Filiallar</a></li>
                <li><a href="/contact" class="sub-menu-item">Aloqa uchun</a></li>
                @if(strtolower(auth()->user()?->position) === "admin")
                    <li><a href="/admin" target="_blank" class="sub-menu-item">Boshqaruv paneli</a></li>
                @endif
            </ul><!--end navigation menu-->

        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->

<!-- Other page content can go here -->

</body>
</html>
