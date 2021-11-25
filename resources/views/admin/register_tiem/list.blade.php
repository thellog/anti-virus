@extends('admin.main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Giới tính</th>
                                <th>Ngày sinh</th>
                                <th>Quê quán</th>
                                <th>CMND/CCCD</th>
                                <th>Mã BHYT</th>
                                <th>Số điện thoại</th>
                                <th>Mũi tiêm</th>
                                <th>Loại vacxin muốn tiêm</th>
                                <th>Tiền sử bệnh</th>
                                <th>Ngày đăng ký</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($imformation as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->sex }}</td>
                                <td>{{ $user->birthday }}</td>
                                <td>{{ $user->wardName }},{{ $user->districtName }},{{ $user->provinceName }}</td>
                                <td>{{ $user->cccd }}</td>
                                <td>{{ $user->bhyt }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->muitiem }}</td>
                                <td>{{ $user->vacxin }}</td>
                                <td>{{ $user->tiensubenh }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>                        
                                    <a href="delete/{{ $user->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa thông tin này?');">
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
