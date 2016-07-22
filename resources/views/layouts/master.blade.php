<!--DOCTYPE html-->
<html>

<head>
    <meta charset="UTF-8" />
    <title>Артнепінг</title>
    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script type="text/javascript" src="{{ asset('js/modernizr-1.5.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>

<body>
<div id="main">
    <header>
        <div id="banner">
            <div id="welcome">
                <h2><font color="#f5f5dc">Артнепінг</font></h2>
            </div><!--close welcome-->
        </div><!--close banner-->
    </header>

    <nav>
        <div id="menubar">
            <ul id="nav">
                {{--<li class="current"><a href="{{'name.main'}}">Головна</a></li>--}}
                <li><a href="{{ route('name.main') }}">головна</a></li>
                <li><a href="{{ route('story.index') }}">Історії</a></li>
                <li><a href="{{ route('name.painters')}}">Про художників</a></li>
                <li><a href="{{ route('contactform')}}">Зворотній зв'язок</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}"><font color="#faebd7">Login</font></a></li>
                    <li><a href="{{ url('/register') }}"><font color="#faebd7">Register</font></a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          <font color="#faebd7">  {{ Auth::user()->name }}</font> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
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

    <div class="sidebar_container">
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
    </div><!--close sidebar_container-->
</div><!--close content_item-->
    <footer>
        <a href="{{route('name.main')}}">Головна</a> | <a href="{{route('story.index')}}">Історії</a> | <a href="{{route('contactform')}}">Зворотній зв'язок</a><br/><br/>
        шаблон сайту взято з <a href="http://www.freehtml5templates.co.uk">Free HTML5 Templates</a>
    </footer>
<!-- javascript at the bottom for fast page loading -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/image_slide.js')}}"></script>
<!--]-->
</body>
</html>
@if(Session::has('message'))
    <div class="alert alert-info">
        {{Session::get('message')}}
    </div>
@endif
