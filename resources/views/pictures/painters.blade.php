@extends('layouts.master')

@section('content')


    <div>
        <div class="postop">
            <img src="https://s0.wp.com/wp-content/themes/pub/rounded/img/tl.gif" alt="" width="15" height="15" class="corner" style="display: none" />
        </div>

        <h1 ><font color="#f0f8ff">{{trans('lang.painterstitle')}}</font> </h1>
        <div class="meta"></div><!-- end META -->

        <div class="storycontent">

            <ul class="list-group">
                @foreach($painters as $painter)
                    <li class="list-group-item"><img src="{{$painter->image}}"></li>
                    <h1><font color="#faebd7">{{ $painter->painter_name }}</font></h1>
                    {{--<li class="list-group-item">{{$painter->painter_name}}</li>--}}
                    <li class="list-group-item">{{$painter->description}}</li>
                               <li>
                                      <table class="table table-reflow">
                                          <thead>
                                          <tr>
                                              <th>{{trans('lang.picture')}}</th>
                                              <th>{{trans('lang.picturename')}}</th>
                                              <th>{{trans('lang.Actions')}}</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                          @foreach($painter->getAttribute('picture') as $picture)
                                          <tr>

                                              <td> <img src="{{$picture->reference}}" alt=""></td>
                                              <td> <h5><font color="#faebd7">{{ $picture->name}}</font></h5></td>
                                              <td>
                                                  <a href="{{route('pictures.show',$picture->id)}}" class="btn btn-default btn-sm">{{trans('lang.View')}}</a>
                                                  <a href="{{route('pictures.edit',$picture->id)}}" class="btn btn-default btn-sm">{{trans('lang.Edit')}}</a>
                                              </td>
                                          </tr>



                                          @endforeach

                                          </tbody>
                                      </table>

            @endforeach
            </ul>
        </div>
    </div>
    <div class="text-center">
        {!! $painters->links(); !!}
    </div>
@endsection