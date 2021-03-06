@extends('Admin.master')
@section('title','Quản Lý Hoá Đơn Tên Miền')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Quản lý người dùng</h1>
        <p class="mb-4">Danh sách người dùng đang có trên hệ thống</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách người dùng</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Quyền hạn</th>
                            <th>Ngày đăng ký</th>
                            <th>Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($nguoidung as $nd)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$nd->hoten}}</td>
                                <td>{{$nd->email}}</td>
                                <td>{{$nd->sodienthoai}}</td>
                                <td>{{$nd->diachi}}</td>
                                <td>
                                    @if($nd->laquantri==1) Quản trị
                                    @else Người dùng
                                    @endif
                                </td>
                                <td>{{$nd->ngaydangky}}</td>
                                <td>
                                    <a href="{{route('getDatMatKhauNguoiDung',$nd->id)}}" class="btn btn-warning ">Đặt
                                        mật khẩu</a>
                                    @if($nd->khoa==1)
                                        <a href="{{route('getKhoaNguoiDung',[$nd->id,$nd->khoa])}}" class="btn btn-danger">Mở Khoá</a>
                                    @else
                                        <a href="{{route('getKhoaNguoiDung',[$nd->id,$nd->khoa])}}" class="btn btn-primary">Khoá</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    {{ $nguoidung->links() }}
                </div>

            </div>
        </div>

    </div>

@endsection
