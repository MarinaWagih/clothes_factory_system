@extends('app')
@section('title')
    @lang('variables.order') @lang('variables.id') {{$order->id}}
@stop
@section('content')
    <h1>
    <small class="pull-right">
        <strong style="text-decoration: underline;">@lang('variables.order') @lang('variables.id') :</strong>
        {{$order->id}}
    </small>
    <small class="pull-left">
        <strong style="text-decoration: underline;">@lang('variables.date'): </strong>
        {{$order->date}}
    </small>
</h1>
    <br>
    <hr>
    <table class="table table-striped">
        <tr style="text-align: right !important;">
            <td>
                @lang('variables.printing_place')
            </td>
            <td>
                <a href="/trader/{{$order->trader_id}}">
                {{$order->trader->name}}</a>
            </td>
        </tr>
        <tr style="text-align: right !important;">
            <td>

                @lang('variables.detail')
            </td>
            <td>
                <a href="/detail/{{$order->detail_id}}">
                {{$order->detail->name}}</a>
            </td>
        </tr>
        <tr style="text-align: right !important;">
            <td>
                @lang('variables.product')
            </td>
            <td>
                <a href="/product/{{$order->product_id}}">
                {{$order->product->name}}</a>
            </td>
        </tr>
        <tr style="text-align: right !important;">
            <td>
                @lang('variables.quantity')
            </td>
            <td>
                {{$order->quantity}} @lang('variables.piece')
            </td>
        </tr>
        <tr style="text-align: right !important;">
            <td>
                @lang('variables.piece_price')
            </td>
            <td>
                {{$order->price}} @lang('variables.g_m')
            </td>
        </tr>
        <tr style="text-align: right !important;">
            <td>
                @lang('variables.the_total')
            </td>
            <td>
                {{$order->total_cost}} @lang('variables.g_m')
            </td>
        </tr>
        <tr style="text-align: right !important;">
            <td>
                @lang('variables.delivered')
            </td>
            <td>
                {{$order->delivered}} @lang('variables.piece')
            </td>
        </tr>
    </table>
@stop