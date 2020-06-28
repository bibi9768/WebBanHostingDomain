<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" type="image/png"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Tên miền, Web Hosting, Email, VPS &amp; Dịch vụ lưu trữ Website Việt Nam</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=vietnamese">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{asset('css/sweetalert.css')}}" rel="stylesheet"/>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular-sanitize.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
{{--    <script--}}
{{--        src="https://hostvn.net/wp-content/themes/v9/assets/js/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js"></script>--}}
    <script src="{{asset('js/sweetalert.js')}}"></script>

    <meta name="description"
          content="Nhà cung cấp Tên miền, Web Hosting, Email, VPS &amp; Dịch vụ lưu trữ website Việt Nam với 13 năm uy tín hoạt động và đang phục vụ hơn 40k khách hàng tin dùng"/>
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="{{route('getHomePage')}}/>
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Tên miền, Web Hosting, Email, VPS &amp; Dịch vụ lưu trữ Website Việt Nam"/>
    <meta property="og:description"
          content="Nhà cung cấp Tên miền, Web Hosting, Email, VPS &amp; Dịch vụ lưu trữ website Việt Nam với 13 năm uy tín hoạt động và đang phục vụ hơn 40k khách hàng tin dùng"/>
    <meta property="og:url" content="https://thienpnh.tk"/>
    <meta property="og:site_name" content="thienpnh.tk"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description"
          content="Nhà cung cấp Tên miền, Web Hosting, Email, VPS &amp; Dịch vụ lưu trữ website Việt Nam với 13 năm uy tín hoạt động và đang phục vụ hơn 40k khách hàng tin dùng"/>
    <meta name="twitter:title" content="Tên miền, Web Hosting, Email, VPS &amp; Dịch vụ lưu trữ Website Việt Nam"/>
    <meta name="twitter:site" content="@HTVietNam"/>
    <meta name="twitter:image"
          content="{{asset('img/logo-htvietnam-blue.svg')}}"/>
    <meta name="twitter:creator" content="@HTVietNam"/>

    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
          href='{{asset('css/style.min9dff.css?ver=5.3.2')}}' type='text/css' media='all'/>
    <link rel='stylesheet' id='wp-postratings-css'
          href='{{asset('css/postratings-cssc05e.css?ver=1.87')}}' type='text/css' media='all'/>
    <link rel='stylesheet' id='owl-css'
          href='{{asset('css/owl.carousel.min9dff.css?ver=5.3.2')}}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='owl-theme-css'
          href='{{asset('css/owl.theme.default.min9dff.css?ver=5.3.2')}}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='main-css' href='{{asset('css/app9dff.css')}}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='moon-css' href='{{asset('css/style9dff.css?ver=5.3.2')}}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='elementor-icons-css'
          href='{{asset('css/elementor-icons.mindeba.css?ver=5.5.0')}}\'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='elementor-animations-css'
          href='{{asset('css/animations.min4dc3.css?ver=2.8.2')}}\' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='elementor-frontend-css'
          href='{{asset('css/frontend.min4dc3.css?ver=2.8.2')}}\' type='text/css' media='all'/>
    <link rel='stylesheet' id='elementor-global-css'
          href='{{asset('css/global5365.css?ver=1578103919')}}\' type='text/css' media='all'/>
    <link rel='stylesheet' id='google-fonts-1-css'
          href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=vietnamese&amp;ver=5.3.2'
          type='text/css' media='all'/>
    <script type='text/javascript' src='{{asset('js/jquery4a5f.js?ver=1.12.4-wp')}}'></script>
    <script type='text/javascript' src='{{asset('js/jquery-migrate.min330a.js?ver=1.4.1')}}'></script>
    <link rel='shortlink' href='{{route('getHomePage')}}'/>
    <script type="text/javascript">
        (function (w, d, t, u, n, a, m) {
            w['MauticTrackingObject'] = n;
            w[n] = w[n] || function () {
                (w[n].q = w[n].q || []).push(arguments)
            }, a = d.createElement(t),
                m = d.getElementsByTagName(t)[0];
            a.async = 1;
            a.src = u;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'js/mtc.js', 'mt');

        mt('send', 'pageview');
    </script>
</head>
<body id="myAppBody" class="home page-template-default page page-id-8 elementor-default elementor-page elementor-page-8"
      ng-app="myApp" ng-controller="MainController" ng-cloak="">
<div data-elementor-type="wp-post" data-elementor-id="8" class="elementor elementor-8" data-elementor-settings="[]">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">
            @include('user.header1')

            @yield('content')

            <section
                class="elementor-element elementor-element-1f76145 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                data-id="1f76145" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div
                            class="elementor-element elementor-element-e01a065 elementor-column elementor-col-100 elementor-top-column"
                            data-id="e01a065" data-element_type="column">
                            <div class="elementor-column-wrap  elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    @include('user.footer')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<script type='text/javascript' src='{{asset('js/postratings-jsc05e.js?ver=1.87')}}'></script>
<script type='text/javascript' src='{{asset('js/modules9dff.js?ver=5.3.2')}}'></script>
<script type='text/javascript' src='{{asset('js/app9dff.js')}}'></script>
<script type='text/javascript' src='{{asset('js/wp-embed.min9dff.js?ver=5.3.2')}}'></script>
<script type='text/javascript'
        src='{{asset('js/frontend-modules.min4dc3.js?ver=2.8.2')}}'></script>
<script type='text/javascript' src='{{asset('js/position.mine899.js?ver=1.11.4')}}'></script>
<script type='text/javascript'
        src='{{asset('js/dialog.minfe9d.js?ver=4.7.3')}}'></script>
<script type='text/javascript'
        src='{{asset('js/waypoints.min05da.js?ver=4.0.2')}}'></script>
<script type='text/javascript'
        src='{{asset('js/swiper.min4f24.js?ver=4.4.6')}}'></script>

<script type='text/javascript' src='{{asset('js/frontend.min4dc3.js?ver=2.8.2')}}'></script>

<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""
             src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/973684836/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>
</body>
</html>
