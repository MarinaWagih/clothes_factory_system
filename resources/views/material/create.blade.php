@extends('app')
@section('title')
    @lang('variables.add') @lang('variables.material')
@stop
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('/jquery-ui/jquery-ui.min.css')}}">
@stop
@section('content')

<div class="col-lg-2"></div>
<div class="col-lg-8">
    <h1>@lang('variables.add') @lang('variables.material')</h1>
    <hr>
    {!! Form::open(['url'=>'material'])!!}
        @include('material._form',['submitText'=> Lang::get('variables.add'),
                                 'name'   =>Lang::get('variables.name'),
                                 'write'  =>Lang::get('variables.write'),
                                 'price'=>Lang::get('variables.price'),
                                 'quantity'=>Lang::get('variables.quantity'),
                                 ])
    {!! Form::close()!!}
</div>
@stop
@section('js')
    <script src="{{URL::asset('/jquery-ui/jquery-ui.min.js')}}"></script>
@stop