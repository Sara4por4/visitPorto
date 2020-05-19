<div class="form-group">
    {!! Form::label('name', 'Nome ', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('name', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('price', 'Preço', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-5 col-sm-5 col-xs-10">
        {!! Form::number('price', !empty($method) && !empty($method->price) ? str_replace(',', '.', (string) $method->price) :null, ['class'=>'col-md-7 col-xs-12 form-control', 'step'=>'any']) !!}
    </div>

</div>
<div class="form-group">
    {!! Form::label('description', 'Descrição: ', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::textarea('description', null, ['class'=>'col-md-7 col-xs-12 form-control']) !!}
    </div>
</div>


<div class="ln_solid"></div>

<div class="form-group">
    <div class="col-xs-12 text-center">
        <button type="submit" class="btn btn-success">{{ $submit_btn_txt ?? 'Nome da ação' }}</button>
    </div>
</div>

