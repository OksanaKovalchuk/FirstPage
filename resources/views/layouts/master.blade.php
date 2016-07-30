<!--DOCTYPE html-->
<html>

<head>
    <meta charset="UTF-8" />
<<<<<<< HEAD
    <title>{{trans('lang.TitleMain')}}</title>
=======
    <title>Артнепінг</title>
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
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
<<<<<<< HEAD
    {{--<form action="{{ URL::route('chooser')}}" method="post">--}}
    <form action="" method="post">
        <select name="locale">
            <option value="ua">Ukrainian</option>
            <option value="en">English</option>
        </select>
        <input type="submit" value="Choose">
        {{--{{Form::token() }}--}}
    </form>


    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ ('/login') }}">{{trans('lang.Login')}}</a></li>
            <li><a href="{{ url('/register') }}">{{trans('lang.Register')}}</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>{{trans('lang.Logout')}}</a></li>
                </ul>
            </li>
        @endif
    </ul>
    <header>
        <div id="banner">
            <div id="welcome">
                <h2><font color="#f5f5dc">{{trans('lang.TitleMain')}}</font></h2>
            </div><!--close welcome-->
        </div><!--close banner-->
    </header>
<br/>
    <br/>
    <nav >
        <div id="menubar">
            <ul id="nav">
                {{--<li class="current"><a href="{{'name.main'}}">Головна</a></li>--}}
                <li><a href="{{ route('name.main') }}">{{trans('lang.Main')}}</a></li>
                <li><a href="{{ route('story.index') }}">{{trans('lang.Stories')}}</a></li>
                <li><a href="{{ route('stories') }}">{{trans('lang.Pictures')}}</a></li>
                <li><a href="{{ route('name.painters')}}">{{trans('lang.Painters')}}</a></li>
                <li><a href="{{ route('contactform')}}">{{trans('lang.BackContact')}}</a></li>
            </ul>


=======
    <select>
        <option value="ua">ua</option>
        <option value="en">en</option>
    </select>
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
                <li><a href="{{ route('name.main') }}">Головна</a></li>
                <li><a href="{{ route('story.index') }}">Історії</a></li>
                <li><a href="{{ route('stories') }}">Картини</a></li>
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
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
        </div><!--close menubar-->
    </nav>

    {{--<div class="slideshow">--}}
<<<<<<< HEAD
    {{--<ul class="slideshow">--}}
    {{--<li class="show"><img width="940" height="300" src="images/home_1.gif"  /></li>--}}
    {{--<li><img width="940" height="300" src="images/home_2.jpg"  /></li>--}}
    {{--</ul>--}}
=======
        {{--<ul class="slideshow">--}}
            {{--<li class="show"><img width="940" height="300" src="images/home_1.gif"  /></li>--}}
            {{--<li><img width="940" height="300" src="images/home_2.jpg"  /></li>--}}
        {{--</ul>--}}
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
    {{--</div><!--close slideshow-->--}}

    <div id="site_content">
        @yield("content")
    </div>

    <div class="sidebar_container">
        <div class="sidebar">
            <div class="sidebar_item">
<<<<<<< HEAD
                <h3>{{trans('lang.monthcr')}}2016</h3>
=======
                <h3>Червень 2016</h3>
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
            </div><!--close sidebar_item-->
        </div><!--close sidebar-->
        <div class="sidebar">
            <div class="sidebar_item">
<<<<<<< HEAD
                <h2>{{trans('lang.contacts')}}</h2>
                <p>{{trans('lang.phonenumber')}} +38(063)9051594</p>
=======
                <h2>контактні дані</h2>
                <p>Номер телефону: +38(063)9051594</p>
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
                <p>Email: <a href="mailto:kovalchuk.oksana2@gmail.com">kovalchuk.oksana2@gmail.com</a></p>
            </div><!--close sidebar_item-->
        </div><!--close sidebar-->
    </div><!--close sidebar_container-->
</div><!--close content_item-->
<<<<<<< HEAD
<footer>
    <a href="{{route('name.main')}}">{{trans('lang.Main')}}</a> | <a href="{{route('story.index')}}">{{trans('lang.Stories')}}</a> |
    <a href="{{route('contactform')}}">{{trans('lang.BackContact')}}</a><br/><br/>
    {{--шаблон сайту взято з --}}<a href="http://www.freehtml5templates.co.uk">Free HTML5 Templates</a>
</footer>
=======
    <footer>
        <a href="{{route('name.main')}}">Головна</a> | <a href="{{route('story.index')}}">Історії</a> | <a href="{{route('contactform')}}">Зворотній зв'язок</a><br/><br/>
        шаблон сайту взято з <a href="http://www.freehtml5templates.co.uk">Free HTML5 Templates</a>
    </footer>
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
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
