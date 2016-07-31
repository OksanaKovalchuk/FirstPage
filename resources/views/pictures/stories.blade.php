@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-8">
            <h1><font color="#faebd7">{{trans('lang.Stories')}}</font></h1>
        </div>

        <div class="col-md-4">
            @if (Auth::check()){<a href="{{route('picture.create')}}" class="btn btn-block btn-primary">{{trans('lang.add_storie')}}</a>}@endif
            {{--<a href="{{route('stories')}}" class="btn btn-block btn-primary">Cортувати</a>--}}
        </div>
        <br/>
    </div>

    <ul class="list-group">
        @foreach($pictures as $picture)
            <li class="list-group-item"><img src="{{$picture->reference}}"></li>
            <li class="list-group-item">"{{$picture->name}}"</li>

            <li class="list-group-item">{{$picture->napping_story}}</li>
            <li>
                <a href="{{route('pictures.show',$picture->id)}}" class="btn btn-default btn-sm">{{trans('lang.View')}}</a>
                @if (Auth::check())  <a href="{{route('pictures.edit',$picture->id)}}" class="btn btn-default btn-sm">{{trans('lang.Edit')}}</a>@endif
            </li>
            @foreach($picture->getAttribute('painter') as $painter)

                <a href="{{ route('painters.single', ['painter' => $painter->id]) }}"><h2>{{ $painter->painter_name }}</h2></a>
            @endforeach
        @endforeach
    </ul>
    <div class="text-center">
        {!! $pictures->links()
         !!}
    </div>
@endsection

