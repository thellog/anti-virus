<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @include('layout.head')
</head>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <!-- partial:partials/_navbar.html -->
            @include('layout.menu')
            <!-- partial -->
            <div class="flash-news-banner">
                <div class="container-fluid">
                    <div class="d-lg-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <span class="badge badge-dark mr-3">Hôm nay có gì ?</span>
                            <p class="mb-0">Con số gì đây con số gì đây.
                            </p>
                        </div>
                        <div class="d-flex">
                            <span class="mr-3 text-danger">Thứ tư, Tháng Mười 4, 2021</span>
                            <span class="text-danger">27°C, Tây Nguyên đầy lắng và gió</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="container-fluid">

                    <!-- Tin hot -->
                    @include('layout.hotnews')

                    <!--Category and flash new-->
                    @include('layout.category-flashnew')

                    <!--Video-->
                    @include('layout.video')

                    <!--Spot light-->
                    @include('layout.spot-light')

                    <!-- footer -->
                    @include('layout.footer')
                    <!-- footer -->
                </div>
            </div>
            @include('layout.scripts')
</body>

</html>
