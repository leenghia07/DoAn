@extends('index')
@section('content')
<div class="mr-1 ml-1">
    <!-- Tiêu đề -->
    @foreach ($detailtrains as $detailtrain)
    <div class=" row page-titles shadow-lg mx-0">
        <div class="col-sm-4">
            <h3>Chi tiết Đào tạo</h3>
        </div>
        <div class="col mt-2">
            <h4>Thời gian:{{' '.\Carbon\Carbon::parse($detailtrain->NgayBatDau)->format('d-m-Y').' --> '.\Carbon\Carbon::parse($detailtrain->NgayKeThuc)->format('d-m-Y')}}</h4>
        </div>
        <div class="col-sm-2 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('train')}}">Đào tạo</a></li>
                <li class="breadcrumb-item active"><a href="{{route('trainingresults')}}">{{$detailtrain->TenDaoTao}}</a></li>
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
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow-lg">
            <div class="card-content">
                <div class="row mt-1 mb-1">
                    <div class="col-lg-5 ml-5">
                        <div class="row">
                            <div class="col-lg-7 mt-5" style="border-right: 2px dashed #ccc;">
                                <h4>Khóa đào tạo:{{' '.$detailtrain->TenDaoTao}} </h4>
                                <h6>Loại khóa đào tạo:{{' '.$detailtrain->loaidaotao->TenLoaiDaoTao}}</h6>
                                <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#modalcreate">Thêm nhân viên </a>
                                       <!-- START MODEL  -->
                                       <div class="w-50 d-flex justify-content-end">
                                        <div class="modal fade" id="modalcreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered justify-content-center w-auto">
                                                {{-- START FORM --}}
                                                <form action="/admin/train/trainingresults/store" method="post">
                                                    @csrf
                    
                                                    <div class="modal-content p-3" style="width: 550px;">
                                                        <div class="flex-row d-flex justify-content-center mb-2">
                                                            <h2 class="text-info">Thêm nhân viên Khóa học{{' '.$detailtrain->TenDaoTao}}</h2>
                                                        </div>
                                                        <input type="hidden" name="check" class="form-control" value="1"  />
                                                        <input type="hidden" name="iddaotao" class="form-control" value="{{$detailtrain->Id_DaoTao}}"  />
                                                        <div class="d-flex flex-column w-auto mt-3">
                                                            
                                                            <div class="d-flex text-left mb-2 align-items-center">
                                                                <div class="w-25 pl-2 mr-2">
                                                                    <label class="my-auto">Nhân viên</label><b class="text-danger">*</b>
                                                                </div>
                                                                <div class="w-75">
                                                                    <select name="nhanvien" class="form-control"  id="" required>
                                                                        <option value="">-- Chọn --</option>
                                                                        @foreach ($addEmployees as $addEmployee)
                                                                            @foreach ($resulTrains as $employJion)   
                                                                            @if($addEmployee->Id_PhanQuyen=='1')
                                                                            <option disabled value="{{$addEmployee->Id_NhanVien}}">
                                                                             
                                                                                <p>{{$addEmployee->Ho.' '.$addEmployee->Ten}}</p>
                                                                            </option>
                                                                            @else
                                                                              
                                                                                @if ($addEmployee->Id_NhanVien == $employJion->Id_NhanVien)
                                                                                    <option disabled value="{{$addEmployee->Id_NhanVien}}">
                                                                                        <p>{{$addEmployee->Ho.' '.$addEmployee->Ten}}</p>
                                                                                    </option>

                                                                                @else
                                                                                    <option value="{{$addEmployee->Id_NhanVien}}">
                                                                                        <p>{{$addEmployee->Ho.' '.$addEmployee->Ten}}</p>
                                                                                    </option>
                                                                                @endif
                                                                          
                                                                            @endif
                                                                            @endforeach
                                                                        @endforeach
                                                                    </select>  
                                                                </div>
                                                            </div>
                                                            <div class="d-flex flex-row justify-content-end my-0 mt-4">
                                                                {{-- <div class="w-25 mr-2"></div> --}}
                                                                <div class="w-75 d-flex">
                                                                    <input type="submit" name="btn" class="btn btn-success w-40" value="Thêm">
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
                            
                        </div>
                        </div>
                    </div>
                   <div class="col">
                        <ul>
                            <li class="mt-3">
                                <div class="row">
                                    <div class="col-lg-5">
                                        Ngày bắt đầu
                                    </div>
                                    <div class="col-lg-7">
                                        {{\Carbon\Carbon::parse($detailtrain->NgayBatDau)->format('d-m-Y')}}
                                    </div>
                                </div>
                            </li>
                            <li class="mt-2">
                                <div class="row">
                                    <div class="col-lg-5">
                                        Ngày kết thúc
                                    </div>
                                    <div class="col-lg-7">
                                        {{\Carbon\Carbon::parse($detailtrain->KetThuc)->format('d-m-Y')}}
                                    </div>
                                </div>
                            </li>
                            <li class="mt-2">
                                <div class="row">
                                    <div class="col-lg-5">
                                        Chi phí
                                    </div>
                                    <div class="col-lg-7">
                                        {{$detailtrain->ChiPhi}}
                                    </div>
                                </div>
                            </li>
                            <li class="mt-2">
                                <div class="row">
                                    <div class="col-lg-5">
                                        Nơi đào tạo
                                    </div>
                                    <div class="col-lg-7">
                                        {{$detailtrain->NoiDaoTao}}
                                    </div>
                                </div>
                            </li>
                            <li class="mt-2">
                                <div class="row">
                                    <div class="col-lg-5">
                                        Trạng thái
                                    </div>
                                    <div class="col-lg-7">
                                        @if ($detailtrain->TinhTrang=='1')
                                            <p style="color: green">Khóa học chưa đóng</p>
                                        @else
                                            <p style="color: red">khóa học này đã kết thúc</p>
                                        @endif
                                    </div>
                                </div>
                            </li>
                        </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<div class="row">
    <div class="col-lg-12 ">
        <div class="card shadow-lg">
            <div class="card-header">
                Danh sách nhân viên tham gia
            </div>
            <div class="card-content mt-2 ml-2 mr-2 mb-2">
                <table class="table table-striped table-bordered ">
                    <thead class="text-center text-nowrap thead-light">
                    <tr>
                        <tr>
                            <th class="w-5">
                                STT
                            </th>
                            <th class="w-15">
                                Nhân viên
                            </th>
                            <th class="w-5">
                                Kết quả
                            </th>
                            <th class="w-30">
                                Ghi chú
                            </th>
                            <th class="w-5">
                                Thao tác
                            </th>
                        </tr>
                    </tr>
                    </thead>
                <tbody>
                    @foreach ($resulTrains as $stt=> $EmployeeResul)
                    <tr>
                        <td class="text-center">
                            {{++$stt}}
                        </td>
                        <td>
                            <div class=" d-flex align-items-center" >
                                @if ($EmployeeResul->nhanvien->HinhAnh == '')
                                @if ($EmployeeResul->nhanvien->GioiTinh == 'Nam')
                                    <img src="{{ asset('./images/man.jpg')}}"  style="width:50px;height:50px;border-radius: 50%;" alt="">
                                @else
                                    <img src="{{ asset('./images/woman.jpg')}}" style="width:50px;height:50px;border-radius: 50%;" alt="">
                                @endif
                                @else
                                    <img src="{{ asset('./images/' . $EmployeeResul->nhanvien->HinhAnh) }}"  style="width:50px;height:50px;border-radius: 50%;" alt="">
                                @endif
                                <p class="ml-2 ml-3 my-auto">
                                {{$EmployeeResul->nhanvien->Ho.' '.$EmployeeResul->nhanvien->Ten}}
                                </p>
                            </div>
                        </td>
                        <td style="text-align: center">
                            @if ($EmployeeResul->KetQua=='' || $EmployeeResul->KetQua=='null')
                                
                            @else
                                @if ($EmployeeResul->KetQua == "Đậu")
                                    <span class="badge badge-pill badge-success" style="font-size: 15px;">Đậu</span>                                
                                @else
                                    <span class="badge badge-pill badge-danger" style="font-size: 15px;">Rớt</span>
                                @endif
                            @endif
                        </td>
                        <td>{{$EmployeeResul->GhiChu}}</td>
                        <td style="text-align: center" class="d-flex">
                            <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#modalEdit-{{$EmployeeResul->Id_KetQuaDT}}">Upload</a>
                            {{-- <div style="display: flex"> --}}
                                @method('DELETE')
                                 @csrf
                                <a  href="{{route('destroyresults',['id'=>$EmployeeResul ->Id_KetQuaDT])}}"  class=" ml-3 btn btn-danger">Xóa</a>
                                {{-- <a href="/admin/trainingresults/edit/{{$EmployeeResul ->Id_KetQuaDT}}" class="btn btn-info ml-2" >Sửa</a> --}}
                            {{-- </div>    --}}
                        </td>
                    </tr> 
                    <!-- START MODEL  -->
                    <div class="w-50 d-flex justify-content-end">
                     <div class="modal fade" id="modalEdit-{{$EmployeeResul->Id_KetQuaDT}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered justify-content-center w-auto">
                             {{-- START FORM --}}
                         
                             <form action="{{route('updateresults',['id'=>$EmployeeResul->Id_KetQuaDT])}}" method="post">
                                @csrf
                                <div class="modal-content p-3" style="width: 550px;">
                                    <div class="flex-row d-flex justify-content-center mb-2">
                                        <h2 class="text-info">Upload kết quả Khóa học{{' '.$EmployeeResul->TenDaoTao}}</h2>
                                    </div>
                                    <input type="hidden" name="idketquadaotao" class="form-control" value="{{$EmployeeResul->Id_KetQuaDT}}"  />
                                    <input type="hidden" name="daotaoUD" class="form-control" value="{{$EmployeeResul->Id_DaoTao}}"  />
                                    <div class="d-flex flex-column w-auto mt-3">
                                        
                                        <div class="d-flex text-left mb-2 align-items-center">
                                            <div class="w-25 pl-2 mr-2">
                                                <label class="my-auto">Nhân viên</label><b class="text-danger">*</b>
                                            </div>
                                            <div class="w-75">
                                                <select name="nhanvienUD" class="form-control"  id="" required>
                                                    <option value="">-- Chọn --</option>
                                                    @foreach ($resulTrainsOfEmployees as $Employee)
                                                        @if ($EmployeeResul->Id_KetQuaDT == $Employee->Id_KetQuaDT)
                                                        <option selected value="{{$Employee->Id_NhanVien}}">
                                                            <img src="{{ asset('./images/' . $Employee->nhanvien->HinhAnh) }}"  style="width:50px;height:50px;border-radius: 50%;" alt="">
                                                            <p>{{$Employee->nhanvien->Ho.' '.$Employee->nhanvien->Ten}}</p>
                                                        </option>
                                                        @else
                                                        <option value="{{$Employee->Id_NhanVien}}">
                                                            <img src="{{ asset('./images/' . $Employee->nhanvien->HinhAnh) }}"  style="width:50px;height:50px;border-radius: 50%;" alt="">
                                                            <p>{{$Employee->nhanvien->Ho.' '.$Employee->nhanvien->Ten}}</p>
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
                                                    <option value="{{$EmployeeResul->KetQua}}">{{$EmployeeResul->KetQua}}</option>
                                                    <option value="null">-- Chọn --</option>
                                                    <option value="Đậu">Đậu</option>
                                                    <option value="Rớt">Rớt</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">  
                                            <div class="col-xl-12 form-group col-xxl-12" required>
                                                <div class="card-body">
                                                    <label>ghi chú</label>
                                                    <textarea  class="summernote" name="ghichuUD" id="">{{$EmployeeResul->GhiChu}}</textarea>
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