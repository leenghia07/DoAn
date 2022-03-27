@extends('index')
@section('content')
<div class=" row page-titles shadow-lg mx-0">
    <div class="col-sm-6 p-md-0">
        <div style="display:flex;">
            <h3> Sửa nhân viên</h3>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('listemployee')}}">nhân viên</a></li>
            <li class="breadcrumb-item active"><a href="">sửa</a></li>
        </ol>
    </div>
</div>
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif


@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
@if ( Session::has('error') )
<div class="alert alert-danger alert-dismissible" role="alert">
    <strong>{{ Session::get('error') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
</div>
@endif
                                {{-- NỘI DUNG TRANG EMPLOYEE--}}
<div class="mr-1 ml-1">
    <!-- Tiêu đề -->

     <!-- End tiêu đề -->
    <!-- form hiển thị dữ liệu -->
    <div class="row">
        @foreach($employee as $value)
        <div class="container py-5 card" style="margin-top: -20px; margin-left: 50px;">
                <form  method="POST" action="/admin/employee/update/{{$value->Id_NhanVien}}">
                    {{-- @method('PUT') --}}
                    @csrf
                    <div class="form-row">
                        {{-- <div class="col-md-6 lg-3  mb-3 ">
                            <label >Tên nhân viên</label>
                            <input type="text" class="form-control"  placeholder="Họ và tên nhân viên" value="{{$value->Ten}}" name="suahoten" required>
                        
                        </div> --}}
                        <div class="col-md-6 lg-3  mb-3 " style="display: flex">
                            <div class="col-md-6 lg-3  mb-3">
                                <label >Họ</label>
                                <input type="text" name="ho" class="form-control"  placeholder="Họ " value="{{$value->Ho}}"  required>
                            </div>
                            <div class=" col-md-6 lg-3 ml-3">
                                <label >Tên</label>
                                <input type="text" name="ten" class="form-control"  placeholder="tên nhân viên" value="{{$value->Ten}}"  required>
                            </div>
                        </div>
        
                        <div class="col-md-6 mb-3">
                            <label >Ngày sinh</label>
                            <input type="Date" class="form-control" placeholder="Ngày sinh" name="ngaysinh" value="{{$value->NgaySinh}}" required>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Giới tính</label>
                            <!-- <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required> -->
                            <!-- <input id="r1"  checked="checked" type="radio"  name="themgioitinh" value="Nam">Nam
                            <input id="r2" type="radio" name="themgioitinh" value="Nữ">Nữ<br> -->
                            <select class="form-control" name="gioitinh">
                                <option value="{{$value->GioiTinh}}" >{{$value->GioiTinh}}</option>
                                <option >---Chọn---</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label >Dân tộc</label>
                            <input type="text" class="form-control"placeholder="Dân tộc" name="dantoc" value="{{$value->DanToc}}" required>
                           
                        </div>
                    </div>
                    {{-- <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Trình độ</label>
                            <!-- <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required> -->
                            <select class="form-control" name="suatd">
                            
                                <option >---Chọn---</option>
                                <option disabled>---Đại Học---</option>
                           
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Phòng ban</label>
                            <!-- <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required> -->
                            <select class="form-control" name="suaphongban">
                                <option >--Chọn--</option>
                        </select>
                        </div>
                    </div> --}}
                    <div class="form-row">
                        <div class="col-md-6  mb-3">
                            <label >Chức vụ</label>
                            <select class="form-control" name="chucvu">
                                @foreach ($value->chucvu as $valuechucvu)
                                    <option value="{{$valuechucvu->Id_ChucVu}}" >{{$valuechucvu->TenChucVu}}</option>
                                 @endforeach
                                <option >--Chọn--</option>
                                @foreach ($listchucvu as $valuechucvu)
                                    <option value="{{$valuechucvu->Id_ChucVu}}">{{$valuechucvu->TenChucVu}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label >Email</label>
                            <input type="text" class="form-control" placeholder="Email" name="email" value="{{$value->Email}}" required>
                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            {{-- <label >Đơn vị</label>
                            <input type="text" class="form-control" placeholder="Đơn vị" name="suadonvi" value="{{$value->DonVi}}" required> --}}
                            <label >Đơn vị</label>
                            <select class="form-control" name="donvi" >
                                @foreach ($value->donvi as $valuedonvi)
                                    <option value="{{$valuedonvi->Id_DonVi}}" >{{$valuedonvi->TenDonVi}}</option>
                                 @endforeach
                                <option >--Chọn--</option>
                                @foreach ($listdonvi as $valuedv)
                                    <option value="{{$valuedv->Id_DonVi}}">{{$valuedv->TenDonVi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            {{-- @foreach ($value->bomon as $valuebomon)
                                <label>Bộ Môn</label>
                                <input type="text" class="form-control" placeholder="Bộ Môn" name="suabomon" value="{{$valuebomon->TenBoMon}}" required>
                            @endforeach --}}
                            <label>Bộ Môn</label>
                            <select class="form-control" name="bomon">
                                @foreach ($value->bomon as $valuebomon)
                                    <option value="{{$valuebomon->Id_BoMon}}" >{{$valuebomon->TenBoMon}}</option>
                                @endforeach
                                <option >--Chọn--</option>
                                @foreach ($listbomon as $valuebomon)
                                    <option value="{{$valuebomon->Id_BoMon}}">{{$valuebomon->TenBoMon}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label>CMND</label>
                            <input type="text" class="form-control" placeholder="Chứng minh nhân dân" name="cmnd" value="{{$value->CMND}}" required>
                            
                        </div>
                        <div class="col-md-6 mb-3">
                            <label >Số điện thoại</label>
                            <input type="text" class="form-control"placeholder="Số điện thoại" name="sdt" value="{{$value->SDT}}" required>
                        
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label >Biên chế</label>
                            <!-- <input type="text" class="form-control" placeholder="Địa chỉ" name="themdiachi" required> -->
                            <select class="form-control" name="bienche">
                                @if ($value->BienChe == '1')
                                    <option value="1">Đã có biên chế</option>
                                @else
                                    <option value="0">chưa có biên chế</option>
                                @endif
                                <option >--Chọn--</option>
                                <option value="1">Đã có biên chế</option>
                                <option value="0">chưa có biên chế</option>
                            </select> 
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Đã vào đảng</label>
                            <!-- <input type="date" class="form-control" placeholder="Quê quán" name="themquequan" required> -->
                            <select class="form-control" name="davaodang">
                                @if ($value->DaVaoDang == '1')
                                    <option value="1">Đã vào đảng</option>
                                @else
                                    <option value="0">Chưa vào đảng</option>
                                @endif
                                <option >--Chọn--</option>
                                <option value="1">Đã vào đảng</option>
                                <option value="0">Chưa vào đảng</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label >Bắt đầu công tác</label>
                            <input type="date" class="form-control" placeholder="Bắt đầu công tác" name="batdaucongtac" value="{{$value->BatDauCongTac}}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            {{-- <label>Chuyên môn đào tạo</label>
                            <input type="text" class="form-control" placeholder="Quê quán" name="suachuyenmon"value="{{$value->chuyenmon}}" required> --}}
                           
                            <label>Chuyên môn đào tạo</label>
                            <select class="form-control" name="chuyenmon">
                                @foreach ($value->chuyenmon as $valuechuyenmon)
                                    <option value="{{$valuechuyenmon->Id_ChuyenMon}}" >{{$valuechuyenmon->TenChuyenMon}}</option>
                                @endforeach
        
                                <option >--Chọn--</option>
                                @foreach ($listchuyenmon as $valuechuyenmon)
                                    <option value="{{$valuechuyenmon->Id_ChuyenMon}}">{{$valuechuyenmon->TenChuyenMon}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label >Nơi sinh</label>
                            <input type="text" class="form-control" placeholder="Nơi sinh" name="noisinh" value="{{$value->NoiSinh}}" required>
                           
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Ngày vào trường</label>
                            <input type="date" class="form-control" placeholder="" name="ngayvt" value="{{$value->NgayVaoTruong}}" required>
                           
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label >Địa chỉ</label>
                            <input type="text" class="form-control" placeholder="Địa chỉ"  name="diachi" value="{{$value->DiaChi}}" required>
                           
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Quê quán</label>
                            <input type="text" class="form-control" placeholder="Quê quán" name="quequan" value="{{$value->QueQuan}}" required>
                           
                        </div>
                    </div>
               
                    <div class="form-row">
                     
                        <div class="col-md-6 mb-3">
                            {{-- <label >Phân quyền</label>
                            <input type="text" class="form-control"  placeholder="Lương cơ bản" value="" name="phanquyen"  required> --}}
                            <label>Phân quyền</label>
                            <select class="form-control" name="phanquyen">
                                @foreach ($value->phanquyen as $valuephanquyen)
                                    <option value="{{$valuephanquyen->Id_PhanQuyen}}" >{{$valuephanquyen->TenQuyen}}</option>
                                @endforeach
        
                                <option >--Chọn--</option>
                                @foreach ($listphanquyen as $valuelistphanquyen)
                                    <option value="{{$valuelistphanquyen->Id_PhanQuyen}}">{{$valuelistphanquyen->TenQuyen}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="col-md-6 mb-3">
                            <label >Hệ số lương</label>
                            <input type="text" class="form-control"  placeholder="Hệ số lương" value="" name="hesoluong" required>
                           
                        </div> --}}
                       
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3 " >
                            <label >Tên Tài Khoản</label>
                            <input type="text" class="form-control"  placeholder="Tên tài khoản" name="tentk"  value="{{$value->TenTk}}" required>
                      
                        </div>
                        <div class="col-md-6 mb-3">
                            <label >Mật khẩu</label>
                            <input type="text" class="form-control"  placeholder="Mật khẩu" name="matkhau"  value="{{$value->MatKhau}}" required>
                      
                        </div>
                    </div>
                    <div class="mb-4 mt-4 " style="margin-left: 400px;">
                        <input type="submit" name="btn" class="btn btn-primary" type="submit" value="Sửa nhân viên">
                    </div>
                    @endforeach
                    </form>
             </div>
    </div>    
</div>
@endsection
