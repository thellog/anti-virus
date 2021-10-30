@extends('admin.main')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th style="width: 50px;">ID</th>
            <th style="width: 500px;">Tiêu đề</th>
            <th style="width: 300px;">Thể loại</th>
            <th>Ngày cập nhật</th>
            <th style="width: 150px;">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($newses as $key => $news)
        <tr>
            <td>{{ $news->id }}</td>
            <td>{{ $news->name }}</td>
            <td>{{ $news->category->name }}</td>
            <td>{{ $news->updated_at }}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="/admin/news/edit/{{ $news->id }}">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="btn btn-danger btn-sm" 
                    onclick="removeRow('{{ $news->id }}', '/admin/news/destroy')">
                    <i class="fas fa-trash"></i>
                </a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
{!! $newses->links() !!}
@endsection
