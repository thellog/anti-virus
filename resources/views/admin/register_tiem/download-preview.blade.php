<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.head')
</head>
<body>
    
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $user)
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
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <a href="download">Tải xuống</a>
    </div>
</div>
</body>
</html>

@include('admin.footer')
</body>
</html>