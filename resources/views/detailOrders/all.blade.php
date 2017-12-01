@extends('app')
@section('title')
    @lang('variables.details')
@stop
@section('content')
    <div class="row masafa">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <input id="_token" type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="col-lg-2">
                <button id="submit" type="submit" class="btn color">@lang('variables.search')</button>

            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <input id="query" name="query" type="text" class="form-control"
                           placeholder="@lang('variables.search')">
                </div>
            </div>

        </div>

        <div class="col-lg-2"></div>
    </div>
    <div class="row">
        <div class="center">
            <table class="table table-hover" style="text-align: left !important;">
                <caption class="color_pink title3">@lang('variables.detail') @lang('variables.order')</caption>
                <thead>
                <tr>
                    <th>@lang('variables.number')</th>
                    <th>@lang('variables.trader')</th>
                    <th>@lang('variables.detail')</th>
                    <th>@lang('variables.product')</th>
                    <th>@lang('variables.operations')</th>
                </tr>
                </thead>
                <tbody id="result">
                    @if(isset($detailOrders))
                        @foreach($detailOrders as $detailOrder)
                            <tr>
                                <th scope="row">{{$detailOrder->id}}</th>
                                <td>{{$detailOrder->trader->name}}</td>
                                <td>{{$detailOrder->detail->name}}</td>
                                <td>{{$detailOrder->product->name}}</td>
                                <td>
                                    <a href="/detail_order/{{$detailOrder->id}}"> @lang('variables.show')</a>
                                    <a href="/detail_order/{{$detailOrder->id}}/edit">@lang('variables.edit')</a>
                                    <a href="/detail_order/{{$detailOrder->id}}/delete">@lang('variables.delete')</a>
                                </td>
                            </tr>
                        @endforeach

                     @endif
                </tbody>
            </table>
            <div class="center" id="render">

                {{--{!!$details->render()!!}--}}

            </div>
        </div>

    </div>
@stop
@section('js')
    <script src="{{ URL::asset('js/searchDetailOrder.js')}}"></script>
@stop