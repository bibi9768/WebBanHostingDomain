@extends('Admin.master')
@section('title','Quản Lý Tên Miền')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Quản lý Tên miền</h1>
        <p class="mb-4">Có {{\App\Domain::all()->count()}} tên miền đang có trên hệ thống</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách Domain hiện có</h6>
            </div>
            <div class="card-header py-3">
                <a href="{{route('getThemTenMien')}}" class="btn btn-success">Thêm mới</a>
                <p style="color: blue;text-align: center">
                    @if(Session::has('message'))
                        {{Session::get('message')}}
                    @endif
                </p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên miền</th>
                            <th>Giá năm đầu</th>
                            <th>Giá duy trì</th>
                            <th>Loại</th>
                            <th>Thay Đổi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            if(Request::get('page')==='1')
                              $i=1+Request::get('page');
                            if(Request::get('page')>'1')
                              $i=1+10*Request::get('page');
                        else  $i=1;
                        if(Request::get('page')==='1')
                              $i=10*Request::get('page');
                        @endphp
                        @foreach($domain as $dm)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$dm->domain}}</td>
                                <td>{{number_format($dm->phidangkynamdau)}} VNĐ</td>
                                <td>{{number_format($dm->phiduytrimoinam)}} VNĐ</td>
                                <td>
                                    @switch($dm->loai)
                                        @case(0)
                                        chưa phân loại
                                        @break
                                        @case(1)
                                        Quốc tế
                                        @break
                                        @case(2)
                                        Việt Nam
                                        @break
                                    @endswitch
                                </td>
                                <td>
                                    <a href="{{route('getSuaTenMien',$dm->id)}}" class="btn btn-warning ">Sửa</a>
                                    <a href="{{route('getXoaTenMien',$dm->id)}}" class="btn btn-danger">Xoá</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    {{ $domain->links() }}
                </div>

            </div>
        </div>

    </div>

@endsection
