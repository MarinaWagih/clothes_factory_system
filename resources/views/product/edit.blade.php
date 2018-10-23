@extends('app')
@section('title')
    @lang('variables.edit') @lang('variables.info')  {{$product->name}}
@stop
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/select2-bootstrap.css')}}">
@stop
@section('content')

<div class="col-lg-2"></div>
<div class="col-lg-8">
    <h1>@lang('variables.edit') @lang('variables.info')  {{$product->name}} </h1>
    <hr>
    {!! Form::model($product,['url'=>'product/'.$product->id,'method'=>'PUT'])!!}
    @include('product._form',['submitText'=> Lang::get('variables.edit'),
                            'name'   =>Lang::get('variables.name'),
                            'write'  =>Lang::get('variables.write'),
                            'price'=>Lang::get('variables.price'),
                            'quantity'=>Lang::get('variables.quantity'),
                            'cost_price'=>Lang::get('variables.price').' '.Lang::get('variables.cost'),
                            'selling_price'=>Lang::get('variables.price').' '.Lang::get('variables.selling'),
                            ])
    {!! Form::close()!!}
</div>
@stop
@section('js')
    <script src="{{URL::asset('/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{URL::asset('/js/jquery.repeater.min.js')}}"></script>
    <script src="{{URL::asset('/js/select2.min.js')}}"></script>
    <script>
        $('.repeater').repeater();
//        function bindSelect2(){
//            $(".material_id").select2({
//                dir: "rtl",
//                ajax: {
//                    url: "/material/searchByName",
//                    dataType: 'json',
//                    delay: 250,
//                    data: function (params) {
//                        return {
//                            query: params.term, // search term
//                            page: params.page
//                        };
//                    },
//                    processResults: function (data, page) {
//                        data.forEach(function(material){
//                            material.text=material.name;
//
//                        });
//                        return {
//
//
//                            results: data
//                        };
//                    },
//                    cache: true
//                },
//                minimumInputLength: 1
//            });
//        }
//        bindSelect2();
//        $('.add-material').click(function(){
//            bindSelect2();
//        });
    </script>
@stop