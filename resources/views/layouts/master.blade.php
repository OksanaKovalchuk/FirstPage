<!--DOCTYPE html-->
<html>

<head>
    <meta charset="UTF-8" />
    <title>Артнепінг</title>
    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <!-- modernizr enables HTML5 elements and feature detects -->
    <script type="text/javascript" src="{{ asset('js/modernizr-1.5.min.js') }}"></script>
</head>

<body>
<div id="main">
    <header>
        <div id="banner">
            <div id="welcome">
                <h2>Артнепінг</h2>
            </div><!--close welcome-->
        </div><!--close banner-->
    </header>

    <nav>
        <div id="menubar">
            <ul id="nav">
                {{--<li class="current"><a href="{{'name.main'}}">Головна</a></li>--}}
                <li><a href="{{ route('name.main') }}">головна</a></li>
                <li><a href="{{ route('name.stories') }}">Історії</a></li>
                <li><a href="{{ route('name.painters')}}">Про художників</a></li>
                <li><a href="{{ route('name.contact')}}">Зворотній зв'язок</a></li>
            </ul>
        </div><!--close menubar-->
    </nav>

    {{--<div class="slideshow">--}}
        {{--<ul class="slideshow">--}}
            {{--<li class="show"><img width="940" height="300" src="images/home_1.gif"  /></li>--}}
            {{--<li><img width="940" height="300" src="images/home_2.jpg"  /></li>--}}
        {{--</ul>--}}
    {{--</div><!--close slideshow-->--}}

    <div id="site_content">
        @yield("content")

    </div>
    </div>

<div class="sidebar">
    <div class="sidebar_item">
        <h3></h3>

    </div><!--close sidebar_item-->
</div><!--close sidebar-->

<div class="sidebar">
    <div class="sidebar_item">
        <h3>Червень 2016</h3>

    </div><!--close sidebar_item-->
</div><!--close sidebar-->
<div class="sidebar">
    <div class="sidebar_item">
        <h2>контактні дані</h2>
        <p>Номер телефону: +38(063)9051594</p>
        <p>Email: <a href="mailto:kovalchuk.oksana2@gmail.com">kovalchuk.oksana2@gmail.com</a></p>
    </div><!--close sidebar_item-->
</div><!--close sidebar-->
<br>
<p></p>
<footer>
    <a href="{{route('name.main')}}">Головна</a> | <a href="{{route('name.stories')}}">Історії</a> | <a href="{{route('name.contact')}}">Зворотній зв'язок</a><br/><br/>
    шаблон сайту взято з <a href="http://www.freehtml5templates.co.uk">Free HTML5 Templates</a>
</footer>

<!-- javascript at the bottom for fast page loading -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/image_slide.js')}}"></script>

<!--]-->
</body>
</html>
<!-- zzz </body><!-->
@if(Session::has('message'))
    <div class="alert alert-info">
        {{Session::get('message')}}
    </div>
@endif
