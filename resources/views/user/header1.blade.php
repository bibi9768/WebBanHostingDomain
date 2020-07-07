<section
    class="elementor-element elementor-element-2280a76 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
    data-id="2280a76" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div
                class="elementor-element elementor-element-b4cebbb elementor-column elementor-col-100 elementor-top-column"
                data-id="b4cebbb" data-element_type="column">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div
                            class="elementor-element elementor-element-a06d706 elementor-widget elementor-widget-header"
                            data-id="a06d706" data-element_type="widget" data-widget_type="header.default">
                            <div class="elementor-widget-container">
                                <script>
                                    ajax = 'wp-admin/admin-ajax.html';
                                </script>
                                <div class="clear" id="asvTopPage"></div>
                                <!-- begin header -->
                                <div class="container-full">
                                    <div class="top-bar-wrap">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="top-bar-nav">
                                                        {{--                                                        <li>--}}
                                                        {{--                                                            <a href="https://manage.hostvn.net/contact.php"--}}
                                                        {{--                                                               target="_blank"><i--}}
                                                        {{--                                                                    class="icon-envelope"></i><span>Liên hệ</span></a>--}}
                                                        {{--                                                        </li>--}}
                                                        @if(Auth::check())
                                                            <li>
                                                                <a href="{{route('getDonHangCuaToi')}}"><i
                                                                        class="icon-dollar-symbol"></i><span>Đơn hàng của tôi</span></a>
                                                            </li>
                                                            @if(Auth::User()->laquantri)
                                                                <li>
                                                                    <a href="{{route('getTrangChuQuanLy')}}"><i
                                                                            class="icon-question-mark"></i><span>Quản lý hệ thống</span></a>
                                                                </li>
                                                            @endif
                                                            <li>
                                                                <a href="{{route('getTrangCaNhanPage')}}"><i
                                                                        class="icon-user-shape"></i><span>Chào bạn <b>{{Auth::User()->hoten}}, </b></span></a>
                                                                <a href="{{route('signOut')}}"><span>thoát</span></a>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <a href="{{route('getSignInPage')}}"><i
                                                                        class="icon-user-shape"></i><span>Đăng nhập</span></a>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-menu-wrap" id="navbar">
                                        <div class="container">
                                            <div class="row padding-nav">
                                                <div class="col-lg-3 col-md-4 col-5 vertical-center">
                                                    <img src="{{asset('img/logo-htvietnam-blue.svg')}}"
                                                         class="logo logo-blue"
                                                         onclick="location.href='{{route('getHomePage')}}'">
                                                    <img src="{{asset('img/logo-htvietnam-white.svg')}}"
                                                         class="logo logo-white"
                                                         onclick="location.href='{{route('getHomePage')}}'">
                                                </div>
                                                <div class="col-lg-9 vertical-center desktop">
                                                    <div class="center">
                                                        <ul class="top-menu">
                                                            <li>
                                                                <a href="{{route('getBangGiaTenMien')}}"
                                                                   class="a-inner-bottom-arrow"><i
                                                                        class="icon-download-1 arrow-down"></i>Tên miền
                                                                </a>
                                                                <div class="drop-down-wrap">
                                                                    <div class="menu-box-wrap">
                                                                        <div class="menu-box">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col-md-6 hosta-col">
                                                                                        <h2>Đăng ký & Gia hạn</h2>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="{{route('getBangGiaTenMien')}}">
                                                                                                    <i class="icon-dollar-symbol"></i>
                                                                                                    <div
                                                                                                        class="menu-text">
                                                                                                        <h3>Bảng giá Tên
                                                                                                            miền </h3>
                                                                                                        <br>
                                                                                                        Số lượng đuôi
                                                                                                        tên miền đa dạng
                                                                                                    </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="{{route('getBangGiaTenMien')}}">
                                                                                                    <i class="icon-commerce-and-shopping"></i>
                                                                                                    <div
                                                                                                        class="menu-text">
                                                                                                        <h3>Đăng ký tên
                                                                                                            miền </h3>
                                                                                                        <br>
                                                                                                        Kích hoạt tên
                                                                                                        miền hoàn toàn
                                                                                                        tự động
                                                                                                    </div>
                                                                                                </a>
                                                                                            </li>
{{--                                                                                            <li>--}}
{{--                                                                                                <a href="{{route('getDonHangCuaToi')}}">--}}
{{--                                                                                                    <i class="icon-calendar-with-a-clock-time-tools"></i>--}}
{{--                                                                                                    <div--}}
{{--                                                                                                        class="menu-text">--}}
{{--                                                                                                        <h3>Gia hạn tên--}}
{{--                                                                                                            miền </h3>--}}
{{--                                                                                                        <br>--}}
{{--                                                                                                        Được đăng ký bởi--}}
{{--                                                                                                        HTVIETNAM--}}
{{--                                                                                                    </div>--}}
{{--                                                                                                </a>--}}
{{--                                                                                            </li>--}}
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="col-md-6 hosta-col">
                                                                                        <h2>Thông tin cần biết</h2>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="{{route('getBangGiaTenMien')}}">
                                                                                                    <i class="icon-magnifier"></i>
                                                                                                    <div
                                                                                                        class="menu-text">
                                                                                                        <h3>Tra cứu tên
                                                                                                            miền </h3>
                                                                                                        <br>
                                                                                                        Kiểm tra trạng
                                                                                                        thái tên miền
                                                                                                        trước khi đăng
                                                                                                        ký
                                                                                                    </div>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('getWordpressHosting')}}"
                                                                   class="a-inner-bottom-arrow"><i
                                                                        class="icon-download-1 arrow-down"></i>Web
                                                                    Hosting </a>
                                                                <div class="drop-down-wrap">
                                                                    <div class="menu-box-wrap">
                                                                        <div class="menu-box">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col-md-6 hosta-col">
                                                                                        <h2>Shared Hosting</h2>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="{{route('getWordpressHosting')}}">
                                                                                                    <i class="icon-wordpress-logo"></i>
                                                                                                    <div
                                                                                                        class="menu-text">
                                                                                                        <h3>WordPress
                                                                                                            Hosting
                                                                                                            <span
                                                                                                                class="label-spotlight">SSD</span>
                                                                                                        </h3>
                                                                                                        <br>
                                                                                                        SSD Hosting
                                                                                                        chuyên dụng dành
                                                                                                        cho WordPress
                                                                                                    </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="{{route('getHostingLinux')}}">
                                                                                                    <i class="icon-linux"></i>
                                                                                                    <div
                                                                                                        class="menu-text">
                                                                                                        <h3>Hosting
                                                                                                            Linux </h3>
                                                                                                        <br>
                                                                                                        Đáp ứng tốt cho
                                                                                                        mã nguồn sử dụng
                                                                                                        PHP
                                                                                                    </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="{{route('getHostingWindows')}}">
                                                                                                    <i class="icon-windows-8"></i>
                                                                                                    <div
                                                                                                        class="menu-text">
                                                                                                        <h3>Hosting
                                                                                                            Windows </h3>
                                                                                                        <br>
                                                                                                        Dành cho mã
                                                                                                        nguồn ngôn ngữ
                                                                                                        lập trình .NET
                                                                                                    </div>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-7 vertical-center tablet"
                                                     ng-init="domainSearchMobile=false">
                                                    <a class="menu-icon" href="{{route('getSignInPage')}}"
                                                       style="width:100%">Đăng nhập</a>
                                                    <div class="center text-align-center">
                                                        <a class="menu-icon" data-toggle="collapse"
                                                           data-target="#navMobile"
                                                           aria-controls="navMobile"
                                                           aria-expanded="false" ng-click="disableScrollBar()">
                                                            <span class="line"></span>
                                                            <span class="line"></span>
                                                            <span class="line"></span>
                                                        </a>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="collapse top-menu-mobile" id="navMobile">
                                                <ul id="accordionMenuMobile">
                                                    <li>
                                                        <a href="{{route('getBangGiaTenMien')}}"
                                                           class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                                           data-toggle="collapse" data-target="#collapse1"
                                                           aria-expanded="false">Tên miền<i
                                                                class="icon-download-1"></i> </a>
                                                        <ul id="collapse1" class="collapse"
                                                            data-parent="#accordionMenuMobile">
                                                            <li>
                                                                <a href="{{route('getBangGiaTenMien')}}"><i
                                                                        class="icon-dollar-symbol"></i>Bảng giá Tên miền
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('getBangGiaTenMien')}}"><i
                                                                        class="icon-commerce-and-shopping"></i>Đăng ký
                                                                    tên miền </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i
                                                                        class="icon-calendar-with-a-clock-time-tools"></i>Gia
                                                                    hạn tên miền </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('getBangGiaTenMien')}}"><i
                                                                        class="icon-magnifier"></i>Tra cứu tên miền </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('getWordpressHosting')}}"
                                                           class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                                           data-toggle="collapse" data-target="#collapse2"
                                                           aria-expanded="false">Web Hosting<i
                                                                class="icon-download-1"></i> </a>
                                                        <ul id="collapse2" class="collapse"
                                                            data-parent="#accordionMenuMobile">
                                                            <li>
                                                                <a href="{{route('getWordpressHosting')}}"><i
                                                                        class="icon-wordpress-logo"></i>WordPress
                                                                    Hosting </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('getHostingLinux')}}"><i
                                                                        class="icon-linux"></i>Hosting Linux </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('getHostingWindows')}}"><i
                                                                        class="icon-windows-8"></i>Hosting Windows </a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end header -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
