<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../partials/_navbar.html -->
        @include('layout.menu')
        <!-- partial -->
        <div class="flash-news-banner">
            <div class="container">
                <div class="d-lg-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <span class="badge badge-dark mr-3">Flash news</span>
                        <p class="mb-0">
                            Lorem Ipsum has been the industry's standard dummy text ever
                            since the 1500s.
                        </p>
                    </div>
                    <div class="d-flex">
                        <span class="mr-3 text-danger">Wed, March 4, 2020</span>
                        <span class="text-danger">30°C,London</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card" data-aos="fade-up">
                            <div class="card-body">
                                <div class="aboutus-wrapper">
                                    <h1 class="mt-5 text-center mb-5">
                                        Contact Us
                                    </h1>
                                    <div class="row">
                                        <div class="col-lg-12 mb-5 mb-sm-2">
                                            <form>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control textarea" placeholder="Comment *" id="message"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Name *" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email *" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <a href="#" class="btn btn-lg btn-dark font-weight-bold mt-3">Send Message</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container-scroller ends -->
    <!-- partial:../partials/_footer.html -->
    @include('layout.footer')
    @include('layout.scripts')
</body>

</html>
