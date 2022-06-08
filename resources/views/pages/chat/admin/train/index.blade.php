@extends('index')
@section('content')
<div class="mr-1 ml-1">
    <!-- Tiêu đề -->
    <div class=" row page-titles shadow-lg mx-0">
        <div class="col-sm-6 p-md-0">
            <h3>Danh sách  đào tạo </h3>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('train')}}">đào tạo</a></li>
            </ol>
        </div>
    </div>
    @if ( Session::has('success') )
    <div class="alert alert-primary alert-dismissible alert-alt solid fade show mb-5">
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>
        <strong>{{ Session::get('success') }}</strong>
    </div>
    @endif


    @if ( Session::has('error') )
        <div class="alert alert-danger solid alert-dismissible fade show mb-5">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>{{ Session::get('error') }}</strong>
        </div>
    @endif
    <div class="row ml-2" style="margin-top: -25px;">
        <div class="card">
            <a href="{{route('createtrain')}}" class="btn btn-primary"><img src="{{asset('./Images/addbutton.png')}}" style="height: 25px; width: 25px;" alt="">  Tạo khóa học</a>
        </div>
    </div>
    <div class="row " style="margin-top: -20px;">
        <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-bordered ">
                    <thead class="text-center text-nowrap thead-light">
                    <tr>
                        <th class="w-5">
                            Mã ĐT
                        </th>
                        <th class="w-15">
                           Loại đào tạo
                        </th>
                        <th class="w-15">
                            Tên đào tạo
                        </th>
                        <th class="w-30">
                            Nội dung
                        </th>
                        <th class="w-10">
                            Chi phí
                        </th>
                        <th class="w-20">
                            Thời gian
                        </th>
                        <th>
                            Thao tác
                        </th>
                    </tr>
                    </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <td>
                                {{$train->Id_DaoTao}}
                            </td>
                            <td>
                                {{$train->loaidaotao->TenLoaiDaoTao}}
                            </td>
                            <td>
                                <a href="{{route('detailtrain',['id'=>$train->Id_DaoTao])}}">
                                    {{$train->TenDaoTao}}
                                </a>
                            </td>
                            <td>
                                {!! $train->NoiDung !!}
                            </td>
                            <td style="text-align: center">
                                {{$train->ChiPhi}}
                            </td>
                            <td>
                                 {{ \Carbon\Carbon::parse($train->NgayBatDau)->format('d-m-Y') }} -->  {{ \Carbon\Carbon::parse($train->NgayKetThuc)->format('d-m-Y') }}
                            </td>
                            <td>
                                <div style="display: flex">
                                    @method('DELETE')
                                     @csrf
                                    <a href="/admin/train/delete/{{$train ->Id_DaoTao}}" class="btn btn-danger">Xóa</a>
                                    <a href="/admin/train/edit/{{$train ->Id_DaoTao}}" class="btn btn-info ml-2" >Sửa</a>
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
</div>
@endsection