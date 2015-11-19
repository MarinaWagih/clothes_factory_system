@extends('app')
@section('title')
    @lang('variables.traders')
@stop
@section('content')
    <div class="row masafa">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <form class=" form-horizontal" role="search" method="get" action="/trader/search?type=trader">
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
                    <caption class="color_pink title3">@lang('variables.traders')</caption>
                    <thead>
                    <tr>
                        <th>@lang('variables.operations')</th>
                        <th>@lang('variables.instalment')</th>
                        <th>@lang('variables.address')</th>
                        <th>@lang('variables.phone')</th>
                        <th>@lang('variables.name')</th>
                        <th>@lang('variables.number')</th>

                    </tr>
                    </thead>
                    <tbody id="result">
                    @if(isset($traders))
                        @foreach($traders as $trader)
                            <tr>
                                <td>
                                    {{--<a href="/detail/{{$detail->id}}"> @lang('variables.show')</a>--}}
                                    <a href="/trader/{{$trader->id}}/edit">@lang('variables.edit')</a>
                                    <a href="/product/{{$trader->id}}/delete">@lang('variables.delete')</a>

                                </td>
                                <td>
                                   @if($trader->instalment=='yes')
                                        @lang('variables.with_instalment')
                                    @else
                                        @lang('variables.without_instalment')
                                    @endif
                                </td>
                                <td>{{$trader->address}}</td>
                                <td>{{$trader->phone}}</td>
                                <td>{{$trader->name}}</td>
                                <th scope="row">{{$trader->id}}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="center" id="render">

                    {!!$traders->render()!!}

                </div>
            <input id="U_type" type="hidden" value="{{Auth::user()->type}}">
                @endif
            </div>
        </div>

@stop
@section('js')
{{--    <script src="{{ URL::asset('/js/searchDetail.js')}}"></script>--}}
@stop