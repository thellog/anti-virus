@extends('layout.main')

@section('content')

<div class="row" data-aos="fade-up">
    <div class="col-xl-8 stretch-card grid-margin">
        <div class="position-relative"> @foreach ($newsHot as $nh)
            <a href="/news/{{$nh->id}}"><img src="{{$nh->thumb}}" alt="1450x820" class="img-fluid" /></a>

            <div class="banner-content">

                <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                    {{$nh->category->name}}
                </div>


                <h1 class="mb-0"> <a style="text-decoration: none;color: #fff;" href="/news/{{$nh->id}}">{{$nh->name}}</a></h1>
                <h1 class="mb-2">
                    <!-- Coronavirus Outbreak LIVE Updates: ICSE, CBSE Exams
                     Postponed, 168 Trains -->
                </h1>
                <div class="fs-12">
                    <span class="mr-2">Photo </span>{{ $nh->updated_at->diffForHumans() }}
                </div>

            </div>
            @endforeach
        </div>
    </div>
    <div class="col-xl-4 stretch-card grid-margin">
        <div class="card bg-dark text-white">
            <div class="card-body">
                <h2>Tin mới</h2>
                @foreach($newsLates as $nl)
                <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                    <div class="pr-3">
                        <a href="/news/{{$nl->id}}" style="color: #fff;">
                            <h5>{{$nl->name}}</h5>
                        </a>
                        <div class="fs-12">
                            <span class="mr-2">Photo </span>{{ $nl->updated_at->diffForHumans() }}
                        </div>
                    </div>
                    <div class="rotate-img">
                        <a href="/news/{{$nl->id}}"><img src="{{$nl->thumb}}" alt="thumb" class="img-fluid img-lg" /></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="row" data-aos="fade-up">
    <div class="col-lg-3 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>Danh Mục</h2>
                <ul class="vertical-menu">
                    @foreach($category as $cate)
                    @if($cate->parent_id == 0)
                    <li>
                        <a href="/category/{{$cate->id}}">{{$cate->name}}</a>
                    </li>
                    @if($cate->id == $cate->parent_id)
                    <ul class="">

                        <li style="list-style: none;"><a href="#">{{$cate->name}}</a></li>
                    </ul>
                    @endif
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-9 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">

                @foreach($categ as $cat)
                <div class="row">
                    <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                            <div class="rotate-img">
                                <a href="/news/{{$cat->id}}"> <img width="300px" src="{{$cat->thumb}}" alt="thumb" class="img-fluid" /></a>
                            </div>
                            <div class="badge-positioned">
                                <span class="badge badge-danger font-weight-bold">{{$cat->category->name}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8  grid-margin">
                        <a class="mb-2 font-weight-600" href="/news/{{$cat->id}}" style="text-decoration: none;"> {{$cat->name}}</a>
                        <div class=" fs-13 mb-2">
                            <span class="mr-2">Photo </span>{{$cat->updated_at->diffForHumans()}}
                        </div>
                        <p class="mb-0">
                            {{$cat->description}}
                        </p>
                    </div>
                </div>
                @endforeach
                {{$categ->links()}}

            </div>
        </div>
    </div>
</div>


@endsection