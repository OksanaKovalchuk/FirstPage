@extends('layouts.master')

@section('content')
    <h3>Your name is:</h3>'.{{$request->name}}.'<h3>Your email:</h3>'.{{$request->email}}.'<h3>Message:</h3>'.{{$request->message}};

    @stop