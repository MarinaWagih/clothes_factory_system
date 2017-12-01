@extends('app')
@section('title')
    @lang('variables.add') @lang('variables.trader')
@stop
@section('content')

<div class="col-lg-2"></div>
<div class="col-lg-8">
    <h1>@lang('variables.add') @lang('variables.trader')</h1>
    <hr>
    {!! Form::open(['url'=>'trader'])!!}
        @include('trader._form',['submitText'=> Lang::get('variables.add'),
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