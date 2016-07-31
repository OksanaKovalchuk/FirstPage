
@extends('layouts.master')

@section('content')
 @if(Auth::check()){
 @foreach($errors->all() as $error)
     <p>{{ $error }}</p>@endforeach
 <div class="row">
     <div class="col-md-8 col-md-offset-2">

         <h1><font color="#f0f8ff">{{trans('lang.Addonemorepicture')}}</font></h1>
         <hr>
         {!! Form::open(array('route'=>'pictures.store')) !!}
         <p> {{ Form::label(trans('lang.picturename'))}}</p>
         {{Form::text('name',null,array('class'=>'form-control'))}}
         <p> {{ Form::label(trans('lang.imgreference'))}}</p>
         {{Form::text('reference',null,array('class'=>'form-control'))}}
         <p> {{Form::label(trans('lang.Nappingstory'))}}</p>
         {{Form::textarea('napping_story',null,array('class'=>'form-control'))}}
         {{Form::submit(trans('lang.Add'),array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
         {!! Form::close() !!}
     </div>
 </div>
}
 @else
     <h4><font color="#f0f8ff">{{trans('lang.register_adding')}}</font></h4>

     <a href="{{route('stories')}}" class="btn btn-default "> Повернутись назад </a>
@endif
@stop