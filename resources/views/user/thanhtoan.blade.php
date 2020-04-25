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
                                                        <p>Phương thức thanh toán :</p>
                                                        <input type="radio" id="PayPal" name="PayPal" value="PayPal"
                                                               selected>
                                                        <label for="PayPal">PayPal</label><br>
                                                        <input type="submit" value="Xác nhận">


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
        class="elementor-element elementor-element-bda0df3 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="bda0df3" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-5c806e9 elementor-column elementor-col-100 elementor-top-column"
                    data-id="5c806e9" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-5e02f37 elementor-widget elementor-widget-breadcrumb"
                                data-id="5e02f37" data-element_type="widget" data-widget_type="breadcrumb.default">
                                <div class="elementor-widget-container">
                                    <!-- begin breadcrumb -->
                                    <div class="main-wrap main-wrap-blue breadcrumb-wrap">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-12">
                                                    <div class="breadcrumb-nav">

                                                        <a href="index.html">
                                                            <i class="icon-home"></i><span>Trang chủ</span>
                                                        </a>
                                                        <i class="icon-arrow-right-circle"></i>
                                                        <span>Tên miền</span>

                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-12">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end breadcrumb -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-85bdc17 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="85bdc17" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-7ca892d elementor-column elementor-col-100 elementor-top-column"
                    data-id="7ca892d" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-09d1bfe elementor-widget elementor-widget-product-navigation"
                                data-id="09d1bfe" data-element_type="widget"
                                data-widget_type="product-navigation.default">
                                <div class="elementor-widget-container">
                                    <!-- begin product navigation -->
                                    <div class="main-wrap product-navigation-wrap" id="productNav">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <ul class="product-nav">

                                                        <li><a href="#"
                                                               ng-click="scrollTo('domain-intro')">Tên miền là gì?</a>
                                                        </li>
                                                        <li><a href="#"
                                                               ng-click="scrollTo('domain-noibat')">Điểm nổi bật</a>
                                                        </li>
                                                        <li><a href="#"
                                                               ng-click="scrollTo('domain-combo')">Combo tiết kiệm</a>
                                                        </li>
                                                        <li><a href="#"
                                                               ng-click="scrollTo('domain-protection')">Bảo mật tên
                                                                miền</a>
                                                        </li>
                                                        <li><a href="#"
                                                               ng-click="scrollTo('domain-faq')">FAQ</a>
                                                        </li>
                                                        <li><a href="#"
                                                               ng-click="scrollTo('domain-contact')">Cần tư vấn?</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 vertical-center">
                                                    <div class="center text-align-right product-nav-button">
                                                        <button class="button button-large ripple-magic"
                                                                ng-click="scrollTo('domain-pricing')">Xem bảng giá
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end product navigation -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-e733708 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="e733708" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-187ae80 elementor-column elementor-col-100 elementor-top-column"
                    data-id="187ae80" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-d2a3bc5 elementor-widget elementor-widget-anchor"
                                data-id="d2a3bc5" data-element_type="widget" data-widget_type="anchor.default">
                                <div class="elementor-widget-container">
                                    <!-- begin anchor -->
                                    <div class="clear" id="domain-intro"></div>
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
        class="elementor-element elementor-element-09cebad elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="09cebad" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-1b74ab8 elementor-column elementor-col-100 elementor-top-column"
                    data-id="1b74ab8" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-411ffb2 elementor-widget elementor-widget-video-guide"
                                data-id="411ffb2" data-element_type="widget" data-widget_type="video-guide.default">
                                <div class="elementor-widget-container">
                                    <!-- begin video -->
                                    <div class="main-wrap  video-wrapper"
                                         style="">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <div class="video-bg-image">
                                                        <img src="{{asset('img/video-domain.png')}}">
                                                        <div class="video-play-btn-wrap vertical-center">
                                                            <div class="center">
                                                                <img
                                                                    src="{{asset('img/movie-player-play-button2.png')}}"
                                                                    data-toggle="modal"
                                                                    data-target="#asvVideo"
                                                                    ng-click="PlayVideo=!PlayVideo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12 vertical-center">
                                                    <div class="video-wrapper-content center">
                                                        <h2>Tên miền là gì?</h2>
                                                        <p>
                                                            <b>Tên miền (hay còn gọi là Domain)</b> cũng tương tự như
                                                            một địa chỉ trên đường phố dùng để đại diện cho một ngôi nhà
                                                            hoặc doanh nghiệp nào đó trên mạng lưới internet. Nó giúp
                                                            bạn dễ dàng xác định một trang web cụ thể bằng một cái tên
                                                            duy nhất và điều hướng khách truy cập đến nó, với mỗi địa
                                                            chỉ tên miền bằng chữ này sẽ tương ứng với một địa chỉ IP
                                                            dạng số.
                                                            <br>Hiện đang có hàng triệu tên miền đang tồn tại trên thế
                                                            giới internet này. Để sở hữu một tên miền, bạn cần phải trả
                                                            một khoản phí hàng năm để duy trì quyền sử dụng tên miền đó.
                                                            Trước khi đăng ký tên miền bạn cần thực hiện kiểm tra tên
                                                            miền để đảm bảo rằng tên miền bạn muốn đăng ký chưa có ai sở
                                                            hữu nó. </p>
                                                        <button class="button text-transform-uppercase button-green"
                                                                data-toggle="modal"
                                                                data-target="#asvVideo" ng-click="PlayVideo=!PlayVideo">
                                                            Xem video
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal" id="asvVideo">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-video">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Tên miền là gì và cách chọn tên
                                                            miền?</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"
                                                                ng-click="PlayVideo=!PlayVideo">
                                                            <i class="icon-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" ng-if="PlayVideo">
                                                        <div class="video-container">
                                                            <iframe width="560" height="315"
                                                                    src="https://www.youtube.com/embed/oQ5Hi_N-_fE?modestbranding=1&amp;autohide=1&amp;showinfo=1&amp;controls=1"
                                                                    frameborder="0"
                                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                                    allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end video -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-be4671e elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="be4671e" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-2e9f093 elementor-column elementor-col-100 elementor-top-column"
                    data-id="2e9f093" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-652461e elementor-widget elementor-widget-anchor"
                                data-id="652461e" data-element_type="widget" data-widget_type="anchor.default">
                                <div class="elementor-widget-container">
                                    <!-- begin anchor -->
                                    <div class="clear" id="domain-pricing"></div>
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
        class="elementor-element elementor-element-c4bf3f3 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="c4bf3f3" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-f93b3bf elementor-column elementor-col-100 elementor-top-column"
                    data-id="f93b3bf" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-2216c03 elementor-widget elementor-widget-domain-pricing"
                                data-id="2216c03" data-element_type="widget" data-widget_type="domain-pricing.default">
                                <div class="elementor-widget-container">
                                    <!-- begin domain pricing -->
                                    <div class="main-wrap main-wrap-fuzzy main-wrap-default"
                                         style="">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 text-align-center">
                                                    <h2>Bảng giá <span class="cl-blue">Tên miền</span></h2>
                                                </div>
                                            </div>
                                            <div class="row" ng-controller="ListData" ng-init="loaderInit('domains')">
                                                <div class="col-12">
                                                    <div class="asv-table">

                                                        <div class="header-pro">
                                                            <div class="header-pro-content">
                                                                <input type="text" ng-model="search"
                                                                       placeholder="Tìm kiếm đuôi tên miền"
                                                                       class="input-search-normal">
                                                            </div>
                                                        </div>

                                                        <div class="asv-row header">
                                                            <div class="cell"><b>Tên miền</b></div>
                                                            <div class="cell"><b>Phí đăng ký năm đầu</b></div>
                                                            <div class="cell"><b>Phí duy trì mỗi năm</b></div>
                                                            <div class="cell"></div>
                                                        </div>
                                                        @foreach($tatca as $tc)
                                                            <div class="asv-row"
                                                            >

                                                                <div class="cell" data-title="Tên miền">
                                                                    <strong>{{$tc->domain}}</strong>
                                                                </div>
                                                                <div class="cell" data-title="Phí đăng ký năm đầu">
                                                                    {{number_format($tc->phidangkynamdau)}}đ
                                                                </div>
                                                                <div class="cell" data-title="Phí duy trì mỗi năm">
                                                                    {{number_format($tc->phiduytrimoinam)}}đ
                                                                </div>
                                                                <div class="cell">
                                                                    <a href="https://manage.HTVIETNAM.net/cart.php?type=domain&amp;sld=&amp;tld={{$tc->id}}"
                                                                       target="_blank">
                                                                        <i class="icon-commerce-and-shopping"></i>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="col-12 page-nav-wrap">
                                                    <dir-pagination-controls max-size="5" direction-links="true"
                                                                             boundary-links="false"></dir-pagination-controls>
                                                </div>
                                            </div>
                                            <div class="row" ng-show="loading">
                                                <div class="div-loading"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 note-wrap text-align-center">
                                                    * Giá trên chưa bao gồm VAT. Các ưu đãi đi kèm không được áp dụng
                                                    đồng thời với ưu đãi từ các chương trình khuyến mãi khác.<br>Ngoài
                                                    những Tên miền thông dụng (gTLD) và không phân biệt quốc gia, khách
                                                    hàng cũng có thể đăng ký các tên miền quốc gia (ccTLD) nếu đáp ứng
                                                    đủ điều kiện bắt buộc.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end domain pricing -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-6a2a4fd elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="6a2a4fd" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-26a4677 elementor-column elementor-col-100 elementor-top-column"
                    data-id="26a4677" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-6308d51 elementor-widget elementor-widget-anchor"
                                data-id="6308d51" data-element_type="widget" data-widget_type="anchor.default">
                                <div class="elementor-widget-container">
                                    <!-- begin anchor -->
                                    <div class="clear" id="domain-noibat"></div>
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
        class="elementor-element elementor-element-940da17 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="940da17" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-73d6f1c elementor-column elementor-col-100 elementor-top-column"
                    data-id="73d6f1c" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-827b24f elementor-widget elementor-widget-product-highlights"
                                data-id="827b24f" data-element_type="widget"
                                data-widget_type="product-highlights.default">
                                <div class="elementor-widget-container">
                                    <!-- begin products combo 2 -->
                                    <div class="main-wrap  product-why-choice-wrap"
                                         style="">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 text-align-center">
                                                    <h2>Những lợi ích khi <span class=cl-blue>đăng ký tên miền tại HTVIETNAM</span>
                                                    </h2>
                                                    <p class="intro">Chúng tôi chuẩn hóa toàn bộ quy trình quản lý tên
                                                        miền bằng công nghệ để mang đến sự thuận tiện và trải nghiệm tối
                                                        đa cho khách hàng.</p>
                                                </div>
                                            </div>
                                            <div class="row product-why-choice-list">

                                                <div class="col-md-4 col-sm-6 product-why-choice"
                                                     style="border: none !important" data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Bạn hoàn toàn chủ động trong việc quản lý và gia hạn dịch vụ tên miền thông qua giao diện web trực quan do chúng tôi cung cấp mà không phải chờ đợi.">
                                                    <div class="product-why-choice-image">
                                                        <img src="{{asset('img/bn-domain-2.svg')}}">
                                                    </div>
                                                    <div class="product-why-choice-title">
                                                        <h3>Quản lý tên miền</h3>
                                                    </div>
                                                    <div class="product-why-choice-content">
                                                        Bạn hoàn toàn chủ động trong việc quản lý và gia hạn dịch vụ Tên
                                                        miền
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 product-why-choice"
                                                     style="border: none !important" data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Tính năng DNS trung gian được tích hợp sẵn với giao diện quản lý giúp bạn đơn giản hóa quá trình cài đặt và cập nhật cấu hình bản ghi cho tên miền nhanh chóng.">
                                                    <div class="product-why-choice-image">
                                                        <img src="{{asset('img/dns.svg')}}">
                                                    </div>
                                                    <div class="product-why-choice-title">
                                                        <h3>Quản lý DNS</h3>
                                                    </div>
                                                    <div class="product-why-choice-content">
                                                        Tính năng DNS trung gian với giao diện quản lý đơn giản được
                                                        tích hợp sẵn
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 product-why-choice"
                                                     style="border: none !important" data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Đăng ký tên miền tại nhà đăng ký Việt Nam giúp hạn chế những rủi ro về mặt pháp lý, như xảy ra tranh chấp thương hiệu hoặc thiếu chứng từ hợp đồng hóa đơn.">
                                                    <div class="product-why-choice-image">
                                                        <img src="{{asset('img/clound-shield.svg')}}">
                                                    </div>
                                                    <div class="product-why-choice-title">
                                                        <h3>An toàn pháp lý</h3>
                                                    </div>
                                                    <div class="product-why-choice-content">
                                                        Đăng ký tên miền tại nhà đăng ký Việt Nam giúp hạn chế rủi ro về
                                                        mặt pháp lý
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 product-why-choice"
                                                     style="border: none !important" data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Theo Google chia sẻ, các doanh nghiệp nên đăng ký tên miền .VN tại địa phương nhằm tăng tính nhận diện vùng hoạt động để bổ trợ cho thứ hạng tìm kiếm trên SEO.">
                                                    <div class="product-why-choice-image">
                                                        <img src="{{asset('img/vn.svg')}}">
                                                    </div>
                                                    <div class="product-why-choice-title">
                                                        <h3>Tốt cho SEO</h3>
                                                    </div>
                                                    <div class="product-why-choice-content">
                                                        Đăng ký tên miền .VN tại địa phương nhằm tăng tính nhận diện
                                                        vùng hoạt động
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 product-why-choice"
                                                     style="border: none !important" data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Việc sở hữu tên miền .VN giúp tăng tính nhận diện thương hiệu và mức độ uy tín doanh nghiệp của bạn với khách hàng tại Việt Nam cũng như đối tác quốc tế.">
                                                    <div class="product-why-choice-image">
                                                        <img src="{{asset('img/monitor4.svg')}}">
                                                    </div>
                                                    <div class="product-why-choice-title">
                                                        <h3>Uy tín thương hiệu</h3>
                                                    </div>
                                                    <div class="product-why-choice-content">
                                                        Việc sở hữu tên miền .VN giúp tăng tính nhận diện thương hiệu
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 product-why-choice"
                                                     style="border: none !important" data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Với dịch vụ ID Protection này giúp bạn ẩn các thông tin tên miền quan trọng tránh khỏi sự nhòm ngó của những cá nhân hay tổ chức chuyên đi spam người dùng.">
                                                    <div class="product-why-choice-image">
                                                        <img src="{{asset('img/shield2.svg')}}">
                                                    </div>
                                                    <div class="product-why-choice-title">
                                                        <h3>Tên miền ẩn danh</h3>
                                                    </div>
                                                    <div class="product-why-choice-content">
                                                        Dịch vụ ID Protection giúp bạn ẩn các thông tin tên miền quan
                                                        trọng
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end products combo 2 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-29da69c elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="29da69c" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-c5d6490 elementor-column elementor-col-100 elementor-top-column"
                    data-id="c5d6490" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-ba04176 elementor-widget elementor-widget-anchor"
                                data-id="ba04176" data-element_type="widget" data-widget_type="anchor.default">
                                <div class="elementor-widget-container">
                                    <!-- begin anchor -->
                                    <div class="clear" id="domain-combo"></div>
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
        class="elementor-element elementor-element-2caafb5 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="2caafb5" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-db67638 elementor-column elementor-col-100 elementor-top-column"
                    data-id="db67638" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-249483a elementor-widget elementor-widget-product-combo-2"
                                data-id="249483a" data-element_type="widget" data-widget_type="product-combo-2.default">
                                <div class="elementor-widget-container">
                                    <!-- begin product combo 2 -->
                                    <div class="main-wrap main-wrap-fuzzy combo-wrap-3"
                                         style="">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 text-align-center">
                                                    <h2>Tiết kiệm chi phí, <span class="cl-blue">Tối đa lợi nhuận kinh doanh</span>
                                                    </h2>
                                                    <p class="intro">
                                                        Bằng cách lựa chọn sử dụng các gói combo dịch vụ tại
                                                        HTVIETNAM </p>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-lg-4 col-md-6 flex-box">
                                                    <div class="combo-box">
                                                        <div class="combo-box-icon">
                                                            <img src="{{asset('img/combo-x1.svg')}}">
                                                        </div>
                                                        <div class="combo-box-content box-content-2">
                                                            <h3>Combo X1</h3>
                                                            <span class="discount-label">Giảm ngay 10%</span>
                                                            <div class="product-introduction-wrap"
                                                                 style="padding: 0 !important;">
                                                                <div class="combo-box-desc"
                                                                     style="padding: 0 !important;">
                                                                    <p>Khi đăng ký đồng thời tên miền Việt Nam và tên
                                                                        miền Quốc tế.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="combo-box-option">
                                                            <button type="button"
                                                                    class="button button-large shadow-button prduct-combo-btn"
                                                                    data-toggle="modal" data-target="#OpenModalCombo"
                                                                    id="" data-service="33">
                                                                Đăng ký ngay<i class="icon-next"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 flex-box">
                                                    <div class="combo-box">
                                                        <div class="combo-box-icon">
                                                            <img src="{{asset('img/combo-x2.svg')}}">
                                                        </div>
                                                        <div class="combo-box-content box-content-2">
                                                            <h3>Combo X2</h3>
                                                            <span class="discount-label">Giảm ngay 15%</span>
                                                            <div class="product-introduction-wrap"
                                                                 style="padding: 0 !important;">
                                                                <div class="combo-box-desc"
                                                                     style="padding: 0 !important;">
                                                                    <p>Khi đăng ký đồng thời Tên miền + Hosting với thời
                                                                        hạn tối thiểu 01 năm.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="combo-box-option">
                                                            <button type="button"
                                                                    class="button button-large shadow-button prduct-combo-btn"
                                                                    data-toggle="modal" data-target="#OpenModalCombo"
                                                                    id="" data-service="34">
                                                                Đăng ký ngay<i class="icon-next"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 flex-box">
                                                    <div class="combo-box">
                                                        <div class="combo-box-icon">
                                                            <img src="{{asset('img/combo-x3.svg')}}">
                                                        </div>
                                                        <div class="combo-box-content box-content-2">
                                                            <h3>Combo X3</h3>
                                                            <span class="discount-label">Giảm ngay 20%</span>
                                                            <div class="product-introduction-wrap"
                                                                 style="padding: 0 !important;">
                                                                <div class="combo-box-desc"
                                                                     style="padding: 0 !important;">
                                                                    <p>Khi đăng ký Tên miền + Hosting + Email với thời
                                                                        hạn tối thiểu 01 năm.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="combo-box-option">
                                                            <button type="button"
                                                                    class="button button-large shadow-button prduct-combo-btn"
                                                                    data-toggle="modal" data-target="#OpenModalCombo"
                                                                    id="" data-service="35">
                                                                Đăng ký ngay<i class="icon-next"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end product combo 2 -->


                                    <!--Open Modal -->
                                    <div class="modal fade modalCombo" id="OpenModalCombo" tabindex='-1'>
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-register">
                                            <form id="mauTicForm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <img src="{{asset('img/combo-1.png')}}" alt="" width="15%">
                                                        <h2 class="combo-box-title-modal">Đăng ký gói Combo X3</h2>
                                                        <p>
                                                            Thông tin của bạn sẽ được gửi tới các hỗ trợ viên tại
                                                            HTVIETNAM
                                                            để hỗ trợ đăng ký và kích hoạt dịch vụ.
                                                        </p>
                                                        <button type="button"
                                                                class="close close-modal-product-combo text-white"
                                                                data-dismiss="modal"><i class="icon-close"></i></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="label-wrap">
                                                                <form id="mauTicForm">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label>Họ và tên</label>
                                                                            <input type="text" placeholder="Nhập họ tên"
                                                                                   required name="mauticform[fullname]"
                                                                                   class="mauticform_combo2_fullname">
                                                                            <span hidden
                                                                                  class="mauticform_combo2_fullname_error text-danger"></span>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <label>Số điện thoại</label>
                                                                            <input type="text"
                                                                                   placeholder="Nhập số điện thoại của bạn"
                                                                                   required name="mauticform[phone]"
                                                                                   class="mauticform_combo2_phone">
                                                                            <span hidden
                                                                                  class="mauticform_combo2_phone_error text-danger"></span>
                                                                        </div>

                                                                        <div class="col">
                                                                            <label>Địa chỉ email</label>
                                                                            <input type="email"
                                                                                   placeholder="Nhập email của bạn"
                                                                                   required name="mauticform[email]"
                                                                                   class="mauticform_combo2_email">
                                                                        </div>

                                                                        <input type="hidden" name="mauticform[services]"
                                                                               class="mauticform_services mauticform_combo2_services"
                                                                               value="Hosting Linux" autocomplete="off">
                                                                        <input type="hidden" name="mauticform[formId]"
                                                                               class="mauticform_id mauticform_combo2_formId"
                                                                               value="22" autocomplete="off">
                                                                        <input type="hidden" name="mauticform[return]"
                                                                               class="mauticform_return mauticform_combo2_return"
                                                                               value="" autocomplete="off">
                                                                        <input type="hidden" name="mauticform[formName]"
                                                                               class="mauticform_name mauticform_combo2_formName"
                                                                               value="dangkydungthu" autocomplete="off">
                                                                        <input type="hidden"
                                                                               name="mauticform[messenger]"
                                                                               class="mauticform_messenger mauticform_combo2_messager"
                                                                               value="1">
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="button button-large shadow-button"
                                                                data-dismiss=""
                                                                ng-click="mauTicPost('mauticform_combo2')">
                                                            Đăng ký ngay<i class="icon-arrow-pointing-to-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end product combo -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-a21def3 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="a21def3" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-8d633f6 elementor-column elementor-col-100 elementor-top-column"
                    data-id="8d633f6" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-ffc8e1a elementor-widget elementor-widget-anchor"
                                data-id="ffc8e1a" data-element_type="widget" data-widget_type="anchor.default">
                                <div class="elementor-widget-container">
                                    <!-- begin anchor -->
                                    <div class="clear" id="domain-protection"></div>
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
        class="elementor-element elementor-element-d05c3c0 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="d05c3c0" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-f22ea78 elementor-column elementor-col-100 elementor-top-column"
                    data-id="f22ea78" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-23c6280 elementor-widget elementor-widget-product-introduction-3"
                                data-id="23c6280" data-element_type="widget"
                                data-widget_type="product-introduction-3.default">
                                <div class="elementor-widget-container">
                                    <!-- begin product introduction -->
                                    <div class="main-wrap  product-introduction-wrap product-cards-wrap"
                                         style="">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="product-introduction-img-bg">
                                                        <div class="product-introduction-img-bg-deco-1"></div>
                                                        <div class="product-introduction-img-bg-deco-2"></div>
                                                        <div class="product-introduction-img vertical-center">
                                                            <div class="center">
                                                                <img src="{{asset('img/bn-domain-2.svg')}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-12 vertical-center">
                                                    <div class="product-introduction-text">
                                                        <h2><span class="cl-blue">Bảo mật thông tin tên miền</span> là
                                                            gì?</h2>
                                                        <p>Mỗi ngày, có hàng triệu thông tin khách hàng bị đánh cắp do
                                                            những sơ hở từ nhiều nguồn, trong đó có việc đăng ký tên
                                                            miền quốc tế nhưng không sử dụng chức năng ẩn thông tin tên
                                                            miền.
                                                            <br><i class=icon-shield></i><b> ID Protection (Dịch vụ bảo
                                                                vệ tên miền)</b> sẽ giúp bạn ẩn các thông tin tên miền
                                                            quan trọng khỏi sự nhòm ngó của những cá nhân hay tổ chức
                                                            chuyên spam hoặc thu thập thông tin để bán lại.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-align-center">
                                                    <h2>Thông tin bảo mật được <span class="cl-blue">Hiển thị như thế nào?</span>
                                                    </h2>
                                                    <p class="intro" style="margin-bottom: 20px">
                                                        Khi tra cứu thông tin WHOIS đã được bảo mật, người xem sẽ thấy
                                                        như hình ảnh ở khung bên phải. </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-12 flex-box">
                                                    <div class="card-box">
                                                        <div class="card-box-content">
                                                            <h3>Chưa được bảo mật</h3>
                                                            <p class="card-box-content-text">
                                                                Cong ty TNHH TM & DV Van A
                                                                <br>Nguyen Van A
                                                                <br>300 Lac Hong, Phuong 4, Tan Binh
                                                                <br>TP. Ho Chi Minh, Vietnam
                                                                <br>(028) 333 4444
                                                                <br>nguyenvana@gmail.com </p>
                                                            <p class="card-box-content-price">
                                                            </p>
                                                        </div>
                                                        <div class="card-box-icon vertical-center">
                                                            <div class="center text-align-right">
                                                                <img src="{{asset('img/danger-1.svg')}}">
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="col-lg-6 col-12 flex-box">
                                                    <div class="card-box">
                                                        <div class="card-box-content">
                                                            <h3>Đã được bảo mật</h3>
                                                            <p class="card-box-content-text">
                                                                Whois Privacy Protection Service.
                                                                <br>Whois Agent
                                                                <br>PMB 368, 14150 NE 20th St - F1,
                                                                <br>C/O nguyenvana.com
                                                                <br>Bellevue, WA 98007, United States
                                                                <br>gmvcxkxh@whoisprivacyprotect.com </p>
                                                            <p class="card-box-content-price">
                                                                Giá: <span class="cl-blue">80.000đ/năm</span></p>
                                                        </div>
                                                        <div class="card-box-icon vertical-center">
                                                            <div class="center text-align-right">
                                                                <img src="{{asset('img/shield2.svg')}}">
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end product introduction -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-079645f elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="079645f" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-b03e268 elementor-column elementor-col-100 elementor-top-column"
                    data-id="b03e268" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-1e40c55 elementor-widget elementor-widget-anchor"
                                data-id="1e40c55" data-element_type="widget" data-widget_type="anchor.default">
                                <div class="elementor-widget-container">
                                    <!-- begin anchor -->
                                    <div class="clear" id="domain-protection"></div>
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
        class="elementor-element elementor-element-416c3bb elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="416c3bb" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-011a7c0 elementor-column elementor-col-100 elementor-top-column"
                    data-id="011a7c0" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-5e84dd3 elementor-widget elementor-widget-product-combo"
                                data-id="5e84dd3" data-element_type="widget" data-widget_type="product-combo.default">
                                <div class="elementor-widget-container">
                                    <!-- begin product combo -->
                                    <div class="main-wrap main-wrap-blue combo-wrap text-align-center">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h2>Bạn đang muốn chuyển dịch vụ về HTVIETNAM?</h2>
                                                    <p class="intro">
                                                    <p style="line-height: 1;">Chúng tôi hỗ trợ <b>miễn phí 100%</b>
                                                        công việc di chuyển dữ liệu từ nhà cung cấp khác về HTVIETNAM
                                                        nếu
                                                        bạn đang gặp khó khăn về mặt thao tác kỹ thuật.</p>
                                                    <p style="line-height: 1;">Đồng thời bạn sẽ nhận được <b>nhiều ưu
                                                            đãi hấp dẫn và dịch vụ chăm sóc khách hàng tốt hơn </b>mà
                                                        không gặp phải bất kỳ trở ngại nào.</p></p>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-lg-4 col-md-6">
                                                    <div class="combo-box combo-bg-icon-1"
                                                         style="background-image: url({{asset('img/bn-domain.svg')}}">
                                                        <div class="combo-bg-top-1"></div>
                                                        <div class="combo-percent">20%</div>
                                                        <div class="combo-box-content">
                                                            <h3 class="title title-1">Transfer<br>Domain</h3>
                                                            <p>Khi chuyển Tên miền từ nhà cung cấp khác về HTVIETNAM</p>
                                                            <div class="button-wrap">

                                                                <a href="ten-mien/transfer-domain.html" target="_blank"
                                                                   class="text-white">
                                                                    <button
                                                                        class="button shadow-button ripple-magic prduct-combo-btn">
                                                                        Xem ưu đãi <i
                                                                            class="icon-arrow-pointing-to-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6">
                                                    <div class="combo-box combo-bg-icon-1"
                                                         style="background-image: url({{asset('img/hosting-wp.svg')}}">
                                                        <div class="combo-bg-top-2"></div>
                                                        <div class="combo-percent">20%</div>
                                                        <div class="combo-box-content">
                                                            <h3 class="title title-2">Transfer<br>Web Hosting</h3>
                                                            <p>Khi chuyển dịch vụ Web Hosting từ nhà cung cấp khác về
                                                                HTVIETNAM.</p>
                                                            <div class="button-wrap">

                                                                <a href="web-hosting/transfer-webhosting.html"
                                                                   target="_blank" class="text-white">
                                                                    <button
                                                                        class="button shadow-button ripple-magic prduct-combo-btn">
                                                                        Xem ưu đãi <i
                                                                            class="icon-arrow-pointing-to-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6">
                                                    <div class="combo-box combo-bg-icon-1"
                                                         style="background-image: url({{asset('img/clound-hosting.svg')}}">
                                                        <div class="combo-bg-top-3"></div>
                                                        <div class="combo-percent">20%</div>
                                                        <div class="combo-box-content">
                                                            <h3 class="title title-3">Transfer<br>Cloud VPS</h3>
                                                            <p>Khi chuyển dịch vụ Cloud VPS từ nhà cung cấp khác về
                                                                HTVIETNAM.</p>
                                                            <div class="button-wrap">

                                                                <a href="cloud/transfer-cloud.html" target="_blank"
                                                                   class="text-white">
                                                                    <button
                                                                        class="button shadow-button ripple-magic prduct-combo-btn">
                                                                        Xem ưu đãi <i
                                                                            class="icon-arrow-pointing-to-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!--Open Modal -->
                                    <div class="modal fade modalCombo" id="OpenModalCombo" tabindex='-1'>
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-register">
                                            <form id="mauTicForm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <img src="{{asset('img/combo-1.png')}}" alt="" width="15%">
                                                        <h2 class="combo-box-title-modal">Đăng ký gói Transfer<br>Cloud
                                                            VPS</h2>
                                                        <p>
                                                            Thông tin của bạn sẽ được gửi tới các hỗ trợ viên tại
                                                            HTVIETNAM
                                                            để hỗ trợ đăng ký và kích hoạt dịch vụ.
                                                        </p>
                                                        <button type="button"
                                                                class="close close-modal-product-combo text-white"
                                                                data-dismiss="modal"><i class="icon-close"></i></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="label-wrap">
                                                                <form id="mauTicForm">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label>Họ và tên</label>
                                                                            <input type="text" placeholder="Nhập họ tên"
                                                                                   required name="mauticform[fullname]"
                                                                                   class="mauticform_combo_fullname">
                                                                            <span hidden
                                                                                  class="mauticform_combo_fullname_error text-danger"></span>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <label>Số điện thoại</label>
                                                                            <input type="text"
                                                                                   placeholder="Nhập số điện thoại của bạn"
                                                                                   required name="mauticform[phone]"
                                                                                   class="mauticform_combo_phone">
                                                                            <span hidden
                                                                                  class="mauticform_combo_phone_error text-danger"></span>
                                                                        </div>

                                                                        <div class="col">
                                                                            <label>Địa chỉ email</label>
                                                                            <input type="email"
                                                                                   placeholder="Nhập email của bạn"
                                                                                   required name="mauticform[email]"
                                                                                   class="mauticform_combo_email">
                                                                            <span hidden
                                                                                  class="mauticform_combo_email_error text-danger"></span>
                                                                        </div>

                                                                        <input type="hidden" name="mauticform[services]"
                                                                               class="mauticform_services mauticform_combo_services"
                                                                               value="Hosting Linux" autocomplete="off">
                                                                        <input type="hidden" name="mauticform[formId]"
                                                                               class="mauticform_id mauticform_combo_formId"
                                                                               value="22" autocomplete="off">
                                                                        <input type="hidden" name="mauticform[return]"
                                                                               class="mauticform_return mauticform_combo_return"
                                                                               value="" autocomplete="off">
                                                                        <input type="hidden" name="mauticform[formName]"
                                                                               class="mauticform_name mauticform_combo_formName"
                                                                               value="dangkydungthu" autocomplete="off">
                                                                        <input type="hidden"
                                                                               name="mauticform[messenger]"
                                                                               class="mauticform_messenger mauticform_combo_messager"
                                                                               value="1">
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="button button-large shadow-button"
                                                                data-dismiss="" ng-disabled="InProgress"
                                                                ng-click="mauTicPost('mauticform_combo')">
                                                            Đăng ký ngay<i class="icon-arrow-pointing-to-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end product combo -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-c4103da elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="c4103da" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-759e65b elementor-column elementor-col-100 elementor-top-column"
                    data-id="759e65b" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-ab46743 elementor-widget elementor-widget-anchor"
                                data-id="ab46743" data-element_type="widget" data-widget_type="anchor.default">
                                <div class="elementor-widget-container">
                                    <!-- begin anchor -->
                                    <div class="clear" id="domain-faq"></div>
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
        class="elementor-element elementor-element-ea6e00b elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="ea6e00b" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-1bd614e elementor-column elementor-col-100 elementor-top-column"
                    data-id="1bd614e" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-85f4d0e elementor-widget elementor-widget-questions"
                                data-id="85f4d0e" data-element_type="widget" data-widget_type="questions.default">
                                <div class="elementor-widget-container">
                                    <!-- begin fqa -->
                                    <div class="main-wrap main-wrap-fuzzy questions-wrap"
                                         style="">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 text-align-center">
                                                    <h3 class="title-question">Một số câu hỏi thường gặp về <span
                                                            class="cl-blue">Tên miền</span></h3>
                                                    <p class="intro">
                                                        Một vài kiến thức cơ bản và thắc mắc thường gặp về dịch vụ Tên
                                                        miền giá rẻ. </p>
                                                </div>
                                            </div>
                                            <div class="row" id="accordionQuestion">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="question-box">
                                                        <div class="question-box-icon">
                                                            <span class="icon-question-mark main-icon"></span>
                                                        </div>
                                                        <div class="question-box-content collapse" id="collapseQ1"
                                                             data-parent="#accordionQuestion">
                                                            <h3 data-toggle="collapse" data-target="#collapseQ1"
                                                                ng-click="setQuestionActive('collapseQ1')">Tên miền là
                                                                gì?</h3>
                                                            <span
                                                                ng-bind-html="showQuestionContent('collapseQ1', 'Tên miền hay còn được gọi là (Domain Names) là một địa chỉ để xác định danh tính trực tuyến của bạn trên mạng internet. Tên miền mang đến cho chúng ta một địa chỉ dễ nhớ để truy cập lại, nếu không có tên miền theo dạng chữ này thì đường dẫn URL đến website sẽ được hiển thị bằng một dải các địa chỉ IP dạng số, và điều này sẽ gây khó khăn trong việc nhớ được địa chỉ chính xác của website.')|trust"></span>
                                                            <div class="question-box-icon-btn">
                                                                <i class="icon-download-1 arrow-icon"
                                                                   data-toggle="collapse"
                                                                   data-target="#collapseQ1"
                                                                   ng-click="setQuestionActive('collapseQ1')"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="question-box">
                                                        <div class="question-box-icon">
                                                            <span class="icon-question-mark main-icon"></span>
                                                        </div>
                                                        <div class="question-box-content collapse" id="collapseQ3"
                                                             data-parent="#accordionQuestion">
                                                            <h3 data-toggle="collapse" data-target="#collapseQ3"
                                                                ng-click="setQuestionActive('collapseQ3')">Sự khác biệt
                                                                giữa Tên miền và Web hosting là gì ?</h3>
                                                            <span
                                                                ng-bind-html="showQuestionContent('collapseQ3', 'Web hosting có nhiệm vụ chính là lưu trữ dữ liệu trên Máy chủ, nơi mà toàn bộ các dữ liệu như nội dung text của website, mã nguồn, hình ảnh, videos và một số thông tin khác được lưu giữ. Tên miền đại diện cho một địa chỉ cụ thể để dẫn dắt người truy cập vào website tìm kiếm thông tin. Tên miền và Web hosting là 2 thành phần hoạt động hoàn toàn độc lập có khả năng liên kết với nhau để tạo thành một website hoàn chỉnh.')|trust"></span>
                                                            <div class="question-box-icon-btn">
                                                                <i class="icon-download-1 arrow-icon"
                                                                   data-toggle="collapse"
                                                                   data-target="#collapseQ3"
                                                                   ng-click="setQuestionActive('collapseQ3')"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="question-box">
                                                        <div class="question-box-icon">
                                                            <span class="icon-question-mark main-icon"></span>
                                                        </div>
                                                        <div class="question-box-content collapse" id="collapseQ5"
                                                             data-parent="#accordionQuestion">
                                                            <h3 data-toggle="collapse" data-target="#collapseQ5"
                                                                ng-click="setQuestionActive('collapseQ5')">ccTLD là
                                                                gì?</h3>
                                                            <span
                                                                ng-bind-html="showQuestionContent('collapseQ5', 'ccTLD là cụm từ viết tắt trong tiếng Anh (Country Code Top-Level Domain) là Tên miền quốc gia cấp cao nhất, được cấp phát sử dụng hoặc dự trữ cho một quốc gia hoặc một lãnh thổ trực thuộc. Tên miền quốc gia có 2 ký tự ví dụ như tại Việt Nam là .VN, Những ccTLD được quản lý một cách độc lập bởi cơ quan đăng ký được chỉ định trên một lãnh thổ, ví dụ tại Việt Nam cơ quản quản lý tên miền .VN là VNNIC.')|trust"></span>
                                                            <div class="question-box-icon-btn">
                                                                <i class="icon-download-1 arrow-icon"
                                                                   data-toggle="collapse"
                                                                   data-target="#collapseQ5"
                                                                   ng-click="setQuestionActive('collapseQ5')"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="question-box">
                                                        <div class="question-box-icon">
                                                            <span class="icon-question-mark main-icon"></span>
                                                        </div>
                                                        <div class="question-box-content collapse" id="collapseQ7"
                                                             data-parent="#accordionQuestion">
                                                            <h3 data-toggle="collapse" data-target="#collapseQ7"
                                                                ng-click="setQuestionActive('collapseQ7')">Tôi muốn
                                                                chuyển tên miền Quốc tế đăng ký nơi khác về HTVIETNAM
                                                                thì
                                                                làm thế nào?</h3>
                                                            <span
                                                                ng-bind-html="showQuestionContent('collapseQ7', 'Tên miền Quốc tế có thể chuyển sau 60 ngày đăng ký mới hoặc còn hạn tối thiếu 7 ngày, có mã EPP Code (mã chuyển tên miền xin tại nhà cung cấp cũ), ở trạng thái Unlock (mở khóa) và bỏ ẩn thông tin tên miền (nếu có). Đồng thời tên miền muốn chuyển không được thay đổi bất kỳ thông tin chủ thể (Email, Số điện thoại, Địa chỉ,...) trong vòng 60 ngày trước khi yêu cầu chuyển đi.')|trust"></span>
                                                            <div class="question-box-icon-btn">
                                                                <i class="icon-download-1 arrow-icon"
                                                                   data-toggle="collapse"
                                                                   data-target="#collapseQ7"
                                                                   ng-click="setQuestionActive('collapseQ7')"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="question-box">
                                                        <div class="question-box-icon">
                                                            <span class="icon-question-mark main-icon"></span>
                                                        </div>
                                                        <div class="question-box-content collapse" id="collapseQ2"
                                                             data-parent="#accordionQuestion">
                                                            <h3 data-toggle="collapse" data-target="#collapseQ2"
                                                                ng-click="setQuestionActive('collapseQ2')">Điều kiện để
                                                                đăng ký tên miền?</h3>
                                                            <span
                                                                ng-bind-html="showQuestionContent('collapseQ2', 'Theo nguyên tắc chung trên thế giới hiện nay tên miền giá rẻ sẽ được đăng ký nếu thoả mãn 2 điều kiện: Duy nhất và ai nộp đơn đăng ký trước thì được cấp trước. Do đó nếu không đăng ký kịp thời, tên miền của bạn có thể bị người khác đăng ký mất.')|trust"></span>
                                                            <div class="question-box-icon-btn">
                                                                <i class="icon-download-1 arrow-icon"
                                                                   data-toggle="collapse"
                                                                   data-target="#collapseQ2"
                                                                   ng-click="setQuestionActive('collapseQ2')"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="question-box">
                                                        <div class="question-box-icon">
                                                            <span class="icon-question-mark main-icon"></span>
                                                        </div>
                                                        <div class="question-box-content collapse" id="collapseQ4"
                                                             data-parent="#accordionQuestion">
                                                            <h3 data-toggle="collapse" data-target="#collapseQ4"
                                                                ng-click="setQuestionActive('collapseQ4')">DNS là
                                                                gì?</h3>
                                                            <span ng-bind-html="showQuestionContent('collapseQ4', '
