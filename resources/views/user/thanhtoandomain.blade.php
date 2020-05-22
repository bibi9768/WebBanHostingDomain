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


                                                <div class="col-lg-12 text-align-center">
                                                    {{--                                                    <form action="{{route('postKetThucThanhToan')}}" method="post">--}}
                                                    <form action="{{route('postThanhToanPayPal')}}" method="post">
                                                        @csrf
                                                        <h2><h1>BẠN ĐANG ĐĂNG KÝ <span
                                                                    class="cl-blue">TÊN MIỀN </span><span
                                                                    class="cl-orange">{{strtoupper($name)}}{{strtoupper($domain)}}</span>
                                                            </h1></h2>
                                                        <p class="intro no-margin">Hãy tiến hành xác nhận và lựa chọn
                                                            phương thức thanh toán.</p>
                                                        <p>Họ tên:</p>
                                                        <input type="text" name="hoten"
                                                               value="{{Auth::User()->hoten}}"/>
                                                        <p>Địa chỉ:</p>
                                                        <input type="text" name="diachi"
                                                               value="{{Auth::User()->diachi}}">
                                                        <p>Số điện thoại:</p>
                                                        <input type="text" name="sodienthoai"
                                                               value="{{Auth::User()->sodienthoai}}">
                                                        <p>Giá mỗi năm:</p>
                                                        <b><p>{{number_format($gia) }} VNĐ</p></b>
                                                        <input type="text" name="gia"
                                                               value="{{$gia}}" hidden>
                                                        <input type="text" name="name"
                                                               value="{{$name}}" hidden>
                                                        <input type="text" name="domain"
                                                               value="{{$domain}}" hidden>
                                                        <input type="text" name="type"
                                                               value="domain" hidden>
                                                        <p>Phương thức thanh toán :</p>
                                                        <input type="radio" id="PayPal" name="PayPal" value="PayPal"
                                                               checked>
                                                        <label for="PayPal">PayPal</label><br>
                                                        <input type="submit" class="btn btn-info" value="Xác nhận">
                                                        <p>Mã giảm giá:</p>
                                                        <input type="text" name="magiamgia"
                                                               value="">
                                                        <button type="button" class="button button-search ripple-magic"
                                                                onclick="">Áp dụng</button>

                                                    </form>


                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12" ng-controller="ListData"
                                                     ng-init="loaderInit('domain-extension')">
                                                    <div class="ct-domain-search-box ct-domain-search-box-round">
                                                        <input type="text" id="tenmien"
                                                               placeholder="Nhập tên bạn muốn đăng ký"

                                                               value="{{$name}}"
                                                        >


                                                        <select id="domainlist">
                                                            @foreach($tatca as $tc)
                                                                @if($domain == $tc->domain)
                                                                    <option value="{{$tc->domain}}"
                                                                            selected>{{$tc->domain}}</option>
                                                                @else
                                                                    <option
                                                                        value="{{$tc->domain}}">{{$tc->domain}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        {{--                                                        <button class="button-extensions" type="button"--}}
                                                        {{--                                                                ng-click="domainExtensionsWrapP=!domainExtensionsWrapP">--}}
                                                        {{--                                                            <i class="icon-upload" ng-show="domainExtensionsWrapP"></i>--}}
                                                        {{--                                                            <i class="icon-download-1"--}}
                                                        {{--                                                               ng-show="!domainExtensionsWrapP"></i>--}}
                                                        {{--                                                        </button>--}}
                                                        {{--                                                        <a type="button" class="button button-search ripple-magic" href="{{route('getHomePage')}}/kiem-tra-ten-mien/">--}}
                                                        {{--                                                            <i class="icon-magnifier"></i><span>Tra cứu</span>--}}
                                                        {{--                                                        </a>--}}
                                                        <button type="button" class="button button-search ripple-magic"
                                                                onclick="domainChecker()">
                                                            <i class="icon-magnifier"></i><span>Tra cứu</span>
                                                        </button>
                                                        <script>
                                                            function domainChecker() {
                                                                var tenmien = document.getElementById('tenmien').value;
                                                                var domain = document.getElementById('domainlist').value;
                                                                location.href = '{{route('getHomePage')}}/kiem-tra-ten-mien/name=' + tenmien + '&domain=' + domain;
                                                            }
                                                        </script>

                                                    </div>

                                                    <div class="domain-search-dd-wrap clearfix"
                                                         ng-if="(tldChecker|isNotEmpty) && checkValueById('domain2')">
                                                        <h2>Kết quả tìm kiếm</h2>
                                                        <hr>
                                                        <div class="clearfix">
                                                            <div class="domain-list"
                                                                 ng-repeat="result in domainCheckerResult"
                                                                 ng-init="getCustomData('checkdomain59bb.html?domain=' + domain + tld)"
                                                                 style="box-shadow: none">
                                                                <div class="domain-result-close">
                                                                    <i class="icon-error"
                                                                       ng-click="closeDomainSearch()"></i>
                                                                </div>
                                                                <div class="domain-list-icon">
                                                                    <i class="icon-check cl-green"
                                                                       ng-if="result.available==true"></i>
                                                                    <i class="icon-cancel cl-red"
                                                                       ng-if="result.available==false"></i>
                                                                </div>


                                                                <div class="domain-list-content">
                                                                    <p>
                                                                        <strong>{{$domaininfo['message']}}</strong>
                                                                        <br>
                                                                        <span ng-if="result.available==true">Giá năm đầu: <span
                                                                                class="domain-search-price">{{--result.pricing.domainregister.year_1|price--}} VNĐ</span></span>
                                                                        <span ng-if="result.available==false">Không đăng ký được</span>
                                                                    </p>
                                                                </div>
                                                                <div class="domain-list-option">
                                                                    <p class="text-align-right">
                                                                        <a href="https://manage.HTVIETNAM.net/cart.php?type=domain&amp;sld={{--result.name--}}&amp;tld={{--result.ext--}}"
                                                                           target="_blank">
                                                                            <i class="icon-commerce-and-shopping"
                                                                               ng-if="result.available==true"></i>
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="div-loading" ng-show="domainChecking"></div>
                                                    </div>

                                                    <div class="domain-extensions-dd-wrap clearfix"
                                                         ng-show="domainExtensionsWrapP">
                                                        <strong>Tên miền Việt Nam</strong>
                                                        <ul>
                                                            <li ng-repeat="domain in datas"
                                                                ng-if="domain.extension|isDomainVN">
                                                                <input type="checkbox" class="check-style" name="tlds[]"
                                                                       id="tld{{--domain.extension--}}"
                                                                       value="{{--domain.extension--}}"
                                                                       ng-checked="tldDefault.includes(domain.extension)">
                                                                <label
                                                                    for="tld{{--domain.extension--}}">{{--domain.extension--}}</label>
                                                            </li>
                                                        </ul>
                                                        <div class="clear"></div>
                                                        <strong>Tên miền Quốc tế</strong>
                                                        <ul>
                                                            <li ng-repeat="domain in datas"
                                                                ng-if="!(domain.extension|isDomainVN)">
                                                                <input type="checkbox" class="check-style" name="tlds[]"
                                                                       id="tld{{--domain.extension--}}"
                                                                       value="{{--domain.extension--}}"
                                                                       ng-checked="tldDefault.includes(domain.extension)">
                                                                <label
                                                                    for="tld{{--domain.extension--}}">{{--domain.extension--}}</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>


                                                <div class="col-lg-12" ng-init="ExtensionsShow='all'">
                                                    <div class="domain-tabs-wrap">
                                                        <button type="button" ng-click="ExtensionsShow='all'"
                                                                class="button domain-tab-button"
                                                                ng-class="{'domain-tab-button-active':ExtensionsShow=='all'}">
                                                            Tất cả tên miền
                                                        </button>
                                                        <button type="button" ng-click="ExtensionsShow='global'"
                                                                class="button domain-tab-button"
                                                                ng-class="{'domain-tab-button-active':ExtensionsShow=='global'}">
                                                            Tên miền quốc tế
                                                        </button>
                                                        <button type="button" ng-click="ExtensionsShow='vn'"
                                                                class="button domain-tab-button"
                                                                ng-class="{'domain-tab-button-active':ExtensionsShow=='vn'}">
                                                            Tên miền Việt Nam
                                                        </button>
                                                        <button type="button" ng-click="ExtensionsShow='special'"
                                                                class="button domain-tab-button"
                                                                ng-class="{'domain-tab-button-active':ExtensionsShow=='special'}">
                                                            Tên miền đặc biệt
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="domain-extensions-list">


                                                        @foreach($quocte as $qt)
                                                            <div class="domain-extensions-item"
                                                                 ng-if="ExtensionsShow=='global' || ExtensionsShow=='all'">
                                                                <div class="domain-extensions-content">
                                                                    <div class="domain-extensions-content-left">
                                                                        <strong><span
                                                                                class="cl-blue">{{$qt->domain}}</span></strong>
                                                                        {{number_format($qt->phidangkynamdau)}}đ
                                                                    </div>
                                                                    <div class="domain-extensions-content-right">
                                                                        Gia hạn: <span
                                                                            class="cl-blue">{{number_format($qt->phiduytrimoinam)}}                                                đ</span>
                                                                        <br>
                                                                        <button type="button"
                                                                                class="button button-orange btn-buy">Mua
                                                                            ngay
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        @foreach($vietnam as $vn)

                                                            <div class="domain-extensions-item"
                                                                 ng-if="ExtensionsShow=='vn' || ExtensionsShow=='all'">
                                                                <div class="domain-extensions-content">
                                                                    <div class="domain-extensions-ribbon"><i
                                                                            class="icon-star-1"></i></div>
                                                                    <div class="domain-extensions-content-left">
                                                                        <strong><span
                                                                                class="cl-red">{{$vn->domain}}</span></strong>
                                                                        {{number_format($vn->phidangkynamdau)}}đ
                                                                    </div>
                                                                    <div class="domain-extensions-content-right">
                                                                        Gia hạn: <span
                                                                            class="cl-blue">{{number_format($vn->phiduytrimoinam)}}                                                đ</span>
                                                                        <br>

                                                                        <button type="button"
                                                                                class="button button-orange btn-buy">Mua
                                                                            ngay
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach


                                                        @foreach($dacbiet as $db)
                                                            <div class="domain-extensions-item"
                                                                 ng-if="ExtensionsShow=='special' || ExtensionsShow=='all'">
                                                                <div class="domain-extensions-content">
                                                                    <div class="domain-extensions-content-left">
                                                                        <strong><span
                                                                                class="cl-grey">{{$db->domain}}</span></strong>
                                                                        {{number_format($db->phidangkynamdau)}}đ
                                                                    </div>
                                                                    <div class="domain-extensions-content-right">
                                                                        Gia hạn: <span
                                                                            class="cl-blue">{{number_format($db->phiduytrimoinam)}}                                                đ</span>
                                                                        <br>
                                                                        <button type="button"
                                                                                class="button button-orange btn-buy">Mua
                                                                            ngay
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach


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
