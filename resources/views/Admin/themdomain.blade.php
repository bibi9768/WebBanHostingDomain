@extends('Admin.master')
@section('title','Thêm Tên Miền')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Thêm mới Tên miền</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body col-6">
                <form action="{{route('postThemTenMien')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="domain">Tên miền:</label>
                        <input type="text" class="form-control" id="domain" name="domain" minlength="2"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="domain">Phí đăng ký năm đầu:</label>
                        <input type="number" class="form-control" id="phidangkynamdau" name="phidangkynamdau"
                               min="10000"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="domain">Phí duy trì mỗi năm:</label>
                        <input type="number" class="form-control" id="phiduytrimoinam" name="phiduytrimoinam"
                               min="10000"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="loai">Thuộc loại:</label>
                        <select name="loai">
                            <option value="1">Quốc tế</option>
                            <option value="2">Việt Nam</option>
                            <option value="0" selected>Chưa phân loại</option>

                        </select>
                    </div>

                    <div class="checkbox">
                        <label><input type="checkbox" name="an"> Ẩn</label>
                    </div>
                    <button type="submit" class="btn btn-success">Thêm</button>
                    <a href="javascript:history.back()" class="btn btn-danger">Quay lại</a>
                </form>

            </div>
        </div>

    </div>

@endsection
