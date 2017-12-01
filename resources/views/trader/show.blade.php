@extends('app')
@section('title')
    {{$trader->name}}
@stop
@section('content')
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <a href="/trader/{{$trader->id}}/edit">
                <h2 class="link">
                    @lang('variables.edit')
                    <span class="glyphicon glyphicon-edit"></span>

                </h2>
            </a>

                <a href="/detail/{{$trader->id}}/delete">
                    <h2 class="link">
                        @lang('variables.delete')
                        <span class="glyphicon glyphicon-remove"></span>

                    </h2>
                </a>
            
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="panel panel-default">
                <div class="color title2 panel_title">

                    <a href="/detail/{{$trader->id}}">
                        {{$trader->name}}
                    </a>
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                </div>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-lg-6 ">
                            {{--<span class="color_pink">   @lang('variables.phone')</span> : {{$detail->phone}}--}}
                        </div>
                        <div class="col-lg-6">
                            <span class="color_pink">
                                @lang('variables.phone') </span> : {{$trader->phone}}
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6 ">
                            {{--<span class="color_pink">   @lang('variables.phone')</span> : {{$detail->phone}}--}}
                        </div>
                        <div class="col-lg-6">
                            <span class="color_pink">   @lang('variables.address')</span> : {{$trader->address}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 ">
                            {{--<span class="color_pink">   @lang('variables.phone')</span> : {{$detail->phone}}--}}
                        </div>
                        <div class="col-lg-6">
                            <span class="color_pink">
                                @lang('variables.instalment')</span> :
                            @if($trader->instalment=='yes')
                                @lang('variables.with_instalment')
                            @else
                                @lang('variables.without_instalment')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
@stop