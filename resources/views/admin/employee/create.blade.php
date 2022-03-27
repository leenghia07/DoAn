@extends('index')
@section('content')
    
<div class=" row page-titles shadow-lg mx-0">
    <div class="col-sm-6 p-md-0">
        <div style="display:flex;">
            <h3> Thêm nhân viên</h3>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('listemployee')}}">nhân viên</a></li>
            <li class="breadcrumb-item active"><a href="">Thêm</a></li>
        </ol>
    </div>
</div>
<div class="mr-2 ml-2"  style="width: 100%;">
@if ( Session::has('error') )
<div class="alert alert-danger alert-dismissible" role="alert">
    <strong>{{ Session::get('error') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
</div>
@endif
<div class="container py-5 card" style="margin-top: -20px; margin-left: 50px;">
        <form  method="POST" action="{{ route('store') }}">
            @csrf
            <div class="form-row">
                {{-- <div class="col-md-6 lg-3  mb-3 ">
                    <label >Tên nhân viên</label>
                    <input type="text" class="form-control"  placeholder="Họ và tên nhân viên" value="{{$value->Ten}}" name="suahoten" required>
                
                </div> --}}
                <div class="col-md-6 lg-3  mb-3 " style="display: flex">
                    <div class="col-md-6 lg-3  mb-3">
                        <label >Họ</label>
                        <input type="text" name="ho" class="form-control"  placeholder="Họ " required>
                    </div>
                    <div class=" col-md-6 lg-3 ml-3">
                        <label >Tên</label>
                        <input type="text" name="ten" class="form-control"  placeholder="tên nhân viên"   required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label >Ngày sinh</label>
                    <input type="Date" class="form-control" placeholder="Ngày sinh" name="ngaysinh"  required>
                </div>
            </div>
            <div class="form-row">
            <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Giới tính</label>
                      <select class="form-control" name="gioitinh">
                        <option >---Chọn---</option>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label >Dân tộc</label>
                    <input type="text" class="form-control"placeholder="Dân tộc" name="dantoc" required>
                   
                </div>
            </div>
            {{-- <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Trình độ</label>
                    <!-- <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required> -->
                    <select class="form-control" name="trinhdo">
                    <option >---Chọn---</option>
                    <option disabled>---Đại Học---</option>
                  
                        <option disabled>---Cao Đẳng---</option>
                        
                </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Phòng ban</label>
                    <!-- <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required> -->
                    <select class="form-control" name="phongban">
                        <option >--Chọn--</option>
                        
                </select>
                </div>
            </div> --}}
            <div class="form-row">
                <div class="col-md-6  mb-3">
                    <label >Chức vụ</label>
                    <!-- <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required> -->
                    <select class="form-control" name="chucvu">
                        <option >--Chọn--</option>
                        @foreach ($listchucvu as $valuechucvu)
                            <option value="{{$valuechucvu->Id_ChucVu}}">{{$valuechucvu->TenChucVu}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label >Email</label>
                    <input type="text" class="form-control" placeholder="Email" name="email" required>
                    
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label >Đơn vị</label>
                    {{-- <input type="text" class="form-control" placeholder="Đơn vị" name="themdonvi" required> --}}
                    <select class="form-control" name="donvi" >
                        <option >--Chọn--</option>
                        @foreach ($listdonvi as $valuedv)
                            <option value="{{$valuedv->Id_DonVi}}">{{$valuedv->TenDonVi}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Bộ Môn</label>
                    {{-- <input type="text" class="form-control" placeholder="Bộ Môn" name="thembomon" required> --}}
                    <select class="form-control" name="bomon">
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
                    <input type="text" class="form-control" placeholder="Chứng minh nhân dân" name="cmnd" required>
                    
                </div>
                <div class="col-md-6 mb-3">
                    <label >Số điện thoại</label>
                    <input type="text" class="form-control"placeholder="Số điện thoại" name="sdt" required>
                
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label >Biên chế</label>
                    <!-- <input type="text" class="form-control" placeholder="Địa chỉ" name="themdiachi" required> -->
                    <select class="form-control" name="bienche">
                        <option >--Chọn--</option>
                        <option value="1">Đã có biên chế</option>
                        <option value="0">chưa có biên chế</option>
                    </select> 
                </div>
                <div class="col-md-6 mb-3">
                    <label>Đã vào đảng</label>
                    <!-- <input type="date" class="form-control" placeholder="Quê quán" name="themquequan" required> -->
                    <select class="form-control" name="davaodang">
                        <option >--Chọn--</option>
                        <option value="1">Đã vào đảng</option>
                        <option value="0">Chưa vào đảng</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label >Bắt đầu công tác</label>
                    <input type="date" class="form-control" placeholder="Bắt đầu công tác" name="batdaucongtac" required>
                   
                </div>
                <div class="col-md-6 mb-3">
                    <label>Chuyên môn đào tạo</label>
                    <select class="form-control" name="chuyenmon">
                        <option >--Chọn--</option>
                        @foreach ($listchuyenmon as $valuechuyenmon)
                            <option value="{{$valuechuyenmon->Id_ChuyenMon}}">{{$valuechuyenmon->TenChuyenMon}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Quyền</label>
                    <select class="form-control" name="phanquyen">
                        <option >--Chọn--</option>
                        @foreach ($listphanquyen as $valuelistphanquyen)
                            <option value="{{$valuelistphanquyen->Id_PhanQuyen}}">{{$valuelistphanquyen->TenQuyen}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
          
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label >Nơi sinh</label>
                    <input type="text" class="form-control" placeholder="Nơi sinh" name="noisinh" required>
                   
                </div>
                <div class="col-md-6 mb-3">
                    <label>Ngày vào trường</label>
                    <input type="date" class="form-control" placeholder="Quê quán" name="ngayvaotruong" required>
                   
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label >Địa chỉ</label>
                    <input type="text" class="form-control" placeholder="Địa chỉ" name="diachi" required>
                   
                </div>
                <div class="col-md-6 mb-3">
                    <label>Quê quán</label>
                    <input type="text" class="form-control" placeholder="Quê quán" name="quequan" required>
                   
                </div>
            </div>
       
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label >Lương cơ bản</label>
                    <input type="text" class="form-control"  placeholder="Lương cơ bản" name="luongcoban" required>
                   
                </div>
                <div class="col-md-6 mb-3">
                    <label >Hệ số lương</label>
                    <input type="text" class="form-control"  placeholder="Hệ số lương" name="hesoluong" required>
                   
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3 " >
                    <label >Tên tài khoản</label>
                    <input type="text" class="form-control"  name="tentk" >
                   
                </div>
                <div class="col-md-6 mb-3">
                    <label >Mật khẩu</label>
                    <input type="text" class="form-control"  placeholder="Mật khẩu" name="matkhau" required>
                   
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3 " >
                    <label >Ảnh</label>
                    <input type="file" class="form-control"  name="hinhanh" accept=".jpg, .jpeg, .png" >
                   
                </div>
            </div>
            <div class="mb-4 mt-4 " style="margin-left: 400px;">
                <!-- <button class="btn btn-primary" type="submit">Thêm nhân viên</button> -->
                <input type="submit" name="btn" class="btn btn-primary" type="submit" value="Thêm nhân viên">
            </div>

            </form>
     </div>
     @endsection