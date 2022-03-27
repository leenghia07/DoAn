@extends('index')
@section('content')
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

                                {{-- NỘI DUNG TRANG EMPLOYEE--}}
<div class="mr-1 ml-1">
    <!-- Tiêu đề -->
    <div class=" row page-titles shadow-lg mx-0">
        <div class="col-sm-4">
            <h3>Danh sách  nhân viên </h3>
        </div>
        <div class="col mt-2">
            <h4>Tổng nhân viên: {{$tongnhanvien}}</h4>
        </div>
        <div class="col mt-2">
            <h4>Nhân viên nam: {{$nhanviennam}}</h4>
        </div>
        <div class="col mt-2">
            <h4>Nhân viên nữ: {{$nhanviennu}}</h4>
        </div>
        <div class="col-sm-2 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('listemployee')}}">nhân viên</a></li>
                {{-- <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li> --}}
            </ol>
        </div>
       
    </div>
     <!-- End tiêu đề -->
    <!-- form hiển thị dữ liệu -->
    <div class="row">
        <div class="card w-auto">
            <div class="ml-2 mr-2" style="margin-bottom:30px;" >
                <table class="table table-striped table-bordered" >
                <thead class="text-center text-nowrap thead-light">
                <tr>
                    <th class="w-10">
                        Ảnh
                     </th>
                    <th>
                        Mã NV
                    </th>
                    <th class="w-30">
                        Họ Tên
                    </th>
                    <th class="w-10">
                        Ngày Sinh
                    </th>
                    <th class="">
                        Giới tính
                    </th>
                    <th>
                        Dân tộc
                    </th>
                    <th class="w-10">
                        CMND
                    </th>
                    <th >
                        Số điện thoại
                    </th>
                    {{-- <th class="w-25">
                        Địa chỉ
                    </th> --}}
                    <th  class="w-25">
                        Email
                    </th>
                    <th>
                        Thao tác
                    </th>
                </tr>
                </thead>
            <tbody>
                @foreach($listemployee as $value)
                <tr>
                    <td style="text-align: center">
                        @if ($value ->HinhAnh == '')
                            @if ($value ->GioiTinh == 'Nam')
                                <img src="{{ asset('./images/man.jpg')}}"  style="height: 100px;width: 100px" alt="">
                            @else
                                <img src="{{ asset('./images/woman.jpg')}}" style="height: 100px;width: 100px" alt="">
                            @endif
                        @else
                            <img src="{{ asset('./images/' . $value ->HinhAnh) }}"  style="height: 165px;width: 145px" alt="">
                        @endif
                    </td>
                    <td style="text-align: center">{{$value ->Id_NhanVien }}</td>
                    <td class="align-middle text-left " ><a href="" style="color: black;"> {{$value ->Ho }} {{$value ->Ten }}</a></td>
                    <td style="text-align: center">{{$value ->NgaySinh }} </td>
                    <td style="text-align: center" >{{$value ->GioiTinh}}</td>
                    <td style="text-align: center">{{$value ->DanToc }}</td>
                    <td style="text-align: center">{{$value ->CMND }}</td>
                    <td style="text-align: center">{{$value ->SDT }}</td>
                    {{-- <td class="align-middle text-left " >{{$value ->DiaChi }}</td> --}}
                    <td class="align-middle text-left " >{{$value ->Email }}</td>
                    <td  style=" text-align: center ">
                        <div style="display: flex">
                            @method('DELETE')
                        @csrf
                            <a href="/admin/employee/delete/{{$value ->Id_NhanVien}}" class="btn btn-danger">Xóa</a>
                            <a href="/admin/employee/edit/{{$value ->Id_NhanVien}}" class="btn btn-info ml-2" >Sửa</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
            </div>
        </div>
    </div>    
</div>
@endsection
