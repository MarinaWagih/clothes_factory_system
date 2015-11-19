@extends('app')
@section('title')
    {{$product->name}}
@stop
@section('content')
    <div class="row">
        <div class="col-lg-2">
            <a href="/detail/{{$product->id}}/edit">
                <h2 class="link">
                    @lang('variables.edit')
                    <span class="glyphicon glyphicon-edit"></span>

                </h2>
            </a>

                <a href="/detail/{{$product->id}}/delete">
                    <h2 class="link">
                        @lang('variables.delete')
                        <span class="glyphicon glyphicon-remove"></span>

                    </h2>
                </a>
            
        </div>
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="color title2 panel_title">

                    <a href="/detail/{{$product->id}}">
                        {{$product->name}}
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
                                @lang('variables.price') @lang('variables.selling')</span> : {{$product->selling_price}}
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6 ">
                            {{--<span class="color_pink">   @lang('variables.phone')</span> : {{$detail->phone}}--}}
                        </div>
                        <div class="col-lg-6">
                            <span class="color_pink">
                                @lang('variables.price') @lang('variables.cost')</span> : {{$product->cost_price}}
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6 ">
                            {{--<span class="color_pink">   @lang('variables.phone')</span> : {{$detail->phone}}--}}
                        </div>
                        <div class="col-lg-6">
                            <span class="color_pink">   @lang('variables.quantity')</span> : {{$product->quantity}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
@stop