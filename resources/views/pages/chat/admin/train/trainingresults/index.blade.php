@extends('index')
@section('content')
<div class="mr-1 ml-1">
    <!-- Tiêu đề -->
    <div class=" row page-titles shadow-lg mx-0">
        <div class="col-sm-6 p-md-0">
            <h3>Danh sách kết quả đào tạo </h3>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('train')}}">danh sách</a></li>
                <li class="breadcrumb-item active"><a href="{{route('trainingresults')}}">Kết quả</a></li>
            </ol>
        </div>
    </div>
    @if ( Session::has('success') )
    <div class="alert mb-4 alert-primary solid alert-right-icon alert-dismissible fade show">
        <span><i class="mdi mdi-account-search"></i></span>
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button> {{ Session::get('success') }}
    </div>
@endif


@if ( Session::has('error') )
    <div class="alert mb-4 alert-danger solid alert-dismissible fade show">
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>
        <strong>{{ Session::get('error') }}</strong>
    </div>
@endif
    <div class="shadow-lg">
        <div class="card ">
            <div class="card-header">
                Kết quả đào tạo 
            </div>
            <div class="mt-2 ml-2 mr-2 mb-2">
                <form action="{{route('storeresult')}}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Nhân viên</label>
                            <select name="nhanvien" class="form-control"  id="" required>
                                <option value="">Mã nhân viên - Tên nhân viên</option>
                                @foreach ($employees as $employee)
                                    @if ($employee->Id_PhanQuyen =='1')
                                        <option disabled value="{{$employee->Id_NhanVien}}">{{$employee->Id_NhanVien.' - '.$employee->Ho.' '.$employee->Ten}}</option>
                                    @else
                                        <option  value="{{$employee->Id_NhanVien}}">{{$employee->Id_NhanVien.' - '.$employee->Ho.' '.$employee->Ten}}</option>
                                        {{-- <option value="">Mã nhân viên - Tên nhân viên</option>                                 --}}
                                    @endif
                                @endforeach
                            </select>
                        </div>                   
                    </div>
                    <div class="form-row">
                        <label>Khóa đào tạo</label>
                        <select name="daotao" class="form-control"  id="" required>
                            <option value="">Mã đào tạo - Tên đào tạo</option>
                            @foreach ($trains as $train)
                                <option  value="{{$train->Id_DaoTao}}">{{$train->Id_DaoTao.' - '.$train->TenDaoTao}}</option>
                            @endforeach
                        </select>
                    </div>  
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                                <label >Kết quả</label>
                                <select name="ketqua" class="form-control"  id="" required>
                                    <option value="">-- Chọn --</option>
                                    <option value="Đậu">Đậu</option>
                                    <option value="Rớt">Rớt</option>
                                </select>
                            </div>
                    </div>
                    <div class="form-row">  
                        <div class="col-xl-12 form-group col-xxl-12" required>
                            <div class="card-body">
                                <label>ghi chú</label>
                                <textarea  class="summernote" name="ghichu" id=""></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" style="margin-left: 400px; width:150px;height:50px;font-size: 20px;" class="btn  btn-primary">Thêm kết quả</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: -25px">
        <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-bordered ">
                    <thead class="text-center text-nowrap thead-light">
                    <tr>
                        <th class="w-5">
                            STT
                        </th>
                        <th class="w-10">
                           Hình Ảnh
                        </th>
                        <th class="w-15">
                            Nhân viên
                        </th>
                        <th class="w-15">
                            Khóa đào tạo
                        </th>
                        <th class="w-25">
                            Thời gian
                        </th>
                        <th class="w-5">
                            Kết quả
                        </th>
                        <th class="w-30">
                            Ghi chú
                        </th>
                        <th>
                            Thao tác
                        </th>
                    </tr>
                    </thead>
                <tbody>
                    @foreach ($result as $stt=> $valueresult)
                        <tr>
                            <td>
                                {{++$stt}}
                            </td>
                            <td>
                                @if ($valueresult->nhanvien->HinhAnh == '')
                                    @if ($valueresult->nhanvien->GioiTinh == 'Nam')
                                        <img src="{{ asset('./images/man.jpg')}}"  style="height: 90px;width: 90px" alt="">
                                    @else
                                        <img src="{{ asset('./images/woman.jpg')}}" style="height: 90px;width: 90px" alt="">
                                    @endif
                                @else
                                    <img src="{{ asset('./images/' . $valueresult->nhanvien->HinhAnh) }}"  style="height: 90px;width: 90px" alt="">
                                @endif
                            </td>
                            <td>
                                {{$valueresult->nhanvien->Ho.' '.$valueresult->nhanvien->Ten}}
                            </td>
                            <td>
                                {{$valueresult->daotao->TenDaoTao}}
                                {{-- {{$valueresult->daotao->TenDaoTao}} --}}
                            </td>
                            <td>
                                {{ \Carbon\Carbon::parse($valueresult->daotao->NgayBatDau)->format('d-m-Y').' --> '.\Carbon\Carbon::parse($valueresult->daotao->NgayKeThuc)->format('d-m-Y')}}
                            </td>
                            <td style="text-align: center">
                                @if ($valueresult->KetQua == "")
                                                                    
                                @else
                                    @if ($valueresult->KetQua == "Đậu")
                                        <span class="badge badge-pill badge-success" style="font-size: 15px;">Đậu</span>                                
                                    @else
                                        <span class="badge badge-pill badge-danger" style="font-size: 15px;">Rớt</span>
                                    @endif
                                @endif
                            </td>
                            <td>{!!$valueresult->GhiChu!!}</td>
                            <td>
                                <div style="display: flex">
                                    @method('DELETE')
                                     @csrf
                                    <a href="{{route('destroyresults',['id'=>$valueresult ->Id_KetQuaDT])}}" class="btn btn-danger">Xóa</a>
                                    <a href="" data-toggle="modal" data-target="#modalEdit-{{$valueresult->Id_KetQuaDT}}" class="btn btn-info ml-2" >Upload</a>
                                </div>   
                            </td>
                        </tr>  

                        <!-- START MODEL  -->
                    <div class="w-50 d-flex justify-content-end">
                        <div class="modal fade" id="modalEdit-{{$valueresult->Id_KetQuaDT}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered justify-content-center w-auto">
                                {{-- START FORM --}}
                            
                                <form action="{{route('updateresults',['id'=>$valueresult->Id_KetQuaDT])}}" method="post">
                                    @csrf
                                    <div class="modal-content p-3" style="width: 550px;">
                                        <div class="flex-row d-flex justify-content-center mb-2">
                                            <h2 class="text-info">Upload kết quả Khóa học{{' '.$valueresult->TenDaoTao}}</h2>
                                        </div>
                                        <input type="hidden" name="idketquadaotao" class="form-control" value="{{$valueresult->Id_KetQuaDT}}"  />
                                        <input type="hidden" name="daotaoUD" class="form-control" value="{{$valueresult->Id_DaoTao}}"  />
                                        <div class="d-flex flex-column w-auto mt-3">
                                            
                                            <div class="d-flex text-left mb-2 align-items-center">
                                                <div class="w-25 pl-2 mr-2">
                                                    <label class="my-auto">Nhân viên</label><b class="text-danger">*</b>
                                                </div>
                                                <div class="w-75">
                                                    <select name="nhanvienUD" class="form-control"  id="" required>
                                                        <option value="">-- Chọn --</option>
                                                        @foreach ($employees as $Employee)
                                                           @if ($valueresult->Id_NhanVien == $Employee->Id_NhanVien)
                                                           <option selected value="{{$Employee->Id_NhanVien}}">
                                                               <img src="{{ asset('./images/' . $Employee->HinhAnh) }}"  style="width:50px;height:50px;border-radius: 50%;" alt="">
                                                               <p>{{$Employee->Ho.' '.$Employee->Ten}}</p>
                                                           </option>
                                                           @else
                                                           <option value="{{$Employee->Id_NhanVien}}">
                                                               <img src="{{ asset('./images/' . $Employee->HinhAnh) }}"  style="width:50px;height:50px;border-radius: 50%;" alt="">
                                                               <p>{{$Employee->Ho.' '.$Employee->Ten}}</p>
                                                           </option>
                                                           @endif
                                                         
                                                        @endforeach
                                                    </select>  
                                                </div>
                                            </div>
                                            <div class="d-flex text-left mb-2 align-items-center">
                                                <div class="w-25 pl-2 mr-2">
                                                    <label class="my-auto">Kết quả</label><b class="text-danger">*</b>
                                                </div>
                                                <div class="w-75">
                                                    <select name="ketquaUD" class="form-control"  id="" required>
                                                        <option value="{{$valueresult->KetQua}}">{{$valueresult->KetQua}}</option>
                                                        <option value="">-- Chọn --</option>
                                                        <option value="Đậu">Đậu</option>
                                                        <option value="Rớt">Rớt</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">  
                                                <div class="col-xl-12 form-group col-xxl-12" required>
                                                    <div class="card-body">
                                                        <label>ghi chú</label>
                                                        <textarea  class="summernote" name="ghichuUD" id="">{{$valueresult->GhiChu}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row justify-content-end my-0 mt-4">
                                                {{-- <div class="w-25 mr-2"></div> --}}
                                                <div class="w-75 d-flex">
                                                    <input type="submit" name="btn" class="btn btn-success w-40" value="Upload">
                                                    <input type="submit" class="btn btn-info w-40 mr-2 ml-5" data-dismiss="modal" value="Đóng">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- END FORM --}}
                            </div>
                        </div>
                    </div>
                    <!-- END MODEL  -->
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection