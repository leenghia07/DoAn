@extends('index')
@section('content')
<div class=" row page-titles shadow-lg mx-0">
    <div class="col-sm-6 p-md-0">
        <div style="display:flex;">
            <h3>Sửa khóa học</h3>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('train')}}">Khóa học</a></li>
            <li class="breadcrumb-item active"><a href="">sửa</a></li>
        </ol>
    </div>
</div>

<div class="container py-5" style="margin-top: -35px;">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @foreach ($trains as $train)
                <form action="/admin/train/update/{{$train->Id_DaoTao}}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Loại khóa học</label>
                            <select name="loaidaotao" class="form-control"  id="" required>
                                <option value="{{$train->Id_LoaiDaoTao}}">
                                    {{$train->Id_LoaiDaoTao}}
                                @foreach ($train->loaidaotao as $loaidaotao)
                                    - {{$loaidaotao->TenLoaiDaoTao}}
                                @endforeach
                                </option>
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
                            <input type="text" name="tendaotao" class="form-control" value="{{$train->TenDaoTao}}" placeholder="Tên khóa học" required>
                        </div>
                    </div>  
                    <div class="form-row">  
                        <div class="col-xl-12 form-group col-xxl-12" required>
                        <div class="card-body">
                            <label>Nội dung</label>
                            <textarea  class="summernote" name="noidung" id="">{{$train->NoiDung}}</textarea>
                        </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                                <label >Ngày bắt đầu</label>
                                <input type="date" value="{{$train->NgayBatDau}}" name="ngaybatdau" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label >Ngày kết thúc</label>
                                <input type="date" value="{{$train->NgayKetThuc}}" name="ngayketthuc" class="form-control"     required>
                            </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                                <label >Nơi đào tạo</label>
                                <input type="text" value="{{$train->NoiDaoTao}}" name="noidaotao" placeholder="nơi đào tạo" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label >Chi phí</label>
                                <input type="number" value="{{$train->ChiPhi}}" name="chiphi" placeholder="chi phí" class="form-control"     required>
                            </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                                <label >Tình Trạng</label>
                                <input type="checkbox"   @if($train->TinhTrang == 1) checked @endif
                                    @checked(true) value="1"
                                    @checked(false) value="0" 
                                    name="tinhtrang" id="">
                        </div>
                    </div>
                    <button type="submit" style="margin-left: 400px; width:150px;height:50px;font-size: 20px;" class="btn  btn-primary">Sửa khóa học</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection