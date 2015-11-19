@extends('app')
@section('title')
    @lang('variables.edit') @lang('variables.info')  {{$detail->name}}
@stop
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('/jquery-ui/jquery-ui.min.css')}}">
@stop
@section('content')

<div class="col-lg-2"></div>
<div class="col-lg-8">
    <h1>@lang('variables.edit') @lang('variables.info')  {{$detail->name}} </h1>
    <hr>
    {!! Form::model($detail,['url'=>'detail/'.$detail->id,'method'=>'PUT'])!!}
    @include('detail._form',['submitText'=> Lang::get('variables.edit'),
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