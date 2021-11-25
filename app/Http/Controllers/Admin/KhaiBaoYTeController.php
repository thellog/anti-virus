<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Health_Declaration;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use DB;
class KhaiBaoYTeController extends Controller
{
    public function index() {
      $health_declaration = DB::select('select * from health_declaration inner join province ON health_declaration.province_id=province.province_id 
                                    inner join district ON health_declaration.district_id=district.district_id 
                                    inner join ward ON health_declaration.ward_id=ward.ward_id ');
      return view('admin.khaibaoyte.list',[ 
         'title' => 'Danh sách khai báo y tế',
          'health_declaration'=>$health_declaration]);
   }
   
        public function destroy ($id ) {
        DB:: delete( 'delete from health_declaration where id = ?' ,[$id ]);

        return redirect('admin/khaibaoyte/list')->with('success','Dữ liệu xóa thành công.');
        }
}
