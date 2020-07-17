@extends('Admin.master')
@section('title','Đặt mật khẩu')
@section('content')

    <div class="container-fluid">


        <h1 class="h3 mb-2 text-gray-800">Thay đổi mật khẩu người dùng</h1>

        <div class="card shadow mb-4">
            <div class="card-body col-6">
                <form action="{{route('postDatMatKhauNguoiDung')}}" method="post">
                    @csrf
                    <input type="text" value="{{$nguoidung->id}}" name="id" required hidden>
                    <div class="form-group">
                        <label for="tengoi">Mật khẩu mới:</label>
                        <input type="password" class="form-control" id="tengoi" name="matkhaumoi" minlength="2"
                               value=""
                               required>
                    </div>

                    <button type="submit" class="btn btn-success">Cập nhật</button>
                    <a href="javascript:history.back()" class="btn btn-danger">Quay lại</a>
                </form>

            </div>
        </div>

    </div>

@endsection