DNS là từ viết tắt trong tiếng Anh của (Domain Name System), là Hệ thống phân giải tên miền được phát minh vào năm 1984 dành cho Internet, chỉ một hệ thống cho phép thiết lập tương ứng giữa địa chỉ IP và tên miền. Ví dụ khi bạn gõ một địa chỉ Website lên trình duyệt thì nó sẽ truy cập đến một máy chủ để tìm kiếm địa chỉ IP tương ứng với địa chỉ Website, từ đó mới có thể truy cập đến trang web mà bạn yêu cầu.')|trust"></span>
                                                            <div class="question-box-icon-btn">
                                                                <i class="icon-download-1 arrow-icon"
                                                                   data-toggle="collapse"
                                                                   data-target="#collapseQ4"
                                                                   ng-click="setQuestionActive('collapseQ4')"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="question-box">
                                                        <div class="question-box-icon">
                                                            <span class="icon-question-mark main-icon"></span>
                                                        </div>
                                                        <div class="question-box-content collapse" id="collapseQ6"
                                                             data-parent="#accordionQuestion">
                                                            <h3 data-toggle="collapse" data-target="#collapseQ6"
                                                                ng-click="setQuestionActive('collapseQ6')">TLD và gTLD
                                                                là gì?</h3>
                                                            <span ng-bind-html="showQuestionContent('collapseQ6', '
