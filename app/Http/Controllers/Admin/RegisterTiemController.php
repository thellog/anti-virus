<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Imformation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use DB;
use PDF;

class RegisterTiemController extends Controller
{
  public function index()
  {
    $imformation = DB::select('select * from imformation inner join province ON imformation.province_id=province.province_id 
                                    inner join district ON imformation.district_id=district.district_id 
                                    inner join ward ON imformation.ward_id=ward.ward_id ');
    return view('admin.register_tiem.list', [
      'title' => 'Danh sách đăng ký tiêm',
      'imformation' => $imformation
    ]);
  }


  public function destroy($id)
  {
    DB::delete('delete from imformation where id = ?', [$id]);

    return redirect('admin/register_tiem/list')->with('success', 'Dữ liệu xóa thành công.');
  }

  // public function downloadPreview()
  // {
  //   $patients = Imformation::all();
  //   return view('admin.register_tiem.download-preview', [
  //     'title' => 'Danh sách đăng ký tiêm',
  //     'patients' => $patients
  //   ]);
  // }


  // public function downloadPDF()
  // {
  //   $patients = Imformation::all();
  //   $pdf = PDF::loadView('admin.register_tiem.download-preview', [
  //     'patients' => $patients,
  //   ]);
  //   return $pdf->download('patient.pdf');
  // }
}
