@extends('app')
@section('title')
    @lang('variables.edit') @lang('variables.info')  {{$product->name}}
@stop
@section('content')

<div class="col-lg-2"></div>
<div class="col-lg-8">
    <h1>@lang('variables.edit') @lang('variables.info')  {{$product->name}} </h1>
    <hr>
    {!! Form::model($product,['url'=>'product/'.$product->id,'method'=>'PUT'])!!}
    @include('product._form',['submitText'=> Lang::get('variables.edit'),
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