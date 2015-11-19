@extends('app')
@section('title')
    @lang('variables.add') @lang('variables.detail_order')
@stop
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/select2-bootstrap.css')}}">
@stop
@section('content')

<div class="col-lg-2"></div>
<div class="col-lg-8">
    <h1>@lang('variables.add') @lang('variables.detail_order')</h1>
    <hr>
    {!! Form::open(['url'=>'detail_order'])!!}
        @include('detailOrders._form',['submitText'=> Lang::get('variables.add'),
                                 'date'   =>Lang::get('variables.date'),
                                 'write'  =>Lang::get('variables.write'),
                                 'printing_place'  =>Lang::get('variables.printing_place'),
                                 'detail'  =>Lang::get('variables.detail'),
                                 'product'  =>Lang::get('variables.product'),
                                 'price'  =>Lang::get('variables.price'),
                                 'quantity'  =>Lang::get('variables.quantity'),
                                 'delivered'  =>Lang::get('variables.delivered'),
                                 ])
    {!! Form::close()!!}
</div>
@stop
@section('js')
    <script src="{{URL::asset('/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{URL::asset('/js/select2.min.js')}}"></script>
    <script>

            $("#date").datepicker({
                dateFormat: 'yy-mm-dd'
            }).datepicker('setDate', new Date());


        function calc()
        {
            var price=parseInt($('#price').val());
            var quantity=parseInt($('#quantity').val());
            var total=price*quantity;
            $('#total_cost_print').html(total);
            $('#total_cost').val(total);

        }
        $("#trader_id").select2({
            dir: "rtl",
            ajax: {
                url: "/trader/ajax_search",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        query: params.term, // search term
                        page: params.page,
                        type:'printing_place'
                    };
                },
                processResults: function (data, page) {
                    return {

                        results: data
                    };
                },
                cache: true
            },
            minimumInputLength: 1
            });
        $("#detail_id").select2({
            dir: "rtl",
            ajax: {
                url: "/detail/ajax_search",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        query: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function (data, page) {
                    return {

                        results: data
                    };
                },
                cache: true
            },
            minimumInputLength: 1
            });
        $("#product_id").select2({
            dir: "rtl",
            ajax: {
                url: "/product/ajax_search",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        query: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function (data, page) {
                    return {

                        results: data
                    };
                },
                cache: true
            },
            minimumInputLength: 1
            });
        $('#detail_id').on("select2:select", function (e) {
            $('#price').val(e.params.data.price);
        });
        $('#price').change(function(){calc();});
        $('#quantity').change(function(){calc();});

    </script>
@stop