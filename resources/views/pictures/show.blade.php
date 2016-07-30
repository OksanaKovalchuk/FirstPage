
@extends('layouts.master')

@section('content')
    <div class="row">
            <div class="col-md-7">
<<<<<<< HEAD
                <h1><font color="#f0f8ff">{{$picture->name}}</font></h1>
                <h4><img src="{{$picture->reference}}" alt=""></h4>
                <p class="lead"> {{$picture->napping_story}}</p>
            </div>

        <div class="col-md-5">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>{{trans('lang.createdate')}}</dt>
=======
            <h1><font color="#f0f8ff">{{$picture->name}}</font></h1>
        <h4><img src="{{$picture->reference}}" alt=""></h4>
             {{--<h4> {{$painter->name}}</h4>--}}
                <p class="lead"> {{$picture->napping_story}}</p>
            </div>
        <div class="col-md-5">
            <div class="well">

                <dl class="dl-horizontal">
                    <dt>Date of creation:</dt>
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
                    <dd>{{date('M j, Y h:ia', strtotime($picture->created_at))}}</dd>
                </dl>

                <dl class="dl-horizontal">
<<<<<<< HEAD
                    <dt>{{trans('lang.updatedate')}}</dt>
=======
                    <dt>Date of update:</dt>
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
                    <dd>{{date('M j, Y h:ia', strtotime($picture->updated_at))}}</dd>
                </dl>
                <hr>

                <div class="row">
                    <div class="col-sm-6">
<<<<<<< HEAD
                        @if(Auth::check()){!! Html::linkRoute('pictures.edit',trans('lang.Edit'), array($picture->id), array('class'=>
                         'btn btn-primary btn-block')) !!}@endif
=======
                        @if(Auth::check()){!! Html::linkRoute('pictures.edit','Edit', array($picture->id), array('class'=>
                                                                   'btn btn-primary btn-block')) !!}@endif
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
                    </div>

                    <div class="col-sm-6">
                        @if(Auth::check()){!! Form::open(['route' => ['picture.destroy',$picture->id], 'method' => 'DELETE']) !!}
<<<<<<< HEAD
                        {!! Form::submit(trans('lang.Delete'),['class' =>'btn btn-danger btn-block']) !!}
=======
                        {!! Form::submit('Delete',['class' =>'btn btn-danger btn-block']) !!}
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
                        {!! Form::close() !!}@endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop