{{--<html><head>--}}
    {{--<meta charset="UTF-8" />--}}
    {{--<title>Артнепінг</title>--}}
    {{--<meta name="description" content="website description" />--}}
    {{--<meta name="keywords" content="website keywords, website keywords" />--}}
    {{--<meta http-equiv="content-type" content="text/html" />--}}
    {{--<!-- Свіжа збірка мінімізованих CSS -->--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">--}}

    {{--<!-- Додаткові теми -->--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">--}}

    {{--<!-- Свіжа збірка мінімізованої JavaScript -->--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>--}}
{{--</head>--}}

{{--<body>--}}
{{--</body>--}}
{{--</html>--}}



@extends('layouts.master')

@section('content')

        <div class="row">
            {!! Form::model($post, ['route' => ['story.update',$post->id]]) !!}
            <div class="col-md-8">
               <p> {!! Form::label('title', trans('lang.Title')) !!}</p>
                {!! Form::text('title', null, ["class" =>'form-control input-lg']) !!}

                <p> {!! Form::label('message',trans('lang.MessageBody')) !!}</p>
                {!! Form::textarea('message', null, ['class'=>'form-spacing-top']) !!}

            </div>

            <div class="col-md-4">
                <div class="well">

                    <dl class="dl-horizontal">
                        <dt>{{trans('lang.createdate')}}</dt>
                        <dd>{{date('M j, Y h:ia', strtotime($post->created_at))}}</dd>
                    </dl>

                    <dl class="dl-horizontal">
                        <dt>{{trans('lang.updatedate')}}</dt>
                        <dd>{{date('M j, Y h:ia', strtotime($post->updated_at))}}</dd>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Html::linkRoute('story.show',trans('lang.Cancel'), array($post->id), array('class'=>
                            'btn btn-danger btn-block')) !!}
                        </div>
                        <div class="col-sm-6">
                            {{ Form::submit(trans('lang.Savechanges'),['class'=> 'btn btn-success btn-block']) }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}

    @stop