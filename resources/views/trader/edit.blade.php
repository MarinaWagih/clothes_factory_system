@extends('app')
@section('title')
    @lang('variables.edit') @lang('variables.info')  {{$trader->name}}
@stop
@section('content')

<div class="col-lg-2"></div>
<div class="col-lg-8">
    <h1>@lang('variables.edit') @lang('variables.info')  {{$trader->name}} </h1>
    <hr>
    {!! Form::model($trader,['url'=>'trader/'.$trader->id,'method'=>'PUT'])!!}
    @include('trader._form',['submitText'=> Lang::get('variables.edit'),
                                 'write'  =>Lang::get('variables.write'),
                                 'name'   =>Lang::get('variables.name'),
                                 'phone'=>Lang::get('variables.phone'),
                                 'address'=>Lang::get('variables.address'),
                                 'type'=>Lang::get('variables.type'),
                                 'instalment'=>Lang::get('variables.instalment'),
                                 'with_instalment'=>Lang::get('variables.with_instalment'),
                                 'without_instalment'=>Lang::get('variables.without_instalment'),
                                 ])
    {!! Form::close()!!}
</div>
@stop