
@extends('layouts.master')

@section('content')
 @if(Auth::check()){
 @foreach($errors->all() as $error)
     <p>{{ $error }}</p>@endforeach
 <div class="row">
     <div class="col-md-8 col-md-offset-2">
         <h1><font color="#f0f8ff">Add new picture</font></h1>
         <hr>
         {!! Form::open(array('route'=>'pictures.store')) !!}
         <p> {{ Form::label('Name of this picture:')}}</p>
         {{Form::text('name',null,array('class'=>'form-control'))}}
         <p> {{ Form::label('URL of your picture:')}}</p>
         {{Form::text('reference',null,array('class'=>'form-control'))}}
         <p> {{Form::label('Napping story')}}</p>
         {{Form::textarea('napping_story',null,array('class'=>'form-control'))}}
         {{Form::submit('Add one more picture',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
         {!! Form::close() !!}
     </div>
 </div>
}
 @else
     <h4><font color="#f0f8ff">Зареєструйтесь для того, щоб додавати картини!</font></h4>
     <a href="{{route('stories')}}" class="btn btn-default "> Повернутись назад </a>
@endif
@stop