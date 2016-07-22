
@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1><font color="#f0f8ff">Create new Post</font></h1>
            <hr>

            {!! Form::open(array('route'=>'story.store')) !!}
           <p> {{ Form::label('title','Title:')}}</p>
            {{Form::text('title',null,array('class'=>'form-control'))}}
           <p> {{Form::label('message',"Messagebody")}}</p>
            {{Form::textarea('message',null,array('class'=>'form-control'))}}
            {{Form::submit('Create new Message',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
            {!! Form::close() !!}
        </div>
    </div>

@stop