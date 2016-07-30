@extends('layouts.master')

@section('content')
<ul>
    @foreach($errors->all() as $error)
        <li><font color="#f0f8ff">{{ $error }}</font></li>

    @endforeach

</ul>
<div class="content_item">
<<<<<<< HEAD
<h1><font color="#f0f8ff">{{trans('lang.contact')}}</font></h1>
=======
<h1><font color="#f0f8ff">Contact Me</font></h1>
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3

    {!! Form::open(array('route' => 'contactform', 'class' => 'form')) !!}
    {{--екшин в норм хтмл- в роутах прописати шлях - в контролері новий метод (як в роутах) - обєкт реквест і змінна реквест---}}

    <div class="form-group">
<<<<<<< HEAD
       <p> {!! Form::label(trans('lang.YourName')) !!}</p>
        {!! Form::text('name', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>trans('lang.YourName'))) !!}
    </div>

    <div class="fowrm-group">
        <p>{!! Form::label(trans('lang.YourE-mailAddress')) !!}</p>
        {!! Form::text('email', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>trans('lang.YourE-mailAddress'))) !!}
    </div>

    <div class="form-group">
        <p>{!! Form::label(trans('lang.YourMessage')) !!}</p>
        {!! Form::textarea('message', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>trans('lang.YourMessage'))) !!}
    </div>

    <div class="form-group">
        {!! Form::submit(trans('lang.SendMessage'),
=======
        {!! Form::label('Your Name') !!}
        {!! Form::text('name', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your name')) !!}
    </div>

    <div class="fowrm-group">
        {!! Form::label('Your E-mail Address') !!}
        {!! Form::text('email', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your e-mail address')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Your Message') !!}
        {!! Form::textarea('message', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your message')) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Send message',
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
          array('class'=>'btn btn-primary')) !!}
    </div>
    </div>
    {!! Form::close() !!}
@endsection