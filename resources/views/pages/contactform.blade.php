@extends('layouts.master')

@section('content')
<ul>
    @foreach($errors->all() as $error)
        <li><font color="#f0f8ff">{{ $error }}</font></li>

    @endforeach

</ul>
<div class="content_item">
<h1><font color="#f0f8ff">Contact Me</font></h1>

    {!! Form::open(array('route' => 'contactform', 'class' => 'form')) !!}
    {{--екшин в норм хтмл- в роутах прописати шлях - в контролері новий метод (як в роутах) - обєкт реквест і змінна реквест---}}

    <div class="form-group">
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
          array('class'=>'btn btn-primary')) !!}
    </div>
    </div>
    {!! Form::close() !!}
@endsection