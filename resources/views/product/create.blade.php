@extends('app')
@section('title')
    @lang('variables.add') @lang('variables.product')
@stop
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('/jquery-ui/jquery-ui.min.css')}}">
@stop
@section('content')

<div class="col-lg-2"></div>
<div class="col-lg-8">
    <h1>@lang('variables.add') @lang('variables.product')</h1>
    <hr>
    {!! Form::open(['url'=>'product'])!!}
        @include('product._form',['submitText'=> Lang::get('variables.add'),
                                 'name'   =>Lang::get('variables.name'),
                                 'write'  =>Lang::get('variables.write'),
                                 'price'=>Lang::get('variables.price'),
                                 'quantity'=>Lang::get('variables.quantity'),
                                 'cost_price'=>Lang::get('variables.price').' '.Lang::get('variables.cost'),
                                 'selling_price'=>Lang::get('variables.price').' '.Lang::get('variables.selling'),
                                 ])
    {!! Form::close()!!}
</div>
@stop
@section('js')
    <script src="{{URL::asset('/jquery-ui/jquery-ui.min.js')}}"></script>
@stop