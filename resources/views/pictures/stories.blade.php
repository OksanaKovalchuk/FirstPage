@extends('layouts.master')

@section('content')

    <div class="row">
<<<<<<< HEAD
        <div class="col-md-8">
            <h1><font color="#faebd7">{{trans('lang.Stories')}}</font></h1>
        </div>

        <div class="col-md-4">
            @if (Auth::check()){<a href="{{route('picture.create')}}" class="btn btn-block btn-primary">{{trans('lang.add_storie')}}</a>}@endif
            {{--<a href="{{route('stories')}}" class="btn btn-block btn-primary">Cортувати</a>--}}
        </div>
        <br/>
=======
        <div class="col-md-10">
            <h1><font color="#faebd7"> Історії викрадень</font></h1>
        </div>

        <div class="col-md-2">
            @if (Auth::check()){<a href="{{route('picture.create')}}" class="btn btn-block btn-primary">Додати історію</a>}@endif
            <a href="{{route('stories')}}" class="btn btn-block btn-primary">Cортувати</a>
        </div>
        <hr>
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
    </div>

    <ul class="list-group">
        @foreach($pictures as $picture)
            <li class="list-group-item"><img src="{{$picture->reference}}"></li>
            <li class="list-group-item">"{{$picture->name}}"</li>
<<<<<<< HEAD
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
=======
            {{--<li class="list-group-item">{{$painter->painter_name}}</li>--}}
            <li class="list-group-item">{{$picture->napping_story}}</li>
            @foreach($picture->getAttribute('painter') as $painter)
                <li>
                    <a href="{{route('pictures.show',$picture->id)}}" class="btn btn-default btn-sm">View</a>
                  @if (Auth::check())  <a href="{{route('pictures.edit',$picture->id)}}" class="btn btn-default btn-sm">Edit</a>@endif
                </li>
                {{--<h1><font color="#faebd7">{{ $painter->painter_name }}</font></h1>--}}
                 {{--$uri("{{route('name.painters')}}",'{{ $painter->painter_name }}');--}}
                <a href="{{ route('name.painters.single', ['painterId' => $painter->id]) }}"><h2>{{ $painter->painter_name }}</h2></a>
            {{--<dd>{{$painters}}</dd>--}}
            @endforeach
        @endforeach
    </ul>
    <h3>Додати картину</h3>
    {{--<div class="form-group">--}}
        {{--<texarea name="body" class="form-control"></texarea>--}}
    {{--</div>--}}
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
    <div class="text-center">
        {!! $pictures->links()
         !!}
    </div>
@endsection

