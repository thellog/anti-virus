<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   
    @include('layout.head')
</head>

<body id="insert-bg">
@include('layout.menu')
<div class="container">

   <div block-bind="content" id="content">
    <div class="container khaibaoyte px-1">
        <div class="row">
            <div class="col-12 text-center text-uppercase mt-1">
                <span class="text-title">

                    <span class="text_donvi_ten" style="color:#0056c1"><h3>Khai báo y tế</h3></span>
                </span>
                <span class="text-note d-block mt-1 text_subtitle text-danger" ><h5>Khai báo thông tin sai là vi phạm pháp luật Việt Nam và có thể xử lý</h5></span>
            </div>
        </div>
        <form method="post" action="">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="card px-1 py-2 p-sm-2 mt-2">
            
            <div class="row mt-1">
                 <div class="form-group col-md-12">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                    Session::forget('success');
                    @endphp
                    </div>
                    @endif
               </div>

                <div class="col-12">
                    <div class="form-group">
                        <span>Họ và tên</span> <span class="text-danger">
                            (*)</span>:
                         <input value="{{old('name')}}" type="text" name="name" class="form-control" placeholder="Họ và tên">
                            @error('name')
                            <p style="color:red">{{$message}}</p>
                            @enderror
                    </div>
                </div>  
               
            
            
                <div class="col-md-6">
                    <div class="form-group">
                        <span>Ngày sinh</span> <span class="text-danger">(*)</span>:
                         <input type="date" name="birth" class="form-control" placeholder="Ngày sinh" value="{{old('birth')}}">
                @error('birthday')
                <p style="color:red">{{$message}}</p>
                @enderror
                    
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <span>Giới tính</span> <span class="text-danger">
                            (*)</span>:
                        <select class="form-control" name="sex">
                            <option value="" disabled selected>Giới tính</option>
                            <option {{ old('sex') == 'Nam' ? 'selected' : '' }}>Nam</option>
                            <option {{ old('sex') == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                        </select>
                  @error('sex')
                 <p style="color:red">{{$message}}</p>
                 @enderror
                    </div>
                </div>

             <div class="col-12">
                    <div class="form-group">
                        <span>Số điện thoại</span><span class="text-danger"> (*)</span>:
                         <input type="number" name="phone" class="form-control" placeholder="Số điện thoại" value="{{old('phone')}}">
                @error('phone')
                <p style="color:red">{{$message}}</p>
                @enderror
                    </div>
                </div>

                  <div class="col-12">
                    <div class="form-group">
                        <span>Loại khai báo</span> <span class="text-danger">
                            (*)</span>:
                <select class="form-control" name="type">
                    <option value="" disabled selected>Loại khai báo</option>
                    <option {{ old('type') == 'Theo dõi sức khỏe tại nhà' ? 'selected' : '' }}>Theo dõi sức khỏe tại nhà</option>
                    <option {{ old('type') == 'Người từ vùng dịch trở về' ? 'selected' : '' }}>Người từ vùng dịch trở về</option>
                    <option {{ old('type') == 'Người trong vùng có dịch' ? 'selected' : '' }}>Người trong vùng có dịch</option>
                </select>
                 @error('type')
                 <p style="color:red">{{$message}}</p>
                 @enderror
                    </div>
                </div>
               
          
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="form-group">
                        <span class="text_province">Tỉnh thành</span> <span class="tinhthanh text-danger"> (*)</span>:
                        <select class="form-control" name="province_id" id="province">
                            <option value="" selected disabled>Tỉnh/Thành phố</option>
                            @foreach($province1 as $key => $province)
                            <option value="{{$key}}"> {{$province}}</option>
                            @endforeach
                            </select>
                            @error('province_id')
                            <p style="color:red">{{$message}}</p>
                            @enderror
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="form-group">
                        <span class="text_district">Quận huyện</span> <span class="quanhuyen text-danger"> (*)</span>:
                            <select class="form-control" name="district_id" id="district" data-old="{{old('district_id')}}">
                            <option value="" selected disabled>Quận/huyện</option>

                            </select>
                            @error('district_id')
                            <p style="color:red">{{$message}}</p>
                            @enderror
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="form-group">
                     <span class="text_district">Phường xã</span> <span class="quanhuyen text-danger"> (*)</span>:
                        <select class="form-control" name="ward_id" id="ward">
                        <option value="" selected disabled>Phường/Xã</option>
                        </select>
                        @error('ward_id')
                        <p style="color:red">{{$message}}</p>
                        @enderror  
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <span class="text_address">Số nhà, tên đường</span><span class="text-danger">
                            (*)</span>:
                        <input class="form-control" name="number_house" placeholder="Số nhà, tên đường" value="{{old('number_house')}}">
                            @error('number_house')
                            <p style="color:red">{{$message}}</p>
                            @enderror
                    </div>
                </div>
               
                <div class="col-12">
                    <div class="form-group">
                        <span class="text_student_code" >CMND/CCCD</span> <span class="text-danger"> (*)</span>:
                        <input type="text" class="form-control" name="cccd" placeholder="Nhập chính xác CMND/CCCD" value="{{old('cccd')}}" >
                            @error('cccd')
                            <p style="color:red">{{$message}}</p>
                            @enderror
                    </div>
                </div>
              
{{--                 <div class="col-12">
                    <div class="form-group">
                        <span class="" >Ông/Bà hiện có mắc Covid-19 hoặc các trường hợp theo dõi sau đây không?</span>:
                        <div class="d-flex justify-content-start mt-1">
                            <div class="d-flex align-items-center mr-4">
                                <input type="radio" id="khongbiet" name="loai_doituong_xetnghiem" value="4" checked="">
                                <label class="ml-1 font-weight-normal" style="margin-bottom:0px">Không</label>
                            </div>
                            <div class="d-flex align-items-center mr-4">
                                <input type="radio" id="F0" name="loai_doituong_xetnghiem" value="0">
                                <label class="ml-1 font-weight-normal" style="margin-bottom:0px">Có</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="radio" id="F1" name="loai_doituong_xetnghiem" value="1">
                                <label class="ml-1 font-weight-normal"  style="margin-bottom:0px">F1</label>
                            </div>
                        </div>
                    </div>
                </div> --}}
             
                <div class="col-12">
                    <div class="form-group">
                        <span class="text_note_1 text-primary font-weight-bold" >Ông/bà hiện có những triệu chứng hay biểu hiện nào sau đây không?</span><span class="text-danger"> (*)</span>:
                        <div class="table-responsive mt-1">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th class="text_symptoms" >Dấu hiệu</th>
                                        <th width="15%" class="text-center" >Có</th>
                                        <th width="15%" class="text-center" >Không</th>
                                    </tr>
                                </thead>
                                <tbody id="list-trieuchung">
        
                            
                            <tr>
                                <td>Sốt,Ho <span class="text-danger">(*)</span></td>
                                <td class="text-center">
                                   <input type="radio" name="sot_ho" value="Có">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="sot_ho" value="Không" checked="">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Đau họng <span class="text-danger">(*)</span></td>
                                <td class="text-center">
                                 <input type="radio" name="dau_hong" value="Có">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="dau_hong" value="Không" checked="">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Mất vị/Mất mùi <span class="text-danger">(*)</span></td>
                                <td class="text-center">
                                    <input type="radio" name="mat_mui"  value="Có">
                                </td>
                                <td class="text-center">
                                   <input type="radio" name="mat_mui"  value="Không" checked="">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Cảm giác mệt <span class="text-danger">(*)</span></td>
                                <td class="text-center">
                                    <input type="radio" name="cam_giac_met"  value="Có">
                                </td>
                                <td class="text-center">
                                   <input type="radio" name="cam_giac_met"  value="Không" checked="">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Khó thở <span class="text-danger">(*)</span></td>
                                <td class="text-center">
                                   <input type="radio" name="kho_tho"  value="Có">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="kho_tho"  value="Không" checked="">
                                </td>
                            </tr>
                            
                  
                            </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="form-group ">
                        <span class="text-primary font-weight-bold">Trong thời gian vừa qua</span><span class="text-danger">
                            (*)</span>:
                        <div class="table-responsive mt-1">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th><span>Yếu tố dịch tễ</span> <span class="text-danger">(*)</span></th>
                                        <th width="15%" class="text-center text_yes" >Có</th>
                                        <th width="15%" class="text-center text_no">Không</th>
                                    </tr>
                                </thead>
                                <tbody id="list-dichte">
                                    <tr>
                                        <td>1. Bạn có đang mắc COVID-19 không? <span class="text-danger">(*)</span></td>
                                        <td class="text-center">
                                            <input type="radio" name="dang_mac_covid" value="Có" >
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="dang_mac_covid" value="Không"  checked="">
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>2. Tiếp xúc gần ca nhiễm, ca nghi nhiễm COVID-19 trong vòng 14 ngày qua <span class="text-danger">(*)</span></td>
                                        <td class="text-center">
                                            <input type="radio" name="tiep_xuc_gan_ca_nhiem" value="Có" >
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="tiep_xuc_gan_ca_nhiem" value="Không"  checked="">
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>3. Đi từ quốc gia hoặc vùng lãnh thổ khác trong vòng 14 ngày qua <span class="text-danger">(*)</span></td>
                                        <td class="text-center">
                                            <input type="radio" name="di_tu_quoc_gia" value="Có" >
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="di_tu_quoc_gia" value="Không"  checked="">
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>4. Bạn có kết thúc cách ly tập trung trong vòng 14 ngày qua không? <span class="text-danger">(*)</span></td>
                                        <td class="text-center">
                                            <input type="radio" name="cach_li" value="Có" >
                                        <td class="text-center">
                                            <input type="radio" name="cach_li" value="Không"  checked="">
                                        </td>
                                    </tr>
                                    
                
                                    
                                    <tr>
                                        <td>5. Bạn đã xuất viện do điều trị COVID-19 trong vòng 14 ngày qua không? <span class="text-danger">(*)</span></td>
                                        <td class="text-center">
                                            <input type="radio" name="xuat_vien" value="Có" >
                                        </td>
                                        <td class="text-center">
                                            <input type="radio" name="xuat_vien" value="Không"  checked="">
                                        </td>
                                    </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="col-12">
                    <div class="mb-1 d-none thongtinthem">
                        <span>Vui lòng cung cấp thêm thông tin triệu chứng, dịch tễ, lịch sử di chuyển</span><span class="text-danger"> (*)</span>:
                    </div>
                    <div class="form-group">
                         <label for="">Thông tin khác(nếu có)</label>
                        <textarea type="text-area" class="form-control" name="description" placeholder="Vui lòng cung cấp thêm thông tin về triệu chứng hay dấu hiệu khác nếu có" style="height: 100px">{{old('description')}}</textarea>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12 my-3 text-center">
                    <div block-bind="toolbar"><div class="toolbar"><div class="btn-group toolbar-group w-50">
                        <button name="submit" class="btn btn-success">Gửi</button></div></div></div>
                </div>
            </div>
        </div>
      </form>                         
    </div>
</div>
</div>
@include('layout.footer')
</body>
<!--/ Intro Single End /-->
@include('layout.scripts')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
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
