<?php

namespace App\Http\Controllers\Insert;

use App\Models\Imformation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;

class InsertController extends Controller
{
    public function view()

    {
        return view('dangkytiem/dangky');
    }

    public function index()
    {
        $provinces = DB::table("province")->pluck("provinceName", "province_id");
        return view('dangkytiem/dangky', compact('provinces'));
    }

    public function getDistrict(Request $request)
    {
        $district = DB::table("district")
            ->where("province_id", $request->province_id)
            ->pluck("districtName", "district_id");
        return response()->json($district);
    }

    public function getWard(Request $request)
    {
        $ward = DB::table("ward")
            ->where("district_id", $request->district_id)
            ->pluck("wardName", "ward_id");
        return response()->json($ward);
    }

    public function create(Request $request)
    {

        $input = $request->all();
        $validator = $request->validate([
            'name' => 'bail|required',
            'sex' => 'required',
            'birthday' => 'required',
            'phone' => 'bail|required|min:10',
            'cccd' => 'bail|required|min:9|max:12',
            'muitiem' => 'required',
            'vacxin' => 'required',
            'province_id' => 'required',
            'district_id' => 'required',
            'ward_id' => 'required'

        ], [
            'name.required' => 'Tên không được để trống',
            'sex.required' => 'Giới tính không được để trống',
            'birthday.required' => 'Ngày sinh không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.min' => 'Số điện thoại không hợp lệ',
            'cccd.required' => 'CCCD hoặc CMND không được để trống',
            'cccd.min' => 'CCCD hoặc CMND ít nhất phải 9 số',
            'cccd.max' => 'CCCD hoặc CMND nhiều nhất chỉ 12 số',
            'muitiem.required' => 'Chọn mũi muốn tiêm',
            'vacxin.required' => 'Chọn loại vácxin muốn tiêm',
            'province_id.required' => 'Tỉnh/Thành phố không được để trống',
            'district_id.required' => 'Quận/Huyện không được để trống',
            'ward_id.required' => 'Phường/Xã không được để trống',
        ]);


        $info = new Imformation;
        $info->name = $request->name;
        $info->sex = $request->sex;
        $info->birthday = $request->birthday;
        $info->phone = $request->phone;
        $info->cccd = $request->cccd;
        $info->bhyt = $request->bhyt;
        $info->tiensubenh = $request->tiensubenh;
        $info->muitiem = $request->muitiem;
        $info->vacxin = $request->vacxin;
        $info->province_id  = $request->province_id;
        $info->district_id = $request->district_id;
        $info->ward_id = $request->ward_id;

        $info->save();
        return redirect('dangkytiem/dangky')->with('success', 'Đăng ký tiêm thành công! Chúc mừng bạn');
    }
}
