<!DOCTYPE html>
<html>
<head>
        <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Anti-Covid</title>
    <!-- site icons -->
    <link rel="icon" href="/frontend/img/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="/frontend/css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="/frontedn/css/responsive.css" />
    <!-- colors css -->
    <link rel="stylesheet" href="/frontend/css/colors.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="/frontend/css/custom.css" />
    <!-- wow animation css -->
    <link rel="stylesheet" href="/frontend/css/animate.css" />
    <!-- Revolution Loaling Fonts and Icons  -->
    <link rel="stylesheet" href="/frontend/js/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <!-- Revolution style Sheets  -->
    <link rel="stylesheet" href="/frontend/js/revolution/css/settings.css">
    <link rel="stylesheet" href="/frontend/js/revolution/css/layers.css">
    <link rel="stylesheet" href="/frontend/js/revolution/css/navigation.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/frontend/css/owl.theme.default.css">
</head>
<body>


<body id="default_theme" class="home_page1">
    <!-- header -->
    <div id="mySidenav" class="sidenav">
        <ul class="menu_sidebar">
            <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
            <li><a href="index.html">01. Home</a></li>
            <li><a href="about.html">02. About</i></a></li>
            <li><a href="what_we_do.html">03. What we do</a></li>
            <li><a href="{{ route('dk_tiem/insert') }}">04. Đăng ký tiêm</a></li>
            <li><a href="contact.html">05. Contact Us</a></li>
        </ul>
    </div>
    <header class="header">
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="full">
                            <span class="toggle_icon" style="cursor:pointer" onclick="openNav()"><img src="/frontend/img/menu_icon.png" alt="#" /></span>
                            <div class="logo_circle">
                                <a href="index.html"><img class="img-responsive" src="/frontend/img/logo.png" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="float-right">
                            <ul class="top_links">

                                <li><a href="{{ URL::to('admin/users/login') }}"><img src="/frontend/images/profile_icon.png" alt="#" /></a></li>
                                <li class="searchbar">
                                    <input class="search_input" type="text" name="" placeholder="Search...">
                                    <a href="#" class="search_icon"><img src="/frontend/images/search_icon.png" alt="#" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>