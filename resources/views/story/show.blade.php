
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
<<<<<<< HEAD
                    <dt>{{trans('lang.createdate')}}</dt>
=======
                    <dt>Date of creation:</dt>
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
                    <dd>{{date('M j, Y h:ia', strtotime($post->created_at))}}</dd>
                </dl>

                <dl class="dl-horizontal">
<<<<<<< HEAD
                    <dt>{{trans('lang.updatedate')}}</dt>
=======
                    <dt>Date of update:</dt>
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
                    <dd>{{date('M j, Y h:ia', strtotime($post->updated_at))}}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
<<<<<<< HEAD
                        {!! Html::linkRoute('story.edit',trans('lang.Edit'), array($post->id), array('class'=>
=======
                        {!! Html::linkRoute('story.edit','Edit', array($post->id), array('class'=>
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
                        'btn btn-primary btn-block')) !!}

                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['story.destroy',$post->id], 'method' => 'DELETE']) !!}
<<<<<<< HEAD
                        {!! Form::submit(trans('lang.Delete'),['class' =>'btn btn-danger btn-block']) !!}
=======
                        {!! Form::submit('Delete',['class' =>'btn btn-danger btn-block']) !!}
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop