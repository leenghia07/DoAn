<?php

namespace App\Http\Controllers\admin;

use App\nhanvien ;
use App\chucvu ;
use App\phanquyen ;
use App\chuyenmon ;
use App\bomon ;
use App\donvi ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TestExport;
use DB;
// use TableChucvu;

class EmployeeController extends Controller
{
 
    public function index()
    {
      // $InfoAdmin=nhanvien::where(['Id_NhanVien'=> session()->has('admin_id')])->get();
      $listemployee=nhanvien::all();      
      $tongnhanvien=$listemployee->count();
      $nhanviennam=$listemployee->where('GioiTinh','Nam')->count();
      $nhanviennu=$listemployee->where('GioiTinh','Nu')->count();
      return view('admin.employee.index',compact('listemployee','tongnhanvien','nhanviennam','nhanviennu'));
      // return view('admin.employee.index',compact('listemployee'));
    } 
    public function pagecreate()
    {    
 
      $listchucvu=chucvu::all();
      $listphanquyen=phanquyen::all();
      $listdonvi=donvi::all();
      $listchuyenmon=chuyenmon::all();
      $listbomon=bomon::all();
      return view('admin.employee.create',compact('listchucvu','listdonvi','listphanquyen','listchuyenmon','listbomon'));
    } 
    public function store(request $request)
    {
      
      $employee=new nhanvien();
        // trình độ
      // $employee->chucvu=$request->chucvu;
      $employee->Id_ChuyenMon=$request->chuyenmon;
      $employee->Id_BoMon=$request->bomon;
      $employee->Id_PhanQuyen=$request->phanquyen;
      $employee->Id_DonVi=$request->donvi;
      $employee->Id_TrinhDo='1';
      $employee->Id_ChucVu=$request->chucvu;
      $employee->Ho=$request->ho;
      $employee->Ten=$request->ten;
      $employee->NgaySinh=date('Y-m-d H:i:s', strtotime($request->ngaysinh));
      $employee->GioiTinh=$request->gioitinh;
      $employee->CMND=$request->cmnd;
      $employee->DanToc=$request->dantoc;
      $employee->SDT=$request->sdt;
      $employee->DiaChi=$request->diachi;
      $employee->NoiSinh=$request->noisinh;
      $employee->QueQuan=$request->quequan;
      $employee->DaVaoDang=$request->davaodang;
      $employee->BienChe=$request->bienche;
      $employee->BatDauCongTac=date('Y-m-d H:i:s' , strtotime($request->batdaucongtac));
      $employee->NgayVaoTruong=date('Y-m-d H:i:s' , strtotime($request->ngayvaotruong));
      $employee->Email=$request->email;
      $employee->HinhAnh=$request->hinhanh;
      $employee->TenTK=$request->tentk;
      $employee->MatKhau=$request->matkhau;
      
     
       $employee -> save();
      
        return redirect('/admin/employee')->with('success', 'Thêm nhân viên thành công');
      // }
      // else
      // {
      //   return back()->with('error', 'Thêm nhân viên thất bại');
        
      // }
      // dd($employee);
      // echo $employee;
    } 
    
    public function pageedit($id)
    {
      // $InfoAdmin=nhanvien::where(['Id_NhanVien'=> session()->has('admin_id')])->get();
      $employee=nhanvien::where(['Id_NhanVien'=> $id])->get(); 
      $listchucvu=chucvu::all();
      $listdonvi=donvi::all();
      $listphanquyen=phanquyen::all();
      $listchuyenmon=chuyenmon::all();
      $listbomon=bomon::all();
      return view('admin.employee.edit', compact('employee','listdonvi','listchucvu','listphanquyen','listchuyenmon','listbomon'));
    } 
    public function update(Request $request,$id)
    {
      $UpdateEmployee=nhanvien::where(['Id_NhanVien'=> $id])->update([
        'Ho' => $request->ho,
        'Ten' => $request->ten,
        'NgaySinh' => $request->ngaysinh,
        'GioiTinh' => $request->gioitinh,
        'CMND' => $request->cmnd,
        'SDT' => $request->sdt,
        'DiaChi' => $request->diachi,
        'NoiSinh' => $request->noisinh,
        'QueQuan' => $request->quequan,
        'DaVaoDang' => $request->davaodang,
        'BienChe' => $request->bienche,
        'BatDauCongTac' => $request->batdaucongtac,
        'NgayVaoTruong' => $request->ngayvt,
        'Email' => $request->email,
        // 'HinhAnh' => $request->hinhanh,
        'TenTK' => $request->tentk,
        'MatKhau' => $request->matkhau,
        // 'trinhdo' => $request->trinhdo,
        'Id_ChucVu' => $request->chucvu,
        'Id_PhanQuyen' => $request->phanquyen,
        'Id_ChuyenMon' => $request->chuyenmon,
        'Id_BoMon' => $request->bomon,
        'Id_DonVi' => $request->donvi
      ]);
      // $data = $request->all();
      // $update=$employee::update($data);
      if($UpdateEmployee)
      {
        return redirect('admin/employee')->with('success', 'Sửa thông tin thành công');
      }
      else
      {

        return back()->with('error', 'Sửa thông tin nhân viên thất bại');
      }
    } 

    public function destroy($id)
    {
      $employee=nhanvien::where(['Id_NhanVien'=> $id]);
      $xoa=$employee->delete();
      if($xoa)
      {
        return back()->with('success', 'Xóa nhân viên thành công');
      }
      else
      {
        return back()->with('error', 'Xóa nhân viên thất bại');
      }
      
    } 

    public function export()
    {
      return Excel::download(new TestExport(),'danhsachnhanvien.xlsx');
    }
    // public function index()
    // {
    //     return('welcome');
    // }
    
    // public function index()
    // {
    //   // $test='tao da thanh cong';
    //   $listemployee=nhanvien::all();      // dd($test);
    //   // $this -> view('admin.test',compact('test'));
    //   return view('admin.listemployee.index',compact('listemployee'));
    //   // $banners = chucvu::sortable()->get();
    //   // return view('admin.test', compact('chucvus'));
    //     // $result =chucvu::table('chucvu')->get();
    //     // return view('admin/test',$result,compact('chucvudata'));
    // }
    // public function loadpage()
    // {
    //     return view('admin.test');
    // }
    // public function checkdangnhap(Request $request)
    // {
    //     $dangnhap=
    // }
}
