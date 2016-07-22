@extends('layouts.master')

@section('content')
    {{--<h1><font color="#f5deb3">Перелік історій:</font></h1>--}}
    {{--<ul type="square">--}}
        {{--<li><a href="Story1.html">Частина перша</a> </li>--}}
        {{--<li><a href="Story2.html">Частина друга</a></li>--}}
        {{--<li><a href="Story3.html">Частина третя</a></li>--}}
        {{--<li><a href="Story4.html">Частина четверта</a></li>--}}
        {{--<li><a href="Story5.html">Частина п'ята</a></li>--}}
    {{--</ul>--}}

    <div class="row">
        <div class="col-md-10">
            <h1><font color="#faebd7"> Історії викрадень</font></h1>
        </div>

        <div class="col-md-2">
            <a href="{{route('stories')}}" class="btn btn-block btn-primary">Додати історію</a>
        </div>
        <hr>
    </div>
    <ul class="list-group">
        @foreach($pictures as $picture)
            <li class="list-group-item"><img src="{{$picture->reference}}"></li>
            <li class="list-group-item">"{{$picture->name}}"</li>
            {{--<li class="list-group-item">{{$painter->painter_name}}</li>--}}
            <li class="list-group-item">{{$picture->napping_story}}</li>
            {{--<li><a href="{{route('stories',$picture->picture_id)}}" class="btn btn-default btn-sm">View</a> <a href="{{route('stories.edit',$post->id)}}" class="btn btn-default btn-sm">Edit</a></li>--}}
            @foreach($picture->getAttribute('painter') as $painter)
                <h1><font color="#faebd7">{{ $painter->painter_name }}</font></h1>
            @endforeach
            @endforeach
    </ul>
    <h3>Додати картину</h3>
    <div class="form-group">
        <texarea name="body" class="form-control"></texarea>
    </div>


@endsection