TLD là cụm từ viết tắt trong tiếng Anh là (Top-Level Domain), là tên miền cấp cao nhất, còn gTLD (Generic Top-Level Domain)  là tên miền cấp cao nhất dùng chung. Ví dụ như bạn gõ vào thanh địa chỉ trên trình duyệt web để truy cập một website cụ thể như www.HTVIETNAM.net.')|trust"></span>
                                                            <div class="question-box-icon-btn">
                                                                <i class="icon-download-1 arrow-icon"
                                                                   data-toggle="collapse"
                                                                   data-target="#collapseQ6"
                                                                   ng-click="setQuestionActive('collapseQ6')"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="question-box">
                                                        <div class="question-box-icon">
                                                            <span class="icon-question-mark main-icon"></span>
                                                        </div>
                                                        <div class="question-box-content collapse" id="collapseQ8"
                                                             data-parent="#accordionQuestion">
                                                            <h3 data-toggle="collapse" data-target="#collapseQ8"
                                                                ng-click="setQuestionActive('collapseQ8')">Tôi muốn
                                                                chuyển tên miền Việt Nam đăng ký ở nơi khác về HTVIETNAM
                                                                thì cần những gì?</h3>
                                                            <span
                                                                ng-bind-html="showQuestionContent('collapseQ8', 'Để chuyển tên miền Việt Nam về HTVIETNAM thì tên miền của bạn phải còn hạn tối thiếu 30 ngày, đã được mở khóa (unlock) và cung cấp mã chuyển tên miền (mã EPP Code) để HTVIETNAM thực hiện chuyển.')|trust"></span>
                                                            <div class="question-box-icon-btn">
                                                                <i class="icon-download-1 arrow-icon"
                                                                   data-toggle="collapse"
                                                                   data-target="#collapseQ8"
                                                                   ng-click="setQuestionActive('collapseQ8')"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="question-suggestion-end">
                                                        <h4>Những câu hỏi trên chưa giải đáp được thắc mắc của bạn?</h4>
                                                        <a onclick="chatButton.onClick();">
                                                            <button type="button"
                                                                    class="button button-orange button-large shadow-button ripple-magic">
                                                                <i class="icon-paper-plane-1 i-icon-left"></i>Chat với
                                                                chúng tôi
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end fqa -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-faf7c7f elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
        data-id="faf7c7f" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div
                    class="elementor-element elementor-element-bd0d14a elementor-column elementor-col-100 elementor-top-column"
                    data-id="bd0d14a" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-fcfcb4c elementor-widget elementor-widget-anchor"
                                data-id="fcfcb4c" data-element_type="widget" data-widget_type="anchor.default">
                                <div class="elementor-widget-container">
                                    <!-- begin anchor -->
                                    <div class="clear" id="domain-contact"></div>
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
