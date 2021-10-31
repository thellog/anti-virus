<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @include('layout.head')
</head>

<body id="insert-bg">
@include('layout.menu')
<div class="container" style="margin-top:100px">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
        @php
        Session::forget('success');
        @endphp
    </div>
    @endif

    <form method="post" action="">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="form-row">

            <div class="form-group col-md-4">
                <label>Họ và tên</label>
                <input value="{{old('name')}}" type="text" name="name" class="form-control" placeholder="Họ và tên">
                @error('name')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label>Giới tính</label>
                <select class="form-control" name="sex">
                    <option value="" disabled selected>Giới tính</option>
                    <option {{ old('sex') == 'Nam' ? 'selected' : '' }}>Nam</option>
                    <option {{ old('sex') == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                </select>
                @error('sex')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label>Ngày sinh</label>
                <input type="date" name="birthday" class="form-control" placeholder="Ngày sinh" value="{{old('birthday')}}">
                @error('birthday')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="">Tỉnh/Thành phố</label>
                <select class="form-control" name="province_id" id="province">
                    <option value="" selected disabled>Tỉnh/Thành phố</option>
                    @foreach($provinces as $key => $province)
                    <option value="{{$key}}"> {{$province}}</option>
                    @endforeach

                </select>
                @error('province_id')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="">Quận/huyện</label>
                <select class="form-control" name="district_id" id="district" data-old="{{old('district_id')}}">
                    <option value="" selected disabled>Quận/huyện</option>

                </select>
                @error('district_id')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="">Phường/Xã</label>
                <select class="form-control" name="ward_id" id="ward">
                    <option value="" selected disabled>Phường/Xã</option>
                </select>
                @error('ward_id')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="">Số điện thoại liên lạc</label>
                <input type="number" name="phone" class="form-control" placeholder="Số điện thoại" value="{{old('phone')}}">
                @error('phone')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="">CMND/CCCD</label>
                <input type="number" name="cccd" class="form-control" placeholder="CMND/CCCD" value="{{old('cccd')}}">
                @error('cccd')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="">Mã bảo hiểm y tế (nếu có)</label>
                <input type="text" name="bhyt" class="form-control" placeholder="Mã bảo hiểm y tế" value="{{old('bhyt')}}">
            </div>

            <div class="form-group col-md-6">
                <div class="form-group">
                    <label>Đăng kí mũi tiêm</label>
                    <select class="form-control" name="muitiem">
                        <option value="" selected disabled>Chọn mũi tiêm</option>
                        <option {{ old('muitiem') == 'Mũi thứ 1' ? 'selected' : '' }}>Mũi thứ 1</option>
                        <option {{ old('muitiem') == 'Mũi thứ 2' ? 'selected' : '' }}>Mũi thứ 2</option>s
                    </select>
                    @error('muitiem')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label>Loại vacxin muốn tiêm</label>
                    <select class="form-control" name="vacxin">
                        <option value="" selected disabled>Chọn loại vacxin</option>
                        <option {{ old('vacxin') == 'Vaccine AstraZeneca (Anh)' ? 'selected="selected"' : '' }}>Vaccine AstraZeneca (Anh)</option>
                        <option {{ old('vacxin') == 'Vaccine Moderna (Mỹ)' ? 'selected' : '' }}>
                            Vaccine Moderna (Mỹ)</option>
                        <option {{ old('vacxin') == 'Vaccine Gam-Covid-Vac (Nga)' ? 'selected' : '' }}>Vaccine Gam-Covid-Vac (Nga)</option>
                        <option {{ old('vacxin') == 'Vaccine Vero Cell  (Trung Quốc)' ? 'selected' : '' }}>Vaccine Vero Cell (Trung Quốc)</option>
                        <option {{ old('vacxin') == 'Vaccine Abdala (Cu Ba)' ? 'selected' : '' }}>Vaccine Abdala ( Cu Ba)</option>
                        <option {{ old('vacxin') == 'Vaccine Janssen (Bỉ-Hà Lan)' ? 'selected' : '' }}>Vaccine Janssen (Bỉ-Hà Lan)</option>
                    </select>
                    @error('vacxin')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="form-group col-md-12">
                <label for="">Tiền sử bệnh(nếu có)</label>
                <textarea type="text-area" rows="3" name="tiensubenh" class="form-control"> {{old('tiensubenh')}}</textarea>
            </div>

            <button name="submit" class="btn btn-success"> Đăng ký tiêm</button>

            <div class="form-group col-md-12" style="color:red">Lưu ý: Đăng thông tin đúng sự thật</div>

        </div>
    </form>
</div>
@include('layout.footer')
</body>
<!--/ Intro Single End /-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type=text/javascript>
    $('#province').change(function() {
        var provinceID = $(this).val();
        if (provinceID) {
            $.ajax({
                type: "GET",
                url: "{{url('getDistrict')}}?province_id=" + provinceID,
                success: function(res) {
                    if (res) {
                        $("#district").empty();
                        $("#district").append('<option value=""selected disabled>Quận/Huyện</option>');
                        $("#ward").empty();
                        $("#ward").append('<option value=""selected disabled>Phường/Xã</option>');
                        $.each(res, function(key, value) {
                            $("#district").append('<option value="' + key + '">' + value + '</option>');

                        });


                    } else {
                        $("#district").empty();
                    }
                }
            });
        } else {
            $("#district").empty();
            $("#ward").empty();
        }
    });
    $('#district').on('change', function() {
        var districtID = $(this).val();
        if (districtID) {
            $.ajax({
                type: "GET",
                url: "{{url('getWard')}}?district_id=" + districtID,
                success: function(res) {
                    if (res) {
                        $("#ward").empty();
                        $("#ward").append('<option value="" selected disabled>Phường/Xã</option>');
                        $.each(res, function(key, value) {
                            $("#ward").append('<option value="' + key + '">' + value + '</option>');
                        });

                    } else {
                        $("#ward").empty();
                    }
                }
            });
        } else {
            $("#ward").empty();
        }

    });
</script>

</html>
