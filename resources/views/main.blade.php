<!DOCTYPE HTML>
<html>

<head>
    @include('head')
</head>

<body class="is-preload" id="home-bg">

    <!-- Page Wrapper -->
    <div id="page-wrapper">

        <!-- Header -->
        @include('header')
        <!-- Menu -->
        @include('menu')
        <!-- Banner -->
        <section id="banner">
            <div class="inner">
                <div class="logo"><i id="icon" class="fas fa-user-shield"></i></div>
                <h2>Cám ơn đã ghé thăm, </h2>
                <p>Đây là nơi bạn có thể cập nhập tin tức, thông tin về đại dịch covid-19</p>
            </div>
        </section>

        <!-- Wrapper -->
        <section id="wrapper">

            <!-- One -->
            <section id="one" class="wrapper spotlight style1">
                <div class="inner">
                    <a href="#" class="image"><img src="/frontend/images/social-distancing-4997637_640.jpg" alt="" /></a>
                    <div class="content">
                        <h2 class="major">Khai báo y tế,</h2>
                        <p>Dù bạn có ở đâu, đi đâu, hay về đâu, hãy nhớ khai báo nha.</p>
                        <a href="#" class="special">Khai báo ngay!</a>
                    </div>
                </div>
            </section>

            <!-- Two -->
            <section id="two" class="wrapper alt spotlight style2">
                <div class="inner">
                    <a href="#" class="image"><img src="/frontend/images/covid-19-4982914_640.jpg" alt="" /></a>
                    <div class="content">
                        <h2 class="major">Đăng kí tiêm vaccine,</h2>
                        <p>"Vaccine tốt nhất là vaccine được tiêm sớm nhất" - Hãy nhớ điều đó nhé! Ở đây chúng tôi sẽ giúp bạn </p>
                        <a href="{{ URL::to('dk_tiem/insert') }}" class="special">Đăng kí ngay!</a>
                    </div>
                </div>
            </section>

            <!-- Three -->
            <section id="three" class="wrapper spotlight style3">
                <div class="inner">
                    <a href="#" class="image"><img src="/frontend/images/coronavirus-4910360_640.jpg" alt="" /></a>
                    <div class="content">
                        <h2 class="major">Tin tức về covid-19,</h2>
                        <p>Nhận những thông tin mới nhất về đại dịch covid-19 cùng với những câu chuyện bên lề.</p>
                        <a href="#" class="special">Cập nhật ngay!</a>
                    </div>
                </div>
            </section>

            <!-- Four -->
            <section id="four" class="wrapper alt style1">
                <div class="inner">
                    <h2 class="major">Tin hot trong ngày</h2>
                    <p>Cập nhật ngay những mẩu tin nóng hổi trong 24h qua.</p>
                    <section class="features">
                        <article>
                            <a href="#" class="image"><img src="/frontend/images/pic04.jpg" alt="" /></a>
                            <h3 class="major">Sed feugiat lorem</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                            <a href="#" class="special">Learn more</a>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="/frontend/pic05.jpg" alt="" /></a>
                            <h3 class="major">Nisl placerat</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                            <a href="#" class="special">Learn more</a>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="/frontend/pic06.jpg" alt="" /></a>
                            <h3 class="major">Ante fermentum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                            <a href="#" class="special">Learn more</a>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="/frontend/pic07.jpg" alt="" /></a>
                            <h3 class="major">Fusce consequat</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                            <a href="#" class="special">Learn more</a>
                        </article>
                    </section>
                    <ul class="actions">
                        <li><a href="#" class="button">Browse All</a></li>
                    </ul>
                </div>
            </section>

        </section>

        <!-- Footer -->
        <section id="footer">
            <div class="inner">
                <h2 class="major">Phản hồi</h2>
                <p>Chúng tôi sẽ nhận những phản hồi từ các bạn và cải thiện.</p>
                <form method="post" action="#">
                    <div class="fields">
                        <div class="field">
                            <label for="name">Họ tên</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="field">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="field">
                            <label for="message">Tin nhắn</label>
                            <textarea name="message" id="message" rows="4"></textarea>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Gửi tin nhắn" /></li>
                    </ul>
                </form>
                <ul class="contact">
                    <li class="icon solid fa-home">
                        Đại lộ ngoài kia<br />
                        3769 Xa lộ 105 Đường Chiến Thắng #2894<br />
                        Đà Nẵng, DN 23648-8969
                    </li>
                    <li class="icon solid fa-phone">(000) 000-0000</li>
                    <li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
                    <li class="icon brands fa-twitter"><a href="#">twitter.com/untitled-tld</a></li>
                    <li class="icon brands fa-facebook-f"><a href="#">facebook.com/untitled-tld</a></li>
                    <li class="icon brands fa-instagram"><a href="#">instagram.com/untitled-tld</a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; Untitled Inc. All rights reserved.</li>
                </ul>
            </div>
        </section>

    </div>
    @include('footer')
</body>

</html>
