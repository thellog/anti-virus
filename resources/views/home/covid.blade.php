@extends('layout.main')

@section('head')
<title>{{ $title }}</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')
<section class="content">
  <div class="container">
    <div class="row text-white">
      <div class="col-lg-4 col-4">
        <div class="small-box bg-info rounded text-center p-1">
          <div class="inner">
            <p><strong>Ca phục hồi {{ number_format($data_vn["recovered"]) }}</strong></p>
            <h3 id="recovered">Hôm nay: {{ $data_vn["recoveredToday"] }}</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-4">
        <div class="small-box bg-warning rounded text-center p-1">
          <div class="inner">
            <p><strong>Ca mắc {{ number_format($data_vn["infected"])}}</strong></p>
            <h3 id="cases">Hôm nay: {{$data_vn["infectedToday"] }}</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-4">
        <div class="small-box bg-danger rounded text-center p-1">
          <div class="inner">
            <p><strong>Tử vong {{ number_format($data_vn["died"]) }}</strong></p>
            <h3 id="deaths">Hôm nay: {{$data_vn["diedToday"] }}</h3>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <div class="row mt-5">
      <div class="col-lg-7">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXwHqcv0Zp0gd044_jzM-TWG51wJnaEHQj8w&usqp=CAU" alt="bản tin covid">
      </div>
      <div class="col-lg-5">
        <h1>Tổng hợp tình hình covid-19 thế giới hôm nay, ngày {{ date("d/m/Y") }}</h1>
        <p>Theo số liệu mới nhất :</p>
        <ul>
          <li>Tổng sổ ca mắc hôm nay: +{{ $data["todayCases"] }} ca/ {{ $data["cases"] }} ca</li>
          <li>Tổng số ca tử vong hôm nay: +{{ $data["todayDeaths"] }} ca/ {{ $data["deaths"] }} ca</li>
          <li>Tổng số ca điều trị hôm nay: +{{ $data["todayRecovered"] }} ca/ {{ $data["recovered"] }} ca</li>
        </ul>
      </div>
    </div>

    <hr>

    <div class="row mt-5">
      <section class="col-lg-6">
        <h1>TÌNH HÌNH DỊCH CẢ NƯỚC</h1>
        <div class="table-responsive" style="height: 500px; width: 100%;">
          <table class="table table-success">
            <thead>
              <tr>
                <th>#</th>
                <th>Tỉnh/TP</th>
                <th>Tổng số ca</th>
                <th>Hôm nay</th>
                <th>Tử vong</th>
              </tr>
            </thead>
            <tbody>
              @for ($dd = 0; $dd < count($data_vn_countries); $dd++) <tr>
                <td>{{ $dd+1 }}</td>
                <td>{{ $data_vn_countries[$dd]["name"] }}</td>
                <td>{{ $data_vn_countries[$dd]["cases"] }}</td>
                <td>+ {{ $data_vn_countries[$dd]["casesToday"] }}</td>
                <td>{{ $data_vn_countries[$dd]["death"] }}</td>
                </tr>
                @endfor
            </tbody>
          </table>
        </div>
      </section>
        <section class="col-lg-6 mt-5">
          <div class="card bg-transparent">
            <div class="card-head">
              <strong>THỐNG KÊ CA MẮC VÀ CA HỒI PHỤC TRONG TUẦN</strong> 
            </div>
            <div class="card-body">
              <canvas id="covidStatistic" style="height: 450px; width: 100%;"></canvas>
            </div>
          </div>
        </section>
    </div>
    <!-- <div class="row mt-5">
          <section class="col-lg-7 connectedSortable">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Thế giới
                </h3>
              </div>
              <div class="card-body">
                <canvas id="covidStatistic" style="width:100%; height:250px;"></canvas>
            </div>
          </section>
          <section class="col-lg-5 connectedSortable">
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Việt Nam
                </h3>
              </div>
              <div class="card-body">
                <canvas id="covidVN" style="width:100%; height:250px;"></canvas>
              </div>
            </div>
          </section>
        </div> -->
  </div>
</section>
@endsection

@section('scripts')

<script>
  const ctx = document.getElementById('covidStatistic').getContext('2d');
  const data = <?= json_encode($data_vn_statistic); ?>;
  // const obj = JSON.parse(data);

  const covidStatistic = new Chart(ctx, {
    data: {
      datasets: [{
        label: 'Ca mắc',
        type: 'bar',
        data: [
          data[0].cases,data[1].cases,data[2].cases,
          data[3].cases,data[4].cases,data[5].cases,
          data[6].cases,
        ],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)'
        ],
        borderWidth: 1
      }, {
        label: 'Ca hồi phục',
        type: 'line',
        data: [
          data[0].recovered,data[1].recovered,data[2].recovered,
          data[3].recovered,data[4].recovered,data[5].recovered,
          data[6].recovered,
        ],
        backgroundColor: [
          'rgba(153, 102, 255, 0.2)'
          ],
        borderColor: [
          'rgb(153, 102, 255)'
          ],
        borderWidth: 2
      }],
      labels: [ data[0].date, data[1].date, data[2].date, 
      data[3].date, data[4].date, data[5].date, data[6].date ],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

</script>
@endsection