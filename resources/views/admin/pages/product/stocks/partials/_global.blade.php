
@foreach($product->attributes() as $att)
    <div class="form-group">
        {!! Form::label('attribute['.$att->id.']', $att->name, ['class' =>' col-md-3 col-sm-3 col-xs-12 control-label']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::select('attribute['.$att->id.']', $att->values()->get()->pluck('value', 'id'),
            !empty($stock) && !empty($stock->stockAttributes) && $stock->stockAttributes->where('attribute_id', $att->id)->count() ? $stock->stockAttributes->where('attribute_id', $att->id)->first()->attribute_value_id : null
            , array('class'=>'form-control', 'id'=>'products')) !!}
        </div>

    </div>
@endforeach



<div class="form-group">
    {!! Form::label('stock', 'Stock', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::input('number', 'stock', null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('price', 'Preço de venda', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-5 col-sm-5 col-xs-10">
        {!! Form::number('price', !empty($stock) && !empty($stock->price) ? str_replace(',', '.', (string) $stock->price) :null, ['class'=>'col-md-7 col-xs-12 form-control', 'step'=>'0.01']) !!}
    </div>
    <div class="col-md-1 col-sm-1 col-xs-2">
        {!! Form::text('currency', empty($data->currency) ? '€': '', ['class'=>'col-md-7 col-xs-12 form-control', 'placeholder'=>'€']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('new_price', 'Preço promocional', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-5 col-sm-5 col-xs-10">
        {!! Form::number('new_price', !empty($stock) && !empty($stock->new_price) ? str_replace(',', '.', (string) $stock->new_price) :null, ['class'=>'col-md-7 col-xs-12 form-control', 'step'=>'any']) !!}
    </div>

</div>
<div class="form-group">
    {!! Form::label('retailer_price', 'Preço parceiro', ['class' =>'col-md-3 col-sm-3 col-xs-12 control-label']) !!}
    <div class="col-md-5 col-sm-5 col-xs-10">
        {!! Form::number('retailer_price', !empty($stock) && !empty($stock->retailer_price) ? str_replace(',', '.', (string) $stock->retailer_price) :null, ['class'=>'col-md-7 col-xs-12 form-control', 'step'=>'any']) !!}
    </div>

</div>




<div class="row">
    <div class="col-sm-offset-3 col-sm-6">
        <div class="x_content bs-example-popovers ">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">×</span>
                    </button>
                    <strong>Aviso: </strong> {{$error}}
                </div>
            @endforeach
        </div>

    </div>
</div>
