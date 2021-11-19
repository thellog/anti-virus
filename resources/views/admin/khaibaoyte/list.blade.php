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
                                <th>Số điện thoại</th>
                                <th>Kiểu khai báo</th>
                                <th>Sốt,ho</th>
                                <th>Đau họng</th>
                                <th>Chi tiết</th>      
                                <th>Ngày khai báo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($health_declaration as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->sex }}</td>
                                <td>{{ $user->birth }}</td>
                                <td>{{ $user->wardName }},{{ $user->districtName }},{{ $user->provinceName }}</td>
                                <td>{{ $user->cccd }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->type }}</td>
                                <td>{{ $user->sot_ho }}</td>
                                <td>{{ $user->dau_hong }}</td>
                                <td>{{ $user->description}}</td>
                                <td>{{ $user->created_at }}</td>
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
