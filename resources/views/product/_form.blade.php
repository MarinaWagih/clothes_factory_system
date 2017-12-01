{{--Errors--}}
<div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>@lang('variables.there_is_an_error')</strong>
            @lang('variables.make_it_right')
            @lang('variables.and')
            @lang('variables.try_again')



            @foreach ($errors->all() as $key=>$error)

                <div>

                    @if(str_contains($error,'price'))
                        @lang('variables.price')

                    @elseif(str_contains($error,'name'))
                        @lang('variables.name')
                    @endif
                    @if(str_contains($error,'required'))
                        @lang('variables.required')
                    @elseif(str_contains($error,'not a valid'))
                        @lang('variables.not_a_valid')
                    @endif
{{--                 {{$error}}--}}
                </div>

            @endforeach
        </div>
    @endif
</div>

<div class="form-group">
    {!! Form::label('name',$name) !!}
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>$write.' '.$name ]) !!}
</div>
<div class="form-group">
    {!! Form::label('price',$cost_price) !!}
    {!! Form::input('number','cost_price',null,['class'=>'form-control','id'=>'price']) !!}
</div>
<div class="form-group">
    {!! Form::label('price',$selling_price) !!}
    {!! Form::input('number','selling_price',null,['class'=>'form-control','id'=>'price']) !!}
</div>
<div class="form-group">
    {!! Form::label('quantity',$quantity) !!}
    {!! Form::input('number','quantity',null,['class'=>'form-control','id'=>'quantity']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitText,['class'=>'btn color']) !!}
</div>


