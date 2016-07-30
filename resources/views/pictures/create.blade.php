
@extends('layouts.master')
<<<<<<< HEAD
/var/www/html/FirstPage/resources/views/pictures/painters.blade.php
=======

>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
@section('content')
 @if(Auth::check()){
 @foreach($errors->all() as $error)
     <p>{{ $error }}</p>@endforeach
 <div class="row">
     <div class="col-md-8 col-md-offset-2">
<<<<<<< HEAD
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
=======
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
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
         {!! Form::close() !!}
     </div>
 </div>
}
 @else
<<<<<<< HEAD
     <h4><font color="#f0f8ff">{{trans('lang.register_adding')}}</font></h4>
=======
     <h4><font color="#f0f8ff">Зареєструйтесь для того, щоб додавати картини!</font></h4>
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
     <a href="{{route('stories')}}" class="btn btn-default "> Повернутись назад </a>
@endif
@stop