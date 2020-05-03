@extends('user.master1')
@section('title','Đơn hàng của tôi')
@section('content')

    <section
        class="elementor-element elementor-element-91f68ef elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="91f68ef" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-8565f0b elementor-column elementor-col-100 elementor-top-column"
                    data-id="8565f0b" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-b9e60d5 elementor-widget elementor-widget-anchor"
                                data-id="b9e60d5" data-element_type="widget" data-widget_type="anchor.default">
                                <div class="elementor-widget-container">
                                    <!-- begin anchor -->
                                    <div class="clear" id="domain-check"></div>
                                    <!-- end anchor -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-f5ab35e elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="f5ab35e" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-dab02b0 elementor-column elementor-col-100 elementor-top-column"
                    data-id="dab02b0" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-e3fe239 elementor-widget elementor-widget-domain-pricing-2"
                                data-id="e3fe239" data-element_type="widget"
                                data-widget_type="domain-pricing-2.default">
                                <div class="elementor-widget-container">
                                    <!-- begin domain pricing 2 -->


                                    <div class="col-lg-12" style="text-align: center">

                                    </div>


                                    <div class="main-wrap domain-extensions-wrap">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 text-align-center">
                                                    <h2 style="text-align: center">ĐƠN HÀNG CỦA TÔI </h2>

                                                    <div class="col-lg-12 text-align-center">
                                                        <table class="table-2">
                                                            <thead>
                                                            <tr>
                                                                <th>STT</th>
                                                                <th>Domain</th>
                                                                <th>Giá</th>
                                                                <th>Họ tên</th>
                                                                <th>Địa chỉ</th>
                                                                <th>Số điện thoại</th>
                                                                <th>Ngày đặt</th>
                                                                <th>Hình thức thanh toán</th>
                                                                <th>Trạng thái xử lý</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @php
                                                                $i = 1
                                                            @endphp
                                                            @foreach($tatcadonhang as $tc)
                                                                <tr>

                                                                    <td>{{$i++}}</td>
                                                                    <td>{{$tc->name}}{{$tc->domain}}</td>
                                                                    <td>{{number_format($tc->gia)}}</td>
                                                                    <td>{{$tc->hoten}}</td>
                                                                    <td>{{$tc->diachi}}</td>
                                                                    <td>{{$tc->sodienthoai}}</td>
                                                                    <td>{{$tc->ngaytao}}</td>
                                                                    <td>@if ($tc->phuongthucthanhtoan==0)

                                                                        @endif
                                                                        Thanh toán trực tuyến
                                                                    </td>
                                                                    <td>@if($tc->trangthaiduyet==0)
                                                                            Đang chờ duyệt
                                                                        @elseif($tc->trangthaiduyet==1)
                                                                            Đã duyệt
                                                                        @endif
                                                                    </td>

                                                                </tr>
                                                            @endforeach
                                                            </tbody>

                                                        </table>


                                                    </div>


                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                    <!-- end domain pricing 2 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
