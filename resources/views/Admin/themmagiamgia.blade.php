@extends('Admin.master')
@section('title','Thêm mới Hosting')
@section('content')

    <div class="container-fluid">


        <h1 class="h3 mb-2 text-gray-800">Thêm mới Mã giảm giá</h1>

        <div class="card shadow mb-4">
            <div class="card-body col-6">
                <form action="{{route('postThemMaGiamGia')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="tengoi">Mã:</label>
                        <input type="text" class="form-control" id="tengoi" name="ma" minlength="2"
                               value="{{old('ma')}}"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="giabatdautu">Loại áp dụng:</label>
                        <select name="loaiduocgiam">
                                <option value="domain" selected>Domain</option>
                                <option value="hosting">Hosting</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dungluong">Trị giá:</label>
                        <input type="text" class="form-control" id="dungluong" name="trigia"
                               minlength="2"
                               value="{{old('trigia')}}" required>
                    </div>
                    <div class="form-group">
                        <label for="bangthong">Thời hạn:</label>
                        <input type="text" class="form-control" id="bangthong" name="thoihan"
                               minlength="2"
                               value="{{old('thoihan')}}" required>
                    </div>


                    <div class="checkbox">
                        <label><input type="checkbox" name="an"> Ẩn</label>
                    </div>
                    <button type="submit" class="btn btn-success">Thêm mới</button>
                    <a href="javascript:history.back()" class="btn btn-danger">Quay lại</a>
                </form>

            </div>
        </div>

    </div>

@endsection
