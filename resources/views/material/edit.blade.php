@extends('app')
@section('title')
    @lang('variables.edit') @lang('variables.info')  {{$material->name}}
@stop
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('/jquery-ui/jquery-ui.min.css')}}">
@stop
@section('content')

<div class="col-lg-2"></div>
<div class="col-lg-8">
    <h1>@lang('variables.edit') @lang('variables.info')  {{$material->name}} </h1>
    <hr>
    {!! Form::model($material,['url'=>'material/'.$material->id,'method'=>'PUT'])!!}
    @include('material._form',['submitText'=> Lang::get('variables.edit'),
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
    <script>
        $(function() {
            $( "#date" ).datepicker();
        });
    </script>
@stop