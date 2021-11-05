 <div class="row" data-aos="fade-up">
     <div class="col-xl-8 stretch-card grid-margin">
         <div class="position-relative">
             @foreach($newsHot as $key => $newsHot)
             <img src="{{$newsHot->thumb}}" alt="1450x820" class="img-fluid" />

             <div class="banner-content">

                 <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                     tin hot
                 </div>
                 <h1 class="mb-0">{{$newsHot->name}}</h1>
                 <h1 class="mb-2">
                     <!-- Coronavirus Outbreak LIVE Updates: ICSE, CBSE Exams
                     Postponed, 168 Trains -->
                 </h1>
                 <div class="fs-12">
                     <span class="mr-2">Photo </span>10 Minutes ago
                 </div>

             </div>
             @endforeach

         </div>
     </div>
     <div class="col-xl-4 stretch-card grid-margin">
         <div class="card bg-dark text-white">
             <div class="card-body">
                 <h2>Tin mới</h2>

                 @foreach($newsLatest as $key => $newsLatest)
                 <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                     <div class="pr-3">
                         <h5>{{$newsLatest->name}}</h5>
                         <div class="fs-12">
                             <span class="mr-2">Photo </span>10 Minutes ago
                         </div>
                     </div>
                     <div class="rotate-img">
                         <img src="{{$newsLatest->thumb}}" alt="thumb" class="img-fluid img-lg" />
                     </div>
                 </div>
                 @endforeach
             </div>
         </div>
     </div>
 </div>