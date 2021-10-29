@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<form action="" method="POST">
    <div class="card-body">

        <div class="form-group">
            <label for="category">Tên Danh Mục</label>
            <input type="text" name="name" value="{{ $category->name }}" class="form-control" placeholder="Nhập tên danh mục">
        </div>

        <div class="form-group">
            <label>Danh Mục</label>
            <select class="form-control" name="parent_id">
                <option value="0"> Danh Mục Cha </option>
                @foreach($categories as $categoryParent)
                <option value="{{ $categoryParent->id }}" {{ $category->parent_id == $categoryParent->id ? 'selected' : '' }}>
                    {{ $categoryParent->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Mô Tả </label>
            <textarea name="description" class="form-control">{{ $category->description }}</textarea>
        </div>

        <div class="form-group">
            <label>Mô Tả Chi Tiết</label>
            <textarea name="content" id="content" class="form-control">{{ $category->content }}</textarea>
        </div>

    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Cập nhật Danh Mục</button>
    </div>
    @csrf
</form>
@endsection
@section('footer')
<script>
    CKEDITOR.replace('content')
</script>
@endsection
