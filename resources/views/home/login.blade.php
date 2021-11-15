<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.head')
</head>

<body class="hold-transition login-page">
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/frontend/images/Vaccine-pana.png" width="100%">
                </div>

                <div class="col-sm-6">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indication">
                        </div>
                        @include('alert')
                        <form id="LoginForm" action="{{ route('login-store') }}" method="post">
                            <input type="email" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="PassWord">
                            <button type="submit" class="btn btn-danger">Login</button>
                            <a href="">Forgot password</a>
                            @csrf
                        </form>
                       <form id="LoginForm">
                            <input type="text" placeholder="UserName">
                            <input type="email" placeholder="Email">
                            <input type="password" placeholder="PassWord">
                            <button type="submit" class="btn btn-danger">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indication = document.getElementById("Indication");

        function login() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indication.style.transform = "translateX(0px)";
        }

        function register() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indication.style.transform = "translateX(100px)";
        }
    </script>
    <!--js for toggle form head-->
    <script src="/frontend/js/login.js"></script>
    <!--js for toggle form back-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>