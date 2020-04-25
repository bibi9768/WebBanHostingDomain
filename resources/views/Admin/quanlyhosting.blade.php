@extends('Admin.master')
@section('title','Quản Lý Hosting')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Quản lý Hosting</h1>
        <p class="mb-4">Các gói dịch vụ Hosting đang có trên hệ thống</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách hoá đơn đặt Domain</h6>
            </div>
            <div class="card-header py-3">
                <a href="{{route('getThemHosting')}}" class="btn btn-success">Thêm mới</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên gói</th>
                            <th>Loại</th>
                            <th>Giá bắt đầu từ</th>
                            <th>Dung lượng</th>
                            <th>Băng thông</th>
                            <th>Số website</th>
                            <th>Phần mềm quản trị</th>
                            <th>Ẩn</th>
                            <th>Thay Đổi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($hosting as $ht)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$ht->tengoi}}</td>
                                <td>
                                    @if($ht->loaihosting==1)
                                        WordPress Hosting
                                    @elseif($ht->loaihosting==2)
                                        Hosting Linux
                                    @elseif($ht->loaihosting==3)
                                        Hosting Windows
                                    @endif
                                </td>
                                <td>{{number_format($ht->giabatdautu)}} VNĐ</td>
                                <td>{{$ht->dungluong}}</td>
                                <td>{{$ht->bangthong}}</td>
                                <td>{{$ht->website}}</td>
                                <td>{{$ht->phanmemquantri}}</td>
                                <td>@if($ht->an==0)
                                        <input type="checkbox" id="{{$ht->id}}" name="{{$ht->id}}">
                                    @else
                                        <input type="checkbox" id="{{$ht->id}}" name="{{$ht->id}}" checked>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('getSuaHosting',$ht->id)}}" class="btn btn-warning ">Sửa</a>
                                    <a href="{{route('getXoaHosting',$ht->id)}}" class="btn btn-danger">Xoá</a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    {{ $hosting->links() }}
                </div>

            </div>
        </div>

    </div>

@endsection
