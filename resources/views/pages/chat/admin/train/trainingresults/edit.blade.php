@extends('index')
@section('content')
<div class=" row page-titles shadow-lg mx-0">
    <div class="col-sm-6 p-md-0">
        <div style="display:flex;">
            <h3>Sửa kết quả</h3>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('train')}}">Khóa học</a></li>
            <li class="breadcrumb-item active"><a href="{{route('pagecreateresult')}}">sửa Kết quả</a></li>
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
                <form action="" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Nhân viên</label>
                            <select name="nhanvien" class="form-control"  id="" required>
                                <option value="">Mã nhân viên - Tên nhân viên</option>
                            </select>
                        </div>                   
                    </div>
                    <div class="form-row">
                        <label>Khóa đào tạo</label>
                        <select name="daotao" class="form-control"  id="" required>
                            <option value="">Mã đào tạo - Tên đào tạo</option>
                        </select>
                    </div>  
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                                <label >Kết quả</label>
                                <select name="ketqua" class="form-control"  id="" required>
                                    <option value="">-- Chọn --</option>
                                    <option value="Đạu">Đậu</option>
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
                    <button type="submit" style="margin-left: 400px; width:150px;height:50px;font-size: 20px;" class="btn  btn-primary">Sửa kết quả</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection