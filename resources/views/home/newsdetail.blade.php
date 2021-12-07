<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <!--style page news detail -->
    <link rel="stylesheet" type="text/css" href="/frontend/news/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/frontend/news/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/frontend/news/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/frontend/news/assets/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="/frontend/news/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/frontend/news/assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="/frontend/news/assets/css/style.css">
</head>

<body>
    @include('layout.menu')
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

    <div class="container-fluid">
        <div class="box_wrapper">
            <div class="latest_newsarea"> <span>Tin Mới</span>
                <ul id="ticker01" class="news_sticker">
                    @foreach($newsLates as $nl)
                    <li><a href="/news/{{$nl->id}}">{{$nl->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <section id="contentbody">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="left_bar">
                                <div class="single_leftbar">
                                    <h2><span>Bài viết gần đây</span></h2>
                                    <div class="singleleft_inner">
                                        <ul class="recentpost_nav wow fadeInDown">
                                            @foreach($newsLates as $nl)
                                            <li><a href="/news/{{$nl->id}}"><img src="{{$nl->thumb}}" alt=""></a> <a class="recent_title" href="/news/{{$nl->id}}"> {{$nl->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="middle_bar">
                                <div class="single_post_area">
                                    @foreach($newsDetail as $nd)
                                    <ol class="breadcrumb">
                                        <li><a href="#"><i class="fa fa-home"></i>Trang chủ<i class="fa fa-angle-right"></i></a></li>
                                        <li><a href="#">Thể loại<i class="fa fa-angle-right"></i></a></li>
                                        <li class="active">{{$nd->category->name}}</li>
                                    </ol>
                                    <h2 class="post_title wow">{{$nd->name}}</h2>
                                    <a href="#" class="author_name"><i class="fa fa-user"></i>admin</a> <a href="#" class="post_date"><i class="fa fa-clock-o"></i>{{$nl->updated_at->diffForHumans()}}</a>
                                    <div class="single_post_content" style="text-transform: uppercase; font-size: 24px;">
                                        <strong>{!!$nd->description!!}</strong>
                                    </div>
                                    <img src="{{ $nd->thumb }}" alt="{{ $nd->name }}" style="width: 840px; height: auto;">
                                    <i class="text-sm mt-5">Ảnh minh hoạ</i>
                                    <div class="single_post_content">
                                        {!!$nd->content!!}
                                    </div>

                                    <div class="social_area wow fadeInLeft">
                                        <ul>
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                            <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="right_bar">
                                <div class="single_leftbar wow fadeInDown">
                                    <h2><span>Bài viết phổ biến</span></h2>
                                    <div class="singleleft_inner">
                                        <ul class="catg3_snav ppost_nav wow fadeInDown">
                                            @foreach($popular as $pop)
                                            <li>
                                                <div class="media"> <a href="/news/{{$pop->id}}" class="media-left"> <img alt="" src="{{$pop->thumb}}"> </a>
                                                    <div class="media-body"> <a href="/news/{{$pop->id}}" class="catg_title"> {{$pop->name}}</a></div>
                                                </div>
                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                                <div class="single_leftbar wow fadeInDown">
                                    <h2><span>Nhãn</span></h2>
                                    <div class="singleleft_inner">
                                        <ul class="label_nav">
                                            @foreach($category as $cate)
                                            <li><a href="/category/{{$cate->id}}">{{$cate->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="single_leftbar wow fadeInDown">
                                    <h2><span>Liên kết</span></h2>
                                    <div class="singleleft_inner">
                                        <ul class="link_nav">
                                            <li><a href="{{ route('/') }}">Trang chủ</a></li>
                                            <li><a href="{{ route('/') }}">Covid</a></li>
                                            <li><a href="{{ route('inject-register') }}">Đăng kí tiêm chủng</a></li>
                                            <li><a href="{{ route('khaibaoyte/khaibao') }}">Khai báo y tế</a></li>
                                            <li><a href="{{ route('contact-us') }}">Kết nối</a></li>
                                            <li><a href="{{ route('login') }}">Đăng nhập</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>           
        </div>
    </div>
    @include('layout.footer')
    @include('layout.scripts')
    <script src="/frontend/news/assets/js/jquery.min.js"></script>
    <script src="/frontend/news/assets/js/wow.min.js"></script>
    <script src="/frontend/news/assets/js/bootstrap.min.js"></script>
    <script src="/frontend/news/assets/js/slick.min.js"></script>
    <script src="/frontend/news/assets/js/jquery.li-scroller.1.0.js"></script>
    <script src="/frontend/news/assets/js/custom.js"></script>
</body>

</html>