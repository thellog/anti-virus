// fetch api covid VN
function fetchCovid() {
    var ulCases = document.getElementById("cases");
    var ulDeaths = document.getElementById("deaths");

    // fetch request to api

    fetch("https://corona.lmao.ninja/v2/countries/vn")
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            ulCases.innerHTML = `${data.cases}`;
            ulDeaths.innerHTML = `${data.deaths}`;
        });
}

function dateTime() {
    var date = new Date();

    // Lấy số thứ tự của ngày hiện tại
    var current_day = date.getDay();
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();
    // Biến lưu tên của thứ
    var day_name = "";

    // Lấy tên thứ của ngày hiện tại
    switch (current_day) {
        case 0:
            day_name = "Chủ nhật";
            break;
        case 1:
            day_name = "Thứ hai";
            break;
        case 2:
            day_name = "Thứ ba";
            break;
        case 3:
            day_name = "Thứ tư";
            break;
        case 4:
            day_name = "Thứ năm";
            break;
        case 5:
            day_name = "Thứ sau";
            break;
        case 6:
            day_name = "Thứ bảy";
    }
    document.getElementById("thu").innerHTML = day_name;
    document.getElementById("ngay").innerHTML = day;
    document.getElementById("thang").innerHTML = month;
    document.getElementById("nam").innerHTML = year;
}
