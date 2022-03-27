<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\nhanvien;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function index()
    {
        if(session()->has('admin_id') !='')
        {
            return redirect('/admin');
        }
        else{
            return view('dangnhap');
        }
    }
    public function check(Request $request )
    {
        $user=nhanvien::where(['TenTK'=> $request->taikhoantxt, 'MatKhau'=> $request->matkhautxt])->get();
        if(count($user)>0)
        {
            foreach($user as $value)
            {
                if($value->Id_PhanQuyen == '1') //admin
                {
                    $request->session()->put('admin_id',$user[0]->Id_NhanVien);
                    return redirect('/admin');
                }
                else
                {
                    $request->session()->put('user_id',$user[0]->Id_NhanVien);
                    return redirect('/user');
                }
            }  }
            else
            {
                return back()->with('error','Bạn đã nhập sai tài khoản !!!');
            }
    }
  
            // $request->session()->put('admin_id',$user[0]->Id_NhanVien);
            // return redirect('/admin');
        //     echo $user;
        //   if($user->where('Id_PhanQuyen') == '1')
        //   {
        //       echo 'admin';
        //   }
        //   else{
        //       echo 'user';
        //   }
            
                // if($checkuser->phanquyen == '1')
                // {
                    // $request->session()->put('admin_id',$user[0]->Id_NhanVien);
                    // return redirect('/admin');
                //     dd("admin");
                // }
                // else
                // {
                //     dd("user");
                //     // $request->session()->put('user_id',$user[0]->Id_NhanVien);
                //     // return redirect('/user');
                // }
    public function logout(Request $request)
    {
       $request->session()->forget('admin_id');
       return redirect('/');
    }
   
    public function changepassword(Request $request)
    {
        $passpw=nhanvien::where(['Id_NhanVien'=> session()->has('admin_id')]);
        if( $request->nhaplaimk == $request->matkhaumoi)
        {
            $updatepass=$passpw->update([
                'MatKhau'  => $request->matkhaumoi
            ]);
            if($updatepass)
            {
                return back()->with('success','Bạn đã đổi mật khẩu thành công');
            }
            else
            {
                return back()->with('error','Bạn đã đổi mật khẩu thất bại');
            }
        }
        else{
            return back()->with('errorinput','Bạn đã nhập sai mật khẩu');
        }
    }

    // public function checauth()
    // {
    //  if(Auth::attempt(['TenTK'=> $request->taikhoantxt, 'MatKhau'=> $request->matkhautxt]))
    //     {
    //         // dd("đăng nhập thành công");
    //         echo  Auth::attempt(['TenTK'=> $request->taikhoantxt, 'MatKhau'=> $request->matkhautxt]);
    //         // return redirect('/trangchu');
    //     }
    //     else
    //     {
    //         // dd("đăng nhập thất bại");
    //         return back()->with('error','Đăng nhập thất bại');
    //     }
    //     return view('trangchu');
    // }
}
