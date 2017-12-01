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
    {!! Form::label('name',$phone) !!}
    {!! Form::text('phone',null,['class'=>'form-control','placeholder'=>$write.' '.$phone ]) !!}
</div>
<div class="form-group">
    {!! Form::label('name',$address) !!}
    {!! Form::text('address',null,['class'=>'form-control','placeholder'=>$write.' '.$address ]) !!}
</div>
<div class="form-group">
    {!! Form::label('instalment',$instalment) !!}
    <br>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            @lang('variables.without_instalment')
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
            {!! Form::radio('instalment', 'no');!!}
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            @lang('variables.with_instalment')
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
            {!! Form::radio('instalment', 'yes') !!}
        </div>
    </div>
</div>
<div class="form-group">
@if(isset($add_type))
    {!! Form::hidden('type',$add_type) !!}
@elseif(isset($trader))
        {!! Form::hidden('type',$trader->type) !!}
@endif

</div>
<div class="form-group">
    {!! Form::submit($submitText,['class'=>'btn color']) !!}
</div>


