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
<h4>@lang("variables.used_material")</h4>
<div class="repeater">
    <div data-repeater-list="materials">
        @if(isset($product)&&count($product->productMaterials)>0)
            @foreach($product->productMaterials as $material)
                @include("product._productMaterialForm")
            @endforeach
        @else
            @include("product._productMaterialForm")
        @endif
    </div>
    <div>
        <input data-repeater-create type="button" value="@lang("variables.add_materials")" class="btn btn-info add-material" />
    </div>
</div>
<div class="form-group">
    {!! Form::submit($submitText,['class'=>'btn color']) !!}
</div>


