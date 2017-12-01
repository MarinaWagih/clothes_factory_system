<div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>@lang('variables.there_is_an_error')</strong>
            @lang('variables.make_it_right')
            @lang('variables.and')
            @lang('variables.try_again')



            @foreach ($errors->all() as $key=>$error)
                <div>
                    @if(str_contains($error,'name'))
                        @lang('variables.name')
                    @elseif(str_contains($error,'phone'))
                        @lang('variables.phone')
                    @endif
                    @if(str_contains($error,'required'))
                        @lang('variables.required')
                    @elseif(str_contains($error,'at least'))
                        @lang('variables.at_least_12')
                    @elseif(str_contains($error,'taken'))
                        @lang('variables.taken')
                    @endif
                        {{--{{$error}}--}}
                </div>
            @endforeach
        </div>

    @endif
</div>
<div class="form-group">
    {!! Form::label('date',$date) !!}
    {!! Form::input('date','date',null,['class'=>'date-picker form-control col-md-7 col-xs-12 active','id'=>'date',]) !!}
</div>
<div class="form-group">
    {!! Form::label('trader',$printing_place) !!}
    {!! Form::select('trader_id',[],null,['class'=>'js-example-rtl form-control','id'=>'trader_id']) !!}
</div>
<div class="form-group">
    {!! Form::label('detail',$detail) !!}
    {!! Form::select('detail_id',[],null,['class'=>'js-example-rtl form-control','id'=>'detail_id']) !!}
</div>
<div class="form-group">
    {!! Form::label('product',$product) !!}
    {!! Form::select('product_id',[],null,['class'=>'js-example-rtl form-control','id'=>'product_id']) !!}
</div>
<div class="form-group">
    {!! Form::label('price',$price) !!}
    {!! Form::input('number','price',null,['class'=>'form-control','id'=>'price','min'=>'0']) !!}
</div>
<div class="form-group">
    {!! Form::label('quantity',$quantity) !!}
    {!! Form::input('number','quantity',null,['class'=>'form-control','id'=>'quantity','min'=>'0']) !!}
</div>
<div class="form-group">
    {!! Form::label('delivered',$delivered) !!}
    {!! Form::input('number','delivered',null,['class'=>'form-control','id'=>'delivered','min'=>'0']) !!}
</div>
<h1 class="count green">
       @lang('variables.the_total') :<span id="total_cost_print">
        @if(isset($order))
            {{$order->total_cost}}
        @else
            0
        @endif
    </span>
</h1>
<div class="form-group">
    {!! Form::hidden('total_cost','',['id'=>'total_cost']) !!}
    {!! Form::submit($submitText,['class'=>'btn btn-dark','id'=>'submit']) !!}
</div>



