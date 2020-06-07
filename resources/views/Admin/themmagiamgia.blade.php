@extends('Admin.master')
@section('title','Thêm mới Hosting')
@section('content')

    <div class="container-fluid">


        <h1 class="h3 mb-2 text-gray-800">Thêm mới Hosting</h1>

        <div class="card shadow mb-4">
            <div class="card-body col-6">
                <form action="{{route('postThemHosting')}}" method="post">
                    @csrf
                    <input type="text" name="id" required hidden>
                    <div class="form-group">
                        <label for="tengoi">Tên dịch vụ:</label>
                        <input type="text" class="form-control" id="tengoi" name="tengoi" minlength="2"

                               required>
                    </div>
                    <div class="form-group">
                        <label for="giabatdautu">Giá bắt đầu từ:</label>
                        <input type="number" class="form-control" id="giabatdautu" name="giabatdautu"
                               min="10000"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="dungluong">Dung lượng:</label>
                        <input type="text" class="form-control" id="dungluong" name="dungluong"
                               minlength="2"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="bangthong">Băng thông:</label>
                        <input type="text" class="form-control" id="bangthong" name="bangthong"
                               minlength="2"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="website">Số lượng Website:</label>
                        <input type="text" class="form-control" id="website" name="website"
                               minlength="2"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="phanmemquantri">Phần mềm quản trị:</label>
                        <input type="text" class="form-control" id="phanmemquantri" name="phanmemquantri"
                               minlength="2"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="loai">Thuộc loại:</label>
                        <select name="loai">
                            <option value="1" selected>WordPress Hosting</option>
                            <option value="2">Hosting Linux</option>
                            <option value="3">Hosting Windows</option>
                        </select>
                    </div>

                    <div class="checkbox">
                        <label><input type="checkbox" name="an"> Ẩn</label>
                    </div>
                    <button type="submit" class="btn btn-success">Cập nhật</button>
                    <a href="javascript:history.back()" class="btn btn-danger">Quay lại</a>
                </form>

            </div>
        </div>

    </div>

@endsection
