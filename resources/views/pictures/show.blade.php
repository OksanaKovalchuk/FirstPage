
@extends('layouts.master')

@section('content')
    <div class="row">
            <div class="col-md-7">

                <h1><font color="#f0f8ff">{{$picture->name}}</font></h1>
                <h4><img src="{{$picture->reference}}" alt=""></h4>
                <p class="lead"> {{$picture->napping_story}}</p>
            </div>

        <div class="col-md-5">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>{{trans('lang.createdate')}}</dt>
                    <dd>{{date('M j, Y h:ia', strtotime($picture->created_at))}}</dd>
                </dl>

                <dl class="dl-horizontal">

                    <dt>{{trans('lang.updatedate')}}</dt>
                    <dd>{{date('M j, Y h:ia', strtotime($picture->updated_at))}}</dd>
                </dl>
                <hr>

                <div class="row">
                    <div class="col-sm-6">

                        @if(Auth::check()){!! Html::linkRoute('pictures.edit',trans('lang.Edit'), array($picture->id), array('class'=>
                         'btn btn-primary btn-block')) !!}@endif
                    </div>

                    <div class="col-sm-6">
                        @if(Auth::check()){!! Form::open(['route' => ['picture.destroy',$picture->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit(trans('lang.Delete'),['class' =>'btn btn-danger btn-block']) !!}
                        {!! Form::close() !!}@endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop