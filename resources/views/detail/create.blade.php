@extends('app')
@section('title')
    @lang('variables.add') @lang('variables.detail')
@stop
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('/jquery-ui/jquery-ui.min.css')}}">
@stop
@section('content')

<div class="col-lg-2"></div>
<div class="col-lg-8">
    <h1>@lang('variables.add') @lang('variables.detail')</h1>
    <hr>
    {!! Form::open(['url'=>'detail'])!!}
        @include('detail._form',['submitText'=> Lang::get('variables.add'),
                                 'name'   =>Lang::get('variables.name'),
                                 'write'  =>Lang::get('variables.write'),
                                 'price'=>Lang::get('variables.price'),
                                 ])
    {!! Form::close()!!}
</div>
@stop
@section('js')

    <script src="{{URL::asset('/jquery-ui/jquery-ui.min.js')}}"></script>
    <script>
        $(function() {
            $( "#date" ).datepicker();
        });
    </script>
@stop