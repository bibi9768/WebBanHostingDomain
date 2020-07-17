@extends('Admin.master')
@section('title','Sửa Mã Giảm Giá')
@section('content')

    <div class="container-fluid">


        <h1 class="h3 mb-2 text-gray-800">Thay đổi thông tin Mã Giảm Giá</h1>

        <div class="card shadow mb-4">
            <div class="card-body col-6">
                <form action="{{route('postSuaMaGiamGia',$magiamgia->id)}}" method="post">
                    @csrf
                    <input type="text" value="{{$magiamgia->id}}" name="id" required hidden>
                    <div class="form-group">
                        <label for="tengoi">Mã:</label>
                        <input type="text" class="form-control" id="tengoi" name="ma" minlength="2"
                               value="{{$magiamgia->ma}}"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="giabatdautu">Loại áp dụng:</label>
                        <select name="loaiduocgiam">
                        @if($magiamgia->loaiduocgiam=='domain')
                            <option value="domain" selected>Domain</option>
                        @else
                            <option value="domain">Domain</option>
                        @endif
                        @if($magiamgia->loaiduocgiam=='hosting')
                            <option value="hosting" selected>Hosting</option>
                        @else
                            <option value="hosting">Hosting</option>
                        @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dungluong">Trị giá:</label>
                        <input type="text" class="form-control" id="dungluong" name="trigia"
                               minlength="2"
                               value="{{$magiamgia->trigia}}" required>
                    </div>
                    <div class="form-group">
                        <label for="bangthong">Thời hạn:</label>
                        <input type="text" class="form-control" id="bangthong" name="thoihan"
                               minlength="2"
                               value="{{$magiamgia->thoihan}}" required>
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
