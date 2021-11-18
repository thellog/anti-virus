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
                       <form action="{{route('regis-user') }}" method="post" id="RegForm">
                        @if(Session::has('success'))
                        <div class="alert alert-succes">{{ Session::get('succes') }}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                        @endif
                           @csrf
                            <input type="text" placeholder="UserName" name="name" value="{{ old('name') }}">
                            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                            <input type="password" placeholder="PassWord" name="password" value="{{ old('password') }}">
                            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                            <button type="submit" class="btn btn-danger">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let LoginForm = document.getElementById("LoginForm");
        let RegForm = document.getElementById("RegForm");
        let Indication = document.getElementById("Indication");

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
