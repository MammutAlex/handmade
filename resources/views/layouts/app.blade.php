<!DOCTYPE html>
<html lang="uk">
<head>
    <meta http-equiv="Content-Type"
          content="text/html; charset=UTF-8">
    <link rel="shortcut icon"
          href="/favicon.gif"
          type="image/gif">
    <meta name="viewport"
          content="width=device-width">
    <!-- Page Title -->
    <title>@yield('title')</title>
    <meta property="og:site_name"
          content="@yield('title')"/>
    <meta name="description"
          content="@yield('description', 'Замовте майстер-клас у Києві без посередників')"/>
    <meta name="keywords"
          content="@yield('tag', 'Майстер-клас, творчість')">
    <!-- Fonts -->
    <link href="/css/css"
          rel="stylesheet"
          type="text/css">
    <link rel="stylesheet"
          href="/css/font-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet"
          href="/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="/css/style.css">
    <link rel="stylesheet"
          href="/font-awesome-4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Special+Elite"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab"
          rel="stylesheet">

    @yield('style')
</head>
<body>

<!-- End Google Tag Manager -->
<div class="slicknav_menu">
    <ul class="slicknav_nav slicknav_hidden"
        style="display: none;"
        aria-hidden="true"
        role="menu">
        <li><a href="/portfolio"
               role="menuitem"
               tabindex="-1">Портфоліо</a></li>
        <li><a href="/about"
               role="menuitem"
               tabindex="-1">Про мене</a></li>
        <li><a href="/blog"
               role="menuitem"
               tabindex="-1">Блог</a></li>
        <li><a href="/contact"
               role="menuitem"
               tabindex="-1">Контакти</a></li>
    </ul>
</div>
<header>
    <div class="container">
        <div class="header-holder">
            <div class="logo">
                <a id="logo"
                   class="machinery-text"
                   href="/">
                    Made with LOVE
                </a>
            </div>
            <div class="mobile-menu">
                <div class="line"></div>
            </div>
            <nav>
                <ul class="menu"
                    id="menu">
                    <li><a href="/">Портфоліо</a>
                    </li>
                    <li><a href="/about">Про мене</a></li>
                    <li>
                        <a href="/blog">Блог</a>
                    </li>
                    <li><a href="/contact">Контакти</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </div>
</header>
<div class="wrapper">
    @yield('content')
</div>

<footer>
    <span>Copyright © 2016 Created by <a href="https://github.com/MammutCris"
                                         target="_BLANK">mammut</a></span>
</footer>
<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.slicknav.js"></script>
<script src="/js/isotope.pkgd.js"></script>
<script src="/js/plugin.js"></script>
<script src="/js/main.js"></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-83914054-1', 'auto');
    ga('send', 'pageview');
    <!-- Yandex.Metrika counter -->
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter39783070 = new Ya.Metrika({
                            id:39783070,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true
                        });
                    } catch(e) { }
                });

                var n = d.getElementsByTagName("script")[0],
                        s = d.createElement("script"),
                        f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks");
<!-- /Yandex.Metrika counter -->
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/39783070" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
@yield('script')
</body>
</html>