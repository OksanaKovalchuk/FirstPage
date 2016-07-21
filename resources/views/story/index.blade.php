@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1><font color="#faebd7">  All Posts</font></h1>
        </div>

        <div class="col-md-2">
            <a href="{{route('story.create')}}" class="btn btn-block btn-primary">Create New Post</a>
        </div>
        <hr>

    </div><!--end of row-->
<div class="col-md-12">
    <table class="table">
        <thead>
            <th>#</th>
            <th>Title</th>
            <th>Image</th>
            <th> Body</th>
            <th>Created At</th>
            <th></th>
        </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th>{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{substr($post->message,0,50)}}{{strlen($post->message)>50?"...":""}}</td>
                    <td>{{$post->created_at}}</td>
                    <td><a href="{{route('story.show',$post->id)}}" class="btn btn-default btn-sm">View</a> <a href="{{route('story.edit',$post->id)}}" class="btn btn-default btn-sm">Edit</a></td>
                </tr>

                @endforeach
            </tbody>
            </font>
    </table>
    @stop