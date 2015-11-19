@extends('app')
@section('title')
    @lang('variables.materials')
@stop
@section('content')
    <div class="row masafa">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <form class=" form-horizontal" role="search" method="get" action="/product/search">
            {{--<input id="_token" type="hidden" name="_token" value="{{ csrf_token() }}">--}}

            <div class="col-lg-2">
                <button id="submit" type="submit" class="btn color">@lang('variables.search')</button>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <input id="query" name="query" type="text" class="form-control"
                           placeholder="@lang('variables.search')">
                </div>
            </div>
            </form>

        </div>

        <div class="col-lg-2"></div>
    </div>
    <div class="row">

            <div class="center">
                <table class="table table-hover">
                    <caption class="color_pink title3">@lang('variables.materials')</caption>
                    <thead>
                    <tr>
                        <th>@lang('variables.operations')</th>
                        <th>@lang('variables.price') @lang('variables.selling')</th>
                        <th>@lang('variables.quantity') @lang('variables.cost')</th>
                        <th>@lang('variables.quantity')</th>
                        <th>@lang('variables.name')</th>
                        <th>@lang('variables.number')</th>

                    </tr>
                    </thead>
                    <tbody id="result">
                    @if(isset($products))
                        @foreach($products as $product)
                            <tr>
                                <td>
                                    {{--<a href="/detail/{{$detail->id}}"> @lang('variables.show')</a>--}}
                                    <a href="/product/{{$product->id}}/edit">@lang('variables.edit')</a>

                                    <a href="/product/{{$product->id}}/delete">@lang('variables.delete')</a>

                                </td>
                                <td>{{$product->selling_price}}</td>
                                <td>{{$product->cost_price}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->name}}</td>
                                <th scope="row">{{$product->id}}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="center" id="render">

                    {!!$products->render()!!}

                </div>
            <input id="U_type" type="hidden" value="{{Auth::user()->type}}">
                @endif
            </div>
        </div>

@stop
@section('js')
{{--    <script src="{{ URL::asset('/js/searchDetail.js')}}"></script>--}}
@stop