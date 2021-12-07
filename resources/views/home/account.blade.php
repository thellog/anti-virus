{{-- <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    @include('layout.head')
</head>

<body>
@include('layout.menu')

     <div class="container" >
           <div class="row">
            <div class="col-12 text-right pt-1 pr-2 d-none">
            </div>
            <div class="col-12 text-center text-uppercase mt-1">
            
                <span class="text-note d-block mt-1 text_subtitle text-danger"><h5>Thông tin tài khoản</h5></span>
            </div>
        </div>
      
        <br>

    <form action="" method="post">
       <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}" />
       <input type="hidden" id="id" name="id" value="{!! $account[0]->id !!}" />

      @foreach ($account as $key => $news)
    <div class="card-body">

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{ $news->name }}" disabled="">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="" name="email" value="{{ $news->email}}" disabled="">
        </div>
       
        <div class="form-group">
            <label>Quyền</label>
            <select class="form-control" name="quyen">             
                    <option {{ $news->isAdmin == 1 ? 'selected' : '' }} value="1">ADMIN</option>
                    <option {{ $news->isAdmin == 0 ? 'selected' : '' }} value="0">USER</option>            
             </select>     
        </div>
        @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
    </div>
     @endforeach

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
    </div>
    @csrf
</form>

</div>
@include('layout.footer')
</body>
<!--/ Intro Single End /-->
@include('layout.scripts')

</html>


 --}}