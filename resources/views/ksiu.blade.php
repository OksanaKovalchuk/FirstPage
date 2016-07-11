@extends('layouts.master')

@section('content')
<div class="slideshow">
    <ul class="slideshow">
        <li class="show"><img width="940" height="300" src="images/home_1.gif"  /></li>
        <li><img width="940" height="300" src="images/home_2.jpg"  /></li>
    </ul>
</div><!--close slideshow-->

<div class="sidebar_container"> @yield('sides') </div><!--close sidebar_container-->

<div id="content">
    <div class="content_item">
        <h1>Вітаю!</h1>
        <p>Україні байдуже – у неї украли, чи вона вкрала?


            Україні, де в галузі таких досліджень – непочатий край роботи, взагалі ще й «кінь не валявся», стверджує Галина Сеник.
            Якщо раніше фахівці складали каталоги, мали архіви даних щодо вивезених із України творів мистецтва, то нині не те, що каталогів, навіть говорити немає з ким.
            Так склалося передовсім через байдужість до цієї теми, каже Сеник.

            <br>Низьке зацікавлення у збереженні національних цінностей чи повернення національних цінностей.
            Це призводить до того, що питання втрат наших національних цінностей, нашої національної спадщини просто ігнорується.
            Україна каже, що прямує у Європу. Ви бачите, який тут іде рух, що треба повертати вкрадене майно.
            Дослідження здійснюються не Україною, а іншими країнами, які втратили об’єкти, а вони у нас в Україні є у великій кількості.
            Україна буде змушена повертати. І тоді постане питання: ми повертаємо, натомість не зробили нічого, щоб повернути своє!
            Це дуже прикро, адже виправляти ситуацію потім буде дуже дорого.</p>
        <!-- <div class="content_imagetext">
           <div class="content_image">
             <img src="images/image1.jpg" alt="image1"/>
           </div>-->
        <br>

        <br>
        <br>


        <br>
        <div class="content_container">
            <div class="button_small">
                <a href="Story1.html">Ігри патріотра</a>
            </div><!--close button_big-->
        </div><!--close content_container-->
        <br>
        <div class="content_container">
            <div class="button_small">
                <a href="Story_main">Перелік історій</a>
            </div><!--close button_small-->
        </div><!--close content_container-->



    </div><!--close site_content-->

</div><!--close main-->
@include('sides')
<!-- javascript at the bottom for fast page loading -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/image_slide.js"></script>

<!--]-->
<div style="text-align:center;font-size:11px" class="cbalink"><a rel="nofollow" href="https://www.zzz.com.ua/" title="&#1073;&#1077;&#1089;&#1087;&#1083;&#1072;&#1090;&#1085;&#1099;&#1081; &#1093;&#1086;&#1089;&#1090;&#1080;&#1085;&#1075;">&#1073;&#1077;&#1089;&#1087;&#1083;&#1072;&#1090;&#1085;&#1099;&#1081; &#1093;&#1086;&#1089;&#1090;&#1080;&#1085;&#1075;</a> ZZZ.COM.UA<br/><br/></div>
@endsection