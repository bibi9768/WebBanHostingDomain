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
    <script
        src="https://hostvn.net/wp-content/themes/v9/assets/js/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{asset('js/sweetalert.js')}}"></script>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../www.googletagmanager.com/gtm5445.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N62VR9C');</script>
    <!-- End Google Tag Manager -->

    <!-- This site is optimized with the Yoast SEO Premium plugin v12.7.1 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description"
          content="Nhà cung cấp Tên miền, Web Hosting, Email, VPS &amp; Dịch vụ lưu trữ website Việt Nam với 13 năm uy tín hoạt động và đang phục vụ hơn 40k khách hàng tin dùng"/>
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="index.html"/>
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Tên miền, Web Hosting, Email, VPS &amp; Dịch vụ lưu trữ Website Việt Nam"/>
    <meta property="og:description"
          content="Nhà cung cấp Tên miền, Web Hosting, Email, VPS &amp; Dịch vụ lưu trữ website Việt Nam với 13 năm uy tín hoạt động và đang phục vụ hơn 40k khách hàng tin dùng"/>
    <meta property="og:url" content="https://hostvn.net/"/>
    <meta property="og:site_name" content="hostvn.net"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description"
          content="Nhà cung cấp Tên miền, Web Hosting, Email, VPS &amp; Dịch vụ lưu trữ website Việt Nam với 13 năm uy tín hoạt động và đang phục vụ hơn 40k khách hàng tin dùng"/>
    <meta name="twitter:title" content="Tên miền, Web Hosting, Email, VPS &amp; Dịch vụ lưu trữ Website Việt Nam"/>
    <meta name="twitter:site" content="@Hostvn"/>
    <meta name="twitter:image"
          content="https://hostvn.net/wp-content/plugins/asv-elementor/assets/images/logo-hostvn-blue.svg"/>
    <meta name="twitter:creator" content="@Hostvn"/>
    <meta name="google-site-verification" content="X4mUM2ugwk0-VFYwfikixVl10KdP8CKhlXX3-VQm1MU"/>
    <script type='application/ld+json' class='yoast-schema-graph yoast-schema-graph--main'>{
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebSite",
                    "@id": "https://hostvn.net/#website",
                    "url": "https://hostvn.net/",
                    "name": "hostvn.net",
                    "description": "Nh\u00e0 cung c\u1ea5p VPS Hosting h\u1ed7 tr\u1ee3 kh\u00e1ch h\u00e0ng t\u1ed1t nh\u1ea5t VN | HOSTVN",
                    "potentialAction": {
                        "@type": "SearchAction",
                        "target": "https://hostvn.net/?s={search_term_string}",
                        "query-input": "required name=search_term_string"
                    }
                },
                {
                    "@type": "ImageObject",
                    "@id": "https://hostvn.net/#primaryimage",
                    "url": "https://hostvn.net/wp-content/plugins/asv-elementor/assets/images/logo-hostvn-blue.svg"
                },
                {
                    "@type": "WebPage",
                    "@id": "https://hostvn.net/#webpage",
                    "url": "https://hostvn.net/",
                    "inLanguage": "vi-VN",
                    "name": "T\u00ean mi\u1ec1n, Web Hosting, Email, VPS &amp; D\u1ecbch v\u1ee5 l\u01b0u tr\u1eef Website Vi\u1ec7t Nam",
                    "isPartOf": {
                        "@id": "https://hostvn.net/#website"
                    },
                    "primaryImageOfPage": {
                        "@id": "https://hostvn.net/#primaryimage"
                    },
                    "datePublished": "2019-08-12T07:11:20+00:00",
                    "dateModified": "2019-12-30T05:10:03+00:00",
                    "description": "Nh\u00e0 cung c\u1ea5p T\u00ean mi\u1ec1n, Web Hosting, Email, VPS & D\u1ecbch v\u1ee5 l\u01b0u tr\u1eef website Vi\u1ec7t Nam v\u1edbi 13 n\u0103m uy t\u00edn ho\u1ea1t \u0111\u1ed9ng v\u00e0 \u0111ang ph\u1ee5c v\u1ee5 h\u01a1n 40k kh\u00e1ch h\u00e0ng tin d\u00f9ng"
                }
            ]
        }
    </script>
    <!-- / Yoast SEO Premium plugin. -->

    <link rel='dns-prefetch' href='http://s.w.org/'/>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "https:\/\/hostvn.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.3.2"}
        };
        !function (e, a, t) {
            var r, n, o, i, p = a.createElement("canvas"), s = p.getContext && p.getContext("2d");

            function c(e, t) {
                var a = String.fromCharCode;
                s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, e), 0, 0);
                var r = p.toDataURL();
                return s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, t), 0, 0), r === p.toDataURL()
            }

            function l(e) {
                if (!s || !s.fillText) return !1;
                switch (s.textBaseline = "top", s.font = "600 32px Arial", e) {
                    case"flag":
                        return !c([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) && (!c([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !c([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]));
                    case"emoji":
                        return !c([55357, 56424, 55356, 57342, 8205, 55358, 56605, 8205, 55357, 56424, 55356, 57340], [55357, 56424, 55356, 57342, 8203, 55358, 56605, 8203, 55357, 56424, 55356, 57340])
                }
                return !1
            }

            function d(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for (i = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, o = 0; o < i.length; o++) t.supports[i[o]] = l(i[o]), t.supports.everything = t.supports.everything && t.supports[i[o]], "flag" !== i[o] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[i[o]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (r = t.source || {}).concatemoji ? d(r.concatemoji) : r.wpemoji && r.twemoji && (d(r.twemoji), d(r.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
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
    <link rel='stylesheet' id='main-css' href='{{asset('css/app9dff.css?ver=5.3.2')}}' type='text/css'
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
    <link rel='https://api.w.org/' href='wp-json/index.html'/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml"/>
    <meta name="generator" content="WordPress 5.3.2"/>
    <link rel='shortlink' href='index.html'/>
    <link rel="alternate" type="application/json+oembed"
          href="wp-json/oembed/1.0/embede4c5.json?url=https%3A%2F%2Fhostvn.net%2F"/>
    <link rel="alternate" type="text/xml+oembed"
          href="wp-json/oembed/1.0/embedb0c2?url=https%3A%2F%2Fhostvn.net%2F&amp;format=xml"/>
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
            @include('User.header')

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
                                    @include('User.footer')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<script type='text/javascript'>
    /* <![CDATA[ */
    var ratingsL10n = {
        "plugin_url": "https:\/\/hostvn.net\/wp-content\/plugins\/wp-postratings",
        "ajax_url": "https:\/\/hostvn.net\/wp-admin\/admin-ajax.php",
        "text_wait": "Please rate only 1 item at a time.",
        "image": "stars",
        "image_ext": "gif",
        "max": "5",
        "show_loading": "0",
        "show_fading": "1",
        "custom": "0"
    };
    var ratings_mouseover_image = new Image();
    ratings_mouseover_image.src = "wp-content/plugins/wp-postratings/images/stars/rating_over.gif";
    ;
    /* ]]> */
</script>
<script type='text/javascript' src='{{asset('js/postratings-jsc05e.js?ver=1.87')}}'></script>
<script type='text/javascript' src='{{asset('js/modules9dff.js?ver=5.3.2')}}'></script>
<script type='text/javascript' src='{{asset('js/app9dff.js?ver=5.3.2')}}'></script>
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
<script type='text/javascript'>
    var elementorFrontendConfig = {
        "environmentMode": {"edit": false, "wpPreview": false},
        "is_rtl": false,
        "breakpoints": {"xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600},
        "version": "2.8.2",
        "urls": {"assets": "https:\/\/hostvn.net\/wp-content\/plugins\/elementor\/assets\/"},
        "settings": {"page": [], "general": {"elementor_global_image_lightbox": "yes"}, "editorPreferences": []},
        "post": {
            "id": 8,
            "title": "T\u00ean mi\u1ec1n, Web Hosting, Email, VPS & D\u1ecbch v\u1ee5 l\u01b0u tr\u1eef Website Vi\u1ec7t Nam",
            "excerpt": ""
        }
    };
</script>
<script type='text/javascript' src='{{asset('js/frontend.min4dc3.js?ver=2.8.2')}}'></script>
<script type="text/javascript">
    (function (d, src, c) {
        var t = d.scripts[d.scripts.length - 1], s = d.createElement('script');
        s.id = 'la_x2s6df8d';
        s.async = true;
        s.src = src;
        s.onload = s.onreadystatechange = function () {
            var rs = this.readyState;
            if (rs && (rs != 'complete') && (rs != 'loaded')) {
                return;
            }
            c(this);
        };
        t.parentElement.insertBefore(s, t.nextSibling);
    })(document,
        '../support.hostvn.net/scripts/track.js',
        function (e) {
            LiveAgent.createButton('85e27023', e);
        });

    var chatButton;
    (function (d, src, c) {
        var t = d.scripts[d.scripts.length - 1], s = d.createElement('script');
        s.id = 'la_x2s6df8d';
        s.async = true;
        s.src = src;
        s.onload = s.onreadystatechange = function () {
            var rs = this.readyState;
            if (rs && (rs != 'complete') && (rs != 'loaded')) {
                return;
            }
            c(this);
        };
        t.parentElement.insertBefore(s, t.nextSibling);
    })(document,
        '../support.hostvn.net/scripts/track.js',
        function (e) {
            chatButton = LiveAgent.createButton('85e27023', e);
        });

</script>
<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag o$
--------------------------------------------------->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 973684836;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="../www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""
             src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/973684836/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>
</body>
</html>
