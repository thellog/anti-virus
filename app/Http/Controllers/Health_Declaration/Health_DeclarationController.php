<?php

namespace App\Http\Controllers\Health_Declaration;

use App\Models\Health_Declaration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;

class Health_DeclarationController extends Controller
{
    public function view()

    {
        return view('khaibaoyte/khaibao');
    }

    public function index()
    {
        $province1 = DB::table("province")->pluck("provinceName", "province_id");
        return view('khaibaoyte/khaibao', compact('province1'));
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
            'birth' => 'required',
            'phone' => 'bail|required|min:10',
            'cccd' => 'bail|required|min:9|max:12',
            'type' => 'required',
            'number_house' => 'required',
            'province_id' => 'required',
            'district_id' => 'required',
            'ward_id' => 'required'

        ], [
            'name.required' => 'Tên không được để trống',
            'sex.required' => 'Giới tính không được để trống',
            'birth.required' => 'Ngày sinh không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.min' => 'Số điện thoại không hợp lệ',
            'cccd.required' => 'CCCD hoặc CMND không được để trống',
            'cccd.min' => 'CCCD hoặc CMND ít nhất phải 9 số',
            'cccd.max' => 'CCCD hoặc CMND nhiều nhất chỉ 12 số',
            'type.required' => 'Vui lòng chọn loại khai báo',
            'number_house.required' => 'Vui lòng ghi địa chỉ nhà',
            'province_id.required' => 'Tỉnh/Thành phố không được để trống',
            'district_id.required' => 'Quận/Huyện không được để trống',
            'ward_id.required' => 'Phường/Xã không được để trống',
        ]);


        $info = new Health_Declaration;
        $info->name = $request->name;
        $info->sex = $request->sex;
        $info->birth = $request->birth;
        $info->phone = $request->phone;
        $info->cccd = $request->cccd;
        $info->type = $request->type;
        $info->number_house = $request->number_house;   
        $info->province_id  = $request->province_id;
        $info->district_id = $request->district_id;
        $info->ward_id = $request->ward_id;
        $info->sot_ho = $request->sot_ho;
        $info->dau_hong  = $request->dau_hong;
        $info->mat_mui  = $request->mat_mui;
        $info->cam_giac_met = $request->cam_giac_met;
        $info->kho_tho = $request->kho_tho;
        $info->dang_mac_covid = $request->dang_mac_covid;
        $info->tiep_xuc_gan_ca_nhiem = $request->tiep_xuc_gan_ca_nhiem;   
        $info->di_tu_quoc_gia  = $request->di_tu_quoc_gia;
        $info->cach_li  = $request->cach_li ;
        $info->xuat_vien = $request->xuat_vien;
        $info->description  = $request->description;

        $info->save();
        return redirect('khaibaoyte/khaibao')->with('success', 'Khai báo y tế thành công !');
    }
}
