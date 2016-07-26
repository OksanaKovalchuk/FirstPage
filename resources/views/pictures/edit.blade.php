@extends('layouts.master')

@section('content')

    <div class="row">
        {!! Form::model($picture, ['route' => ['picture.update',$picture->id]]) !!}
        <div class="col-md-8">
            {{--<p><{!! Form::image( !!}/p>--}}
            <p> {!! Form::label('name', 'Name:') !!}</p>
            {!! Form::text('name', null, ["class" =>'form-control input-lg']) !!}

            <p> {!! Form::label('reference',"Reference to image:") !!}</p>
            {!! Form::textarea('reference', null, ['class'=>'form-spacing-top']) !!}

            <p> {!! Form::label('napping_story','Napping story') !!}</p>
            {!! Form::textarea('napping_story', null, ['class'=>'form-spacing-top']) !!}

        </div>

        <div class="col-md-4">
            <div class="well">

                <dl class="dl-horizontal">
                    <dt>Date of creation:</dt>
                    <dd>{{date('M j, Y h:ia', strtotime($picture->created_at))}}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Date of update:</dt>
                    <dd>{{date('M j, Y h:ia', strtotime($picture->updated_at))}}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('pictures.show','Cancel', array($picture->id), array('class'=>
                        'btn btn-danger btn-block')) !!}

                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Save Changes',['class'=> 'btn btn-success btn-block']) }}


                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

@stop