
@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
<<<<<<< HEAD
            <h1><font color="#f0f8ff">{{trans('lang.CreateNewPost')}}</font></h1>
            <hr>

            {!! Form::open(array('route'=>'story.store')) !!}
           <p> {{ Form::label('title',trans('lang.Title'))}}</p>
            {{Form::text('title',null,array('class'=>'form-control'))}}
           <p> {{Form::label('message',trans('lang.MessageBody'))}}</p>
            {{Form::textarea('message',null,array('class'=>'form-control'))}}
            {{Form::submit(trans('lang.CreateNewPost'),array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
=======
            <h1><font color="#f0f8ff">Create new Post</font></h1>
            <hr>

            {!! Form::open(array('route'=>'story.store')) !!}
           <p> {{ Form::label('title','Title:')}}</p>
            {{Form::text('title',null,array('class'=>'form-control'))}}
           <p> {{Form::label('message',"Messagebody")}}</p>
            {{Form::textarea('message',null,array('class'=>'form-control'))}}
            {{Form::submit('Create new Message',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
            {!! Form::close() !!}
        </div>
    </div>

@stop