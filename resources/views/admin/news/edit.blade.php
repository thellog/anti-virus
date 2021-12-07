@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<form action="" method="POST">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Tiêu đề</label>
                    <input type="text" name="name" value="{{ $news->name }}" class="form-control" placeholder="Nhập tiêu đề">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Danh Mục</label>
                    <select class="form-control" name="category_id">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $news->id_parent == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Tin hot</label>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="active" name="isHot" value="1" checked="">
                <label for="active" class="custom-control-label">Có</label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="inactive" name="isHot" value="0">
                <label for="inactive" class="custom-control-label">Không</label>
            </div>
        </div>
        <div class="form-group">
            <label>Mô Tả </label>
            <textarea name="description" class="form-control">{{ $news->description }}</textarea>
        </div>

        <div class="form-group">
            <label>Nội dung bài viết</label>
            <textarea name="content" id="content" class="form-control">{{ $news->content }}</textarea>
        </div>

        <div class="form-group">
            <label for="menu">Ảnh Bài Viết</label>
            <input type="file" class="form-control" id="upload">
            <div id="image_show">
                <a href="{{ $news->thumb }}" target="_blank">
                    <img src="{{ $news->thumb }}">
                </a>
            </div>
            <input type="hidden" name="thumb" value="{{ $news->thumb }}" id="thumb">
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Cập Nhật Bài Viết</button>
    </div>
    @csrf
</form>
@endsection

@section('footer')
<script>
    CKEDITOR.replace('content');
</script>
@endsection