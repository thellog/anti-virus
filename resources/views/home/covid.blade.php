@extends('layout.main')

@section('head')
    <title>{{ $title }}</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row text-white">
          <div class="col-lg-4 col-4">
            <div class="small-box bg-info rounded text-center p-1">
              <div class="inner">
                <p><strong>Ca phục hồi {{ number_format($data_vn["recovered"]) }}</strong></p>
                <h3 id="recovered">Hôm nay: {{ $data_vn["todayRecovered"] }}</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-4">
            <div class="small-box bg-warning rounded text-center p-1">
              <div class="inner">
                <p><strong>Ca mắc {{ number_format($data_vn["cases"])}}</strong></p>
                <h3 id="cases">Hôm nay: {{$data_vn["todayCases"] }}</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-4">
            <div class="small-box bg-danger rounded text-center p-1">
              <div class="inner">
                <p><strong>Tử vong {{ number_format($data_vn["deaths"]) }}</strong></p>
                <h3 id="deaths">Hôm nay: {{$data_vn["todayDeaths"] }}</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
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
        </div>
      </div>
    </section>
@endsection

@section('scripts')
<script>
const ctx = document.getElementById('covidStatistic').getContext('2d');
const data = <?= json_encode($data);?>;
// const obj = JSON.parse(data);

const covidStatistic = new Chart(ctx, {
    data: {
        datasets: [{
            label: 'Thế giới',
            type: 'line',
            data: [ data.cases,
                    data.todayCases,
                    data.deaths,
                    data.todayDeaths,
                    data.recovered,
                    data.todayRecovered
                ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }],
        labels: ['Tổng số ca', 'Ca hôm nay', 'Tử vong', 'Tử vong hôm nay', 'Hồi phục', 'Hồi phục hôm nay'],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const ctx1 = document.getElementById('covidVN').getContext('2d');
const data1 = <?= json_encode($data_vn);?>;
// const obj1 = JSON.parse(data1);

const covidVN = new Chart(ctx1, {
    data: {
        datasets: [{
            label: 'Việt Nam',
            type: 'line',
            data: [ data1.cases,
                    data1.todayCases,
                    data1.deaths,
                    data1.todayDeaths,
                    data1.recovered,
                    data1.todayRecovered
                ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }],
        labels: ['Tổng số ca', 'Ca hôm nay', 'Tử vong', 'Tử vong hôm nay', 'Hồi phục', 'Hồi phục hôm nay'],
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