@extends('Admin.master')
@section('title','Sửa Tên Miền')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Thay đổi thông tin Tên miền</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body col-6">
                <form action="{{route('postSuaTenMien',$domain->id)}}" method="post">
                    @csrf
                    <input type="text" value="{{$domain->id}}" name="id" required hidden>
                    <div class="form-group">
                        <label for="domain">Tên miền:</label>
                        <input type="text" class="form-control" id="domain" name="domain" minlength="2"
                               value="{{$domain->domain}}"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="domain">Phí đăng ký năm đầu:</label>
                        <input type="number" class="form-control" id="phidangkynamdau" name="phidangkynamdau"
                               min="10000"
                               value="{{$domain->phidangkynamdau}}" required>
                    </div>
                    <div class="form-group">
                        <label for="domain">Phí duy trì mỗi năm:</label>
                        <input type="number" class="form-control" id="phiduytrimoinam" name="phiduytrimoinam"
                               min="10000"
                               value="{{$domain->phiduytrimoinam}}" required>
                    </div>
                    <div class="form-group">
                        <label for="loai">Thuộc loại:</label>
                        <select name="loai">
                            @if($domain->loai==1)
                                <option value="1" selected>Quốc tế</option>
                            @else
                                <option value="1">Quốc tế</option>
                            @endif
                            @if($domain->loai==2)
                                <option value="2" selected>Việt Nam</option>
                            @else
                                <option value="2">Việt Nam</option>
                            @endif
                            @if($domain->loai==0)
                                <option value="0" selected>Chưa phân loại</option>
                            @else
                                <option value="0">Chưa phân loại</option>
                            @endif
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
