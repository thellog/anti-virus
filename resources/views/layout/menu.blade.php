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
                   <a class="nav-link" href="{{ route('/') }}">COVID</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="{{ route('inject-register') }}">Đăng kí tiêm chủng</a>
                 </li>
                 <li class="nav-item">
<<<<<<< HEAD
=======
                   <a class="nav-link" href="{{ route('/') }}">Tình hình Covid</a>
>>>>>>> 0efad33d8e411323810cc2804357c58d2f27c2ee
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="{{ route('khaibaoyte/khaibao') }}">Khai báo y tế</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="{{ route('contact-us') }}">Kết nối</a>
                 </li>
                 <li class="nav-item">
                   <a href="{{ route('login') }}" class="nav-link">Đăng nhập</a>
                 </li>
               </ul>
             </div>
           </div>
         </div>
       </div>
     </nav>
   </div>
 </header>