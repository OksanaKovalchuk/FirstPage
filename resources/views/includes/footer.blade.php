@extends('layouts.master')
@section('footer')

<footer>
    <a href="{{route('name.main')}}">Головна</a> | <a href="{{route('name.stories')}}">Історії</a> | <a href="{{route('name.contact')}}">Зворотній зв'язок</a><br/><br/>
    шаблон сайту взято з <a href="http://www.freehtml5templates.co.uk">Free HTML5 Templates</a>
</footer>
    @endsection