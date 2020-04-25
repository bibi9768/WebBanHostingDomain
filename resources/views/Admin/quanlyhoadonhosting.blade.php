@extends('Admin.master')
@section('title','Quản Lý Hoá Đơn Hosting')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Quản lý hoá đơn Hosting</h1>
        <p class="mb-4">Các hoá đơn mà người dùng đã đặt trên hệ thống</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách hoá đơn đặt Hosting</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ tên</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Hosting</th>
                            <th>Giá</th>
                            <th>Ngày đặt</th>
                            <th>Thanh toán</th>
                            <th>Trạng thái</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($hoadon as $hd)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$hd->hoten}}</td>
                                <td>{{$hd->sodienthoai}}</td>
                                <td>{{$hd->diachi}}</td>
                                <td>{{$hd->name}}{{$hd->domain}}</td>
                                <td>{{number_format($hd->gia)}} VNĐ</td>
                                <td>{{$hd->ngaytao}}</td>
                                <td>{{$hd->phuongthucthanhtoan}}</td>
                                <td>@if($hd->trangthaiduyet==0)
                                        <input type="checkbox" id="{{$hd->id}}" name="{{$hd->id}}">
                                    @else
                                        <input type="checkbox" id="{{$hd->id}}" name="{{$hd->id}}" checked>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    {{ $hoadon->links() }}
                </div>

            </div>
        </div>

    </div>

@endsection
