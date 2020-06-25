@extends('Admin.master')
@section('title','Quản Lý Mã Giảm Giá')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Quản lý Mã Giảm Giá</h1>
        <p class="mb-4">Có {{\App\MaGiamGia::all()->count()}} mã giảm giá đang có trên hệ thống</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách Mả giảm giá</h6>
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
                            <th>Mã</th>
                            <th>Loại giảm</th>
                            <th>Trị giá</th>
                            <th>Thời hạn</th>
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
                        @foreach($magiamgia as $mgg)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$mgg->ma}}</td>
                                <td>{{$mgg->loaiduocgiam}}</td>
                                <td>{{$mgg->trigia}} %</td>
                                <td>{{$mgg->thoihan}}</td>
                                <td>
                                    <a href="{{route('getSuaMaGiamGia',$mgg->id)}}" class="btn btn-warning ">Sửa</a>
                                    <a href="{{route('getXoaMaGiamGia',$mgg->id)}}" class="btn btn-danger">Xoá</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    {{ $magiamgia->links() }}
                </div>

            </div>
        </div>

    </div>

@endsection
