@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
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
@endsection

@section('footer')
<script>
    CKEDITOR.replace('content');
</script>
@endsection
