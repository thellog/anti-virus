<!DOCTYPE html>
<html lang="en">

<head>
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
              <span class="badge badge-dark mr-3">Việt Nam</span>
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">SỐ CA NHIỄM</th>
                    <th scope="col" style="background-color: red;">TỬ VONG</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" id="cases">1</th>
                    <td id="deaths">Mark</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="d-flex">
              <span class="mr-2 text-danger"><span id="thu"></span>,&nbsp;Ngày <span id="ngay"></span>,
                Tháng <span id="thang"></span>,&nbsp;Năm <span id="nam"></span></span>
              <span class="text-danger" id="now">- Chúc bạn có một ngày làm việc vui vẻ !!!!</span>
            </div>
          </div>
        </div>
      </div>
      <div class="content-wrapper">
        <div class="container-fluid">

          @yield('content')

          <!-- Tin hot -->
          @yield('hotnews')

          @yield('content')
          <!-- footer -->
          <!-- footer -->
        </div>
      </div>
      @include('layout.footer')
      @include('layout.scripts')
      <script>
        fetchCovid();
        dateTime();
      </script>
</body>

</html>
