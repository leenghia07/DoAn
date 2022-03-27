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
@if ( Session::has('errorinput') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('errorinput') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif

                                {{-- NỘI DUNG TRANG HOME--}}
<div class="mr-1 ml-1">
    <!-- Tiêu đề -->
    <div class=" row page-titles shadow-lg mx-0">
        <div class="col-sm-6 p-md-0">
            <div style="display:flex;">
                <h3> Tổng quan </h3>
                <p class="mt-2 mb-0 ml-4">  Đồ án quản lý nhân sự trường đại học quy nhơn</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('trangchu')}}">Home</a></li>
                {{-- <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li> --}}
            </ol>
        </div>
    </div>
     <!-- End tiêu đề -->
    <!-- form hiển thị dữ liệu -->
  
    <div class="row ">
        <div class="col">
            {{-- <div class="card"> --}}
                <!-- <h1>test</h1> -->
                <a href="{{ route('listemployee') }}" style="height: 120px; width: 250px; " class="shadow-lg btn btn-info">
                    <div style="display: flex;">
                            {{-- <div>
                                hien thi tong nhan vien
                            </div> --}}
                            <div  style="margin-top: 30px;margin-left: 5px;">
                                <span> Nhân viên</span>
                            </div>
                            <div style="margin-top: 20px;">
                                <img src="{{asset('./Images/user.png')}}" style="margin-left: 80px;" alt="">  
                            </div>
                    </div>
                    <div>
                            <p style="margin-top: 30px;">Danh sách nhân viên</p>
                    </div>
                </a>
            {{-- </div> --}}
        </div>
        <div class="col">
            {{-- <div class="card"> --}}
                <!-- <h1>test</h1> -->
                <a href="{{ route('create') }}" style="height: 120px; width: 250px; " class="shadow-lg btn btn btn-secondary">
                    <div style="display: flex;">
                            {{-- <div>
                                hien thi tong nhan vien
                            </div> --}}
                            <div  style="margin-top: 30px;margin-left: 5px;">
                                <span> Nhân viên</span>
                            </div>
                            <div style="margin-top: 20px;">
                                <img src="{{asset('./Images/user.png')}}" style="margin-left: 80px;" alt="">  
                            </div>
                    </div>
                    <div>
                            <p style="margin-top: 30px;">Thêm nhân viên</p>
                    </div>
                </a>
            {{-- </div> --}}
        </div>
        <div class="col">
            {{-- <div class="card"> --}}
                <!-- <h1>test</h1> -->
                <a href="{{ route('excel') }}" style="height: 120px; width: 250px;" class=" shadow-lg btn btn-success">
                    <!-- <form method="POST" action="xuatfiledanhsachNV.php"> -->
                    <div style="display: flex;">
                                <div>
                                    <p style=" font-size:20px"> Excel</p>
                                </div>
                                <div  style="margin-top: 40px;margin-bottom: 20px;">
                                    <p>Xuất file</p>
                                </div>
                                <div style="margin-top: 20px;">
                                    <img src="{{asset('./Images/excel.png')}}" style="margin-left: 80px;" alt="">  
                                </div>
                                <!-- <input type="submit" name="export" class="btn btn-success" value="Xuất danh sách" /> -->
                        </div>
                        <div>
                                <p style="margin-top: -20px;">Danh sách nhân viên</p>
                        </div>
                    <!-- </form>  -->
                    </a> 
            {{-- </div> --}}
        </div>
        <div class="col">
            {{-- <div class=""> --}}
                <a href="xuatfiledanhsachluong.php" style="height: 120px; width: 250px;" class=" shadow-lg btn btn-success">
                    <div style="display: flex;">
                            <div>
                                <p style=" font-size:20px"> Excel</p>
                            </div>
                            <div  style="margin-top: 40px;margin-bottom: 20px;">
                                <p>Xuất file</p>
                            </div>
                            <div style="margin-top: 20px;">
                                <img src="{{asset('./Images/salary.png')}}" style="margin-left: 80px;" alt="">  
                            </div>
                    </div>
                    <div>
                            <p style="margin-top: -20px;">Danh sách lương nhân viên</p>
                    </div>  
                </a>    
            {{-- </div> --}}
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <a href="xuatfiledanhsachluong.php" style="height: 120px; width: 250px;" class=" shadow-lg btn  btn-info">
                <div style="display: flex;">
                        <div>
                            <p style=" font-size:20px"> </p>
                        </div>
                        <div  style="margin-top: 40px;margin-bottom: 20px;">
                            <p>Xuất file</p>
                        </div>
                        <div style="margin-top: 20px;">
                            <img src="{{asset('./Images/salary.png')}}" style="margin-left: 80px;" alt="">  
                        </div>
                </div>
                <div>
                        <p style="margin-top: -20px;">Đánh giá</p>
                </div>  
            </a>  
        </div>
        <div class="col">
            <a href="xuatfiledanhsachluong.php" style="height: 120px; width: 250px;" class=" shadow-lg btn btn-warning">
                <div style="display: flex;">
                        <div>
                            <p style=" font-size:20px"> </p>
                        </div>
                        <div  style="margin-top: 40px;margin-bottom: 20px;">
                            <p>Xuất file</p>
                        </div>
                        <div style="margin-top: 20px;">
                            <img src="{{asset('./Images/salary.png')}}" style="margin-left: 80px;" alt="">  
                        </div>
                </div>
                <div>
                        <p style="margin-top: -20px;">Chấm công</p>
                </div>  
            </a>
        </div>
        <div class="col">
            <a href="xuatfiledanhsachluong.php" style="height: 120px; width: 250px;" class=" shadow-lg btn btn-danger">
                <div style="display: flex;">
                        <div>
                            <p style=" font-size:20px"> </p>
                        </div>
                        <div  style="margin-top: 40px;margin-bottom: 20px;">
                            <p>Xuất file</p>
                        </div>
                        <div style="margin-top: 20px;">
                            <img src="{{asset('./Images/salary.png')}}" style="margin-left: 80px;" alt="">  
                        </div>
                </div>
                <div>
                        <p style="margin-top: -20px;">Đào tạo</p>
                </div>  
            </a>
        </div>
        <div class="col">
            <a href="xuatfiledanhsachluong.php" style="height: 120px; width: 250px;" class=" shadow-lg btn btn-secondary">
                <div style="display: flex;">
                        <div>
                            <p style=" font-size:20px"> </p>
                        </div>
                        <div  style="margin-top: 40px;margin-bottom: 20px;">
                            <p>Xuất file</p>
                        </div>
                        <div style="margin-top: 20px;">
                            <img src="{{asset('./Images/salary.png')}}" style="margin-left: 80px;" alt="">  
                        </div>
                </div>
                <div>
                        <p style="margin-top: -20px;">Văn bản</p>
                </div>  
            </a>
        </div>
    </div>  
    {{-- End form  --}}
    <div class="container">
        <div class="row">
            <div class="col">
          
            </div>
            <div class="col-lg-4">
                <div class="card-body">
                        @include('pages/calendar')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="{{asset('./vendor/pg-calendar/js/pignose.calendar.min.js')}}"></script>



 {{-- <div class="col-lg-2 ml-5">
        <div class="">
            <a href="xuatfiledanhsachluong.php" style="height: 120px; width: 250px;" class=" shadow-lg btn btn-success">
                <div style="display: flex;">
                        <div>
                            <p style=" font-size:20px"> </p>
                        </div>
                        <div  style="margin-top: 40px;margin-bottom: 20px;">
                            <p>Xuất file</p>
                        </div>
                        <div style="margin-top: 20px;">
                            <img src="{{asset('./Images/salary.png')}}" style="margin-left: 80px;" alt="">  
                        </div>
                </div>
                <div>
                        <p style="margin-top: -20px;">Đánh giá</p>
                </div>  
            </a>  
        </div>
        </div> --}}
    
        {{-- <div class="col-lg-2 col-sm-3">
            <div class="">
                <a href="xuatfiledanhsachluong.php" style="height: 120px; width: 250px;" class=" shadow-lg btn btn-success">
                    <div style="display: flex;">
                            <div>
                                <p style=" font-size:20px"> </p>
                            </div>
                            <div  style="margin-top: 40px;margin-bottom: 20px;">
                                <p>Xuất file</p>
                            </div>
                            <div style="margin-top: 20px;">
                                <img src="{{asset('./Images/salary.png')}}" style="margin-left: 80px;" alt="">  
                            </div>
                    </div>
                    <div>
                            <p style="margin-top: -20px;">Văn bản</p>
                    </div>  
                </a>
            </div>
        </div> --}}
    {{-- </div> --}}