@extends('user.master1')
@section('title','Trang cá nhân')
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
                                                    <h2 style="text-align: center">THÔNG TIN CÁ NHÂN </h2>

                                                    <div class="col-lg-12 text-align-center">
                                                        <form action="{{route('postTrangCaNhanPage')}}" method="POST">
                                                            @csrf
                                                            <table class="table-2">
                                                                <tr>
                                                                    <td>Họ và tên</td>
                                                                    <td><input class="form-control" name="hoten"
                                                                               value="{{$user->hoten}}">
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Email</td>
                                                                    <td>
                                                                        <input class="form-control" name="email"
                                                                               value="{{$user->email}}" disabled>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Số điện thoại</td>
                                                                    <td>
                                                                        <input class="form-control" name="sodienthoai"
                                                                               value="{{$user->sodienthoai}}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Địa chỉ</td>
                                                                    <td>
                                                                    <textarea class="form-control" name="diachi"
                                                                              value="{{$user->diachi}}"></textarea>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>
                                                                        <input type="submit" class="btn btn-success" value="Cập nhật">
                                                                    </td>
                                                                </tr>

                                                            </table>
                                                        </form>
                                                        <div id="in"></div>

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
