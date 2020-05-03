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
                                                            <li>
                                                                <a href="#"><i
                                                                        class="icon-question-mark"></i><span>Trợ giúp</span></a>
                                                            </li>

                                                            <li>
                                                                <a href="{{route('getSignInPage')}}"><i
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
                                                    <img src="{{asset('img/logo-hostvn-blue.svg')}}"
                                                         class="logo logo-blue"
                                                         onclick="location.href='{{route('getHomePage')}}'">
                                                    <img src="{{asset('img/logo-hostvn-white.svg')}}"
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
                                                                                                <a href="https://manage.hostvn.net/cart.php?a=add&amp;domain=register&amp;currency=2">
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
                                                                                            <li>
                                                                                                <a href="https://manage.hostvn.net/clientarea.php?action=domains&amp;currency=2">
                                                                                                    <i class="icon-calendar-with-a-clock-time-tools"></i>
                                                                                                    <div
                                                                                                        class="menu-text">
                                                                                                        <h3>Gia hạn tên
                                                                                                            miền </h3>
                                                                                                        <br>
                                                                                                        Được đăng ký bởi
                                                                                                        HTVIETNAM
                                                                                                    </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            {{--                                                                                            <li>--}}
                                                                                            {{--                                                                                                <a href="https://manage.hostvn.net/cart.php?type=domain">--}}
                                                                                            {{--                                                                                                    <i class="icon-transfer"></i>--}}
                                                                                            {{--                                                                                                    <div--}}
                                                                                            {{--                                                                                                        class="menu-text">--}}
                                                                                            {{--                                                                                                        <h3>Chuyển đổi--}}
                                                                                            {{--                                                                                                            tên--}}
                                                                                            {{--                                                                                                            miền </h3>--}}
                                                                                            {{--                                                                                                        <br>--}}
                                                                                            {{--                                                                                                        Giảm ngay 20%--}}
                                                                                            {{--                                                                                                        khi chuyển tên--}}
                                                                                            {{--                                                                                                        miền về--}}
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
                                                                                                <a href="ten-mien.html">
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
                                                                                            {{--                                                                                            <li>--}}
                                                                                            {{--                                                                                                <a href="https://kb.hostvn.net/ten-mien-1/">--}}
                                                                                            {{--                                                                                                    <i class="icon-idea"></i>--}}
                                                                                            {{--                                                                                                    <div--}}
                                                                                            {{--                                                                                                        class="menu-text">--}}
                                                                                            {{--                                                                                                        <h3>Hướng dẫn sử--}}
                                                                                            {{--                                                                                                            dụng tên--}}
                                                                                            {{--                                                                                                            miền </h3>--}}
                                                                                            {{--                                                                                                        <br>--}}
                                                                                            {{--                                                                                                        Tài liệu hướng--}}
                                                                                            {{--                                                                                                        dẫn sử dụng tên--}}
                                                                                            {{--                                                                                                        miền--}}
                                                                                            {{--                                                                                                    </div>--}}
                                                                                            {{--                                                                                                </a>--}}
                                                                                            {{--                                                                                            </li>--}}
                                                                                            {{--                                                                                            <li>--}}
                                                                                            {{--                                                                                                <a href="https://blog.hostvn.net/chia-se/7-tieu-chi-de-lua-chon-ten-mien-dep-nhat.html">--}}
                                                                                            {{--                                                                                                    <i class="icon-help"></i>--}}
                                                                                            {{--                                                                                                    <div--}}
                                                                                            {{--                                                                                                        class="menu-text">--}}
                                                                                            {{--                                                                                                        <h3>Tư vấn chọn--}}
                                                                                            {{--                                                                                                            tên--}}
                                                                                            {{--                                                                                                            miền </h3>--}}
                                                                                            {{--                                                                                                        <br>--}}
                                                                                            {{--                                                                                                        Chia sẻ kinh--}}
                                                                                            {{--                                                                                                        nghiệm chọn tên--}}
                                                                                            {{--                                                                                                        miền--}}
                                                                                            {{--                                                                                                    </div>--}}
                                                                                            {{--                                                                                                </a>--}}
                                                                                            {{--                                                                                            </li>--}}
                                                                                            {{--                                                                                            <li>--}}
                                                                                            {{--                                                                                                <a href="ten-mien/thoa-thuan-dang-ky-ten-mien/index.html">--}}
                                                                                            {{--                                                                                                    <i class="icon-law"></i>--}}
                                                                                            {{--                                                                                                    <div--}}
                                                                                            {{--                                                                                                        class="menu-text">--}}
                                                                                            {{--                                                                                                        <h3>Quy định sử--}}
                                                                                            {{--                                                                                                            dụng </h3>--}}
                                                                                            {{--                                                                                                        <br>--}}
                                                                                            {{--                                                                                                        Những quy định--}}
                                                                                            {{--                                                                                                        cần biết khi sử--}}
                                                                                            {{--                                                                                                        dụng tên miền--}}
                                                                                            {{--                                                                                                    </div>--}}
                                                                                            {{--                                                                                                </a>--}}
                                                                                            {{--                                                                                            </li>--}}
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="menu-box-hinfo">
                                                                            <a href="ten-mien270e.html?p=domain-combo">
                                                                                <img src="{{asset('img/ComboX1.png')}}">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <a href="web-hosting/index.html"
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
                                                                                            {{--                                                                                            <li>--}}
                                                                                            {{--                                                                                                <a href="web-hosting/hosting-gia-re/index.html">--}}
                                                                                            {{--                                                                                                    <i class="icon-list"></i>--}}
                                                                                            {{--                                                                                                    <div--}}
                                                                                            {{--                                                                                                        class="menu-text">--}}
                                                                                            {{--                                                                                                        <h3>Hosting Giá--}}
                                                                                            {{--                                                                                                            Rẻ </h3>--}}
                                                                                            {{--                                                                                                        <br>--}}
                                                                                            {{--                                                                                                        Đáp ứng nhu cầu--}}
                                                                                            {{--                                                                                                        cơ bản cho mã--}}
                                                                                            {{--                                                                                                        nguồn PHP--}}
                                                                                            {{--                                                                                                    </div>--}}
                                                                                            {{--                                                                                                </a>--}}
                                                                                            {{--                                                                                            </li>--}}
                                                                                            {{--                                                                                            <li>--}}
                                                                                            {{--                                                                                                <a href="transfer/hosting-migration.html">--}}
                                                                                            {{--                                                                                                    <i class="icon-transfer"></i>--}}
                                                                                            {{--                                                                                                    <div--}}
                                                                                            {{--                                                                                                        class="menu-text">--}}
                                                                                            {{--                                                                                                        <h3>Chuyển--}}
                                                                                            {{--                                                                                                            Hosting về--}}
                                                                                            {{--                                                                                                            HTVIETNAM </h3>--}}
                                                                                            {{--                                                                                                        <br>--}}
                                                                                            {{--                                                                                                        Giảm ngay 20%--}}
                                                                                            {{--                                                                                                        khi chuyển--}}
                                                                                            {{--                                                                                                        Hosting về--}}
                                                                                            {{--                                                                                                        HTVIETNAM--}}
                                                                                            {{--                                                                                                    </div>--}}
                                                                                            {{--                                                                                                </a>--}}
                                                                                            {{--                                                                                            </li>--}}
                                                                                        </ul>
                                                                                    </div>
                                                                                    {{--                                                                                    <div class="col-md-6 hosta-col">--}}
                                                                                    {{--                                                                                        <h2>Reseller Hosting</h2>--}}
                                                                                    {{--                                                                                        <ul>--}}
                                                                                    {{--                                                                                            <li>--}}
                                                                                    {{--                                                                                                <a href="reseller-hosting/reseller-hosting-ssd/index.html">--}}
                                                                                    {{--                                                                                                    <i class="icon-server-1"></i>--}}
                                                                                    {{--                                                                                                    <div--}}
                                                                                    {{--                                                                                                        class="menu-text">--}}
                                                                                    {{--                                                                                                        <h3>Reseller--}}
                                                                                    {{--                                                                                                            Hosting--}}
                                                                                    {{--                                                                                                            <span--}}
                                                                                    {{--                                                                                                                class="label-spotlight">SSD</span>--}}
                                                                                    {{--                                                                                                        </h3>--}}
                                                                                    {{--                                                                                                        <br>--}}
                                                                                    {{--                                                                                                        Nhanh hơn với--}}
                                                                                    {{--                                                                                                        100% ổ SSD--}}
                                                                                    {{--                                                                                                        Enterprise--}}
                                                                                    {{--                                                                                                    </div>--}}
                                                                                    {{--                                                                                                </a>--}}
                                                                                    {{--                                                                                            </li>--}}
                                                                                    {{--                                                                                            <li>--}}
                                                                                    {{--                                                                                                <a href="reseller-hosting/reseller-linux/index.html">--}}
                                                                                    {{--                                                                                                    <i class="icon-linux"></i>--}}
                                                                                    {{--                                                                                                    <div--}}
                                                                                    {{--                                                                                                        class="menu-text">--}}
                                                                                    {{--                                                                                                        <h3>Reseller--}}
                                                                                    {{--                                                                                                            Linux--}}
                                                                                    {{--                                                                                                            (cPanel) </h3>--}}
                                                                                    {{--                                                                                                        <br>--}}
                                                                                    {{--                                                                                                        Tự khởi tạo và--}}
                                                                                    {{--                                                                                                        quản lý Hosting--}}
                                                                                    {{--                                                                                                        với cPanel--}}
                                                                                    {{--                                                                                                    </div>--}}
                                                                                    {{--                                                                                                </a>--}}
                                                                                    {{--                                                                                            </li>--}}
                                                                                    {{--                                                                                            <li>--}}
                                                                                    {{--                                                                                                <a href="reseller-hosting/reseller-windows/index.html">--}}
                                                                                    {{--                                                                                                    <i class="icon-windows-8"></i>--}}
                                                                                    {{--                                                                                                    <div--}}
                                                                                    {{--                                                                                                        class="menu-text">--}}
                                                                                    {{--                                                                                                        <h3>Reseller--}}
                                                                                    {{--                                                                                                            Windows--}}
                                                                                    {{--                                                                                                            (Plesk) </h3>--}}
                                                                                    {{--                                                                                                        <br>--}}
                                                                                    {{--                                                                                                        Khởi tạo và quản--}}
                                                                                    {{--                                                                                                        lý tài khoản--}}
                                                                                    {{--                                                                                                        Hosting với--}}
                                                                                    {{--                                                                                                        Plesk--}}
                                                                                    {{--                                                                                                    </div>--}}
                                                                                    {{--                                                                                                </a>--}}
                                                                                    {{--                                                                                            </li>--}}
                                                                                    {{--                                                                                            <li>--}}
                                                                                    {{--                                                                                                <a href="reseller-hosting/reseller-gia-re/index.html">--}}
                                                                                    {{--                                                                                                    <i class="icon-server-1"></i>--}}
                                                                                    {{--                                                                                                    <div--}}
                                                                                    {{--                                                                                                        class="menu-text">--}}
                                                                                    {{--                                                                                                        <h3>Reseller Giá--}}
                                                                                    {{--                                                                                                            Rẻ--}}
                                                                                    {{--                                                                                                            (DirectAdmin) </h3>--}}
                                                                                    {{--                                                                                                        <br>--}}
                                                                                    {{--                                                                                                        Khởi tạo và quản--}}
                                                                                    {{--                                                                                                        lý Hosting với--}}
                                                                                    {{--                                                                                                        DirectAdmin--}}
                                                                                    {{--                                                                                                    </div>--}}
                                                                                    {{--                                                                                                </a>--}}
                                                                                    {{--                                                                                            </li>--}}
                                                                                    {{--                                                                                            <li>--}}
                                                                                    {{--                                                                                                <a href="https://kb.hostvn.net/web-hosting-2/">--}}
                                                                                    {{--                                                                                                    <i class="icon-idea"></i>--}}
                                                                                    {{--                                                                                                    <div--}}
                                                                                    {{--                                                                                                        class="menu-text">--}}
                                                                                    {{--                                                                                                        <h3>Hướng dẫn sử--}}
                                                                                    {{--                                                                                                            dụng Web--}}
                                                                                    {{--                                                                                                            Hosting </h3>--}}
                                                                                    {{--                                                                                                        <br>--}}
                                                                                    {{--                                                                                                        Những điều cần--}}
                                                                                    {{--                                                                                                        biết khi sử dụng--}}
                                                                                    {{--                                                                                                        Hosting--}}
                                                                                    {{--                                                                                                    </div>--}}
                                                                                    {{--                                                                                                </a>--}}
                                                                                    {{--                                                                                            </li>--}}
                                                                                    {{--                                                                                        </ul>--}}
                                                                                    {{--                                                                                    </div>--}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="menu-box-hinfo">
                                                                            <a href="web-hosting/hosting-linuxdce2.html?p=hl-combo">
                                                                                <img src="{{asset('img/ComboX2.png')}}">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        <!-- <li>
                                                                <a href="email.html"
                                                                   class="a-inner-bottom-arrow"><i
                                                                        class="icon-download-1 arrow-down"></i>Email                                            </a>
                                                                <div class="drop-down-wrap">
                                                                    <div class="menu-box-wrap">
                                                                        <div class="menu-box">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col-md-6 hosta-col">
                                                                                        <h2>Dịch vụ Email</h2>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="email/email-hosting.html">
                                                                                                    <i class="icon-diagram"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Email Business                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Sử dụng Email chuyên nghiệp với tên miền riêng                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="email/gsuite.html">
                                                                                                    <i class="icon-gmail"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Email Gsuite                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Giải pháp Email Doanh Nghiệp được cung cấp bởi Google                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="col-md-6 hosta-col">
                                                                                        <h2>Thông tin cần biết</h2>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="https://kb.hostvn.net/email-services-7/">
                                                                                                    <i class="icon-idea"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Hướng dẫn sử dụng                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Những điều cần biết khi sử dụng Email                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="quy-dinh-chong-thu-rac.html">
                                                                                                    <i class="icon-shield"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Quy định chống thư rác                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Bạn cần lưu ý những điều này khi sử dụng Email                                                                                            </div>
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
                                                                <a href="may-chu/index.html"
                                                                   class="a-inner-bottom-arrow"><i
                                                                        class="icon-download-1 arrow-down"></i>Máy chủ                                            </a>
                                                                <div class="drop-down-wrap">
                                                                    <div class="menu-box-wrap">
                                                                        <div class="menu-box">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col-md-6 hosta-col">
                                                                                        <h2>Cloud Services</h2>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="cloud/cloud-vps/index.html">
                                                                                                    <i class="icon-cloud"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Cloud VPS                                                                                                    <span class="label-spotlight">SSD</span>                                                                                                </h3>
                                                                                                        <br>
                                                                                                        Máy chủ ảo SSD tốc độ nhanh gấp 10 lần                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="cloud/vps-gia-re/index.html">
                                                                                                    <i class=" icon-cloud-computing"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>VPS Giá rẻ                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Đáp ứng nhu cầu lưu trữ lớn, chi phí tiết kiệm                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="cloud/content-delivery-network/index.html">
                                                                                                    <i class="icon-server-4"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Dịch vụ CDN                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Giải pháp tối ưu thời gian và chi phí nhân sự IT                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="may-chu/backup-du-lieu.html">
                                                                                                    <i class="icon-calendar-with-a-clock-time-tools"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Backup dữ liệu                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Giải pháp sao lưu dữ liệu cho Doanh nghiệp                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="transfer/cloud-migration.html">
                                                                                                    <i class="icon-transfer"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Chuyển Cloud VPS về HTVIETNAM                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Giảm 20% khi chuyển Cloud VPS về HTVIETNAM                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="col-md-6 hosta-col">
                                                                                        <h2>SERVERS</h2>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="may-chu/quan-tri-may-chu/index.html">
                                                                                                    <i class="icon-server-3"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Quản trị máy chủ                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Giải pháp tối ưu thời gian và chi phí nhân sự IT                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="may-chu/cho-thue-may-chu/index.html">
                                                                                                    <i class="icon-server"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Thuê máy chủ                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Với chi phí hợp lý cấu hình mạnh mẽ                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="may-chu/thue-cho-dat-may-chu/index.html">
                                                                                                    <i class="icon-maps-and-flags"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Thuê chỗ đặt máy chủ                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Với nhiều lựa chọn tại các DC lớn ở Việt Nam                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="https://kb.hostvn.net/vps-may-chu-ao-11/">
                                                                                                    <i class="icon-idea"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Hướng dẫn sử dụng máy chủ                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Những điều cần biết khi quản trị máy chủ                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="https://manage.hostvn.net/contact.php">
                                                                                                    <i class="icon-help"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Tư vấn lựa chọn máy chủ                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Giúp KH dễ dàng lựa chọn máy chủ phù hợp                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="menu-box-hinfo">
                                                                            <a href="transfer/web-hosting.html">
                                                                                <img src="{{asset('img/ChuyenNCC.png')}}">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <a href="phan-mem/index.html"
                                                                   class="a-inner-bottom-arrow"><i
                                                                        class="icon-download-1 arrow-down"></i>Phần mềm                                            </a>
                                                                <div class="drop-down-wrap">
                                                                    <div class="menu-box-wrap">
                                                                        <div class="menu-box">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col-md-6 hosta-col">
                                                                                        <h2>Phần mềm máy chủ</h2>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="phan-mem/cpanel/index.html">
                                                                                                    <i class="icon-law"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Bản quyền cPanel/WHM                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Ứng dụng quản lý Web Server phổ biến nhất                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="phan-mem/plesk/index.html">
                                                                                                    <i class="icon-law"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Bản quyền Plesk                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Ứng dụng quản lý Web Server cho HĐH Windows                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="phan-mem/directadmin/index.html">
                                                                                                    <i class="icon-law"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Bản quyền DirectAdmin                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Ứng dụng quản lý Web Server đơn giản dễ sử dụng                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="phan-mem/cloudlinux/index.html">
                                                                                                    <i class="icon-law"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Bản quyền CloudLinux OS                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Ngăn chặn 100% nguy cơ tấn công Local-Attack                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="phan-mem/litespeed/index.html">
                                                                                                    <i class="icon-law"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Bản quyền LiteSpeed WebServer                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Tăng tốc độ xử lý Web Server lên gấp 6 lần                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="col-md-6 hosta-col">
                                                                                        <h2>Phần mềm bảo mật</h2>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="phan-mem/chung-thuc-so-ssl/index.html">
                                                                                                    <i class="icon-law"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Chứng chỉ số SSL                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        An toàn cho khách hàng và website của bạn                                                                                            </div>
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
                                                                <a href="doi-tac/dai-ly-kinh-doanh.html"
                                                                   class="a-inner-bottom-arrow"><i
                                                                        class="icon-download-1 arrow-down"></i>Đối tác                                            </a>
                                                                <div class="drop-down-wrap">
                                                                    <div class="menu-box-wrap">
                                                                        <div class="menu-box">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col-md-6 hosta-col">
                                                                                        <h2>Hợp tác kinh doanh</h2>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="https://manage.hostvn.net/contact.php">
                                                                                                    <i class="icon-help"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Đăng ký làm Đối tác                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Hợp tác kinh doanh và cùng chia sẻ lợi nhuận                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="doi-tac/dai-ly-kinh-doanh/index.html">
                                                                                                    <i class="icon-piggy-bank"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Bảng giá chiết khấu                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Mức chiết khấu hấp dẫn lên đến 35%                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="https://manage.hostvn.net/">
                                                                                                    <i class="icon-money"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Nạp tiền ký quỹ                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Nạp tiền vào tài khoản Đối tác của bạn                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="col-md-6 hosta-col">
                                                                                        <h2>Cộng tác viên - Affiliates</h2>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="https://manage.hostvn.net/register.php?currency=2&amp;_ga=1.93894875.795291403.1476075352">
                                                                                                    <i class="icon-survey"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Đăng ký Affiliates                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Kiếm tiền khi giới thiệu khách hàng cho HTVIETNAM                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="doi-tac/chinh-sach-affiliates.html">
                                                                                                    <i class="icon-law"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Chính sách Affiliates                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Chính sách dành cho hội viên Affiliates                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="transfer.html">
                                                                                                    <i class="icon-pencil"></i>
                                                                                                    <div class="menu-text">
                                                                                                        <h3>Chuyển dịch vụ về HTVIETNAM                                                                                                                                                                                                    </h3>
                                                                                                        <br>
                                                                                                        Những ưu đãi hấp dẫn khi chuyển dịch vụ về HTVIETNAM                                                                                            </div>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-7 vertical-center tablet"
                                                     ng-init="domainSearchMobile=false">
                                                    <div class="center text-align-center">
                                                        <a class="menu-icon" data-toggle="collapse"
                                                           data-target="#navMobile"
                                                           aria-controls="navMobile"
                                                           aria-expanded="false" ng-click="disableScrollBar()">
                                                            <span class="line"></span>
                                                            <span class="line"></span>
                                                            <span class="line"></span>
                                                        </a>

                                                        <i class="icon-magnifier option-icon icon-hover"
                                                           ng-click="openDomainSearchMobile()"></i>

                                                        <a href="https://manage.hostvn.net/cart.php?a=view"
                                                           target="_blank">
                                                            <i class="icon-commerce-and-shopping cart-icon icon-hover"></i>
                                                        </a>
                                                        <a href="https://blog.hostvn.net/khuyen-mai" target="_blank">
                                                            <i class="icon-notifications-button option-icon icon-hover">
                                                                <span class="red-dot"></span>
                                                            </i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="collapse top-menu-mobile" id="navMobile">
                                                <ul id="accordionMenuMobile">
                                                    <li>
                                                        <a href="ten-mien.html"
                                                           class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                                           data-toggle="collapse" data-target="#collapse1"
                                                           aria-expanded="false">Tên miền<i
                                                                class="icon-download-1"></i> </a>
                                                        <ul id="collapse1" class="collapse"
                                                            data-parent="#accordionMenuMobile">
                                                            <li>
                                                                <a href="ten-mien0668.html?p=domain-pricing"><i
                                                                        class="icon-dollar-symbol"></i>Bảng giá Tên miền
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="https://manage.hostvn.net/cart.php?a=add&amp;domain=register&amp;currency=2"><i
                                                                        class="icon-commerce-and-shopping"></i>Đăng ký
                                                                    tên miền </a>
                                                            </li>
                                                            <li>
                                                                <a href="https://manage.hostvn.net/clientarea.php?action=domains&amp;currency=2"><i
                                                                        class="icon-calendar-with-a-clock-time-tools"></i>Gia
                                                                    hạn tên miền </a>
                                                            </li>
                                                            {{--                                                            <li>--}}
                                                            {{--                                                                <a href="https://manage.hostvn.net/cart.php?type=domain"><i--}}
                                                            {{--                                                                        class="icon-transfer"></i>Chuyển đổi tên miền                                                    </a>--}}
                                                            {{--                                                            </li>--}}
                                                            <li>
                                                                <a href="ten-mien.html"><i
                                                                        class="icon-magnifier"></i>Tra cứu tên miền </a>
                                                            </li>
                                                            <li>
                                                                <a href="https://kb.hostvn.net/ten-mien-1/"><i
                                                                        class="icon-idea"></i>Hướng dẫn sử dụng tên miền
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="https://blog.hostvn.net/chia-se/7-tieu-chi-de-lua-chon-ten-mien-dep-nhat.html"><i
                                                                        class="icon-help"></i>Tư vấn chọn tên miền </a>
                                                            </li>
                                                            <li>
                                                                <a href="ten-mien/thoa-thuan-dang-ky-ten-mien/index.html"><i
                                                                        class="icon-law"></i>Quy định sử dụng </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="web-hosting/index.html"
                                                           class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                                           data-toggle="collapse" data-target="#collapse2"
                                                           aria-expanded="false">Web Hosting<i
                                                                class="icon-download-1"></i> </a>
                                                        <ul id="collapse2" class="collapse"
                                                            data-parent="#accordionMenuMobile">
                                                            <li>
                                                                <a href="web-hosting/wordpress-hosting.html"><i
                                                                        class="icon-wordpress-logo"></i>WordPress
                                                                    Hosting </a>
                                                            </li>
                                                            <li>
                                                                <a href="web-hosting/hosting-linux.html"><i
                                                                        class="icon-linux"></i>Hosting Linux </a>
                                                            </li>
                                                            <li>
                                                                <a href="web-hosting/hosting-windows/index.html"><i
                                                                        class="icon-windows-8"></i>Hosting Windows </a>
                                                            </li>
                                                            {{--                                                            <li>--}}
                                                            {{--                                                                <a href="web-hosting/hosting-gia-re/index.html"><i--}}
                                                            {{--                                                                        class="icon-list"></i>Hosting Giá Rẻ </a>--}}
                                                            {{--                                                            </li>--}}
                                                            {{--                                                            <li>--}}
                                                            {{--                                                                <a href="transfer/hosting-migration.html"><i--}}
                                                            {{--                                                                        class="icon-transfer"></i>Chuyển Hosting về--}}
                                                            {{--                                                                    HTVIETNAM </a>--}}
                                                            {{--                                                            </li>--}}
                                                            {{--                                                            <li>--}}
                                                            {{--                                                                <a href="reseller-hosting/reseller-hosting-ssd/index.html"><i--}}
                                                            {{--                                                                        class="icon-server-1"></i>Reseller Hosting </a>--}}
                                                            {{--                                                            </li>--}}
                                                            {{--                                                            <li>--}}
                                                            {{--                                                                <a href="reseller-hosting/reseller-linux/index.html"><i--}}
                                                            {{--                                                                        class="icon-linux"></i>Reseller Linux (cPanel)--}}
                                                            {{--                                                                </a>--}}
                                                            {{--                                                            </li>--}}
                                                            {{--                                                            <li>--}}
                                                            {{--                                                                <a href="reseller-hosting/reseller-windows/index.html"><i--}}
                                                            {{--                                                                        class="icon-windows-8"></i>Reseller Windows--}}
                                                            {{--                                                                    (Plesk) </a>--}}
                                                            {{--                                                            </li>--}}
                                                            {{--                                                            <li>--}}
                                                            {{--                                                                <a href="reseller-hosting/reseller-gia-re/index.html"><i--}}
                                                            {{--                                                                        class="icon-server-1"></i>Reseller Giá Rẻ--}}
                                                            {{--                                                                    (DirectAdmin) </a>--}}
                                                            {{--                                                            </li>--}}
                                                            {{--                                                            <li>--}}
                                                            {{--                                                                <a href="https://kb.hostvn.net/web-hosting-2/"><i--}}
                                                            {{--                                                                        class="icon-idea"></i>Hướng dẫn sử dụng Web--}}
                                                            {{--                                                                    Hosting </a>--}}
                                                            {{--                                                            </li>--}}
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="email.html"
                                                           class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                                           data-toggle="collapse" data-target="#collapse7"
                                                           aria-expanded="false">Email<i
                                                                class="icon-download-1"></i> </a>
                                                        <ul id="collapse7" class="collapse"
                                                            data-parent="#accordionMenuMobile">
                                                            <li>
                                                                <a href="email/email-hosting.html"><i
                                                                        class="icon-diagram"></i>Email Business </a>
                                                            </li>
                                                            <li>
                                                                <a href="email/gsuite.html"><i
                                                                        class="icon-gmail"></i>Email Gsuite </a>
                                                            </li>
                                                            <li>
                                                                <a href="https://kb.hostvn.net/email-services-7/"><i
                                                                        class="icon-idea"></i>Hướng dẫn sử dụng </a>
                                                            </li>
                                                            <li>
                                                                <a href="quy-dinh-chong-thu-rac.html"><i
                                                                        class="icon-shield"></i>Quy định chống thư rác
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="may-chu/index.html"
                                                           class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                                           data-toggle="collapse" data-target="#collapse8"
                                                           aria-expanded="false">Máy chủ<i
                                                                class="icon-download-1"></i> </a>
                                                        <ul id="collapse8" class="collapse"
                                                            data-parent="#accordionMenuMobile">
                                                            <li>
                                                                <a href="cloud/cloud-vps/index.html"><i
                                                                        class="icon-cloud"></i>Cloud VPS </a>
                                                            </li>
                                                            <li>
                                                                <a href="cloud/vps-gia-re/index.html"><i
                                                                        class=" icon-cloud-computing"></i>VPS Giá rẻ
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="cloud/content-delivery-network/index.html"><i
                                                                        class="icon-server-4"></i>Dịch vụ CDN </a>
                                                            </li>
                                                            <li>
                                                                <a href="may-chu/backup-du-lieu.html"><i
                                                                        class="icon-calendar-with-a-clock-time-tools"></i>Backup
                                                                    dữ liệu </a>
                                                            </li>
                                                            <li>
                                                                <a href="transfer/cloud-migration.html"><i
                                                                        class="icon-transfer"></i>Chuyển Cloud VPS về
                                                                    HTVIETNAM </a>
                                                            </li>
                                                            <li>
                                                                <a href="may-chu/quan-tri-may-chu/index.html"><i
                                                                        class="icon-server-3"></i>Quản trị máy chủ </a>
                                                            </li>
                                                            <li>
                                                                <a href="may-chu/cho-thue-may-chu/index.html"><i
                                                                        class="icon-server"></i>Thuê máy chủ </a>
                                                            </li>
                                                            <li>
                                                                <a href="may-chu/thue-cho-dat-may-chu/index.html"><i
                                                                        class="icon-maps-and-flags"></i>Thuê chỗ đặt máy
                                                                    chủ </a>
                                                            </li>
                                                            <li>
                                                                <a href="https://kb.hostvn.net/vps-may-chu-ao-11/"><i
                                                                        class="icon-idea"></i>Hướng dẫn sử dụng máy chủ
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="https://manage.hostvn.net/contact.php"><i
                                                                        class="icon-help"></i>Tư vấn lựa chọn máy chủ
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="phan-mem/index.html"
                                                           class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                                           data-toggle="collapse" data-target="#collapse9"
                                                           aria-expanded="false">Phần mềm<i
                                                                class="icon-download-1"></i> </a>
                                                        <ul id="collapse9" class="collapse"
                                                            data-parent="#accordionMenuMobile">
                                                            <li>
                                                                <a href="phan-mem/cpanel/index.html"><i
                                                                        class="icon-law"></i>Bản quyền cPanel/WHM </a>
                                                            </li>
                                                            <li>
                                                                <a href="phan-mem/plesk/index.html"><i
                                                                        class="icon-law"></i>Bản quyền Plesk </a>
                                                            </li>
                                                            <li>
                                                                <a href="phan-mem/directadmin/index.html"><i
                                                                        class="icon-law"></i>Bản quyền DirectAdmin </a>
                                                            </li>
                                                            <li>
                                                                <a href="phan-mem/cloudlinux/index.html"><i
                                                                        class="icon-law"></i>Bản quyền CloudLinux OS
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="phan-mem/litespeed/index.html"><i
                                                                        class="icon-law"></i>Bản quyền LiteSpeed
                                                                    WebServer </a>
                                                            </li>
                                                            <li>
                                                                <a href="phan-mem/chung-thuc-so-ssl/index.html"><i
                                                                        class="icon-law"></i>Chứng chỉ số SSL </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="doi-tac/dai-ly-kinh-doanh.html"
                                                           class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                                           data-toggle="collapse" data-target="#collapse14"
                                                           aria-expanded="false">Đối tác<i
                                                                class="icon-download-1"></i> </a>
                                                        <ul id="collapse14" class="collapse"
                                                            data-parent="#accordionMenuMobile">
                                                            <li>
                                                                <a href="https://manage.hostvn.net/contact.php"><i
                                                                        class="icon-help"></i>Đăng ký làm Đối tác </a>
                                                            </li>
                                                            <li>
                                                                <a href="doi-tac/dai-ly-kinh-doanh/index.html"><i
                                                                        class="icon-piggy-bank"></i>Bảng giá chiết khấu
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="https://manage.hostvn.net/"><i
                                                                        class="icon-money"></i>Nạp tiền ký quỹ </a>
                                                            </li>
                                                            <li>
                                                                <a href="https://manage.hostvn.net/register.php?currency=2&amp;_ga=1.93894875.795291403.1476075352"><i
                                                                        class="icon-survey"></i>Đăng ký Affiliates </a>
                                                            </li>
                                                            <li>
                                                                <a href="doi-tac/chinh-sach-affiliates.html"><i
                                                                        class="icon-law"></i>Chính sách Affiliates </a>
                                                            </li>
                                                            <li>
                                                                <a href="transfer.html"><i
                                                                        class="icon-pencil"></i>Chuyển dịch vụ về
                                                                    HTVIETNAM </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                                    <div class="top-option-wrap desktop">--}}
                                    {{--                                        --}}{{--                                        <div class="container">--}}
                                    {{--                                        --}}{{--                                            <div class="row">--}}
                                    {{--                                        --}}{{--                                                <div class="col-lg-10">--}}
                                    {{--                                        --}}{{--                                                    <div class="domain-search-box" ng-init="domain=''">--}}
                                    {{--                                        --}}{{--                                                        <input type="text" placeholder="" ng-model="domain" value=""--}}
                                    {{--                                        --}}{{--                                                               my-enter="domainChecker()">--}}
                                    {{--                                        --}}{{--                                                        <button type="button" class="button ripple-magic" ng-click="domainChecker()">--}}
                                    {{--                                        --}}{{--                                                            Kiểm tra Tên miền--}}
                                    {{--                                        --}}{{--                                                        </button>--}}
                                    {{--                                        --}}{{--                                                    </div>--}}
                                    {{--                                        --}}{{--                                                </div>--}}
                                    {{--                                        --}}{{--                                                <div class="col-md-9 col-md-9 col-6 vertical-center tablet">--}}
                                    {{--                                        --}}{{--                                                    <img src="{{asset('img/logo-hostvn-blue.svg')}}"--}}
                                    {{--                                        --}}{{--                                                         class="logo">--}}
                                    {{--                                        --}}{{--                                                </div>--}}

                                    {{--                                        --}}{{--                                                <div class="col-lg-1 col-md-1 col-2 vertical-center">--}}
                                    {{--                                        --}}{{--                                                    <div class="center text-align-right">--}}
                                    {{--                                        --}}{{--                                                        <a href="https://blog.hostvn.net/khuyen-mai" target="_blank">--}}
                                    {{--                                        --}}{{--                                                            <i class="icon-notifications-button option-icon icon-hover">--}}
                                    {{--                                        --}}{{--                                                                <span class="red-dot"></span>--}}
                                    {{--                                        --}}{{--                                                            </i>--}}
                                    {{--                                        --}}{{--                                                        </a>--}}
                                    {{--                                        --}}{{--                                                    </div>--}}
                                    {{--                                        --}}{{--                                                </div>--}}
                                    {{--                                        --}}{{--                                                <div class="col-lg-1 col-md-1 col-2 vertical-center">--}}
                                    {{--                                        --}}{{--                                                    <div class="center text-align-right">--}}
                                    {{--                                        --}}{{--                                                        <a href="https://manage.hostvn.net/cart.php?a=view" target="_blank">--}}
                                    {{--                                        --}}{{--                                                            <i class="icon-commerce-and-shopping cart-icon bg-icon-hover"></i>--}}
                                    {{--                                        --}}{{--                                                        </a>--}}
                                    {{--                                        --}}{{--                                                    </div>--}}
                                    {{--                                        --}}{{--                                                </div>--}}
                                    {{--                                        --}}{{--                                                <div class="col-lg-1 col-md-1 col-2 vertical-center tablet">--}}
                                    {{--                                        --}}{{--                                                    <div class="center">--}}
                                    {{--                                        --}}{{--                                                        <a class="menu-icon">--}}
                                    {{--                                        --}}{{--                                                            <span class="line"></span>--}}
                                    {{--                                        --}}{{--                                                            <span class="line"></span>--}}
                                    {{--                                        --}}{{--                                                            <span class="line"></span>--}}
                                    {{--                                        --}}{{--                                                        </a>--}}
                                    {{--                                        --}}{{--                                                    </div>--}}
                                    {{--                                        --}}{{--                                                </div>--}}
                                    {{--                                        --}}{{--                                            </div>--}}
                                    {{--                                        --}}{{--                                            <div class="row desktop">--}}
                                    {{--                                        --}}{{--                                                <div class="col-lg-12">--}}
                                    {{--                                        --}}{{--                                                    <ul class="domains-suggestion">--}}
                                    {{--                                        --}}{{--                                                        <li>--}}
                                    {{--                                        --}}{{--                                                            <a href="https://manage.hostvn.net/cart.php?type=domain&amp;sld=&amp;tld=.com">--}}
                                    {{--                                        --}}{{--                                                                <img src="{{asset('img/com-1.svg')}}">--}}
                                    {{--                                        --}}{{--                                                                <span class="old-price">330K</span>--}}
                                    {{--                                        --}}{{--                                                                <span class="price">264K</span>--}}
                                    {{--                                        --}}{{--                                                            </a>--}}
                                    {{--                                        --}}{{--                                                        </li>--}}
                                    {{--                                        --}}{{--                                                        <li>--}}
                                    {{--                                        --}}{{--                                                            <a href="https://manage.hostvn.net/cart.php?type=domain&amp;sld=&amp;tld=.net">--}}
                                    {{--                                        --}}{{--                                                                <img src="{{asset('img/net-1.svg')}}">--}}
                                    {{--                                        --}}{{--                                                                <span class="old-price">319K</span>--}}
                                    {{--                                        --}}{{--                                                                <span class="price">299K</span>--}}
                                    {{--                                        --}}{{--                                                            </a>--}}
                                    {{--                                        --}}{{--                                                        </li>--}}
                                    {{--                                        --}}{{--                                                        <li>--}}
                                    {{--                                        --}}{{--                                                            <a href="https://manage.hostvn.net/cart.php?type=domain&amp;sld=&amp;tld=.vn">--}}
                                    {{--                                        --}}{{--                                                                <img src="{{asset('img/vn-1.svg')}}">--}}
                                    {{--                                        --}}{{--                                                                <span class="old-price">830K</span>--}}
                                    {{--                                        --}}{{--                                                                <span class="price">770K</span>--}}
                                    {{--                                        --}}{{--                                                            </a>--}}
                                    {{--                                        --}}{{--                                                        </li>--}}
                                    {{--                                        --}}{{--                                                        <li>--}}
                                    {{--                                        --}}{{--                                                            <a href="https://manage.hostvn.net/cart.php?type=domain&amp;sld=&amp;tld=.com.vn">--}}
                                    {{--                                        --}}{{--                                                                <img src="{{asset('img/com.vn_-1.svg')}}">--}}
                                    {{--                                        --}}{{--                                                                <span class="old-price">750K</span>--}}
                                    {{--                                        --}}{{--                                                                <span class="price">670K</span>--}}
                                    {{--                                        --}}{{--                                                            </a>--}}
                                    {{--                                        --}}{{--                                                        </li>--}}
                                    {{--                                        --}}{{--                                                        <li>--}}
                                    {{--                                        --}}{{--                                                            <a href="https://manage.hostvn.net/cart.php?type=domain&amp;sld=&amp;tld=.org">--}}
                                    {{--                                        --}}{{--                                                                <img src="{{asset('img/org.svg')}}">--}}
                                    {{--                                        --}}{{--                                                                <span class="old-price">349K</span>--}}
                                    {{--                                        --}}{{--                                                                <span class="price">280K</span>--}}
                                    {{--                                        --}}{{--                                                            </a>--}}
                                    {{--                                        --}}{{--                                                        </li>--}}
                                    {{--                                        --}}{{--                                                        <li>--}}
                                    {{--                                        --}}{{--                                                            <a href="https://manage.hostvn.net/cart.php?type=domain&amp;sld=&amp;tld=.biz">--}}
                                    {{--                                        --}}{{--                                                                <img src="{{asset('img/biz-1.svg')}}">--}}
                                    {{--                                        --}}{{--                                                                <span class="old-price">380K</span>--}}
                                    {{--                                        --}}{{--                                                                <span class="price">349K</span>--}}
                                    {{--                                        --}}{{--                                                            </a>--}}
                                    {{--                                        --}}{{--                                                        </li>--}}
                                    {{--                                        --}}{{--                                                    </ul>--}}
                                    {{--                                        --}}{{--                                                </div>--}}
                                    {{--                                        --}}{{--                                            </div>--}}
                                    {{--                                        --}}{{--                                        </div>--}}
                                    {{--                                    </div>--}}
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
