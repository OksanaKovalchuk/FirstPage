@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <h1><font color="#faebd7">{{trans('lang.AllPosts')}}</font></h1>
        </div>

        <div class="col-md-3">
            <a href="{{route('story.create')}}" class="btn btn-block btn-primary">{{trans('lang.CreateNewPost')}}</a>
        </div>
        <hr>

    </div><!--end of row-->
<div class="col-md-12">
    <table class="table">
        <thead>
            <th>#</th>

            <th>{{trans('lang.Title')}}</th>
            <th> {{trans('lang.MessageBody')}}</th>
            <th>{{trans('lang.createdate')}}</th>
            <th></th>
        </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th>{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{substr($post->message,0,50)}}{{strlen($post->message)>50?"...":""}}</td>
                    <td>{{$post->created_at}}</td>
                    <td><a href="{{route('story.show',$post->id)}}" class="btn btn-default btn-sm">{{trans('lang.View')}}</a> <a href="{{route('story.edit',$post->id)}}" class="btn btn-default btn-sm">{{trans('lang.Edit')}}</a></td>
                </tr>

                @endforeach
            </tbody>

    </table>
    <div class="text-center">
        {!! $posts->links(); !!}
    </div>
    </div>
    @stop