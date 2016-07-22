
@extends('layouts.master')

@section('content')
    <div class="row">
            <div class="col-md-7">
            <h1><font color="#f0f8ff">{{$post->title}}</font></h1>
                <p class="lead"> {{$post->message}}</p>
            </div>
        <div class="col-md-5">
            <div class="well">

                <dl class="dl-horizontal">
                    <dt>Date of creation:</dt>
                    <dd>{{date('M j, Y h:ia', strtotime($post->created_at))}}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Date of update:</dt>
                    <dd>{{date('M j, Y h:ia', strtotime($post->updated_at))}}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('story.edit','Edit', array($post->id), array('class'=>
                        'btn btn-primary btn-block')) !!}

                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['story.destroy',$post->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Delete',['class' =>'btn btn-danger btn-block']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop