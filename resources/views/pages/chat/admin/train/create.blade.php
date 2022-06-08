@extends('index')
@section('content')
<div class=" row page-titles shadow-lg mx-0">
    <div class="col-sm-6 p-md-0">
        <div style="display:flex;">
            <h3>Tạo khóa học</h3>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('train')}}">Khóa học</a></li>
            <li class="breadcrumb-item active"><a href="{{route('createtrain')}}">tạo</a></li>
        </ol>
    </div>
</div>

    @if ( Session::has('error') )
        <div class="alert alert-danger solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>{{ Session::get('error') }}</strong>
        </div>
    @endif


<div class="container py-5" style="margin-top: -35px;">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('stroretrain')}}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Loại khóa học</label>
                            <select name="loaidaotao" class="form-control"  id="" required>
                                <option value="">Mã loại KH - Tên loại khóa học</option>
                                @foreach ($typeoftrains as $typeoftrain)
                                    <option value="{{$typeoftrain->Id_LoaiDaoTao}}">{{$typeoftrain->Id_LoaiDaoTao}} - {{$typeoftrain->TenLoaiDaoTao}}</option>
                                @endforeach
                            </select>
                        </div>                   
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Tên khóa học</label>
                            <input type="text" name="tendaotao" class="form-control" value="" placeholder="Tên khóa học" required>
                        </div>
                    </div>  
                    <div class="form-row">  
                        <div class="col-xl-12 form-group col-xxl-12" required>
                        <div class="card-body">
                            <label>Nội dung</label>
                            <textarea  class="summernote" name="noidung" id=""></textarea>
                        </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                                <label >Ngày bắt đầu</label>
                                <input type="date" name="ngaybatdau" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label >Ngày kết thúc</label>
                                <input type="date" name="ngayketthuc" class="form-control"     required>
                            </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                                <label >Nơi đào tạo</label>
                                <input type="text" name="noidaotao" placeholder="nơi đào tạo" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label >Chi phí</label>
                                <input type="number" name="chiphi" placeholder="chi phí" class="form-control"     required>
                            </div>
                    </div>
                    <button type="submit" style="margin-left: 400px; width:150px;height:50px;font-size: 20px;" class="btn  btn-primary">Tạo khóa học</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection