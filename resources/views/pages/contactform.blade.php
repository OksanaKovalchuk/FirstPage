@extends('layouts.master')

@section('content')
<ul>
    @foreach($errors->all() as $error)
        <li><font color="#f0f8ff">{{ $error }}</font></li>

    @endforeach

</ul>
<div class="content_item">
<h1><font color="#f0f8ff">{{trans('lang.contact')}}</font></h1>

    {!! Form::open(array('route' => 'contactform', 'class' => 'form')) !!}
    {{--екшин в норм хтмл- в роутах прописати шлях - в контролері новий метод (як в роутах) - обєкт реквест і змінна реквест---}}

    <div class="form-group">
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
          array('class'=>'btn btn-primary')) !!}
    </div>
    </div>
    {!! Form::close() !!}
@endsection