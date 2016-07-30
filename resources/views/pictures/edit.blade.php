@extends('layouts.master')

@section('content')

    <div class="row">
        {!! Form::model($picture, ['route' => ['picture.update',$picture->id]]) !!}
        <div class="col-md-8">
            {{--<p><{!! Form::image( !!}/p>--}}
<<<<<<< HEAD
            <p> {!! Form::label('name', trans('lang.picturename')) !!}</p>
            {!! Form::text('name', null, ["class" =>'form-control input-lg']) !!}

            <p> {!! Form::label('reference',trans('lang.imgreference')) !!}</p>
            {!! Form::textarea('reference', null, ['class'=>'form-spacing-top']) !!}

            <p> {!! Form::label('napping_story',trans('lang.Nappingstory')) !!}</p>
=======
            <p> {!! Form::label('name', 'Name:') !!}</p>
            {!! Form::text('name', null, ["class" =>'form-control input-lg']) !!}

            <p> {!! Form::label('reference',"Reference to image:") !!}</p>
            {!! Form::textarea('reference', null, ['class'=>'form-spacing-top']) !!}

            <p> {!! Form::label('napping_story','Napping story') !!}</p>
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
            {!! Form::textarea('napping_story', null, ['class'=>'form-spacing-top']) !!}

        </div>

        <div class="col-md-4">
            <div class="well">

                <dl class="dl-horizontal">
<<<<<<< HEAD
                    <dt>{{trans('lang.createdate')}}</dt>
=======
                    <dt>Date of creation:</dt>
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
                    <dd>{{date('M j, Y h:ia', strtotime($picture->created_at))}}</dd>
                </dl>

                <dl class="dl-horizontal">
<<<<<<< HEAD
                    <dt>{{trans('lang.updatedate')}}</dt>
=======
                    <dt>Date of update:</dt>
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
                    <dd>{{date('M j, Y h:ia', strtotime($picture->updated_at))}}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
<<<<<<< HEAD
                        {!! Html::linkRoute('pictures.show',trans('lang.Cancel'), array($picture->id), array('class'=>
=======
                        {!! Html::linkRoute('pictures.show','Cancel', array($picture->id), array('class'=>
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
                        'btn btn-danger btn-block')) !!}

                    </div>
                    <div class="col-sm-6">
<<<<<<< HEAD
                        {{ Form::submit(trans('lang.Savechanges'),['class'=> 'btn btn-success btn-block']) }}
=======
                        {{ Form::submit('Save Changes',['class'=> 'btn btn-success btn-block']) }}
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3


                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

@stop