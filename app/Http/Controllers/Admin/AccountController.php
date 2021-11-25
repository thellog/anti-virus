<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AccountController extends Controller
{
 public function index()
{
    
    $account = DB::table('users')->select('id','name','email','isAdmin','updated_at')->get();

         return view('admin.account.list',[ 
         'title' => 'Danh sách tài khoản',
          'account'=>$account]);
}
    
    public function edit($id)
   {

    $account = DB::table('users')->select('id','name','email','isAdmin','updated_at')->where('id',$id)->get();

         return view('admin.account.edit',[ 
         'title' => 'Chi tiết tài khoản',
         'account'=>$account]);
   }

  public function update(Request $request)
{
   
    date_default_timezone_set("Asia/Ho_Chi_Minh");  
 
    $updateData = DB::table('users')->where('id', $request->id)->update([
        'isAdmin' => $request->quyen,
        'updated_at' => date('Y-m-d H:i:s')
    ]);
   
    //Thực hiện chuyển trang
    return redirect('admin/account/list');
}


public function destroy ($id ) {
DB:: delete( 'delete from users where id = ?' ,[$id ]);

return redirect('admin/account/list')->with('success','Dữ liệu xóa thành công.');
}

}
