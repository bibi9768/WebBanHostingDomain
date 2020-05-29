@extends('user.master1')
@section('title','Xác nhận thanh toán')
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


                                    <div class="main-wrap domain-extensions-wrap banner-wrap-compact">
                                        <div class="container">
                                            <div class="row">


                                                <div class="col-lg-6 text-align-center" style="margin: auto">
                                                    {{--                                                    <form action="{{route('postKetThucThanhToan')}}" method="post">--}}
                                                    <form action="{{route('postThanhToanPayPal')}}" method="post"
                                                          class="form-group">
                                                        @csrf
                                                        <h2><h1>BẠN ĐANG ĐĂNG KÝ <span
                                                                    class="cl-blue">TÊN MIỀN </span><span
                                                                    class="cl-orange">{{strtoupper($name)}}{{strtoupper($domain)}}</span>
                                                            </h1></h2>
                                                        <p class="intro no-margin">Hãy tiến hành xác nhận và lựa chọn
                                                            phương thức thanh toán.</p>
                                                        <p>Họ tên:</p>
                                                        <input type="text" name="hoten"
                                                               value="{{Auth::User()->hoten}}" class="form-control"/>
                                                        <p>Địa chỉ:</p>
                                                        <input type="text" name="diachi"
                                                               value="{{Auth::User()->diachi}}" class="form-control">
                                                        <p>Số điện thoại:</p>
                                                        <input type="text" name="sodienthoai"
                                                               value="{{Auth::User()->sodienthoai}}"
                                                               class="form-control">
                                                        <p>Giá mỗi năm:</p>
                                                        @if($giatrigiam==0)
                                                            <b><p>{{number_format($gia) }} VNĐ</p></b>
                                                        @else
                                                            <b>
                                                                <p>
                                                                    <del>{{number_format($gia) }} VNĐ</del>
                                                                </p>
                                                            </b>
                                                            <b><p>{{number_format($giadagiam) }} VNĐ (giảm
                                                                    <b>{{$giatrigiam}}%)</b></p></b>
                                                        @endif
                                                        <input type="text" name="gia"
                                                               value="{{$gia}}" hidden>


                                                        <input type="text" name="name"
                                                               value="{{$name}}" hidden>
                                                        <input type="text" name="domain"
                                                               value="{{$domain}}" hidden>
                                                        <input type="text" name="type"
                                                               value="domain" hidden>

                                                        <p>Mã giảm giá:</p>
                                                        <input type="text" name="magiam"
                                                               value="{{$magiam}}" class="form-control">
                                                        @if($giatrigiam==0)
                                                            <p>Mã giảm giá không hợp lệ</p>
                                                        @else
                                                            <p>Đã áp dụng mã giảm giá thành công</p>
                                                        @endif
                                                        <button type="button" class="button button-search ripple-magic"
                                                                onclick="window.location.href='{{route('getHomePage')}}/thanh-toan/domain/name={{$name}}&domain={{$domain}}/magiam='+document.getElementsByName('magiam')[0].value;">
                                                            Áp dụng
                                                        </button>
                                                        <p>Phương thức thanh toán :</p>
                                                        <input type="radio" id="PayPal" name="PayPal" value="PayPal"
                                                               checked>
                                                        <label for="PayPal">PayPal</label><br>
                                                        <input type="submit" class="btn btn-info" value="Xác nhận">

                                                    </form>
                                                    {{--                                                    <p>{{route('getHomePage')}}/thanh-toan/domain/name={{$name}}&domain={{$domain}}/magiamgia=</p>--}}
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

    <section
        class="elementor-element elementor-element-cb405b7 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="cb405b7" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-5082c8e elementor-column elementor-col-100 elementor-top-column"
                    data-id="5082c8e" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-d511e4a elementor-widget elementor-widget-advisory"
                                data-id="d511e4a" data-element_type="widget" data-widget_type="advisory.default">
                                <div class="elementor-widget-container">
                                    <!-- begin advisory -->
                                    <div class="main-wrap  advisory-wrap"
                                         style="">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 text-align-center">
                                                    <h2>Bạn cần <span class="cl-blue">tư vấn thêm</h2>
                                                    <p class="intro">Chúng tôi luôn ở đây 24/7 để phản hồi yêu cầu của
                                                        bạn, bất kể là ngày hay đêm, dù nắng hay mưa !</p>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-lg-3 col-md-4 col-sm-6 flex-box">
                                                    <div class="advisory-box-2">
                                                        <div class="advisory-box-icon-wrap">
                                                            <div class="advisory-box-icon">
                                                                <i class="icon-envelope"></i>
                                                            </div>
                                                        </div>
                                                        <div class="advisory-box-content">
                                                            <h3>Gửi Email</h3>
                                                            <p>Bạn cần thêm thông tin ? Gửi ngay email cho chúng tôi để
                                                                nhận được câu trả lời.</p>
                                                        </div>
                                                        <div class="advisory-box-option">
                                                            <a href="mailto:kinhdoanh@HTVIETNAM.net">
                                                                <button type="button"
                                                                        class="button button-large shadow-button ">
                                                                    Gửi yêu cầu<i class="icon-next"></i></button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-4 col-sm-6 flex-box">
                                                    <div class="advisory-box-2">
                                                        <div class="advisory-box-icon-wrap">
                                                            <div class="advisory-box-icon">
                                                                <i class="icon-ticket"></i>
                                                            </div>
                                                        </div>
                                                        <div class="advisory-box-content">
                                                            <h3>Gửi Ticket</h3>
                                                            <p>Kênh tiếp nhận yêu cầu hỗ trợ dịch vụ dành cho khách hàng
                                                                của HTVIETNAM.</p>
                                                        </div>
                                                        <div class="advisory-box-option">
                                                            <a href="https://manage.HTVIETNAM.net/submitticket.php">
                                                                <button type="button"
                                                                        class="button button-large shadow-button ">
                                                                    Tạo Ticket<i class="icon-next"></i></button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-4 col-sm-6 flex-box">
                                                    <div class="advisory-box-2">
                                                        <div class="advisory-box-icon-wrap">
                                                            <div class="advisory-box-icon">
                                                                <i class="icon-paper-plane-1"></i>
                                                            </div>
                                                        </div>
                                                        <div class="advisory-box-content">
                                                            <h3>Live Chat</h3>
                                                            <p>Bạn có câu hỏi? Hãy chat ngay với nhân viên tư vấn để
                                                                được giải đáp.</p>
                                                        </div>
                                                        <div class="advisory-box-option">
                                                            <a onclick="chatButton.onClick();">
                                                                <button type="button"
                                                                        class="button button-large shadow-button ">
                                                                    Chat Ngay<i class="icon-next"></i></button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-4 col-sm-6 flex-box">
                                                    <div class="advisory-box-2">
                                                        <div class="advisory-box-icon-wrap">
                                                            <div class="advisory-box-icon">
                                                                <i class="icon-speech-bubble"></i>
                                                            </div>
                                                        </div>
                                                        <div class="advisory-box-content">
                                                            <h3>Tư vấn điện thoại</h3>
                                                            <p>Hãy nhập số điện thoại của bạn vào ô dưới đây để nhân
                                                                viên tư vấn liên hệ lại.</p>
                                                        </div>
                                                        <div class="advisory-box-option">
                                                            <button type="button"
                                                                    class="button button-large shadow-button "
                                                                    data-toggle="modal" data-target="#advisorySupport">
                                                                Yêu cầu gọi<i class="icon-next"></i></button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Support -->
                                    <div class="modal fade" id="advisorySupport" tabindex='-1'>
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-register">
                                            <form id="mauTicForm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <i class="icon-speech-bubble main-icon"></i>
                                                        <h2>Yêu cầu tư vấn</h2>
                                                        <p>
                                                            Vui lòng nhập thông tin đầy đủ và chính xác vào bên dưới để
                                                            các hỗ trợ viên của<br>
                                                            HTVIETNAM có thể hỗ trợ bạn.
                                                        </p>
                                                        <button type="button" class="close" data-dismiss="modal"><i
                                                                class="icon-close text-white"></i></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="label-wrap">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Họ và tên</label>
                                                                        <input type="text" placeholder="Nhập họ tên"
                                                                               required name="mauticform[fullname]"
                                                                               class="mauticform_advisory_support_fullname">
                                                                        <span hidden
                                                                              class="mauticform_advisory_support_fullname_error text-danger"></span>

                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Số điện thoại</label>
                                                                        <input type="text"
                                                                               placeholder="Nhập số điện thoại của bạn"
                                                                               required name="mauticform[phone]"
                                                                               class="mauticform_advisory_support_phone">
                                                                        <span hidden
                                                                              class="mauticform_advisory_support_phone_error text-danger"></span>

                                                                    </div>
                                                                    <input type="hidden" name="mauticform[services]"
                                                                           value="Hosting Linux" autocomplete="off"
                                                                           class="mauticform_advisory_support_services">
                                                                    <input type="hidden" name="mauticform[formId]"
                                                                           value="0" autocomplete="off"
                                                                           class="mauticform_id id-service-suport mauticform_advisory_support_formId">
                                                                    <input type="hidden" name="mauticform[return]"
                                                                           value="" autocomplete="off"
                                                                           class="mauticform_return mauticform_advisory_support_return">
                                                                    <input type="hidden" name="mauticform[formName]"
                                                                           value="dangkydungthu" autocomplete="off"
                                                                           class="mauticform_name mauticform_advisory_support_formName">
                                                                    <input type="hidden" name="mauticform[messenger]"
                                                                           value="1"
                                                                           class="mauticform_messenger mauticform_advisory_support_messenger">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="button button-large shadow-button btn-form-mautic1"
                                                                data-dismiss=""
                                                                ng-click="mauTicPost('mauticform_advisory_support')">
                                                            Yêu cầu tư vấn<i class="icon-speech-bubble"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Modal Support -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
