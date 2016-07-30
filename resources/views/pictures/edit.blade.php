@extends('layouts.master')

@section('content')

    <div class="row">
        {!! Form::model($picture, ['route' => ['picture.update',$picture->id]]) !!}
        <div class="col-md-8">
            {{--<p><{!! Form::image( !!}/p>--}}
            <p> {!! Form::label('name', trans('lang.picturename')) !!}</p>
            {!! Form::text('name', null, ["class" =>'form-control input-lg']) !!}

            <p> {!! Form::label('reference',trans('lang.imgreference')) !!}</p>
            {!! Form::textarea('reference', null, ['class'=>'form-spacing-top']) !!}

            <p> {!! Form::label('napping_story',trans('lang.Nappingstory')) !!}</p>
            {!! Form::textarea('napping_story', null, ['class'=>'form-spacing-top']) !!}

        </div>

        <div class="col-md-4">
            <div class="well">

                <dl class="dl-horizontal">
                    <dt>{{trans('lang.createdate')}}</dt>
                    <dd>{{date('M j, Y h:ia', strtotime($picture->created_at))}}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>{{trans('lang.updatedate')}}</dt>
                    <dd>{{date('M j, Y h:ia', strtotime($picture->updated_at))}}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('pictures.show',trans('lang.Cancel'), array($picture->id), array('class'=>
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