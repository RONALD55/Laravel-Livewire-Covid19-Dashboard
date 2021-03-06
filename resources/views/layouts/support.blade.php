<!DOCTYPE HTML>
<html>
<head>
    <title>{{config('app.name','AgriXpress').' | '.$title}}</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo.png')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/aerial/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/aerial/assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">
<div id="wrapper">
    <div id="bg"></div>
    <div id="overlay"></div>
    <div id="main">

        <!-- Header -->
        <header id="header">

            @yield('content')
            <nav>
                <ul>

                    <li><a href="https://twitter.com/mohcczimbabwe" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="https://m.facebook.com/Ministry-of-Health-and-Child-Care-148565931913609/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="https://wa.me/263772712489" class="icon brands fa-whatsapp"><span class="label">Whatsapp</span></a></li>
                    <li><a href="https://www.instagram.com/who/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#"   class="icon brands fa-youtube"><span class="label">Youtube</span></a></li>
                </ul>
            </nav>
        </header>

        <!-- Footer -->
        <footer id="footer">
            <span class="copyright">&copy; Nicole<a href="#">Covid-19 App</a>.</span>
        </footer>

    </div>
</div>
<script>
    window.onload = function() { document.body.classList.remove('is-preload'); }
    window.ontouchmove = function() { return false; }
    window.onorientationchange = function() { document.body.scrollTop = 0; }
</script>
</body>
</html>
