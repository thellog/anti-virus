 <header id="header">
   <div class="container-fluid">
     <nav class="navbar navbar-expand-lg navbar-light">
       <div class="navbar-bottom">
         <div class="d-flex justify-content-between align-items-center">
           <div>
             <a style="font-size: 30px;color:#fff" class="navbar-brand" href="{{ route('/') }}">Anti-CoVid</a>
           </div>
           <div>
             <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>
             <div class="navbar-collapse justify-content-center collapse" id="navbarSupportedContent">
               <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
                 <li>
                   <button class="navbar-close">
                     <i class="mdi mdi-close"></i>
                   </button>
                 </li>
                 <li class="nav-item active">
                   <a class="nav-link" href="{{ route('/') }}">Trang chủ</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="{{ route('covid') }}">COVID</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="{{ route('inject-register') }}">Đăng kí tiêm chủng</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="{{ route('khaibaoyte/khaibao') }}">Khai báo y tế</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="{{ route('contact-us') }}">Kết nối</a>
                 </li>
            
           @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                      {{--   <a class="dropdown-item" href="{{ route('account') }}">{{ __('Tài khoản') }}</a> --}}

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                     

             
                </li>



            @endguest
               </ul>
             </div>
           </div>
         </div>
       </div>
     </nav>
   </div>
 </header>
