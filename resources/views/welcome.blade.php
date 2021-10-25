<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body id="default_theme" class="home_page1">
    <!-- header -->
    <div id="mySidenav" class="sidenav">
        <ul class="menu_sidebar">
            <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
            <li><a href="index.html">01. Home</a></li>
            <li><a href="about.html">02. About</i></a></li>
            <li><a href="what_we_do.html">03. What we do</a></li>
            <li><a href="testimonial.html">04. Testimonial</a></li>
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
                                <li><a href="{{ URL::to('/login') }}"><img src="/frontend/images/profile_icon.png" alt="#" /></a></li>
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
    <div class="container" style="margin-top: 500px;">
        <!-- Noi dung hien thi o day -->
    </div>
    @include('foot')
</body>

</html>
