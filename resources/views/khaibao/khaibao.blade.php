<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @include('layout.head')
</head>

<body id="insert-bg">
@include('layout.menu')
<div class="container" style="margin-top:101px">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
        @php
        Session::forget('success');
        @endphp
    </div>
    @endif

   <div block-bind="content" id="content">
    <div class="container khaibaoyte px-1">
        <div class="row">
            <div class="col-12 text-right pt-1 pr-2 d-none">
               
            </div>
            <div class="col-12 text-center text-uppercase mt-1">
                <span class="text-title">
                    <!-- <span class="text_healthdeclaration"></span><br> -->
                    <span class="text_donvi_ten">Sở Y Tế TP. Hồ Chí Minh</span>
                </span>
                <span class="text-note d-block mt-1 text_subtitle text-danger" translate="khai_bao_sai_la_vi_pham_phap_luat">Khai báo thông tin sai là vi phạm pháp luật Việt Nam và có thể xử lý hình sự</span>
            </div>
        </div>
        <div class="card px-1 py-2 p-sm-2 mt-2">
            <div class="row ">

                <div class="col-12 d-flex flex-wrap danhsach_loai_khaibao">
                    <div class="custom-control custom-radio mt-2 mr-2">
                        <input type="radio" id="cuatoi" value="2" name="loai_khaibao" class="custom-control-input" checked="">
                        <label class="custom-control-label type_khaibaocuatoi" for="cuatoi" translate="benh_nhan_nguoi_nha">Bệnh nhân/Người nhà</label>
                    </div>
                    <div class="custom-control custom-radio mt-2 mr-2">
                        <input type="radio" id="nhanvien-benhvien" value="3" name="loai_khaibao" class="custom-control-input">
                        <label class="custom-control-label type_nhanvienbenhvien" for="nhanvien-benhvien" translate="nhan_vien_benh_vien">Nhân viên bệnh viện</label>
                    </div>
                    <div class="custom-control custom-radio mt-2 mr-2">
                        <input type="radio" id="khach" value="4" name="loai_khaibao" class="custom-control-input">
                        <label class="custom-control-label type_khach" for="khach" translate="khach_den_lien_he_cong_tac">Khách đến liên hệ công tác</label>
                    </div>
                    <div class="custom-control custom-radio mt-2 mr-2 tiemchung_wrap">
                        <input type="radio" id="student" value="5" name="loai_khaibao" class="custom-control-input">
                        <!-- <label class="custom-control-label type_student" for="student">Học viên/Sinh viên </label> -->
                        <label class="custom-control-label type_student" for="student" translate="tiem_chung_vac_xin">Tiêm chủng vắc xin</label>
                    </div>
                    <div class="custom-control custom-radio mt-2 mr-2 xetnghiem_wrap">
                        <input type="radio" id="xetnghiem_covid19" value="6" name="loai_khaibao" class="custom-control-input">
                        <label class="custom-control-label type_xetnghiem_covid19" for="xetnghiem_covid19" translate="xet_nghiem_covid_19">Xét nghiệm Covid-19</label>
                    </div>
                    <div class="custom-control custom-radio mt-2 mr-2 theodoi_tainha_wrap">
                        <input type="radio" id="theodoi_suckhoe_tainha" value="7" name="loai_khaibao" class="custom-control-input">
                        <label class="custom-control-label type_theodoi_suckhoe_tainha" for="theodoi_suckhoe_tainha" translate="theo_doi_suc_khoe_tai_nha">Theo dõi sức khỏe tại nhà</label>
                    </div>
                    <div class="custom-control custom-radio mt-1" style="flex: 1;text-align: right;padding-right: 10px;padding-left: 0;">
                        <button class="btn btn-sm btn-outline-primary clear-data px-1"><i class="fe-refresh-cw"></i>
                            <span class="type_clear" translate="nhap_lai">Nhập lại</span></button>
                    </div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-12 my-1">
                    <div class="text-danger text-center su_dung_cho_f0 d-none" translate="su_dung_cho_f0">Sử dụng cho F0 khai báo sức khoẻ và cách ly tại nhà</div>
                </div>
                <div class="col-12 donvi_khaibao">
                    <div class="form-group">
                        <span class="text_donvi" translate="noi_khai_bao">Nơi khai báo</span><span class="text-danger">
                            (*)</span>:
                        <select type="text" class="form-control input_donvi selectized" id="selectize-donvi" tabindex="-1" style="display: none;"><option value="" selected="selected"></option></select><div class="selectize-control form-control input_donvi single"><div class="selectize-input items not-full"><input type="select-one" autocomplete="off" tabindex="" id="selectize-donvi-selectized" placeholder="Nhập và chọn nơi khai báo" style="width: 174.641px;"></div><div class="selectize-dropdown single form-control input_donvi" style="display: none;"><div class="selectize-dropdown-content"><div class="option active" data-selectable="" data-value="200d7fc7-0783-4869-8bf8-99af14288475">ACC QUẬN 1 -  PHÒNG KHÁM CHUYÊN KHOA TRỊ LIỆU THẦN KINH CỘT SỐNG HOA KỲ</div><div class="option" data-selectable="" data-value="fd420c43-333d-4e47-b79c-64c2b224c990">ACC QUẬN 5 - PHÒNG KHÁM CHUYÊN KHOA TRỊ LIỆU THẦN KINH CỘT SỐNG HOA KỲ</div><div class="option" data-selectable="" data-value="8c585802-5b1d-4310-a62c-4fb8eaeb9d26">BỆNH VIỆN 1A (BỆNH VIỆN CHỈNH HÌNH VÀ PHỤC HỒI CHỨC NĂNG TP.HCM)</div><div class="option" data-selectable="" data-value="030df532-ee62-47c3-a9f7-0c2757ffdab7">BỆNH VIỆN 30/4</div><div class="option" data-selectable="" data-value="ba07b257-72e1-407c-a818-7acad7845180">BỆNH VIỆN AN BÌNH</div><div class="option" data-selectable="" data-value="a368b80f-be4f-4558-84dc-681df81a52ab">BỆNH VIỆN BỆNH NHIỆT ĐỚI</div><div class="option" data-selectable="" data-value="0abe6143-82af-437d-8bde-5cf17de88439">BỆNH VIỆN BÌNH DÂN</div><div class="option" data-selectable="" data-value="efd6c9de-9cff-4351-b7bb-e86dd640549b">BỆNH VIỆN CHẤN THƯƠNG CHỈNH HÌNH</div><div class="option" data-selectable="" data-value="ad79364c-bf9c-4a01-86e5-7be96fb9fb8f">BỆNH VIỆN CHỢ RẪY</div><div class="option" data-selectable="" data-value="0415582b-4222-467d-9715-4ab478286547">BỆNH VIỆN CHUYÊN KHOA NGOẠI THẦN KINH QUỐC TẾ</div><div class="option" data-selectable="" data-value="ae953919-0eea-4514-984b-e318db85c906">BỆNH VIỆN CHUYÊN KHOA PHẪU THUẬT TẠO HÌNH THẨM MỸ Á - ÂU</div><div class="option" data-selectable="" data-value="f6c2ffb3-6ce9-417f-b6c9-05af34f8690a">BỆNH VIỆN CHUYÊN KHOA PHẪU THUẬT TẠO HÌNH THẨM MỸ AVA VĂN LANG</div><div class="option" data-selectable="" data-value="b83f4d7c-e7f8-49d4-915a-eb3af64ea334">BỆNH VIỆN CHUYÊN KHOA PHẪU THUẬT THẨM MỸ SÀI GÒN</div><div class="option" data-selectable="" data-value="7b3bd3b5-fd6e-4d42-af4d-faaaa4c35810">BỆNH VIỆN CHUYÊN KHOA RĂNG HÀM MẶT SÀI GÒN</div><div class="option" data-selectable="" data-value="b44024df-6a4c-417f-aa60-400b255b799c">BỆNH VIỆN CKPT THẨM MỸ HÀN QUỐC KIM HOSPITAL</div><div class="option" data-selectable="" data-value="2231f4ce-693e-4b95-aed2-00ba1d49275b">BỆNH VIỆN CKPT THẨM MỸ QUỐC TẾ THẢO ĐIỀN</div><div class="option" data-selectable="" data-value="6d24d17a-e3d9-4472-87b2-6863d40d13ca">BỆNH VIỆN CÔNG AN THÀNH PHỐ HỒ CHÍ MINH</div><div class="option" data-selectable="" data-value="4377ce8d-aaa2-4f40-93f3-129d43c0d1b1">BỆNH VIỆN CÔNG AN TPHCM - 341</div><div class="option" data-selectable="" data-value="eb33c7d4-7252-42e6-b2e1-5cc5de415367">BỆNH VIỆN DÃ CHIẾN CỦ CHI</div><div class="option" data-selectable="" data-value="ccd90005-0857-4a83-8f29-1a4d9cb382b1">BỆNH VIỆN DÃ CHIẾN ĐIỀU TRỊ COVID-19 BÌNH THẠNH SỐ 1 (SỐ 01 CHU VĂN AN)</div><div class="option" data-selectable="" data-value="f5411c1d-1446-4024-b44f-4cf9d783b668">BỆNH VIỆN DÃ CHIẾN ĐIỀU TRỊ COVID-19 CÔNG AN TP</div><div class="option" data-selectable="" data-value="a5df6494-f0f8-42cd-8c00-8e287b7c32de">BỆNH VIỆN DÃ CHIẾN ĐIỀU TRỊ COVID-19 ĐA TẦNG - QUẬN TÂN BÌNH</div><div class="option" data-selectable="" data-value="481561f8-0ddb-43bd-bcbd-628e8f327ad8">BỆNH VIỆN DÃ CHIẾN ĐIỀU TRỊ COVID-19 HUYỆN BÌNH CHÁNH</div><div class="option" data-selectable="" data-value="671c4ca9-5434-4e84-9f01-c18d919da826">BỆNH VIỆN DÃ CHIẾN ĐIỀU TRỊ COVID-19 HUYỆN CỦ CHI</div><div class="option" data-selectable="" data-value="98be8ddc-d402-4915-b646-a5646b53f04c">BỆNH VIỆN DÃ CHIẾN ĐIỀU TRỊ COVID-19 PHÚ NHUẬN SỐ 1 (05 HOÀNG MINH GIÁM)</div></div></div></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <span class="text_phone" translate="so_dien_thoai">Số điện thoại</span><span class="text-danger"> (*)</span>:
                        <!-- <input type="number" class="form-control so_dien_thoai input_phone" placeholder="Số điện thoại liên lạc" data-bind="value:so_dien_thoai" pattern="[0-9]*" min="0" step="1" onkeypress='return event.charCode >= 48 && event.charCode <= 57 && this.value.length <= 11'
                            title="Numbers only"> -->
                        <input type="number" class="form-control so_dien_thoai input_phone" data-bind="value:so_dien_thoai" onkeypress="this.value.length <= 16" translate="nhap_so_dien_thoai">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <span class="text_fullname" translate="ho_va_ten">Họ và tên</span> <span class="text-danger">
                            (*)</span>:
                        <input type="text" class="form-control hoten input_fullname" placeholder="Họ và tên" data-bind="value:ten" style="text-transform:uppercase" maxlength="30" translate="ho_va_ten">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <span class="text_birthday" translate="ngay_sinh">Ngày sinh</span> <span class="text-danger">(*)</span>:
                        <input class="datetimepicker-input input_birthday form-control" type="DD/MM/YYYY" placeholder="DD/MM/YYYY"><input type="text" class="input_birthday form-control" id="combodate" placeholder="DD/MM/YYYY" style="display: none;">

                        <!-- <input type="text" class="form-control input_birthday" name="date_of_birth" value="" id="combodate" data-format="DD-MM-YYYY" placeholder="DD-MM-YYYY" data-template="DD MM YYYY"> -->
                        <!-- <input type="number" class="form-control input_birthday namsinh" placeholder=""
                            data-bind="value:namsinh" pattern="[0-9]*" min="0" step="1"
                            onkeypress='return event.charCode >= 48 && event.charCode <= 57 && this.value.length<4'
                            title="Numbers only" translate="nam_sinh"> -->

                    </div>
                </div>
                <div class="col-6 gioitinh">
                    <div class="form-group">
                        <span class="text_gender" translate="gioi_tinh">Giới tính</span> <span class="text-danger">
                            (*)</span>:
                        <div class="combobox-group"><div class="input-group combobox-control "><input class="form-control" type="text" placeholder="Chọn giới tính" inputmode="none"><input type="text" class="form-control gioitinh-input input_gender" placeholder="Chọn giới tính" data-bind="value:gioi_tinh" inputmode="none" style="display: none;"><ul class="dropdown-menu" style="overflow-y: scroll; width: 100%; height: auto; max-height: 200px; display: none;"><li class="dropdown-item active"><a href="javascript:void(0)">Nam</a></li><li class="dropdown-item"><a href="javascript:void(0)">Nữ</a></li><li class="dropdown-item"><a href="javascript:void(0)">Giới tính khác</a></li></ul><ul class="dropdown-menu" style="overflow-y: scroll; width: 100%; height: auto; max-height: 200px; display: none;"><li class="dropdown-item active"><a href="javascript:void(0)">Nam</a></li><li class="dropdown-item"><a href="javascript:void(0)">Nữ</a></li><li class="dropdown-item"><a href="javascript:void(0)">Giới tính khác</a></li></ul><span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"><span class="caret"></span><span class="glyphicon glyphicon-remove" style="display:none;"></span></span></div><div class="help-block" style="display: none;"></div></div>
                    </div>
                </div>
                <div class="col-12 manhanvien d-none">
                    <div class="form-group">
                        <span class="text_staff_code" translate="ma_nhan_vien">Mã nhân viên</span>:
                        <input type="text" class="form-control input_staff_code" placeholder="Mã nhân viên" data-bind="value:ma_benh_nhan" style="text-transform:uppercase" translate="ma_nhan_vien">
                    </div>
                </div>

                <div class="col-12 khoaphong d-none">
                    <div class="form-group">
                        <span class="text_department" translate="khoa_phong">Khoa/phòng</span>:
                        <input type="text" class="form-control input_department" placeholder="Khoa/phòng" data-bind="value:khoa_phong" translate="khoa_phong">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 quoctich">
                    <div class="form-group">
                        <span class="text_nationality" translate="quoc_tich">Quốc tịch</span> <span class="quocgia text-danger"> (*)</span>:
                       
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 tinhthanh">
                    <div class="form-group">
                        <span class="text_province" translate="tinh_thanh">Tỉnh thành</span> <span class="tinhthanh text-danger"> (*)</span>:
                        
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 quanhuyen">
                    <div class="form-group">
                        <span class="text_district" translate="quan_huyen">Quận huyện</span> <span class="quanhuyen text-danger"> (*)</span>:
                        <select class="form-control input_district selectized" placeholder="Quận huyện" id="quanhuyen" translate="quan_huyen" tabindex="-1" disabled="" style="display: none;"><option value="" selected="selected"></option></select><div class="selectize-control form-control input_district single loading"><div class="selectize-input items not-full disabled locked"><input type="select-one" autocomplete="off" tabindex="-1" id="quanhuyen-selectized" placeholder="Quận huyện" disabled="" style="width: 81.375px;"></div><div class="selectize-dropdown single form-control input_district" style="display: none;"><div class="selectize-dropdown-content"></div></div></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 xaphuong">
                    <div class="form-group">
                        <span class="text_ward" translate="xa_phuong">Xã phường</span> <span class="xaphuong text-danger"> (*)</span>:
                        <select class="form-control input_ward selectized" placeholder="Xã phường" id="xaphuong" translate="xa_phuong" tabindex="-1" disabled="" style="display: none;"><option value="" selected="selected"></option></select><div class="selectize-control form-control input_ward single loading"><div class="selectize-input items not-full disabled locked"><input type="select-one" autocomplete="off" tabindex="-1" id="xaphuong-selectized" placeholder="Xã phường" disabled="" style="width: 74.0781px;"></div><div class="selectize-dropdown single form-control input_ward" style="display: none;"><div class="selectize-dropdown-content"></div></div></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <span class="text_address" translate="dia_chi">Số nhà, tên đường</span><span class="text-danger">
                            (*)</span>:
                        <input type="text" class="form-control input_address" placeholder="Số nhà, tên đường" data-bind="value:dia_chi" translate="dia_chi">
                    </div>
                </div>
                <!-- <div class="col-12 benhnhan_noitru d-none">
                    <div class="form-group">
                        <span class="text_noitru">Bạn có đang nội trú?</span>:
                        <input type="text" class="form-control text_noitru input_noitru" placeholder="" data-bind="value:noi_tru">
                    </div>
                </div> -->
                <div class="col-12 masinhvien d-none">
                    <div class="form-group">
                        <!-- <span class="text_student_code">Mã sinh viên</span>:
                        <input type="text" class="form-control input_student_code" placeholder="Mã sinh viên" data-bind="value:ma_sinh_vien" style="text-transform:uppercase"> -->
                        <span class="text_student_code" translate="cmnd_cccd">CMND/CCCD</span> <span class="text-danger text-danger-masinhvien"> (*)</span>:
                        <input type="text" class="form-control input_student_code" placeholder="Nhập chính xác CMND/CCCD" data-bind="value:ma_sinh_vien" style="text-transform:uppercase" translate="nhap_chinh_xac_cmnd_ccccd">
                    </div>
                </div>
                <div class="col-12 ma_xetnghiem d-none">
                    <div class="form-group">
                        <span class="ma_xet_nghiem" translate="ma_xet_nghiem">Mã xét nghiệm</span>:
                        <input type="text" class="form-control nhap_ma_xet_nghiem" placeholder="Nhập mã xét nghiệm" data-bind="value:ma_xetnghiem" translate="nhap_ma_xet_nghiem">
                    </div>
                </div>
                <!-- <div class="col-12 loai_doituong_xetnghiem d-none">
                    <div class="form-group">
                        <span class="ban_thuoc_doi_tuong_nao" translate="ban_thuoc_doi_tuong_nao">Bạn thuộc đối tượng nào sau đây?</span>:
                        <input class="form-control chon_doi_tuong_xet_nghiem" data-bind="value:loai_doituong_xetnghiem">
                    </div>
                </div> -->
                <div class="col-12 wrap_loai_doituong_xetnghiem d-none mt-1">
                    <div class="form-group">
                        <span class="" translate="ong_ba_hien_co_mac_covid19">Ông/Bà hiện có mắc Covid-19 hoặc các trường hợp theo dõi sau đây không?</span>:
                        <div class="d-flex justify-content-start mt-1">
                            <div class="d-flex align-items-center mr-4">
                                <input type="radio" id="khongbiet" name="loai_doituong_xetnghiem" value="4" checked="">
                                <label class="ml-1 font-weight-normal" for="khongbiet" translate="khong">Không</label>
                            </div>
                            <div class="d-flex align-items-center mr-4">
                                <input type="radio" id="F0" name="loai_doituong_xetnghiem" value="0">
                                <label class="ml-1 font-weight-normal" for="F0" translate="co">Có</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="radio" id="F1" name="loai_doituong_xetnghiem" value="1">
                                <label class="ml-1 font-weight-normal" for="F1">F1</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 wrap_noi_xet_nghiem d-none">
                    <div class="form-group">
                        <span translate="noi_xet_nghiem">Nơi xét nghiệm</span>:
                        <div class="mt-1">
                            <div class="d-flex align-items-center mr-4 ml-1">
                                <input type="radio" id="benh_vien" name="noi_xet_nghiem" value="1">
                                <label class="ml-1 font-weight-normal" for="benh_vien" translate="benh_vien">Bệnh viện</label>
                            </div>
                            <div class="d-flex align-items-center mr-4 ml-1">
                                <input type="radio" id="phong_kham_tu_nhan" name="noi_xet_nghiem" value="2">
                                <label class="ml-1 font-weight-normal" for="phong_kham_tu_nhan" translate="phong_kham_tu_nhan">Phòng khám tư nhân</label>
                            </div>
                            <div class="d-flex align-items-center mr-4 ml-1">
                                <input type="radio" id="khu_phong_toa" name="noi_xet_nghiem" value="3">
                                <label class="ml-1 font-weight-normal" for="khu_phong_toa" translate="khu_phong_toa">Khu phong tỏa</label>
                            </div>
                            <div class="d-flex align-items-center mr-4 ml-1">
                                <input type="radio" id="tu_lam_xet_nghiem_tai_nha" name="noi_xet_nghiem" value="4">
                                <label class="ml-1 font-weight-normal" for="tu_lam_xet_nghiem_tai_nha" translate="tu_lam_xet_nghiem_tai_nha">Tự làm xét nghiệm tại nhà</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 wrap_co_benh_nen d-none mt-1">
                    <div class="form-group">
                        <span class="" translate="ong_ba_co_mac_benh_nen_khong">Ông/Bà có mắc bệnh nền hay không?</span>:
                        <div class="d-flex justify-content-start mt-1">
                            <div class="d-flex align-items-center mr-4">
                                <input type="radio" id="khong_benhnen" name="co_benh_nen" value="0" checked="">
                                <label class="ml-1 font-weight-normal" for="khong_benhnen" translate="khong">Không</label>
                            </div>
                            <div class="d-flex align-items-center mr-4">
                                <input type="radio" id="co_benhnen" name="co_benh_nen" value="1">
                                <label class="ml-1 font-weight-normal" for="co_benhnen" translate="co">Có</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 wrap_danhsach_benh_nen d-none">
                    <div class="form-group">
                        <span class="" translate="chon_benh_nen">Chọn bệnh nền</span>:
                        <div class="mt-1">
                            <div class="d-flex align-items-center mr-4 ml-1">
                                <input type="checkbox" id="than_man_tinh" name="danhsach_benh_nen" value="1">
                                <label class="ml-1 font-weight-normal" for="than_man_tinh" translate="than_man_tinh">Thận mạn tính</label>
                            </div>
                            <div class="d-flex align-items-center mr-4 ml-1">
                                <input type="checkbox" id="tang_huyet_ap" name="danhsach_benh_nen" value="2">
                                <label class="ml-1 font-weight-normal" for="tang_huyet_ap" translate="tang_huyet_ap">Tăng huyết áp</label>
                            </div>
                            <div class="d-flex align-items-center mr-4 ml-1">
                                <input type="checkbox" id="dai_thao_duong" name="danhsach_benh_nen" value="3">
                                <label class="ml-1 font-weight-normal" for="dai_thao_duong" translate="dai_thao_duong">Đái tháo đường</label>
                            </div>
                            <div class="d-flex align-items-center mr-4 ml-1">
                                <input type="checkbox" id="phoi_tac_nghen_man_tinh" name="danhsach_benh_nen" value="4">
                                <label class="ml-1 font-weight-normal" for="phoi_tac_nghen_man_tinh" translate="benh_phoi_tac_nghen_man_tinh">Bệnh phổi tắc nghẽn mạn tính</label>
                            </div>
                            <div class="d-flex align-items-center mr-4 ml-1">
                                <input type="checkbox" id="beo_phi" name="danhsach_benh_nen" value="5">
                                <label class="ml-1 font-weight-normal" for="beo_phi" translate="co_tinh_trang_beo_phi">Có tình trạng béo phì</label>
                            </div>
                            <div class="form-group mt-1">
                                <input type="text" class="form-control" placeholder="Nhập bệnh khác nếu có" data-bind="value:benh_nen_khac" translate="nhap_benh_khac_neu_co">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 wrap_su_dung_molnupiravir d-none mt-1">
                    <div class="form-group">
                        <span class="" translate="ong_ba_co_su_dung_thuoc_molnupiravir">Ông/bà có sử dụng thuốc Molnupiravir?</span>:
                        <div class="d-flex justify-content-start mt-1">
                            <div class="d-flex align-items-center mr-4">
                                <input type="radio" id="khong_su_dung" name="co_uong_molnupiravir" value="0" checked="">
                                <label class="ml-1 font-weight-normal" for="khong_su_dung" translate="khong">Không</label>
                            </div>
                            <div class="d-flex align-items-center mr-4">
                                <input type="radio" id="co_su_dung" name="co_uong_molnupiravir" value="1">
                                <label class="ml-1 font-weight-normal" for="co_su_dung" translate="co">Có</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 wrap_danhsach_trieu_chung_molnupiravir d-none">
                    <span class="mr-2 mb-1 text-primary font-weight-bold" translate="ban_co_thay_nhung_trieu_chung_nao_molnupiravir">Ông/bà có triệu chứng nào hay dấu hiệu sau khi sử dụng thuốc Molnupiravir?</span><span class="text-danger"> (*)</span>:

                    <div class="row  mt-1">
                        <div class="col-sm-4 col-6">
                            <div class="d-flex mb-2">
                                <span class="custom-control custom-checkbox d-inline-block mr-2">
                                    <input name="trieu_chung_molnupiravir" id="trieu_chung_molnupiravir_0" type="checkbox" class="custom-control-input mr-1 mt-1" value="0">
                                    <label for="trieu_chung_molnupiravir_0" class="custom-control-label" style="font-weight: normal; line-height: 23px; " translate="khong">Không</label>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-8 col-6">
                            <div class="d-flex mb-2">
                                <span class="custom-control custom-checkbox d-inline-block mr-2">
                                    <input name="trieu_chung_molnupiravir" id="trieu_chung_molnupiravir_1" type="checkbox" class="custom-control-input mr-1 mt-1" value="1">
                                    <label for="trieu_chung_molnupiravir_1" class="custom-control-label" style="font-weight: normal; line-height: 23px; " translate="noi_san_ngua">Nổi sần ngứa</label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-6">
                            <div class="d-flex mb-2">
                                <span class="custom-control custom-checkbox d-inline-block mr-2">
                                    <input name="trieu_chung_molnupiravir" id="trieu_chung_molnupiravir_2" type="checkbox" class="custom-control-input mr-1 mt-1" value="2">
                                    <label for="trieu_chung_molnupiravir_2" class="custom-control-label" style="font-weight: normal; line-height: 23px; " translate="non">Nôn</label>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-8 col-6">
                            <div class="d-flex mb-2">
                                <span class="custom-control custom-checkbox d-inline-block mr-2">
                                    <input name="trieu_chung_molnupiravir" id="trieu_chung_molnupiravir_3" type="checkbox" class="custom-control-input mr-1 mt-1" value="3">
                                    <label for="trieu_chung_molnupiravir_3" class="custom-control-label" style="font-weight: normal; line-height: 23px; " translate="dau_dau">Đau đầu</label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-6">
                            <div class="d-flex mb-2">
                                <span class="custom-control custom-checkbox d-inline-block mr-2">
                                    <input name="trieu_chung_molnupiravir" id="trieu_chung_molnupiravir_4" type="checkbox" class="custom-control-input mr-1 mt-1" value="4">
                                    <label for="trieu_chung_molnupiravir_4" class="custom-control-label" style="font-weight: normal; line-height: 23px; " translate="chong_mat">Chóng mặt</label>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-8 col-6">
                            <div class="d-flex mb-2">
                                <span class="custom-control custom-checkbox d-inline-block mr-2">
                                    <input name="trieu_chung_molnupiravir" id="trieu_chung_molnupiravir_5" type="checkbox" class="custom-control-input mr-1 mt-1" value="5">
                                    <label for="trieu_chung_molnupiravir_5" class="custom-control-label" style="font-weight: normal; line-height: 23px; " translate="dau_lung">Đau lưng</label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-6">
                            <div class="d-flex mb-2">
                                <span class="custom-control custom-checkbox d-inline-block mr-2">
                                    <input name="trieu_chung_molnupiravir" id="trieu_chung_molnupiravir_10" type="checkbox" class="custom-control-input mr-1 mt-1" value="10">
                                    <label for="trieu_chung_molnupiravir_10" class="custom-control-label" style="font-weight: normal; line-height: 23px; " translate="dau_bung">Đau bụng</label>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-8 col-6">
                            <div class="d-flex mb-2">
                                <span class="custom-control custom-checkbox d-inline-block mr-2">
                                    <input name="trieu_chung_molnupiravir" id="trieu_chung_molnupiravir_6" type="checkbox" class="custom-control-input mr-1 mt-1" value="6">
                                    <label for="trieu_chung_molnupiravir_6" class="custom-control-label" style="font-weight: normal; line-height: 23px; " translate="so_mui">Sổ mũi</label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-6">
                            <div class="d-flex mb-2">
                                <span class="custom-control custom-checkbox d-inline-block mr-2">
                                    <input name="trieu_chung_molnupiravir" id="trieu_chung_molnupiravir_7" type="checkbox" class="custom-control-input mr-1 mt-1" value="7">
                                    <label for="trieu_chung_molnupiravir_7" class="custom-control-label" style="font-weight: normal; line-height: 23px; " translate="dau_tay_chan">Đau tay chân</label>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-8 col-6">
                            <div class="d-flex mb-2">
                                <span class="custom-control custom-checkbox d-inline-block mr-2">
                                    <input name="trieu_chung_molnupiravir" id="trieu_chung_molnupiravir_8" type="checkbox" class="custom-control-input mr-1 mt-1" value="8">
                                    <label for="trieu_chung_molnupiravir_8" class="custom-control-label" style="font-weight: normal; line-height: 23px; " translate="tieu_chay">Tiêu chảy</label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-6">
                            <div class="d-flex mb-2">
                                <span class="custom-control custom-checkbox d-inline-block mr-2">
                                    <input name="trieu_chung_molnupiravir" id="trieu_chung_molnupiravir_9" type="checkbox" class="custom-control-input mr-1 mt-1" value="9">
                                    <label for="trieu_chung_molnupiravir_9" class="custom-control-label" style="font-weight: normal; line-height: 23px; " translate="buon_non">Buồn nôn</label>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-8 col-6">
                            <div class="d-flex mb-2">
                                <span class="custom-control custom-checkbox d-inline-block mr-2">
                                    <input name="trieu_chung_molnupiravir" id="trieu_chung_molnupiravir_11" type="checkbox" class="custom-control-input mr-1 mt-1" value="11">
                                    <label for="trieu_chung_molnupiravir_11" class="custom-control-label" style="font-weight: normal; line-height: 23px; " translate="yeu_liet_tay_chan">Yếu liệt tay chân</label>
                                </span>
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">
                         <div class="col-sm-4 col-6">
                            <div class="d-flex mb-2">
                                <span class="custom-control custom-checkbox d-inline-block mr-2">
                                    <input name="trieu_chung_molnupiravir" id="trieu_chung_molnupiravir_12" type="checkbox" class="custom-control-input mr-1 mt-1" value="12">
                                    <label for="trieu_chung_molnupiravir_12" class="custom-control-label" style="font-weight: normal; line-height: 23px; " translate="te_tay_chan">Tê tay chân</label>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-8 col-12">
                            <div class="d-flex justify-content-between mb-2">
                                <label class="mr-2" style="font-weight: normal; line-height: 30px;" translate="trieu_chung_khac">Triệu chứng khác</label>:
                                <input type="text" value="" class="form-control value_trieu_chung_molnupiravir_khac" style="width: calc(100% - 130px);">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 theodoi_suckhoe_tainha_wrap d-none">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <span class="text_nhietdo_cothe" translate="nhiet_do_co_the">Nhiệt độ cơ thể (ºC)</span>
                                <span class="text-danger text-danger-nhietdo d-none"> (*)</span>:
                                <input type="text" class="form-control" data-bind="value:nhietdo_cothe" placeholder="VD: 38.5 ">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <span class="text_nongdo_spo2" translate="nong_do_SPO2">Nồng độ oxy trong máu SPO2 (%)</span> :
                                <input type="text" class="form-control" data-bind="value:nongdo_spo2" placeholder="Nhập giá trị từ 30 -> 100 ">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 wrap_trieuchung">
                    <div class="form-group">
                        <span class="text_note_1 text-primary font-weight-bold" translate="ban_co_thay_nhung_trieu_chung_nao">Ông/bà hiện có những triệu chứng hay biểu hiện nào sau đây không?</span><span class="text-danger"> (*)</span>:
                        <div class="table-responsive mt-1">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th class="text_symptoms" translate="dau_hieu">Dấu hiệu</th>
                                        <th width="15%" class="text-center text_yes" translate="co">Có</th>
                                        <th width="15%" class="text-center text_no" translate="khong">Không</th>
                                    </tr>
                                </thead>
                                <tbody id="list-trieuchung">
                            <tr>
                                <td>Sốt <span class="text-danger">(*)</span></td>
                                <td class="text-center td-center">
                                    <label class="lb-radio"><input type="radio" id="c1d8c98c-625f-4b72-bee1-7d2f5b349504" name="trieuchung_c1d8c98c-625f-4b72-bee1-7d2f5b349504" class="radio-trieuchung" value="1"></label>
                                </td>
                                <td class="text-center td-center">
                                    <label class="lb-radio"><input type="radio" id="c1d8c98c-625f-4b72-bee1-7d2f5b349504" name="trieuchung_c1d8c98c-625f-4b72-bee1-7d2f5b349504" class="radio-trieuchung" value="0" checked=""></label>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Ho <span class="text-danger">(*)</span></td>
                                <td class="text-center td-center">
                                    <label class="lb-radio"><input type="radio" id="a7fd793f-0005-4e5b-824b-0d9b78f62daa" name="trieuchung_a7fd793f-0005-4e5b-824b-0d9b78f62daa" class="radio-trieuchung" value="1"></label>
                                </td>
                                <td class="text-center td-center">
                                    <label class="lb-radio"><input type="radio" id="a7fd793f-0005-4e5b-824b-0d9b78f62daa" name="trieuchung_a7fd793f-0005-4e5b-824b-0d9b78f62daa" class="radio-trieuchung" value="0" checked=""></label>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Đau họng <span class="text-danger">(*)</span></td>
                                <td class="text-center td-center">
                                    <label class="lb-radio"><input type="radio" id="84788402-ab6b-42b4-b112-2b175339cd5d" name="trieuchung_84788402-ab6b-42b4-b112-2b175339cd5d" class="radio-trieuchung" value="1"></label>
                                </td>
                                <td class="text-center td-center">
                                    <label class="lb-radio"><input type="radio" id="84788402-ab6b-42b4-b112-2b175339cd5d" name="trieuchung_84788402-ab6b-42b4-b112-2b175339cd5d" class="radio-trieuchung" value="0" checked=""></label>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Mất vị/Mất mùi <span class="text-danger">(*)</span></td>
                                <td class="text-center td-center">
                                    <label class="lb-radio"><input type="radio" id="bb617a80-b44f-4aba-99ad-789a64ec6f53" name="trieuchung_bb617a80-b44f-4aba-99ad-789a64ec6f53" class="radio-trieuchung" value="1"></label>
                                </td>
                                <td class="text-center td-center">
                                    <label class="lb-radio"><input type="radio" id="bb617a80-b44f-4aba-99ad-789a64ec6f53" name="trieuchung_bb617a80-b44f-4aba-99ad-789a64ec6f53" class="radio-trieuchung" value="0" checked=""></label>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Cảm giác mệt <span class="text-danger">(*)</span></td>
                                <td class="text-center td-center">
                                    <label class="lb-radio"><input type="radio" id="e4a4422c-63ea-413b-af87-085c68d84f27" name="trieuchung_e4a4422c-63ea-413b-af87-085c68d84f27" class="radio-trieuchung" value="1"></label>
                                </td>
                                <td class="text-center td-center">
                                    <label class="lb-radio"><input type="radio" id="e4a4422c-63ea-413b-af87-085c68d84f27" name="trieuchung_e4a4422c-63ea-413b-af87-085c68d84f27" class="radio-trieuchung" value="0" checked=""></label>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Khó thở <span class="text-danger">(*)</span></td>
                                <td class="text-center td-center">
                                    <label class="lb-radio"><input type="radio" id="273ef1cf-2d21-4ebd-8b98-1597f286faca" name="trieuchung_273ef1cf-2d21-4ebd-8b98-1597f286faca" class="radio-trieuchung" value="1"></label>
                                </td>
                                <td class="text-center td-center">
                                    <label class="lb-radio"><input type="radio" id="273ef1cf-2d21-4ebd-8b98-1597f286faca" name="trieuchung_273ef1cf-2d21-4ebd-8b98-1597f286faca" class="radio-trieuchung" value="0" checked=""></label>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Triệu chứng/dấu hiệu khác <span class="text-danger">(*)</span></td>
                                <td class="text-center td-center">
                                    <label class="lb-radio"><input type="radio" id="a07e679b-aed3-4094-b253-39fdf86c9799" name="trieuchung_a07e679b-aed3-4094-b253-39fdf86c9799" class="radio-trieuchung" value="1"></label>
                                </td>
                                <td class="text-center td-center">
                                    <label class="lb-radio"><input type="radio" id="a07e679b-aed3-4094-b253-39fdf86c9799" name="trieuchung_a07e679b-aed3-4094-b253-39fdf86c9799" class="radio-trieuchung" value="0" checked=""></label>
                                </td>
                            </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="form-group xacnhan_dichte">
                        <span class="text_note_2 text-primary font-weight-bold" translate="trong_thoi_gian_vua_qua">Trong thời gian vừa qua</span><span class="text-danger">
                            (*)</span>:
                        <div class="table-responsive mt-1">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th><span class="text_epidemiological_factors" translate="yeu_to_dich_te">Yếu tố dịch tễ</span> <span class="text-danger">(*)</span></th>
                                        <th width="15%" class="text-center text_yes" translate="co">Có</th>
                                        <th width="15%" class="text-center text_no" translate="khong">Không</th>
                                    </tr>
                                </thead>
                                <tbody id="list-dichte">
                                    <tr>
                                        <td>1. Bạn có đang mắc COVID-19 không? <span class="text-danger">(*)</span></td>
                                        <td class="text-center td-center">
                                            <label class="lb-radio"><input type="radio" id="b00d2b38-e410-492d-a09c-207767ab3046" name="dichte_b00d2b38-e410-492d-a09c-207767ab3046" class="radio-dichte" value="1" data-mucdo="2"></label>
                                        </td>
                                        <td class="text-center td-center">
                                            <label class="lb-radio"><input type="radio" id="b00d2b38-e410-492d-a09c-207767ab3046" name="dichte_b00d2b38-e410-492d-a09c-207767ab3046" class="radio-dichte" value="0" data-mucdo="2" checked=""></label>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>2. Tiếp xúc gần ca nhiễm, ca nghi nhiễm COVID-19 trong vòng 14 ngày qua <span class="text-danger">(*)</span></td>
                                        <td class="text-center td-center">
                                            <label class="lb-radio"><input type="radio" id="12079edc-995f-4f98-8065-c91f67266a47" name="dichte_12079edc-995f-4f98-8065-c91f67266a47" class="radio-dichte" value="1" data-mucdo="2"></label>
                                        </td>
                                        <td class="text-center td-center">
                                            <label class="lb-radio"><input type="radio" id="12079edc-995f-4f98-8065-c91f67266a47" name="dichte_12079edc-995f-4f98-8065-c91f67266a47" class="radio-dichte" value="0" data-mucdo="2" checked=""></label>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>3. Đi từ quốc gia hoặc vùng lãnh thổ khác trong vòng 14 ngày qua <span class="text-danger">(*)</span></td>
                                        <td class="text-center td-center">
                                            <label class="lb-radio"><input type="radio" id="c997fe49-f7c8-4dc4-bc5b-cf814aecec4e" name="dichte_c997fe49-f7c8-4dc4-bc5b-cf814aecec4e" class="radio-dichte" value="1" data-mucdo="2"></label>
                                        </td>
                                        <td class="text-center td-center">
                                            <label class="lb-radio"><input type="radio" id="c997fe49-f7c8-4dc4-bc5b-cf814aecec4e" name="dichte_c997fe49-f7c8-4dc4-bc5b-cf814aecec4e" class="radio-dichte" value="0" data-mucdo="2" checked=""></label>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>4. Bạn có kết thúc cách ly tập trung trong vòng 14 ngày qua không? <span class="text-danger">(*)</span></td>
                                        <td class="text-center td-center">
                                            <label class="lb-radio"><input type="radio" id="bea99843-5a1b-4dfb-bc9c-1d12d08e026c" name="dichte_bea99843-5a1b-4dfb-bc9c-1d12d08e026c" class="radio-dichte" value="1" data-mucdo="0"></label>
                                        </td>
                                        <td class="text-center td-center">
                                            <label class="lb-radio"><input type="radio" id="bea99843-5a1b-4dfb-bc9c-1d12d08e026c" name="dichte_bea99843-5a1b-4dfb-bc9c-1d12d08e026c" class="radio-dichte" value="0" data-mucdo="0" checked=""></label>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>5. Trong vòng 14 ngày qua, trong gia đình/cơ quan bạn có ai sốt hay ho không? <span class="text-danger">(*)</span></td>
                                        <td class="text-center td-center">
                                            <label class="lb-radio"><input type="radio" id="a6924294-262c-49dc-9f7d-0065c618f03b" name="dichte_a6924294-262c-49dc-9f7d-0065c618f03b" class="radio-dichte" value="1" data-mucdo="0"></label>
                                        </td>
                                        <td class="text-center td-center">
                                            <label class="lb-radio"><input type="radio" id="a6924294-262c-49dc-9f7d-0065c618f03b" name="dichte_a6924294-262c-49dc-9f7d-0065c618f03b" class="radio-dichte" value="0" data-mucdo="0" checked=""></label>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>6. Bạn đã xuất viện do điều trị COVID-19 trong vòng 14 ngày qua không? <span class="text-danger">(*)</span></td>
                                        <td class="text-center td-center">
                                            <label class="lb-radio"><input type="radio" id="3ef388e3-1619-44de-800c-fc4c4a1f55d1" name="dichte_3ef388e3-1619-44de-800c-fc4c4a1f55d1" class="radio-dichte" value="1" data-mucdo="0"></label>
                                        </td>
                                        <td class="text-center td-center">
                                            <label class="lb-radio"><input type="radio" id="3ef388e3-1619-44de-800c-fc4c4a1f55d1" name="dichte_3ef388e3-1619-44de-800c-fc4c4a1f55d1" class="radio-dichte" value="0" data-mucdo="0" checked=""></label>
                                        </td>
                                    </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="col-12">
                    <div class="mb-1 d-none thongtinthem">
                        <span class="text_note text-primary font-weight-bold" translate="vui_long_cung_cap_them_chi_tiet_trieu_chung_dich_te">Vui lòng cung cấp thêm thông tin triệu chứng, dịch tễ, lịch sử di chuyển</span><span class="text-danger"> (*)</span>:
                    </div>
                    <div class="form-group">
                        <textarea rows="2" class="form-control input_note" placeholder="Vui lòng cung cấp thêm thông tin về triệu chứng hay dấu hiệu khác nếu có" data-bind="value:ghi_chu" translate="vui_long_cung_cap_them_chi_tiet_trieu_chung_dich_te_neu_co"></textarea>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12 my-3 text-center">
                    <div block-bind="toolbar"><div class="toolbar"><div class="btn-group toolbar-group w-50"><button type="button" btn-name="save" class="btn btn-primary width-sm ml-1">Gửi</button></div></div></div>
                </div>
            </div>
        </div>

        <div id="list-modal"></div>
                                    <div id="full-detail-modal-3ef388e3-1619-44de-800c-fc4c4a1f55d1" class="modal fade show" tabindex="-1" aria-labelledby="standard-modalLabel" style="display: none; padding-right: 12px;" aria-modal="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="standard-modalLabel">Chi tiết</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body" style="white-space: pre-line">6. Bạn đã xuất viện do điều trị COVID-19 trong vòng 14 ngày qua không?</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Đóng</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                                    
                                    <div id="full-detail-modal-a6924294-262c-49dc-9f7d-0065c618f03b" class="modal fade show" tabindex="-1" aria-labelledby="standard-modalLabel" style="display: none; padding-right: 12px;" aria-modal="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="standard-modalLabel">Chi tiết</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body" style="white-space: pre-line">5. Trong vòng 14 ngày qua, trong gia đình/cơ quan bạn có ai sốt hay ho không?</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Đóng</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                                    
                                    <div id="full-detail-modal-bea99843-5a1b-4dfb-bc9c-1d12d08e026c" class="modal fade show" tabindex="-1" aria-labelledby="standard-modalLabel" style="display: none; padding-right: 12px;" aria-modal="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="standard-modalLabel">Chi tiết</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body" style="white-space: pre-line">4. Bạn có kết thúc cách ly tập trung trong vòng 14 ngày qua không?</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Đóng</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                                    
                                    <div id="full-detail-modal-c997fe49-f7c8-4dc4-bc5b-cf814aecec4e" class="modal fade show" tabindex="-1" aria-labelledby="standard-modalLabel" style="display: none; padding-right: 12px;" aria-modal="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="standard-modalLabel">Chi tiết</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body" style="white-space: pre-line">3. Đi từ quốc gia hoặc vùng lãnh thổ khác trong vòng 14 ngày qua</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Đóng</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                                    
                                    <div id="full-detail-modal-12079edc-995f-4f98-8065-c91f67266a47" class="modal fade show" tabindex="-1" aria-labelledby="standard-modalLabel" style="display: none; padding-right: 12px;" aria-modal="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="standard-modalLabel">Chi tiết</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body" style="white-space: pre-line">2. Tiếp xúc gần ca nhiễm, ca nghi nhiễm COVID-19 trong vòng 14 ngày qua</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Đóng</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                                    
                                    <div id="full-detail-modal-b00d2b38-e410-492d-a09c-207767ab3046" class="modal fade show" tabindex="-1" aria-labelledby="standard-modalLabel" style="display: none; padding-right: 12px;" aria-modal="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="standard-modalLabel">Chi tiết</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body" style="white-space: pre-line">1. Bạn có đang mắc COVID-19 không?</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Đóng</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                                    
    </div>
</div>
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
