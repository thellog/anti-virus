@extends('admin.main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">

                        <!-- <table class="table"> -->
                        <thead>
                            <tr>
                                <th style="width: 50px;">ID</th>
                                <th style="width: 500px;">Tên</th>
                                <th style="width: 300px;">Gmail</th>
                                <th style="width: 300px;">Quyền</th>
                                <th>Ngày cập nhật</th>
                                <th style="width: 150px;">Hoạt động</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($account as $key => $news)
                            <tr>
                                <td>{{ $news->id }}</td>
                                <td>{{ $news->name }}</td>
                                <td>{{ $news->email}}</td>
                                <td>@if ($news->isAdmin == 1)ADMIN
                                   @else USER
                                   @endif
                               </td>
                                <td>{{ $news->updated_at}}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="/admin/account/edit/{{ $news->id }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="delete/{{ $news->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa tài khoản này không?');">
                                        <i class="fas fa-trash"></i>
                                    </a>

                                </td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $('#sampleTable').DataTable();
</script>
@endsection
