@extends('app')
@section('title')
    {{$detail->name}}
@stop
@section('content')
    <div class="row">
        <div class="col-lg-2">
            <a href="/detail/{{$detail->id}}/edit">
                <h2 class="link">
                    @lang('variables.edit')
                    <span class="glyphicon glyphicon-edit"></span>

                </h2>
            </a>

                <a href="/detail/{{$detail->id}}/delete">
                    <h2 class="link">
                        @lang('variables.delete')
                        <span class="glyphicon glyphicon-remove"></span>

                    </h2>
                </a>
            
        </div>
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="color title2 panel_title">

                    <a href="/detail/{{$detail->id}}">
                        {{$detail->name}}
                    </a>
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                </div>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-lg-6 ">
                            {{--<span class="color_pink">   @lang('variables.phone')</span> : {{$detail->phone}}--}}
                        </div>
                        <div class="col-lg-6">
                            <span class="color_pink">   @lang('variables.price')</span> : {{$detail->price}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
@stop