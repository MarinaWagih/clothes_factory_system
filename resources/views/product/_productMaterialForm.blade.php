
<div data-repeater-item>
    <div class="form-group col-xs-6">
        {!! Form::label('material',Lang::get('variables.material') )!!}
        {!! Form::select('material_id',$materials,isset($material)?$material->material_id:null,['class'=>'js-example-rtl form-control material_id']) !!}
    </div>
    <div class="form-group col-xs-4">
        {!! Form::label('quantity',Lang::get('variables.quantity')) !!}
        {!! Form::input('number','quantity',isset($material)?$material->quantity:0,['class'=>'form-control quantity','min'=>'0']) !!}
    </div>
    <div class="form-group col-xs-2">
        <input class="btn btn-danger btn-block margin-top-25px"  data-repeater-delete type="button" value="@lang("variables.delete")"/>
    </div>
    <div class="clearfix"></div>
</div>
