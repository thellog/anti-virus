 <header id="header">
     <div class="container-fluid">
         <nav class="navbar navbar-expand-lg navbar-light">
             <div class="navbar-bottom">
                 <div class="d-flex justify-content-between align-items-center">
                     <div>
                         <a class="navbar-brand" href="#"><img src="/frontend/assets/images/logo.svg" alt="" /></a>
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
                                     <a class="nav-link" href="{{ URL::to('/') }}">Trang chủ</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="pages/magazine.html">COVID</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="{{ URL::to('dk_tiem/insert') }}">Đăng kí tiêm chủng</a>
                                 </li>
                
                                 <li class="nav-item">
                                     <a class="nav-link" href="pages/contactus.html">Khai báo y tế</a>
                                </li>
                
                                 <li class="nav-item">
                                     <a class="nav-link" href="pages/contactus.html">Kết nối</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ URL::to('login') }}" class="nav-link">Đăng nhập</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="#" class="nav-link">Đăng kí</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </nav>
     </div>
 </header>
