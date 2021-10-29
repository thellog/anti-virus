@extends('admin.main')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th style="width: 50px;">ID</th>
            <th>Tin tức</th>
            <th>Mô tả</th>
            <th>Ngày cập nhật</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    {!! \App\Helpers\Helper::category($categories) !!}
    </tbody>
</table>
@endsection
